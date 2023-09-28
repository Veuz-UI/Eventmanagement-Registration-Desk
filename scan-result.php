<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/favicon.svg" rel="icon" />
    <title>Veuz</title>
    <link rel="stylesheet" href="css/icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
    <div class="wrapper-box">
        <div class="content-box">
            <div class="title-box title-box1">
                <div class="logo-box">
                    <img src="images/logo.png">
                </div>
                <div class="profile-info d-flex align-items-center justify-content-center flex-md-row flex-column">
                    <img src="images/user.svg">
                    <h2>Welcome Mohammed Navab</h2>
                  
                </div>
                <h5>Hex Wale</h5>
                <div class="event-role d-flex justify-content-center">
                    <h3>Ticket ID: <span>1122334455</span></h3>
                </div>
                <div class="print-btns">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#print-modal">Print</button>
                <button type="button" class="btn btn-danger">Reprint Badge</button>
                </div>
            </div>

            <div class="box-of-qr">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-5 d-flex justify-content-center">
                       <a href="scan.php"> <div class="center-qr">
                            <i class="fa-solid fa-qrcode"></i>
                            <div class="square">
                                <div class="scan">
                                </div>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-lg-2 or-box">
                        <h3>OR</h3>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center">
                        <a href="select-attendee.php"><button type="button" class="select-attendee"> Select attendee
                        </button></a>
                    </div>
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
</body>

</html>