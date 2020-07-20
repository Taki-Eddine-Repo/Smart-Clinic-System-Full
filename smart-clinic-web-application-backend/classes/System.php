<?php
/**
 * Code Written by: Taki Eddine (Tech)
 * File Name: <System.php>
 * Class Name: <System>
 * Purpose of the file: This class for handling system errors, system bugs, and system logs. This is HIGHLY confidential
 * class and I urge Abderrezak Bouhedda to secure it accordingly
 * Functions included: constructor
 **/
date_default_timezone_set("Asia/Kuala_Lumpur");
class System
{
    private $_db,
            $_sessionName,
            $_sessionValue,
            $_ID,
            $_ClinicID;
    

    public function __construct($user = null) {
        $this->_db = DB::getInstance();
        $this->_sessionName = Config::get('session/session_name');
        if (Session::exists($this->_sessionName)) {
            $this->_sessionValue = Session::get($this->_sessionName);
            $user = new User;
            $this->_ID = $user->data()->staffID;
            $this->_ClinicID = escape($user->data()->clinicID);
        }
    }
    public static function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    /** This function will log the activity specified to the file */
    public static function logActivity($type, $level = 0, $activity)
    {
        $date = date('d-m-Y H:i:s');
        $PublicIP = System::get_client_ip();
        $URL = $_SERVER['REQUEST_URI'];
        $query = ($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING']: "N/A";
        $log = "[" . $date ."]" . " IP: " . $PublicIP . "; Activity: " . $activity. " ID: UNKNOWN" . ". URL: " . $URL . " Query:" . $query ."\n";
        if ($PublicIP != '127.0.0.1') {
            $json     = file_get_contents("http://ipinfo.io/202.190.66.244/geo");
            $json     = json_decode($json, true);
            $country  = $json['country'];
            $region   = $json['region'];
            $city     = $json['city'];
        }
        switch ($type) {
            case 'a':
                switch ($level) {
                    case 1:
                        
                        $path = __ROOT__ . "/logs/" . $this->_ClinicID . "/level-1.lg";
                        System::logFile($path, $log);
                        break;
                    case 2:
                        
                        $path = __ROOT__ . "/logs/" . $this->_ClinicID . "/level-2.lg";
                        break;
                    case 3:
                        
                        $path = __ROOT__ . "/logs/" . $this->_ClinicID . "/level-3.lg";
                        // level3LogWarning($adminEmail);
                        break;
                }
            break;
            case 'u':
                switch ($level) {
                    case 1:
                        $path = __ROOT__ . "/logs/V2HJ2PtfFbXX6wCrxSAn04KFDZjhtX5y/level-1.lg";
                        System::logFile($path, $log);
                        break;
                    case 2:
                        $path = __ROOT__ . "/logs/V2HJ2PtfFbXX6wCrxSAn04KFDZjhtX5y/level-2.lg";
                        System::logFile($path, $log);
                        break;
                    case 3:
                        $path = __ROOT__ . "/logs/V2HJ2PtfFbXX6wCrxSAn04KFDZjhtX5y/level-3.lg";
                        // level3LogWarning($adminEmail);
                        break;
                }
            break;
            case 'g':
                $path = __ROOT__ . "/logs/" . $this->_ClinicID . "/g.lg";
                System::logFile($path, $log);
                break;
        }
    }
    public static function logFile($path, $string)
    {
        $handle = fopen($path, 'a');
        fwrite($handle, $string);
    }
}

?>