<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/fav.webp" rel="icon" />
    <title>Veuz</title>
    <link rel="stylesheet" href="css/icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="images/fav.webp" rel="icon" />
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
    <div class="wrapper-box">
        <div class="content-box">
            <div class="title-box">
                <div class="logo-box">
                    <img src="images/logo.png">
                </div>

            </div>

            <div class="box-of-scan">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-lg-7">
                        <div id="reader"></div>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-lg-12 d-flex justify-content-center">
                        <button type="button" class="done-class" data-bs-toggle="modal" data-bs-target="#scan-result">Submit</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="scan-result" tabindex="-1" aria-labelledby="..." aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create Attendee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                <div class="modal-body">
                    <div class="scan-result">
                        <div class="logo-box">
                            <img src="images/logo.png">
                        </div>
                        <div class="profile-info d-flex align-items-center justify-content-center flex-md-row flex-column">
                            <img src="images/user.svg">
                            <h2>Mohammed Navab</h2>
                        </div>
                       
                        <img src="images/qr.svg" alt="" class="qrcode-img">
                        <h6>m14-Q1l2b-Bq41-YeM</h6>
                        <h5>Veuz Concepts Pvt Ltd</h5>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center mb-3">
                        <button class="done-class" data-bs-toggle="modal" data-bs-target="#alert-msg" data-bs-dismiss="modal">Check In</button>
                        <button type="button" class="btn cancel-button ms-2" data-bs-dismiss="modal">Check Out</button>
                    </div>
                </div>
           
            </div>
        </div>
    </div>

    <div id="alert-msg" class="modal fade" tabindex="-1" aria-labelledby="..." aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-confirm modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box red">
                        <i class="fa-solid fa-exclamation"></i>
                    </div>				
                </div>
                <div class="modal-body">
                    <p class="text-center">Are you sure you want to check In ?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn yes-btn successful-btn" data-dismiss="modal" data-bs-dismiss="modal">Yes</button>
                    <button class="btn cancel-button" data-bs-target="#scan-result" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
                </div>
            </div>
        </div>
    </div>  

    <div class="alert alert-success alert-dismissible" role="alert" style="display: none;">
        <img src="images/gif-success.gif"> Your are successfully checked in.
        <button type="button" class="alert-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
        </button>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js " integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js " integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js "></script>
    <script src="js/script.js "></script>
    <script src="https://kit.fontawesome.com/49ccdaea81.js " crossorigin="anonymous "></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="js/html5-qrcode.min.js"></script>
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

        function onScanSuccess(qrCodeMessage) {
            document.getElementById("result").innerHTML =
                '<span class="result">' + qrCodeMessage + "</span>";
        }

        function onScanError(errorMessage) {
        }

        var html5QrCodeScanner = new Html5QrcodeScanner("reader", {
            fps: 10,
            qrbox: 250
        });


        html5QrCodeScanner.render(onScanSuccess, onScanError);
    </script>
    <script>
        $(function () {
            $(".successful-btn").click(function () {
                $(".alert-success").css("display", "block").delay(1000).fadeOut(400);
            });
            $(".alert-close").click(function () {
                $(".alert-dismissible").css("display", "none").delay(1000).fadeOut(400);
            });
        });
    </script>
</body>

</html>