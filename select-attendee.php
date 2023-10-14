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

<body>

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="spinnerContainer">
            <div class="circle">
            </div>
        </div>
    </div>
    <!-- Preloader -->
    <div class="top-bar d-lg-flex justify-content-between align-items-center ttt">
        <div class="d-flex align-items-md-center justify-content-between justify-content-md-start" style="width: 100%;">
            <a href="index.php">
                <div class="backtohome">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
            </a>
            <a href="index.php">
                <div class="backtohome">
                    <i class="fa-solid fa-house font-13"></i>
                </div>
            </a>
            <button type="button" class="create-attendee" data-bs-toggle="modal" data-bs-target="#add-attandee">
                <i class="fa-solid fa-plus"></i> Create Attendee
            </button>
        </div>
        <div class="mobile-section">

            <div class="d-flex align-items-center filter-groupby">
                 <a href="#" class="export-btn"><i class="fa-solid fa-download"></i>Export</a>
                <div class="dropdown drpdwn-fg">
                    <a class="dropdown-toggle" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"
                        data-mdb-auto-close="outside">
                        <svg width="18" height="16" class="mr-1" viewBox="0 0 21 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.3037 16.3847C12.3037 16.9088 11.9601 17.5961 11.5219 17.8625L10.3104 18.6444C9.18486 19.3403 7.62112 18.5584 7.62112 17.1665V12.5699C7.62112 11.9598 7.27744 11.178 6.92517 10.7484L3.62586 7.27721C3.18767 6.83902 2.84399 6.06574 2.84399 5.54163V3.5483C2.84399 2.50867 3.62586 1.72681 4.57957 1.72681H16.0412C16.9949 1.72681 17.7768 2.50867 17.7768 3.46238V5.36979C17.7768 6.06574 17.3386 6.93353 16.909 7.36313"
                                stroke="#666" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path
                                d="M13.8073 14.1937C14.5365 14.1937 15.2358 13.904 15.7514 13.3884C16.267 12.8728 16.5567 12.1734 16.5567 11.4442C16.5567 10.7151 16.267 10.0157 15.7514 9.50011C15.2358 8.9845 14.5365 8.69482 13.8073 8.69482C13.0781 8.69482 12.3788 8.9845 11.8631 9.50011C11.3475 10.0157 11.0579 10.7151 11.0579 11.4442C11.0579 12.1734 11.3475 12.8728 11.8631 13.3884C12.3788 13.904 13.0781 14.1937 13.8073 14.1937ZM17.0722 14.7092L16.213 13.85Z"
                                fill="#D6D6D6"></path>
                            <path
                                d="M17.0722 14.7092L16.213 13.85M13.8073 14.1937C14.5365 14.1937 15.2358 13.904 15.7514 13.3884C16.267 12.8728 16.5567 12.1734 16.5567 11.4442C16.5567 10.7151 16.267 10.0157 15.7514 9.50011C15.2358 8.9845 14.5365 8.69482 13.8073 8.69482C13.0781 8.69482 12.3788 8.9845 11.8631 9.50011C11.3475 10.0157 11.0579 10.7151 11.0579 11.4442C11.0579 12.1734 11.3475 12.8728 11.8631 13.3884C12.3788 13.904 13.0781 14.1937 13.8073 14.1937Z"
                                stroke="#666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg> Filters
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#"><span><i
                                        class="fa-solid fa-check me-2"></i>Expected</a></span></li>
                        <div class="dropdown-divider"></div>
                        <li>
                            <a class="dropdown-item" href="#"><span><i
                                        class="fa-solid fa-check me-2"></i>Unconfirmed</span></a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><span><i
                                        class="fa-solid fa-check me-2"></i>Confirmed</span></a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><span><i
                                        class="fa-solid fa-check me-2"></i>Attended</span></a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li>
                            <a class="dropdown-item drpdwn-menu-btn" href="#">
                                Registration Date <i class="fa-solid fa-angle-right arrow"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="reg-date">
                                            <label for="">Date</label>
                                            <input type="date" class="form-control-sm">
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item drpdwn-menu-btn" href="#">
                                Event Start Date <i class="fa-solid fa-angle-right arrow"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="reg-date">
                                            <label for="">Date</label>
                                            <input type="date" class="form-control-sm">
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item drpdwn-menu-btn" href="#">
                                Attended Date <i class="fa-solid fa-angle-right arrow"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="reg-date">
                                            <label for="">Date</label>
                                            <input type="date" class="form-control-sm">
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li>
                            <a class="dropdown-item" href="#"><span><i class="fa-solid fa-check me-2"></i>Last 30
                                    days</span></a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><span><i
                                        class="fa-solid fa-check me-2"></i>Archived</span></a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown drpdwn-fg">
                    <a class="dropdown-toggle" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"
                        data-mdb-auto-close="outside">
                        <svg width="16" height="16" class="mr-1" viewBox="0 0 20 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.01 1.92007L16.91 4.54007C18.61 5.29007 18.61 6.53007 16.91 7.28007L11.01 9.90007C10.34 10.2001 9.24002 10.2001 8.57002 9.90007L2.67002 7.28007C0.97002 6.53007 0.97002 5.29007 2.67002 4.54007L8.57002 1.92007C9.24002 1.62007 10.34 1.62007 11.01 1.92007Z"
                                fill="#D6D6D6" stroke="#666" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path
                                d="M1 10C1 10.84 1.63 11.81 2.4 12.15L9.19 15.17C9.71 15.4 10.3 15.4 10.81 15.17L17.6 12.15C18.37 11.81 19 10.84 19 10"
                                stroke="#666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M1 15C1 15.93 1.55 16.77 2.4 17.15L9.19 20.17C9.71 20.4 10.3 20.4 10.81 20.17L17.6 17.15C18.45 16.77 19 15.93 19 15"
                                stroke="#666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg> Group By
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#"><span><i
                                        class="fa-solid fa-check me-2"></i>Partner</a></span></li>
                        <li>
                            <a class="dropdown-item" href="#"><span><i class="fa-solid fa-check me-2"></i>Ticket
                                    Type</span></a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><span><i
                                        class="fa-solid fa-check me-2"></i>Status</span></a>
                        </li>

                        <li>
                            <a class="dropdown-item drpdwn-menu-btn" href="#">
                                Registration Date <i class="fa-solid fa-angle-right arrow"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="reg-date">
                                            <label for="">Date</label>
                                            <input type="date" class="form-control-sm">
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#"><span><i
                                        class="fa-solid fa-check me-2"></i>Campaign</span></a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><span><i
                                        class="fa-solid fa-check me-2"></i>Medium</span></a>
                        </li>
                    </ul>
                </div>

            </div>
            
            <div class="d-flex rightside-btns">
                <div class="total-count-page">
                    <h6>Show</h6>
                    <select class="form-select">
                        <option value="10">10</option>
                        <option value="10" selected>20</option>
                        <option value="10">50</option>
                    </select>
                </div>
            <div class="group">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                    <g>
                        <path
                            d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                        </path>
                    </g>
                </svg>
                <input placeholder="Search" type="search" class="input">
            </div>
                <a href="select-attendee.php">
                    <button type="button" class="btn btn-kanlist ml-15 active waves-effect waves-light">
                        <svg width="15" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 5.5H2V4H0V5.5ZM0 9.5H2V8H0V9.5ZM0 1.5H2V0H0V1.5ZM4 5.5H18V4H4V5.5ZM4 9.5H18V8H4V9.5ZM4 0V1.5H18V0H4Z"
                                fill="black"></path>
                        </svg>
                    </button>
                </a>
                <a href="select-attendee-list.php">
                    <button type="button" class="btn btn-kanlist ml-15 waves-effect waves-light">
                   
                        <svg width="18" height="18" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.625 3.5625H2.375C2.21753 3.5625 2.06651 3.62506 1.95516 3.73641C1.84381 3.84776 1.78125 3.99878 1.78125 4.15625V14.25C1.78125 14.5649 1.90636 14.867 2.12906 15.0897C2.35176 15.3124 2.65381 15.4375 2.96875 15.4375H16.0312C16.3462 15.4375 16.6482 15.3124 16.8709 15.0897C17.0936 14.867 17.2188 14.5649 17.2188 14.25V4.15625C17.2188 3.99878 17.1562 3.84776 17.0448 3.73641C16.9335 3.62506 16.7825 3.5625 16.625 3.5625ZM2.96875 8.3125H5.9375V10.6875H2.96875V8.3125ZM7.125 8.3125H16.0312V10.6875H7.125V8.3125ZM2.96875 11.875H5.9375V14.25H2.96875V11.875ZM16.0312 14.25H7.125V11.875H16.0312V14.25Z"
                                fill="black"></path>
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="page-contnt">
        <div class="container-fluid">
            <div class="row margin-top-box">
                <div class="col-md-2 margin-box-this">
                    <div class="attendee-box h-100" data-aos="fade-up" data-aos-duration="4000">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12 data-box">
                                <img src="images/avatar.jpg" alt="" class="avatar-sm rounded-circle">
                                <div class="data-box-contnt">
                                    <h2>Barney Lonny</h2>
                                    <h3>Hockey Tournament</h3>
                                    <h4>Wood Corner, Willie Burke</h4>
                                </div>
                               <i class="fa-solid fa-pencil edit-icn" data-bs-toggle="modal" data-bs-target="#add-attandee"></i>
                            </div>
                            <div class="col-lg-12">
                                <div class="border-class"></div>
                            </div>
                            <div class="col-lg-12 attended-text d-flex align-items-center">
                                <button type="button" class="tick-box me-2">Checkin</button>
                                <button type="button" class="edit-box me-2">Checkout</button>
                                <button type="button" class="block-box me-2">Block</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 margin-box-this">
                    <div class="attendee-box h-100" data-aos="fade-up">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12 data-box">
                                <img src="images/avatar.jpg" alt="" class="avatar-sm rounded-circle">
                                <div class="data-box-contnt">
                                    <h2>Barney Lonny</h2>
                                    <h3>Hockey Tournament</h3>
                                    <h4>Wood Corner, Willie Burke</h4>
                                </div>
                                <i class="fa-solid fa-pencil edit-icn" data-bs-toggle="modal" data-bs-target="#add-attandee"></i>
                            </div>
                            <div class="col-lg-12">
                                <div class="border-class"></div>
                            </div>
                            <div class="col-lg-12 attended-text d-flex align-items-center">
                               
                                <h4>Attended</h4>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-2 margin-box-this">
                    <div class="attendee-box h-100" data-aos="fade-up">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12 data-box">
                                <img src="images/avatar.jpg" alt="" class="avatar-sm rounded-circle">
                                <div class="data-box-contnt">
                                    <h2>Barney Lonny</h2>
                                    <h3>Hockey Tournament</h3>
                                    <h4>Wood Corner, Willie Burke</h4>
                                </div>
                                <i class="fa-solid fa-pencil edit-icn" data-bs-toggle="modal" data-bs-target="#add-attandee"></i>
                            </div>
                            <div class="col-lg-12">
                                <div class="border-class"></div>
                            </div>
                            <div class="col-lg-12 attended-text d-flex align-items-center">
                                <button type="button" class="tick-box me-2">Checkin</button>
                                <button type="button" class="edit-box me-2">Checkout</button>
                                <button type="button" class="block-box me-2">Block</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 margin-box-this">
                    <div class="attendee-box h-100" data-aos="fade-up">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12 data-box">
                                <img src="images/avatar.jpg" alt="" class="avatar-sm rounded-circle">
                                <div class="data-box-contnt">
                                    <h2>Barney Lonny</h2>
                                    <h3>Hockey Tournament</h3>
                                    <h4>Wood Corner, Willie Burke</h4>
                                </div>
                                <i class="fa-solid fa-pencil edit-icn" data-bs-toggle="modal" data-bs-target="#add-attandee"></i>
                            </div>
                            <div class="col-lg-12">
                                <div class="border-class"></div>
                            </div>
                            <div class="col-lg-12 attended-text d-flex align-items-center">
                                <button type="button" class="tick-box me-2">Checkin</button>
                                <button type="button" class="edit-box me-2">Checkout</button>
                                <button type="button" class="block-box me-2">Block</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 margin-box-this">
                    <div class="attendee-box h-100" data-aos="fade-up">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12 data-box">
                                <img src="images/avatar.jpg" alt="" class="avatar-sm rounded-circle">
                                <div class="data-box-contnt">
                                    <h2>Barney Lonny</h2>
                                    <h3>Hockey Tournament</h3>
                                    <h4>Wood Corner, Willie Burke</h4>
                                </div>
                                <i class="fa-solid fa-pencil edit-icn" data-bs-toggle="modal" data-bs-target="#add-attandee"></i>
                            </div>
                            <div class="col-lg-12">
                                <div class="border-class"></div>
                            </div>
                            <div class="col-lg-12 attended-text d-flex align-items-center">
                               
                                <h4>Attended</h4>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-2 margin-box-this">
                    <div class="attendee-box h-100" data-aos="fade-up">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12 data-box">
                                <img src="images/avatar.jpg" alt="" class="avatar-sm rounded-circle">
                                <div class="data-box-contnt">
                                    <h2>Barney Lonny</h2>
                                    <h3>Hockey Tournament</h3>
                                    <h4>Wood Corner, Willie Burke</h4>
                                </div>
                                <i class="fa-solid fa-pencil edit-icn" data-bs-toggle="modal" data-bs-target="#add-attandee"></i>
                            </div>
                            <div class="col-lg-12">
                                <div class="border-class"></div>
                            </div>
                            <div class="col-lg-12 attended-text d-flex align-items-center">
                               
                                <h4>Attended</h4>

                            </div>

                        </div>
                    </div>
                </div>
               

            </div>
            <div class="bootom-nav">
                
                <div class="total-count">
                    <h6>Total Count : <span>100</span></h6>
                    <ul>
                        <li><a href="#" class="disable"><i class="fas fa-angle-left"></i></a></li>
                        <li><a href="#" class="active"><span>1</span></li>
                        <li><a href="#"><span>2</span></li>
                        <li><a href="#"><span>3</span></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="modal common-modal fade" id="add-attandee" data-bs-backdrop="static" tabindex="-1" aria-labelledby="..." style="display: none;">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header1">
                    <div class="header-logo-img">
                        <img src="images/logo.png" alt="">
                    </div>
                    <div class="modal-header-info">
                        <h2>Cyber park event</h2>
                        <h6><i class="fa-solid fa-calendar-days"></i> Aug 03-05, 2023</h6>
                    </div>
             
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" placeholder="Enter Name">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                    <label class="form-check-label" for="formCheck1">
                                        Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="text" placeholder="Enter Email">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                    <label class="form-check-label" for="formCheck1">
                                        Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Mobile No</label>
                                <input class="form-control" type="text" placeholder="Enter mobile number">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                    <label class="form-check-label" for="formCheck1">
                                        Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Comapany Name</label>
                                <input class="form-control" type="text" placeholder="Enter company name">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                    <label class="form-check-label" for="formCheck1">
                                        Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Event</label>


                                <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>Event2</option>
                                    <option value="AK">Event1</option>
                                    <option value="HI">Event2</option>                          
                                    <option value="CA">Event3</option>
                                    <option value="NV">Event4</option>  
                                  </select>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                    <label class="form-check-label" for="formCheck1">
                                        Don't clear this field
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-grp">
                                <label class="form-label">Booked by</label>

                                <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">
                                    <option value="AK">Navab</option>
                                    <option value="HI">Amar</option>                          
                                    <option value="CA">Nasim</option>
                                    <option value="NV">Bishru</option>  
                                  </select>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                    <label class="form-check-label" for="formCheck1">
                                        Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-grp">
                                <label class="form-label">Ticket Type</label>

                                <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example">
                                    <option value="AK">Premium</option>
                                    <option value="HI">Gold</option>                          
                                    <option value="CA">Platinium</option>
                                    <option value="NV">Silver</option>  
                                  </select>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                    <label class="form-check-label" for="formCheck1">
                                        Don't clear this field
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="#"><button type="button" class="btn btn-primary text-uppercase br-50 btn-md" fdprocessedid="9xo294">Save and Close</button></a>
                    <a href="#"><button type="button" class="btn btn-primary text-uppercase br-50 btn-md" fdprocessedid="gy6yr4">Save and New</button></a>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal" fdprocessedid="d8w4t">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="print-modal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="..." aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
       
                <div class="modal-body">
                    <div class="scan-result">
                        <div class="logo-box">
                            <img src="images/logo.png">
                        </div>

                    </div>
                    <div class="col-md-12 d-flex justify-content-center mb-3 badge-issue-btns">
                        <button class="btn btn-primary" data-bs-dismiss="modal">Badge Issued</button>
                           
                    </div>
                   
                   
                </div>
                <div class="modal-footer print-btn">
                    <button type="button" class="done-class" data-bs-dismiss="modal">Send Email</button></a>
                    <button type="button" class="btn cancel-button" data-bs-dismiss="modal">Print</button>
                    <button type="button" class="btn btn-outline-secondary badge-not" data-bs-dismiss="modal">Badge not Issued</button>
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
    <script type="text/javascript" src="js/mdb.min.js"></script>
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
    <script>
        $(".drpdwn-menu-btn").click(function () {
            $(this).parent().children(".dropdown-menu").toggleClass("show");
        });
        $(".drpdwn-fg .dropdown-item").click(function () {
            $(this).toggleClass("check");
        });

    </script>

</body>

</html>