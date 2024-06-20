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
                </div>
            </div>
        </nav>

        <section class="bgGray">
            <div class="row m-0 p-5 text-center">
                <h4 class="mb-3">Welcome to WeddingBazaar!</h4>
                <p class="grayTxt">2 steps away from getting new customers:</p>
            </div>
        </section>

        <section class="bgGray">
            <div class="row m-0 pb-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <ol>
                        <li>
                            <p class="fw-bold">Complete your profile</p>
                            <p class="grayTxt">Input all your important information, upload photos and videos of your past work and complete your profile to attract customers and get lot of leads</p>
                        </li>
                        <li>
                            <p class="fw-bold">Approval of profile within 12-24 working hours</p>
                            <p class="grayTxt">After you input all the necessary information, our vendor team will get in touch with you and approve your profile within 12-24 working hours!</p>
                        </li>
                    </ol>
                    <div class="text-center mt-5">
                        <button class="btn btn-primary" onclick="redirectToPage('vendor-pastwork')">Complete my profile</button>
                    </div>
                </div>
                <div class="col-md-3"></div>
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
        <script src='aahwanam.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
