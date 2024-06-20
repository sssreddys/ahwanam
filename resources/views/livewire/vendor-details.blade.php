<div>
    <nav class="navbar navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('uploads/images/brand_logo_gold_txt.png') }}" style="width: 10em;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="blogs">Blog</a>
                      </li>
                      <li class="nav-item me-3">
                        <a class="nav-link" href="#">Search <i class="bi bi-search"></i></a>
                      </li>
                      <li class="nav-item me-3">
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
        <div class="row m-0 pt-3">
            <div class="col-md-3 p-3">
                <p class="fw-bold">Hey Alok!</p>
                <p class="grayTxt">You are now 5 steps away from submitting your profile for approval:</p>
                <ol>
                    <a href="vendor-details" style="text-decoration: none; color: black;"><li class="mb-3">Create Account</li></a>
                    <a href="vendor-details" style="text-decoration: none; color: black;"><li class="mb-3">Basic Details</li></a>
                    <a href="vendor-details" style="text-decoration: none; color: black;"><li class="mb-3">My Contact Info.</li></a>
                    <a href="vendor-details" style="text-decoration: none; color: black;"><li class="mb-3">My Services & Pricing</li></a>
                    <a href="vendor-pastwork" style="text-decoration: none; color: black;"><li class="mb-3">My Past Work</li></a>
                    <a href="vendor-profile" style="text-decoration: none; color: black;"><li class="mb-3">My Profile Picture</li></a>
                </ol>
            </div>
            <div class="col-md-9 text-center">
                <h1 class="mb-5 mt-5" style="font-size: 6em !important;">📱</h1>
                <p class="fw-bold fs-2">You can see & edit ‘Basic Details’ only on WeddingBazaar Vendors App</p>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Send App Download link to +91-9876123456</button>
                </div>
                <p class="grayTxt">OR search ‘WeddingBazaar Vendors’ on PlayStore/AppStore</p>
            </div>
        </div>
    </section>

    <section class="footer p-5 pb-1">
        <div class="row ms-5 me-5">
            <img src="{{ asset('uploads/images/brand_logo_gold_txt.png') }}" style="width: 15em;">
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
                    <img src="{{ asset('uploads/images/applestore.webp') }}" class="storeImg mt-2" alt="">
                    <img src="{{ asset('uploads/images/googleplay.webp') }}" class="storeImg mt-4" alt="">
                </div>
            </div>
        </div>
        <div class="m-5 mb-3 pt-3 fs12">
            © Copyright 2024 Marzii Company. All rights reserved. | CIN: U74140DL2014PTC274413
        </div>
    </section>

    <script src="{{ asset('js/aahwanam.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
