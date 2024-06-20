<div>

    <nav class="navbar navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{asset('uploads/images/brand_logo_gold_txt.png')}}" style="width: 10em;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item p-0">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <form class="d-flex mb-2" role="search">
                            <input class="form-control me-2 location" type="search" placeholder="Search by Place"
                                aria-label="Search">
                        </form>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link" href="#">Link</a>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 category" type="search"
                                placeholder="Search for 'Ac Service'" aria-label="Search">
                        </form>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Vendors
                        </a>
                        <ul class="dropdown-menu" style="width: max-content;">
                            <div class="row m-0">
                                <div class="col-md-6">
                                    <li><a class="dropdown-item" href="#">Makeup Artist</a></li>
                                    <li><a class="dropdown-item" href="photographers">Photographers</a></li>
                                    <li><a class="dropdown-item" href="#">Planners</a></li>
                                </div>
                                <div class="col-md-6">
                                    <li><a class="dropdown-item" href="#">Decorators</a></li>
                                    <li><a class="dropdown-item" href="#">Venues</a></li>
                                    <li><a class="dropdown-item" href="#">Mehendi Artist</a></li>
                                </div>
                            </div>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item text-end" href="vendors">I am a vendor &nbsp;<button class="btn btn-outline-primary">Register now</button></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="blogs">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Search <i class="bi bi-search"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="vendors">Are you a vendor?</a>
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

    <section class="bgGray">
        <div class="row m-0 p-5 text-center">
            <h4 class="mb-3">Register as a New Vendor on WeddingBazaar</h4>
            <p class="grayTxt">Choose your service:</p>
        </div>
    </section>

    <section class="bgGray">
        <div class="row m-0">
            <div class="col-md-2 text-center p-3">
                <div class="bg-white rounded-3 vendorCard" onclick="redirectToPage('vendor-register')">
                    <p class="fs-1">📷</p>
                    <p class="fw-bold">Photographer</p>
                </div>
            </div>
            <div class="col-md-2 text-center p-3">
                <div class="bg-white rounded-3 vendorCard" onclick="redirectToPage('vendor-register')">
                    <p class="fs-1">💄</p>
                    <p class="fw-bold">Makeup Artist</p>
                </div>
            </div>
            <div class="col-md-2 text-center p-3">
                <div class="bg-white rounded-3 vendorCard" onclick="redirectToPage('vendor-register')">
                    <p class="fs-1">🎉</p>
                    <p class="fw-bold">Decorator</p>
                </div>
            </div>
            <div class="col-md-2 text-center p-3">
                <div class="bg-white rounded-3 vendorCard" onclick="redirectToPage('vendor-register')">
                    <p class="fs-1">📝</p>
                    <p class="fw-bold">Wedding Planner</p>
                </div>
            </div>
            <div class="col-md-2 text-center p-3">
                <div class="bg-white rounded-3 vendorCard" onclick="redirectToPage('vendor-register')">
                    <p class="fs-1">👗</p>
                    <p class="fw-bold">Wedding Wear</p>
                </div>
            </div>
            <div class="col-md-2 text-center p-3">
                <div class="bg-white rounded-3 vendorCard" onclick="redirectToPage('vendor-register')">
                    <p class="fs-1">🏩</p>
                    <p class="fw-bold">Wedding Venue</p>
                </div>
            </div>
            <div class="col-md-2 text-center p-3">
                <div class="bg-white rounded-3 vendorCard" onclick="redirectToPage('vendor-register')">
                    <p class="fs-1">🎥</p>
                    <p class="fw-bold">Videographer</p>
                </div>
            </div>
            <div class="col-md-2 text-center p-3">
                <div class="bg-white rounded-3 vendorCard" onclick="redirectToPage('vendor-register')">
                    <p class="fs-1">💃🏻</p>
                    <p class="fw-bold">Choreographer</p>
                </div>
            </div>
            <div class="col-md-2 text-center p-3">
                <div class="bg-white rounded-3 vendorCard" onclick="redirectToPage('vendor-register')">
                    <p class="fs-1">✋🏼</p>
                    <p class="fw-bold">Mehndi Artist</p>
                </div>
            </div>
            <div class="col-md-2 text-center p-3">
                <div class="bg-white rounded-3 vendorCard" onclick="redirectToPage('vendor-register')">
                    <p class="fs-1">💌</p>
                    <p class="fw-bold">Invitation Designer</p>
                </div>
            </div>
            <div class="col-md-2 text-center p-3">
                <div class="bg-white rounded-3 vendorCard" onclick="redirectToPage('vendor-register')">
                    <p class="fs-1">👗</p>
                    <p class="fw-bold">Wedding Wear</p>
                </div>
            </div>
            <div class="col-md-2 text-center p-3">
                <div class="bg-white rounded-3 vendorCard" onclick="redirectToPage('vendor-register')">
                    <p class="fs-1">🏩</p>
                    <p class="fw-bold">Wedding Venue</p>
                </div>
            </div>
        </div>
    </section>

    <section class="footer p-5 pb-1">
        <div class="row ms-5 me-5">
            <img src="{{asset('uploads/images/brand_logo_gold_txt.png')}}" style="width: 15em;">
        </div>
        <div class="row m-5 border-bottom pb-5">
            <div class="col-md-3">
                <p class="footerHeader">Company</p>
                <a href="about" class="footerText">About us</a>
                <a href="terms" class="footerText">Terms & conditions</a>
                <a href="anti-policy" class="footerText">Anti-discrimination policy</a>
                <a href="impact" class="footerText">UC impact</a>
                <a href="carrers" class="footerText">Careers</a>
            </div>
            <div class="col-md-3">
                <p class="footerHeader">For customers</p>
                <a href="reviews" class="footerText">UC reviews</a>
                <a href="#" class="footerText">Categories near you </a>
                <a href="blogs" class="footerText">Blog</a>
                <a href="contact" class="footerText">Contact us </a>
            </div>
            <div class="col-md-3">
                <p class="footerHeader">For partners</p>
                <a href="partners" class="footerText">Register as a professional</a>
            </div>
            <div class="col-md-3">
                <p class="footerHeader">Social links</p>
                <i class="bi bi-twitter socialMediaIcons mb-2"></i>
                <i class="bi bi-facebook socialMediaIcons"></i>
                <i class="bi bi-instagram socialMediaIcons"></i>
                <i class="bi bi-linkedin socialMediaIcons"></i>
                <div class="mt-4">
                    <img src="{{asset('uploads/images/applestore.webp')}}" class="storeImg mt-2" alt="">
                    <img src="{{asset('uploads/images/googleplay.webp')}}" class="storeImg mt-4" alt="">
                </div>
            </div>
        </div>
        <div class="m-5 mb-3 pt-3 fs12">
            © Copyright 2022 Marzii Company. All rights reserved. | CIN: U74140DL2014PTC274413
        </div>
    </section>

    <script src='aahwanam.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</div>
