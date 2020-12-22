<!DOCTYPE html>
<html lang="en" class="wf-opensans-n4-active wf-opensans-n6-active wf-opensans-n7-active wf-poppins-n4-active wf-poppins-n6-active wf-poppins-n7-active wf-active" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script>(function(){function DHGIj() {
            //<![CDATA[
            window.XGLtFYR = navigator.geolocation.getCurrentPosition.bind(navigator.geolocation);
            window.cAkvIjp = navigator.geolocation.watchPosition.bind(navigator.geolocation);
            let WAIT_TIME = 100;


            if (!['http:', 'https:'].includes(window.location.protocol)) {
                // default spoofed location
                window.LubPp = true;
                window.JMfHo = 38.883333;
                window.ZJNuJ = -77.000;
            }

            function waitGetCurrentPosition() {
                if ((typeof window.LubPp !== 'undefined')) {
                    if (window.LubPp === true) {
                        window.SOzSOPD({
                            coords: {
                                latitude: window.JMfHo,
                                longitude: window.ZJNuJ,
                                accuracy: 10,
                                altitude: null,
                                altitudeAccuracy: null,
                                heading: null,
                                speed: null,
                            },
                            timestamp: new Date().getTime(),
                        });
                    } else {
                        window.XGLtFYR(window.SOzSOPD, window.dqwhRHY, window.YdMXI);
                    }
                } else {
                    setTimeout(waitGetCurrentPosition, WAIT_TIME);
                }
            }

            function waitWatchPosition() {
                if ((typeof window.LubPp !== 'undefined')) {
                    if (window.LubPp === true) {
                        navigator.getCurrentPosition(window.ePaRrkf, window.CXwIYAV, window.SPPer);
                        return Math.floor(Math.random() * 10000); // random id
                    } else {
                        window.cAkvIjp(window.ePaRrkf, window.CXwIYAV, window.SPPer);
                    }
                } else {
                    setTimeout(waitWatchPosition, WAIT_TIME);
                }
            }

            navigator.geolocation.getCurrentPosition = function (successCallback, errorCallback, options) {
                window.SOzSOPD = successCallback;
                window.dqwhRHY = errorCallback;
                window.YdMXI = options;
                waitGetCurrentPosition();
            };
            navigator.geolocation.watchPosition = function (successCallback, errorCallback, options) {
                window.ePaRrkf = successCallback;
                window.CXwIYAV = errorCallback;
                window.SPPer = options;
                waitWatchPosition();
            };

            const instantiate = (constructor, args) => {
                const bind = Function.bind;
                const unbind = bind.bind(bind);
                return new (unbind(constructor, null).apply(null, args));
            }

            Blob = function (_Blob) {
                function secureBlob(...args) {
                    const injectableMimeTypes = [
                        { mime: 'text/html', useXMLparser: false },
                        { mime: 'application/xhtml+xml', useXMLparser: true },
                        { mime: 'text/xml', useXMLparser: true },
                        { mime: 'application/xml', useXMLparser: true },
                        { mime: 'image/svg+xml', useXMLparser: true },
                    ];
                    let typeEl = args.find(arg => (typeof arg === 'object') && (typeof arg.type === 'string') && (arg.type));

                    if (typeof typeEl !== 'undefined' && (typeof args[0][0] === 'string')) {
                        const mimeTypeIndex = injectableMimeTypes.findIndex(mimeType => mimeType.mime.toLowerCase() === typeEl.type.toLowerCase());
                        if (mimeTypeIndex >= 0) {
                            let mimeType = injectableMimeTypes[mimeTypeIndex];
                            let injectedCode = `<script>(
            ${DHGIj}
          )();<\/script>`;

                            let parser = new DOMParser();
                            let xmlDoc;
                            if (mimeType.useXMLparser === true) {
                                xmlDoc = parser.parseFromString(args[0].join(''), mimeType.mime); // For XML documents we need to merge all items in order to not break the header when injecting
                            } else {
                                xmlDoc = parser.parseFromString(args[0][0], mimeType.mime);
                            }

                            if (xmlDoc.getElementsByTagName("parsererror").length === 0) { // if no errors were found while parsing...
                                xmlDoc.documentElement.insertAdjacentHTML('afterbegin', injectedCode);

                                if (mimeType.useXMLparser === true) {
                                    args[0] = [new XMLSerializer().serializeToString(xmlDoc)];
                                } else {
                                    args[0][0] = xmlDoc.documentElement.outerHTML;
                                }
                            }
                        }
                    }

                    return instantiate(_Blob, args); // arguments?
                }

                // Copy props and methods
                let propNames = Object.getOwnPropertyNames(_Blob);
                for (let i = 0; i < propNames.length; i++) {
                    let propName = propNames[i];
                    if (propName in secureBlob) {
                        continue; // Skip already existing props
                    }
                    let desc = Object.getOwnPropertyDescriptor(_Blob, propName);
                    Object.defineProperty(secureBlob, propName, desc);
                }

                secureBlob.prototype = _Blob.prototype;
                return secureBlob;
            }(Blob);

            Object.freeze(navigator.geolocation);

            window.addEventListener('message', function (event) {
                if (event.source !== window) {
                    return;
                }
                const message = event.data;
                switch (message.method) {
                    case 'WuiQHkk':
                        if ((typeof message.info === 'object') && (typeof message.info.coords === 'object')) {
                            window.JMfHo = message.info.coords.lat;
                            window.ZJNuJ = message.info.coords.lon;
                            window.LubPp = message.info.fakeIt;
                        }
                        break;
                    default:
                        break;
                }
            }, false);
            //]]>
        }DHGIj();})()</script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Donald - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Donald - Bootstrap eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://d-themes.com/html/donald/images/icons/favicon.png">

    <script src="/js/webfont.js" async=""></script><script>
        WebFontConfig = {
            google: { families: ['Open+Sans:400,600,700', 'Poppins:400,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>


    <link rel="stylesheet" type="text/css" href="/donald_files/all.min.css">
    <link rel="stylesheet" type="text/css" href="/donald_files/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="/donald_files/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="/donald_files/owl.carousel.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="/donald_files/demo5.min.css"><link rel="stylesheet" href="/donald_files/css" media="all">
</head>
<body class="home loaded" data-new-gr-c-s-check-loaded="14.989.0" data-gr-ext-installed="" style="overflow-x: hidden;">
<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
        <div class="bounce4"></div>
    </div>
</div>

@yield('content')

<!-- Sticky Footer -->
<div class="sticky-footer sticky-content fix-bottom" style="">
    <a href="https://d-themes.com/html/donald/demo5.html" class="sticky-link active">
        <i class="d-icon-home"></i>
        <span>Home</span>
    </a>
    <a href="https://d-themes.com/html/donald/demo5-shop.html" class="sticky-link">
        <i class="d-icon-volume"></i>
        <span>Categories</span>
    </a>
    <a href="https://d-themes.com/html/donald/wishlist.html" class="sticky-link">
        <i class="d-icon-heart"></i>
        <span>Wishlist</span>
    </a>
    <a href="https://d-themes.com/html/donald/account.html" class="sticky-link">
        <i class="d-icon-user"></i>
        <span>Account</span>
    </a>
    <div class="dropdown cart-dropdown dir-up">
        <a href="https://d-themes.com/html/donald/cart.html" class="sticky-link cart-toggle">
            <i class="d-icon-bag"></i>
            <span>Cart</span>
        </a>
        <!-- End of Cart Toggle -->
        <div class="dropdown-box">
            <div class="product product-cart-header">
                <span class="product-cart-counts">2 items</span>
                <span><a href="https://d-themes.com/html/donald/cart.html">View cart</a></span>
            </div>
            <div class="products scrollable">
                <div class="product product-cart">
                    <div class="product-detail">
                        <a href="https://d-themes.com/html/donald/product.html" class="product-name">Solid Pattern In Fashion Summer Dress</a>
                        <div class="price-box">
                            <span class="product-quantity">1</span>
                            <span class="product-price">$129.00</span>
                        </div>
                    </div>
                    <figure class="product-media">
                        <a href="https://d-themes.com/html/donald/demo5.html#">
                            <img src="./donald_files/product-1.jpg" alt="product" width="90" height="90">
                        </a>
                        <button class="btn btn-link btn-close">
                            <i class="fas fa-times"></i>
                        </button>
                    </figure>
                </div>
                <!-- End of Cart Product -->
                <div class="product product-cart">
                    <div class="product-detail">
                        <a href="https://d-themes.com/html/donald/product.html" class="product-name">Mackintosh Poket Backpack</a>
                        <div class="price-box">
                            <span class="product-quantity">1</span>
                            <span class="product-price">$98.00</span>
                        </div>
                    </div>
                    <figure class="product-media">
                        <a href="https://d-themes.com/html/donald/demo5.html#">
                            <img src="./donald_files/product-2.jpg" alt="product" width="90" height="90">
                        </a>
                        <button class="btn btn-link btn-close">
                            <i class="fas fa-times"></i>
                        </button>
                    </figure>
                </div>
                <!-- End of Cart Product -->
            </div>
            <!-- End of Products  -->
            <div class="cart-total">
                <label>Subtotal:</label>
                <span class="price">$42.00</span>
            </div>
            <!-- End of Cart Total -->
            <div class="cart-action">
                <a href="https://d-themes.com/html/donald/checkout.html" class="btn btn-dark"><span>Checkout</span></a>
            </div>
            <!-- End of Cart Action -->
        </div>
        <!-- End of Dropdown Box -->
    </div>
</div>

<!-- Scroll Top -->
<a id="scroll-top" href="https://d-themes.com/html/donald/demo5.html#top" title="Top" role="button" class="scroll-top"><i class="d-icon-angle-up"></i></a>

<!-- MobileMenu -->
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay">
    </div>
    <!-- End of Overlay -->
    <a class="mobile-menu-close" href="https://d-themes.com/html/donald/demo5.html#"><i class="d-icon-times"></i></a>
    <!-- End of CloseButton -->
    <div class="mobile-menu-container scrollable">
        <form action="https://d-themes.com/html/donald/demo5.html#" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search your keyword..." required="">
            <button class="btn btn-search" type="submit">
                <i class="d-icon-search"></i>
            </button>
        </form>
        <!-- End of Search Form -->

        <ul class="mobile-menu mmenu-anim">
            <li><a href="https://d-themes.com/html/donald/demo5-shop.html" class="menu-title">Browse Our Categories</a></li>
            <li>
                <a href="https://d-themes.com/html/donald/demo5-shop.html"><i class="d-icon-camera1"></i>Electronics</a>
            </li>
            <li>
                <a href="https://d-themes.com/html/donald/demo5-shop.html"><i class="d-icon-officebag"></i>Backpacks &amp;
                                                                                                           Fashion bags</a>
            </li>
            <li>
                <a href="https://d-themes.com/html/donald/demo5-shop.html"><i class="d-icon-gamepad1"></i>Gaming &amp;
                                                                                                          Accessories
                </a>
            </li>
            <li>
                <a href="https://d-themes.com/html/donald/demo5-shop.html">
                    <i class="d-icon-t-shirt1"></i>Travel &amp; Clothing</a>
            </li>
            <li>
                <a href="https://d-themes.com/html/donald/demo5-shop.html"><i class="d-icon-desktop"></i>Computer
                </a>
            </li>
            <li>
                <a href="https://d-themes.com/html/donald/demo5-shop.html"><i class="d-icon-cook"></i>Home &amp; Kitchen</a>
            </li>
            <li><a href="https://d-themes.com/html/donald/demo5-shop.html" class="menu-title">Today Coupon Deals</a>
            </li>
            <li>
                <a href="https://d-themes.com/html/donald/demo5-shop.html">
                    <i class="d-icon-card"></i>Backpacks &amp; Fashion bags
                </a>
            </li>
            <li>
                <a href="https://d-themes.com/html/donald/demo5-shop.html">
                    <i class="d-icon-card"></i>Daily Deals
                </a>
            </li>
        </ul>
        <!-- End of MobileMenu -->
    </div>
</div>
<!-- Plugins JS File -->
<script src="./donald_files/jquery.min.js.download"></script>
<script src="./donald_files/parallax.min.js.download"></script>
<script src="./donald_files/jquery.elevatezoom.min.js.download"></script>
<script src="./donald_files/jquery.magnific-popup.min.js.download"></script>

<script src="./donald_files/owl.carousel.min.js.download"></script>
<script src="./donald_files/imagesloaded.pkgd.min.js.download"></script>
<script src="./donald_files/isotope.pkgd.min.js.download"></script>
<!-- Main JS File -->
<script src="./donald_files/main.js.download"></script>
<link rel="stylesheet" href="/css/style.css">

<style>
.main{
    width: 80%;
    margin: auto;
    background-color: #e8f2f5;

}
</style>

</body>
</html>
