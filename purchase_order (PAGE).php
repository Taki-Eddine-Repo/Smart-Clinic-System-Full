<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clinic Name</title>
    <link rel="stylesheet" href="styles/layout.css" />
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/purchase_order.css">
    <link rel="stylesheet" href="styles/modals.css">

    <script src="https://kit.fontawesome.com/d814c57d3c.js" crossorigin="anonymous"></script>
    <!-- for fonts -->
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="styles/datepicker.min.css" rel="stylesheet" type="text/css">
    <script src="src/js/datepicker.min.js"></script>
    <!-- Include English language -->
    <script src="src/js/i18n/datepicker.en.js"></script>

</head>



<body>
    <div class="container" id="container">
        <div class="header">
            <img class="logo" src="src/img/heading.png" alt="ClinicCareLogo" />

            <div class="date-time">
                <p id="date"></p>
                <p id="time"></p>
            </div>

            <div class="search-bar">
                <div class="dropdown-box">
                    <input type="text" name="search" autocomplete="off" />
                    <a href="#" class="searching-button"><img class="nav-icon" src="src/img/magnify-glass.svg"
                            alt="" /></a>

                    <div class="searchbar-dropdown">
                        <input type="radio" id="search-by-id" name="src" />
                        <label for="search-by-id">Search by ID</label>
                        <br />
                        <br />
                        <input type="radio" id="search-by-name" name="src" />
                        <label for="search-by-name">Search by Name</label>
                    </div>
                </div>
            </div>

            <div class="nav-images">
                <div class="dropdown-user1">
                    <a href="#" class="nav-logos"><img src="src/img/settings.png" alt="" /></a>
                    <div class="dropdown-content3">
                        <a href="settings(PAGE).php">Settings</a>
                        <a href="report_bug.php">Report Bug</a>
                    </div>
                </div>

                <div class="dropdown-notification">
                    <a href="#" class="nav-logos"><img src="src/img/notification.png" alt="" /></a>
                    <div class="dropdown-content">
                        <a href="#">You have missed an appointment</a>
                        <a href="#">Clear all notification</a>
                    </div>
                </div>

                <div class="dropdown-user">
                    <a href="# " class="nav-logos"><img src="src/img/user.png " alt=" " /></a>
                    <div class="dropdown-content2">
                        <a href="my-profile(PAGE).php">My Profile</a>
                        <a href="#">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="toggle-btn" id="toggler" onclick="toggleSidebar()">
                <a href="" onclick=" return false">
                    <img src="src/img/resize.svg" alt="">
                </a>
            </div>
            <a href="dashboard(PAGE).php"><img src="src/img/home.png" />
                <div class="small_sidebar">Dashboard</div>
            </a>
            <a href="patients(PAGE).php"><img src="src/img/patient.svg" />
                <div class="small_sidebar">Patients</div>
            </a>
            <a href="appointment.php"><img src="src/img/appointment-icon.svg" alt="" />
                <div class="small_sidebar">Appointments</div>
            </a>
            <a href="diagnostic(PAGE).php"><img src="src/img/diagnostic.svg" alt="" />
                <div class="small_sidebar"> Diagnostic Report</div>
            </a>
            <a href="billing(PAGE).php"><img src="src/img/finance.svg" alt="" />
                <div class="small_sidebar">Billing</div>
            </a>
            <a href="expenses(PAGE).php"><img src="src/img/prescription.svg" alt="" />
                <div class="small_sidebar">Expenses</div>
            </a>
            <a href="inventory (PAGE).php" class="nav-active"><img src="src/img/inventory.svg" alt="" />
                <div class="small_sidebar">Inventory</div>
            </a>
            <a href="medical-cert(PAGE).php"><img src="src/img/mc.svg" alt="" />
                <div class="small_sidebar">Medical Certificate</div>
            </a>
            <a href="financial-report(PAGE).php"><img src="src/img/cash.svg" alt="" />
                <div class="small_sidebar">Finance Reports</div>
            </a>
            <a href="backup.php"><img src="src/img/settings-tools.svg" alt="" />
                <div class="small_sidebar">Backup & Table Setup</div>
            </a>
        </div>

        <div class="main">
            <div class="main-container">
                <div class="head">
                    PURCHASE ORDER
                </div>
                <div class="top-items">
                    <div id="code">
                        PO NO
                    </div>
                    <div class="cl-btn" onclick="show('modal3')">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </div>

                <div style="overflow-y: hidden;" class="table-wrapper-scroll-y">

                    <div class="box-wrapper">
                        <div class="box">
                            <div class="box-title">
                                VENDOR
                            </div>

                            <div class="box-content">
                                <div class="box-content-head">
                                    Details
                                </div>
                                <div class="box-content-items">
                                    <div>
                                        <label> Code</label>
                                        <select type="text" class="input_diag" style="width: 100px;">

                                        </select>
                                    </div>
                                    <div>
                                        <label> Name</label>
                                        <input type="text" style="width: 280px;">
                                    </div>
                                    <div>
                                        <label>Address</label>
                                        <input type="text" style="width: 280px;">
                                    </div>
                                    <div>
                                        <label style="visibility: hidden;">Address</label>
                                        <input type="text" style="width: 280px; ">
                                    </div>
                                    <div>
                                        <label style="visibility: hidden;">Address</label>
                                        <input type=" text" style="width: 280px; ">
                                    </div>

                                    <div>
                                        <label>Contact Person</label>
                                        <input type="text" style="width: 200px;">
                                    </div>
                                    <div>
                                        <label>Contact No.</label>
                                        <input type="text" style="width: 200px;">
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="box">
                            <div class="box-title">
                                DELIVERY
                            </div>

                            <div class="box-content">
                                <div class="box-content-head">
                                    Details
                                </div>
                                <div class="box-content-items">
                                    <div>
                                        <label for="Date">Delivery Date</label>
                                        <span>
                                            <input type="text" class="datepicker-here" data-language="en"
                                                style="width: 140px;">
                                            <i style="position: relative; right: 32px;" class="far fa-calendar-alt"
                                                aria-hidden="true"></i>
                                        </span>

                                    </div>

                                    <div>
                                        <label> Delivery Address</label>
                                        <select type="text" class="input_diag" style="width: 280px;">

                                        </select>
                                    </div>
                                    <div>
                                        <label>Quotation No.</label>
                                        <input type="text" style="width: 200px;">
                                    </div>
                                    <div>
                                        <label>Payment Term</label>
                                        <select type="text" class="input_diag" style="width: 200px;">

                                        </select>
                                    </div>
                                    <div>
                                        <label>Contact Person</label>
                                        <select type="text" class="input_diag" style="width: 200px;">

                                        </select>
                                    </div>

                                    <div>
                                        <label>Contact No.</label>
                                        <select type="text" class="input_diag" style="width: 200px;">

                                        </select>
                                    </div>
                                    <div>
                                        <label>Delivery Charges</label>
                                        <input type="text" placeholder="RM" id="delivery-charges" style="width: 200px;"
                                            onchange="changedinput()">
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- delete modal here -->
            <div id="modal2" class="modal pdl">
                <div class="modalContent2">
                    <form style="margin-top: 7px;">
                        <div style="text-align: center;margin-top: 25px;">
                            <p class="label-modal2">Are you sure to delete?</label>
                            <div class="form-div-modal2">
                                <button class="modalBtn2" type="submit">Yes</button>
                                <button class="modalBtn2" type="submit">No</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- delete modal till here -->
            <!-- save modal here -->
            <div id="modal3" class="modal pdl">
                <div class="modalContent3">
                    <form style="margin-top: 7px;">
                        <div style="text-align: center;margin-top: 25px;">
                            <p class="label-modal3">Want to save the changes made?</label>
                            <div class="form-div-modal3">
                                <button class="modalBtn3" type="submit">Yes</button>
                                <button class="modalBtn3" type="submit">No</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- save modal till here -->

            <div class="footer">
                <div class="footer-div">
                    <div class="dots-div">
                        <a href="purchase_order (PAGE).php" style="text-decoration: none;"><span class="dot"></span></a>
                        <a href="purchase_order_2 (PAGE).php" style="text-decoration: none;"> <span class="dot" style="background-color: black;"></span></a>
                       
                    </div>
                    <div class="icons-div">
                        <div class="icons">
                            <img src="src/img/save-file-option.png" alt="save">
                        </div>
                        <div class="icons">
                            <img src="src/img/printer.png" alt="printer">
                        </div>
                        <div class="icons" onclick="show('modal2')">
                            <img src="src/img/rubbish-bin.png" alt="delete">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="src/js/layout.js"></script>
    <script type="text/javascript">
        function toggleSidebar() {
            document
                .getElementById("container")
                .classList.toggle("container-no-sidebar");
            document.getElementById("toggler").classList.toggle("toggle-icon-placement");
            document.getElementById("sidebar").classList.toggle("small_width");
            var hiddiv = document.getElementsByClassName("small_sidebar");
            for (var i = 0; i < hiddiv.length; i++) {
                hiddiv[i].classList.toggle("hidden_sidebar");
            }
            var ele = document.getElementsByClassName('modal');
            for (i = 0; i < ele.length; i++) {
                ele[i].classList.toggle("pdl");
                ele[i].classList.toggle("pdl-hide");
            }
        }
    </script>
    <script>
        function show(x) {
            document.getElementById(x).style.display = "flex";
        }
        window.onclick = function (event) {
            var ele = document.getElementsByClassName("modal");
            for (var i = 0; i < ele.length; i++) {
                if (event.target == ele[i]) {
                    ele[i].style.display = "none";
                }
            }
        }
    </script>
    <script>
        function changedinput() {
            var t = document.getElementById("delivery-charges");
            if (isNaN(t.value)) {
                alert("Type Number Only");
                t.value = "";
            } else {
                var value = "RM " + parseFloat(t.value).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
                t.value = value;
            }
        }
    </script>
</body>


</html>