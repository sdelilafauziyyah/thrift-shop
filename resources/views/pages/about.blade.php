<!DOCTYPE html>
<html lang="en">
@extends('layouts.about')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/tooplate-style.css">
</head>

<body class="tm-bg-white">
    <main class="tm-container masonry">
        <div class="item tm-bg-white tm-block tm-block-left" data-desktop-seq-no="1" data-mobile-seq-no="1">
            <p class="tm-hero-text"><h2>Marketplace with the Widest Range of Second-Hand Product Selections</h2>&ldquo;Our marketplace provides the widest range of thrift product selections in Indonesia. We have worked with a lot of merchants, official stores, and many logistic and payment partners to bring our customers the best experience.&rdquo;</p>
            <header class="tm-block-brand">
                <div class="tm-bg-primary-dark tm-text-white tm-block-brand-inner" style="background-color: #FF7878">
                    <i class="fas fa-braille fa-3x"></i>
                    <h1 class="tm-brand-name" >About Thrift Shop</h1>
                </div>
            </header>
        </div>
        <div class="item" data-desktop-seq-no="2" data-mobile-seq-no="4">
            <img src="img/1.png" alt="Image" class="tm-img-left">
        </div>
        <div class="item tm-bg-secondary tm-text-white tm-block tm-block-wider tm-block-pad tm-block-left-2" data-desktop-seq-no="3"
            data-mobile-seq-no="5" style="background-color: #F0B76E">
            <i class="fas fa-award fa-4x tm-block-icon"></i>
            <p>Purchasing thrift clothing is a niche trend that is also gaining traction in Indonesia.
            you can get unique pieces that cost lower than retail prices at (regular shops). It is also very cheap to get a (whole) outfit - top, bottom, bag, and shoes - that costs less than the normal price.</p>
        </div>
        <div class="item" data-desktop-seq-no="4" data-mobile-seq-no="8">
            <img src="img/Make Order.png" alt="Image" class="tm-img-left">
        </div>
        <div class="item" data-desktop-seq-no="6" data-mobile-seq-no="2">
            <img src="img/3.png" alt="Image">
        </div>
        <div class="item tm-block-right" data-desktop-seq-no="7" data-mobile-seq-no="3">
            <div class="tm-block-right-inner tm-bg-primary-light tm-text-white tm-block tm-block-wider tm-block-pad" style="background-color: #F0B76E">
                <header>
                    <h2 class="tm-text-uppercase">
                        Other Businesses
                    </h2>
                </header>
                <p>Whether you are a merchant or a user, our fintech services provide you with access to various payment options. By making financial services more accessible to everyone, we are enabling financial inclusion in Indonesia</p>
                <!-- -->
            </div>
        </div>

        <div class="item" data-desktop-seq-no="8" data-mobile-seq-no="6">
            <img src="img/2.png" alt="Image">
        </div>

        <div class="item tm-bg-white tm-block tm-form-section" data-desktop-seq-no="9" data-mobile-seq-no="7">
            <div class="tm-form-container tm-block-pad tm-pb-0">
                <header>
                    <h2 class="tm-text-uppercase tm-text-gray-light tm-mb">
                        Contact Us
                    </h2>
                </header>
                <form action="index.html" class="tm-contact-form" method="POST">
                    <div class="tm-form-group">
                        <h4>
                           <p style="color: #c5c5c5">Email</p>
                            <p>thriftshopforproject@gmail.com</p>
                        </h4>
                        <h4>
                           <p style="color: #c5c5c5">Phone Number</p>
                            <p>+62 851-5651-9366</p>
                        </h4>
                    </div>
                </form>
            </div>

            <div class="tm-form-section-tag">
                <div class="tm-bg-secondary tm-text-white tm-block-pad tm-form-section-tag-inner" style="background-color: #FF7878">
                    <header>
                        <h2>Our Team</h2>
                    </header>
                    <p>Abdillah Al Ghifari</p>
                    <p>Delila Fauziyyah</p>
                </div>
            </div>
        </div>

    </main>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script>

        let callAdjustLayout;
        let currentLayout = "desktop",
            nextLayout = "desktop";

        /**
         * detect IE
         * returns version of IE or false, if browser is not Internet Explorer
         */
        function detectIE() {
            var ua = window.navigator.userAgent;

            var msie = ua.indexOf('MSIE ');
            if (msie > 0) {
                // IE 10 or older => return version number
                return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
            }

            var trident = ua.indexOf('Trident/');
            if (trident > 0) {
                // IE 11 => return version number
                var rv = ua.indexOf('rv:');
                return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
            }

            var edge = ua.indexOf('Edge/');
            if (edge > 0) {
                // Edge (IE 12+) => return version number
                return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
            }

            // other browser
            return false;
        }

        // Adjust layout based on the browser width
        function adjustLayout() {
            let block1, block2, block3, block4, block5, block6, block7, block8, block9;

            if (window.innerWidth <= 1199) {
                // Mobile layout
                nextLayout = "mobile";
                block1 = $("div[data-mobile-seq-no='1']");
                block2 = $("div[data-mobile-seq-no='2']");
                block3 = $("div[data-mobile-seq-no='3']");
                block4 = $("div[data-mobile-seq-no='4']");
                block5 = $("div[data-mobile-seq-no='5']");
                block6 = $("div[data-mobile-seq-no='6']");
                block7 = $("div[data-mobile-seq-no='7']");
                block8 = $("div[data-mobile-seq-no='8']");
                block9 = $("div[data-mobile-seq-no='9']");
            } else {
                // Desktop layout
                nextLayout = "desktop";
                block1 = $("div[data-desktop-seq-no='1']");
                block2 = $("div[data-desktop-seq-no='2']");
                block3 = $("div[data-desktop-seq-no='3']");
                block4 = $("div[data-desktop-seq-no='4']");
                block5 = $("div[data-desktop-seq-no='5']");
                block6 = $("div[data-desktop-seq-no='6']");
                block7 = $("div[data-desktop-seq-no='7']");
                block8 = $("div[data-desktop-seq-no='8']");
                block9 = $("div[data-desktop-seq-no='9']");
            }

            if (nextLayout !== currentLayout) {
                // Reorder blocks based on their seq no
                block1.after(block2.detach());
                block2.after(block3.detach());
                block3.after(block4.detach());
                block4.after(block5.detach());
                block5.after(block6.detach());
                block6.after(block7.detach());
                block7.after(block8.detach());
                block8.after(block9.detach());
                currentLayout = nextLayout;
            }
        }

        // Adjust layout upon window resize
        window.onresize = function () {
            clearTimeout(callAdjustLayout);
            callAdjustLayout = setTimeout(adjustLayout, 100);
        }

        // DOM is ready
        $(function () {
            if (detectIE()) {
                alert('Please use the latest version of Chrome or Firefox for best browsing experience.');
            }

            adjustLayout();
        })
    </script>
</body>

</html>