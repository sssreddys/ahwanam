<div>
    <nav class="navbar navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('uploads/images/brand_logo_gold_txt.png') }}" style="width: 10em;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item p-0 me-3">
                        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                        <form class="d-flex mb-2" role="search">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Search for vendors</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </form>
                    </li>
                    <li class="nav-item p-0 me-3">
                        <!-- <a class="nav-link" href="#">Link</a> -->
                        <form class="d-flex" role="search">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Search for location</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </form>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Vendors
                        </a>
                        <ul class="dropdown-menu" style="width: max-content;">
                            <div class="row m-0">
                                <div class="col-md-6">
                                    <li><a class="dropdown-item" href="#">Makeup Artist</a></li>
                                    <li><a class="dropdown-item" href="/photographers">Photographers</a></li>
                                    <li><a class="dropdown-item" href="#">Planners</a></li>
                                </div>
                                <div class="col-md-6">
                                    <li><a class="dropdown-item" href="#">Decorators</a></li>
                                    <li><a class="dropdown-item" href="#">Venues</a></li>
                                    <li><a class="dropdown-item" href="#">Mehendi Artist</a></li>
                                </div>
                            </div>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-end" href="/vendors">I am a vendor &nbsp;<button
                                        class="btn btn-outline-primary">Register now</button></a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="/blogs">Blog</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Search <i class="bi bi-search"></i></a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/vendor-login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/vendors">Are you a vendor?</a>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search"> -->
                <!-- <button class="btn btn-outline-light" data-bs-toggle="modal"
                    data-bs-target="#loginModal">Login</button> -->
                <!-- <a href="login.html"><button class="btn btn-outline-light">Login</button></a> -->
                <!-- </form> -->
            </div>
        </div>
    </nav>
    <div class="row m-0 mt-5">
        <div class="col-md-4">
            <h1>Pooja Pandit Services</h1>
            <p><i class="bi bi-star-fill"></i> 4.90 (813k bookings)</p>
            <div class="border m-0 mb-5 mt-5 rounded row" style="padding: 20px 10px;">
                <p class="fs-5">Select a Service</p>
                <div class="col-md-4 cursorPoint" style="text-align: center;" onclick="changePackageDetails('Wedding Service', 'wedding_service.png')">
                    <div class="row m-0 mb-3 topMenuBg">
                        <img src="{{ asset('uploads/images/priest.png') }}" class="menuImg m-auto">
                    </div>
                    <p class="fs12">Wediing Service</p>
                </div>
                <div class="col-md-4 cursorPoint" style="text-align: center;" onclick="changePackageDetails('Death Service', 'death_service.png')">
                    <div class="row m-0 mb-3 topMenuBg">
                        <img src="{{ asset('uploads/images/pandit.png') }}" class="menuImg m-auto">
                    </div>
                    <p class="fs12">Death Service</p>
                </div>
                <div class="col-md-4 cursorPoint" style="text-align: center;">
                    <div class="row m-0 mb-3 topMenuBg">
                        <img src="{{ asset('uploads/images/spellbook.png') }}" class="menuImg m-auto">
                    </div>
                    <p class="fs12">Namakarnam</p>
                </div>
                <div class="col-md-4 cursorPoint" style="text-align: center;">
                    <div class="row m-0 mb-3 topMenuBg">
                        <img src="{{ asset('uploads/images/astrology.png') }}" class="menuImg m-auto"
                            style="width: 66px !important;">
                    </div>
                    <p class="fs12">Astrology</p>
                </div>
                <div class="col-md-4 cursorPoint" style="text-align: center;">
                    <div class="row m-0 mb-3 topMenuBg">
                        <img src="{{ asset('uploads/images/bonfire.png') }}" class="menuImg m-auto">
                    </div>
                    <p class="fs12">Arya Samaj Homam</p>
                </div>
                <div class="col-md-4 cursorPoint" style="text-align: center;">
                    <div class="row m-0 mb-3 topMenuBg">
                        <img src="{{ asset('uploads/images/crystal-ball.png') }}" class="menuImg m-auto">
                    </div>
                    <p class="fs12">SNS_*Vartham</p>
                </div>
                <div class="col-md-7 cursorPoint">
                    <div class="row m-0 mb-3 topMenuBg">
                        <div class="col-7 m-auto">
                            <p class="fs12 m-0">Shani Nivaran</p>
                        </div>
                        <div class="col-5">
                            <img src="{{ asset('uploads/images/sun.png') }}" class="menuImg me-auto">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 cursorPoint" style="text-align: center;">
                    <div class="row m-0 mb-3 topMenuBg">
                        <img src="{{ asset('uploads/images/Marif.png') }}" class="menuImg m-auto">
                    </div>
                    <p class="fs12">Mrutungaya Homam</p>
                </div>
                <div class="col-md-4 cursorPoint" style="text-align: center;">
                    <div class="row m-0 mb-3 topMenuBg">
                        <img src="{{ asset('uploads/images/Goddess Kali.png') }}" class="menuImg m-auto">
                    </div>
                    <p class="fs12">Chandi Homam</p>
                </div>
                <div class="col-md-4 cursorPoint" style="text-align: center;">
                    <div class="row m-0 mb-3 topMenuBg">
                        <img src="{{ asset('uploads/images/Goddess Laxmi.png') }}" class="menuImg m-auto">
                    </div>
                    <p class="fs12">V**L*Vartham</p>
                </div>
                <div class="col-md-4 cursorPoint" style="text-align: center;">
                    <div class="row m-0 mb-3 topMenuBg">
                        <img src="{{ asset('uploads/images/Goddess Saraswati.png') }}" class="menuImg m-auto">
                    </div>
                    <p class="fs12">Saraswati Homam</p>
                </div>
                <div class="col-md-6 cursorPoint">
                    <!-- <div class="row m-0 mb-3 topMenuBg">
                        <div class="col-7 m-auto">
                            <p class="fs12 m-0">Wall decor (Panels)</p>
                        </div>
                        <div class="col-5">
                            <img src="images/wall_decor.webp" class="menuImg me-auto">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <iframe src="https://www.youtube.com/embed/K1-aTkk1CYE" allowfullscreen="" class="ytSize3" style="border-radius: 8px;"></iframe>
            <div class="row m-0 border-top mt-5">
                <div class="border-left border-right col-md-7 pe-4 ps-4 pt-4">
                    <p class="fw-bold fs-4">Bestseller packages</p>
                    <!-- <div id="package-container"></div> -->

                    <div id="package-container"></div>

                    <script>
                        const packages = [
                            {
                                "packageType": "PACKAGE",
                                "title": "Vara lakshmi vartham",
                                "rating": 4.90,
                                "bookings": 813000,
                                "price": 4099,
                                "duration": "2 hrs 10 mins",
                                "details": [
                                    { "label": "Pandit", "value": "Astrology" },
                                    { "label": "Pandit", "value": "Namakrnam" },
                                    { "label": "Pandit", "value": "Death cermony" }
                                ]
                            },
                            {
                                "packageType": "PACKAGE",
                                "title": "Pandit",
                                "rating": 4.90,
                                "bookings": 813000,
                                "price": 4099,
                                "duration": "2 hrs 10 mins",
                                "details": [
                                    { "label": "Pandit", "value": "Nomulu" },
                                    { "label": "Services", "value": "Homamam" },
                                    { "label": "Services", "value": "Arya samaj" }
                                ]
                            }
                        ];

                        function changePackageDetails(serviceName, imageName) {
                            packages.forEach(pkg => {
                                pkg.title = serviceName;
                                pkg.details[0].value = serviceName;
                                pkg.details[0].label = "Service";
                            });

                            renderPackages();
                        }

                        function renderPackages() {
                            const container = document.getElementById('package-container');
                            container.innerHTML = '';

                            packages.forEach(pkg => {
                                const packageDiv = document.createElement('div');
                                packageDiv.className = 'package-root';

                                packageDiv.innerHTML = `
                                    <div class="border-bottom m-0 pb-4 pt-4 row">
                                        <div class="row m-0 p-0">
                                            <div class="col-md-9 p-0 pb-3" style="border-bottom: 1px dotted gray">
                                                <p class="fs12 mb-1 text-success"><i class="bi bi-bookmark-star-fill"></i> ${pkg.packageType}</p>
                                                <p class="mb-1 fw-bold">${pkg.title}</p>
                                                <p class="mb-1 grayTxt"><i class="bi bi-star-fill me-2 text-primary"></i> ${pkg.rating} (${pkg.bookings.toLocaleString()} bookings)</p>
                                                <p class="mb-1 grayTxt"><b class="me-3 text-black">₹${pkg.price}</b> ${pkg.duration}</p>
                                            </div>
                                            <div class="col-md-3 m-auto">
                                                <button class="btn btn-outline-primary btn-sm" onclick="addToCart()">Add</button>
                                            </div>
                                        </div>
                                        <div class="row m-0 pt-3">
                                            <ul>
                                                ${pkg.details.map(detail => `<li><b>${detail.label}: </b>${detail.value}</li>`).join('')}
                                            </ul>
                                            <div>
                                                <button class="btn btn-outline-secondary btn-sm">Edit your package</button>
                                            </div>
                                        </div>
                                    </div>
                                `;

                                container.appendChild(packageDiv);
                            });
                        }

                        function redirectToUrl(url) {
                            window.location.href = url;
                        }

                        // Initial render
                        renderPackages();
                    </script>

                    <!-- <div class="border-bottom m-0 pb-4 pt-4 row">
                        <div class="row m-0 p-0">
                            <div class="col-md-9 p-0 pb-3" style="border-bottom: 1px dotted gray">
                                <p class="fs12 mb-1 text-success"><i class="bi bi-bookmark-star-fill"></i> PACKAGE</p>
                                <p class="mb-1 fw-bold">Vara lakshmi vartham</p>
                                <p class="mb-1 grayTxt"><i class="bi bi-star-fill me-2 text-primary"></i> 4.90 (813k bookings)</p>
                                <p class="mb-1 grayTxt"><b class="me-3 text-black">₹4,099</b> 2 hrs 10 mins</p>
                            </div>
                            <div class="col-md-3 m-auto">
                                <button class="btn btn-outline-primary btn-sm" onclick="redirectToUrl('/check-out')">Add</button>
                            </div>
                        </div>
                        <div class="row m-0 pt-3">
                            <ul>
                                <li><b>Pandit: </b> Astrology</li>
                                <li><b>Pandit: </b>Namakrnam</li>
                                <li><b>Pandit: </b>Death cermony</li>
                            </ul>
                            <div>
                                <button class="btn btn-outline-secondary btn-sm">Edit your package</button>
                            </div>
                        </div>
                    </div>

                    <div class="border-bottom m-0 pb-4 pt-4 row">
                        <div class="row m-0 p-0">
                            <div class="col-md-9 p-0 pb-3" style="border-bottom: 1px dotted gray">
                                <p class="fs12 mb-1 text-success"><i class="bi bi-bookmark-star-fill"></i> PACKAGE</p>
                                <p class="mb-1 fw-bold">Pandit</p>
                                <p class="mb-1 grayTxt"><i class="bi bi-star-fill me-2 text-primary"></i> 4.90 (813k bookings)</p>
                                <p class="mb-1 grayTxt"><b class="me-3 text-black">₹4,099</b> 2 hrs 10 mins</p>
                            </div>
                            <div class="col-md-3 m-auto">
                                <button class="btn btn-outline-primary btn-sm">Add</button>
                            </div>
                        </div>
                        <div class="row m-0 pt-3">
                            <ul>
                                <li><b>Pandit: </b> Nomulu</li>
                                <li><b>Services: </b>Homamam</li>
                                <li><b>Services: </b>Arya samaj</li>
                            </ul>
                            <div>
                                <button class="btn btn-outline-secondary btn-sm">Edit your package</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border-bottom m-0 pb-4 pt-4 row">
                        <div class="row m-0 p-0">
                            <div class="col-md-9 p-0 pb-3" style="border-bottom: 1px dotted gray">
                                <p class="fs12 mb-1 text-success"><i class="bi bi-bookmark-star-fill"></i> PACKAGE</p>
                                <p class="mb-1 fw-bold">Pandit</p>
                                <p class="mb-1 grayTxt"><i class="bi bi-star-fill me-2 text-primary"></i> 4.90 (813k bookings)</p>
                                <p class="mb-1 grayTxt"><b class="me-3 text-black">₹4,099</b> 2 hrs 10 mins</p>
                            </div>
                            <div class="col-md-3 m-auto">
                                <button class="btn btn-outline-primary btn-sm">Add</button>
                            </div>
                        </div>
                        <div class="row m-0 pt-3">
                            <ul>
                                <li><b>Pandit: </b> Nomulu</li>
                                <li><b>Services: </b>Homamam</li>
                                <li><b>Services: </b>Arya samaj</li>
                            </ul>
                            <div>
                                <button class="btn btn-outline-secondary btn-sm">Edit your package</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border-bottom m-0 pb-4 pt-4 row">
                        <div class="row m-0 p-0">
                            <div class="col-md-9 p-0 pb-3" style="border-bottom: 1px dotted gray">
                                <p class="fs12 mb-1 text-success"><i class="bi bi-bookmark-star-fill"></i> PACKAGE</p>
                                <p class="mb-1 fw-bold">Pandit</p>
                                <p class="mb-1 grayTxt"><i class="bi bi-star-fill me-2 text-primary"></i> 4.90 (813k bookings)</p>
                                <p class="mb-1 grayTxt"><b class="me-3 text-black">₹4,099</b> 2 hrs 10 mins</p>
                            </div>
                            <div class="col-md-3 m-auto">
                                <button class="btn btn-outline-primary btn-sm">Add</button>
                            </div>
                        </div>
                        <div class="row m-0 pt-3">
                            <ul>
                                <li><b>Pandit: </b> Nomulu</li>
                                <li><b>Services: </b>Homamam</li>
                                <li><b>Services: </b>Arya samaj</li>
                            </ul>
                            <div>
                                <button class="btn btn-outline-secondary btn-sm">Edit your package</button>
                            </div>
                        </div>
                    </div> -->

                </div>
                <div class="col-md-5 pt-4">
                    <div class="border m-0 mb-3 pb-4 pt-4 rounded row text-center d-block" id="noProduct">
                        <i class="bi bi-cart fs-1"></i>
                        <p class="grayTxt">No items in your cart</p>
                    </div>
                    <div class="border m-0 mb-3 pb-4 pt-2 rounded row d-none" id="addProduct">
                        <p class="fw-bold fs-4">Cart</p>
                        <div class="row m-0">
                            <div class="col-6 p-0">
                                <p>Power Saver AC service</p>
                            </div>
                            <div class="col-3 m-auto p-0" style="text-align: -webkit-center;">
                                <div class="rounded" style="background-color: aliceblue; border: 1px solid gray; width: fit-content;">
                                    <span type='button' class="itemBtn" value="minus" onclick="button2()"><i class="bi bi-dash-lg"></i></span>
                                    <span id="output-area"></span>
                                    <span type='button' class="itemBtn" value="plus" onclick="button1()"><i class="bi bi-plus-lg"></i></span>
                                </div>
                            </div>
                            <div class="col-3 m-auto text-end">
                                <p class="m-0">₹669</p>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button onclick="redirectToUrl('/check-out');" class="btn btn-primary" type="button">
                                <p class="m-0 float-start">₹669</p>
                                <p class="m-0 float-end">View Cart</p>
                            </button>
                        </div>
                        
                    </div>
                    <div class="border mb-3 m-0 pb-4 pt-4 rounded row">
                        <div class="row m-0">
                            <div class="col-3">
                                <div class="bg-body-secondary rounded text-center" style="padding: 15px 10px;">
                                    <i class="bg-success bi bi-percent fs-5 rounded-5 whiteTxt" style="padding: 4px 7px;"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                <p class="mb-1">20% off on Kotak Silk cards</p>
                                <p class="grayTxt">20% off up to INR 350</p>
                            </div>
                            <a class="text-decoration-none" href="#">View More Offers</a>
                        </div>
                    </div>
                    <div class="border m-0 mb-3 pb-4 pt-4 rounded row">
                        <div class="row m-0">
                            <div class="col-9">
                                <p class="fw-bold fs-4">Marzii Promise</p>
                                <ol>
                                    <li>4.5+ Rated Beauticians</li>
                                    <li>Luxury Salon Experience</li>
                                    <li>Premium Branded Products</li>
                                </ol>
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('uploads/images/quality_assured.webp') }}" style="width: 4em;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var x = 1;
        document.getElementById('output-area').innerHTML = x;
        function button1() {
        document.getElementById('output-area').innerHTML = ++x;

        }
        function button2() {
        if(x <= 0 ){
            alert(' minimum value 0 // By Khaydarov Marufjon marvell_it academy uzb ')
            return false ;
        }
        document.getElementById('output-area').innerHTML = --x;
        }

        function addToCart() {
            $('#addProduct').removeClass('d-none').addClass('d-block');
            $('#noProduct').removeClass('d-block').addClass('d-none');
        }
    </script>
</div>
