<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/favicon.svg" rel="icon" />
    <title>Veuz</title>
    <link rel="stylesheet" href="css/icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 
</head>

<body style="background-color: #f8f8f8;">

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="spinnerContainer">
            <div class="circle">
            </div>
        </div>
    </div>
    <!-- Preloader -->

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <div class="navbar-brand-box">
                    <a href="index.php" class="logo">
                        <span class="logo-lg">
                            <img src="images/logo.png" alt="" height="23">
                        </span>
                    </a>
                </div>


            </div>

            <div class="d-flex align-items-center">


                <div class="dropdown d-inline-block user-dropdown">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="images/avatar.jpg"
                            alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="profile.php">
                            <span key="t-profile">Profile</span></a>
                        <a class="dropdown-item d-block" href="settings.php">
                            <span key="t-settings">Settings</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">
                            <span key="t-logout">Logout</span></a>
                    </div>
                </div>



            </div>
        </div>
    </header>

    <div class="page-content">
        <div class="welcome-note">
            <img src="images/user.svg">
            <h2>Welcome Mohammed Navab</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">List of Events</h2>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="event-box">
                                    <div class="event-left">
                                        <h3>Conference for architects</h3>
                                        <h6><i class="fa-regular fa-calendar-days me-1"></i> Aug 23 to 25, 2023</h6>
                                    </div> 
                                    <div class="event-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Main Desk <i class="mdi mdi-chevron-down"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="home.php">Check In</a>
                                                <a class="dropdown-item" href="home.php">Check Out</a>
                                            </div>
                                        </div>
                                       
                                        <a href="agenda.php"><button type="button" class="btn btn-primary">Agenda</button></a>
                                    </div>
                          
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="event-box">
                                    <div class="event-left">
                                        <h3>Conference for architects</h3>
                                        <h6><i class="fa-regular fa-calendar-days me-1"></i> Aug 23 to 25, 2023</h6>
                                    </div> 
                                    <div class="event-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Main Desk <i class="mdi mdi-chevron-down"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="home.php">Check In</a>
                                                <a class="dropdown-item" href="home.php">Check Out</a>
                                            </div>
                                        </div>
                                       
                                        <a href="agenda.php"><button type="button" class="btn btn-primary">Agenda</button></a>
                                    </div>
                          
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="event-box">
                                    <div class="event-left">
                                        <h3>Conference for architects</h3>
                                        <h6><i class="fa-regular fa-calendar-days me-1"></i> Aug 23 to 25, 2023</h6>
                                    </div> 
                                    <div class="event-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Main Desk <i class="mdi mdi-chevron-down"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="home.php">Check In</a>
                                                <a class="dropdown-item" href="home.php">Check Out</a>
                                            </div>
                                        </div>
                                       
                                        <a href="agenda.php"><button type="button" class="btn btn-primary">Agenda</button></a>
                                    </div>
                          
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="event-box">
                                    <div class="event-left">
                                        <h3>Conference for architects</h3>
                                        <h6><i class="fa-regular fa-calendar-days me-1"></i> Aug 23 to 25, 2023</h6>
                                    </div> 
                                    <div class="event-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Main Desk <i class="mdi mdi-chevron-down"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="home.php">Check In</a>
                                                <a class="dropdown-item" href="home.php">Check Out</a>
                                            </div>
                                        </div>
                                       
                                        <a href="agenda.php"><button type="button" class="btn btn-primary">Agenda</button></a>
                                    </div>
                          
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="event-box">
                                    <div class="event-left">
                                        <h3>Conference for architects</h3>
                                        <h6><i class="fa-regular fa-calendar-days me-1"></i> Aug 23 to 25, 2023</h6>
                                    </div> 
                                    <div class="event-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Main Desk <i class="mdi mdi-chevron-down"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="home.php">Check In</a>
                                                <a class="dropdown-item" href="home.php">Check Out</a>
                                            </div>
                                        </div>
                                       
                                        <a href="agenda.php"><button type="button" class="btn btn-primary">Agenda</button></a>
                                    </div>
                          
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="event-box">
                                    <div class="event-left">
                                        <h3>Conference for architects</h3>
                                        <h6><i class="fa-regular fa-calendar-days me-1"></i> Aug 23 to 25, 2023</h6>
                                    </div> 
                                    <div class="event-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Main Desk <i class="mdi mdi-chevron-down"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="home.php">Check In</a>
                                                <a class="dropdown-item" href="home.php">Check Out</a>
                                            </div>
                                        </div>
                                       
                                        <a href="agenda.php"><button type="button" class="btn btn-primary">Agenda</button></a>
                                    </div>
                          
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="event-box">
                                    <div class="event-left">
                                        <h3>Conference for architects</h3>
                                        <h6><i class="fa-regular fa-calendar-days me-1"></i> Aug 23 to 25, 2023</h6>
                                    </div> 
                                    <div class="event-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Main Desk <i class="mdi mdi-chevron-down"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="home.php">Check In</a>
                                                <a class="dropdown-item" href="home.php">Check Out</a>
                                            </div>
                                        </div>
                                       
                                        <a href="agenda.php"><button type="button" class="btn btn-primary">Agenda</button></a>
                                    </div>
                          
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="event-box">
                                    <div class="event-left">
                                        <h3>Conference for architects</h3>
                                        <h6><i class="fa-regular fa-calendar-days me-1"></i> Aug 23 to 25, 2023</h6>
                                    </div> 
                                    <div class="event-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Main Desk <i class="mdi mdi-chevron-down"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="home.php">Check In</a>
                                                <a class="dropdown-item" href="home.php">Check Out</a>
                                            </div>
                                        </div>
                                       
                                        <a href="agenda.php"><button type="button" class="btn btn-primary">Agenda</button></a>
                                    </div>
                          
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js " integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js " integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js "></script>
    <script src="js/script.js "></script>
    <script src="https://kit.fontawesome.com/49ccdaea81.js " crossorigin="anonymous "></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>
        AOS.init({
            disable: 'mobile'
        });
    </script>

    <script>
        $(function() {
            setTimeout(function() {
                // $('.loader-mask').delay(350).fadeOut('slow')
                $(".loader-mask").hide();
            }, 2000)

        })
    </script>
</body>

</html>