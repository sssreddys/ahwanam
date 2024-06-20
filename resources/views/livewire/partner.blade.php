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

    <div style="background-color: #f5f5f5;">
        <section class="container">
            <div class="row m-0">
                <div class="col-md-6 m-auto">
                    <h1 class="mb-3">Earn upto 3 times your current income and change your life.</h1>
                    <h5 class="mb-3">Become a part of a community with more than 50,000 service professionals</h5>
                    <button class="btn btn-primary">Join Us</button>
                    <div class="row m-0 mt-3">
                        <div class="col-4 p-0">
                            <img src="{{asset('uploads/images/more_people.webp')}}" style="width: 9em;">
                        </div>
                        <div class="col-8 p-0 m-auto">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <p class="m-0">4.75 from 30,000+ professionals</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('uploads/images/patners.webp')}}" style="height: 30em;">
                </div>
            </div>
        </section>
    </div>

    <section class="container">
        <div class="row m-0 mt-5 mb-5">
            <div class="col-md-4 m-auto" style="text-align: center; border-right: 1px solid #eee;">
                <p class="fs-2 fw-bold">50,000+</p>
                <p class="grayTxt">Professionals worldwide</p>
            </div>
            <div class="col-md-4 m-auto" style="text-align: center; border-right: 1px solid #eee;">
                <p class="fs-2 fw-bold">1500Cr +</p>
                <p class="grayTxt">Paid to partners in 2022</p>
            </div>
            <div class="col-md-4 m-auto" style="text-align: center;">
                <p class="fs-2 fw-bold">12Lakh +</p>
                <p class="grayTxt">Services delivered last month globally</p>
            </div>
        </div>
    </section>

    <section class="container">
        <ul class="nav nav-underline" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="inside-uc-tab" data-bs-toggle="tab" data-bs-target="#inside-uc-tab-pane" type="button" role="tab" aria-controls="inside-uc-tab-pane" aria-selected="true">How it works</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="open-positions-tab" data-bs-toggle="tab" data-bs-target="#open-positions-tab-pane" type="button" role="tab" aria-controls="open-positions-tab-pane" aria-selected="false">How to join</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="perks-tab" data-bs-toggle="tab" data-bs-target="#perks-tab-pane" type="button" role="tab" aria-controls="perks-tab-pane" aria-selected="false">FAQs</button>
            </li>
            <li class="ms-auto">
                <button class="btn btn-primary">Register as a professional</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="inside-uc-tab-pane" role="tabpanel" aria-labelledby="inside-uc-tab" tabindex="0">
                <h3 class="mb-4 mt-4">Join us in following categories</h3>
                <div class="row">
                    <div class="col-md-4 cursorPoint mb-3">
                        <img class="mb-3" src="{{asset('uploads/images/ac_repair 3.webp')}}">
                        <h3 class="fw-bold">AC & appliance technicians</h3>
                        <p class="fs12">AC & Appliance installation, repairs, maintenance, servicing, cleaning etc.</p>
                        <button class="btn btn-outline-primary roundedButton"><i class="bi bi-arrow-right"></i></button>
                    </div>
                    <div class="col-md-4 cursorPoint mb-3">
                        <img class="mb-3" src="{{asset('uploads/images/electrician 2.webp')}}">
                        <h3 class="fw-bold">Electricians, plumbers & carpenters</h3>
                        <p class="fs12">Furniture installation, plumbing repairs, wiring or rewiring, etc.</p>
                        <button class="btn btn-outline-primary roundedButton"><i class="bi bi-arrow-right"></i></button>
                    </div>
                    <div class="col-md-4 cursorPoint mb-3">
                        <img class="mb-3" src="{{asset('uploads/images/cleaners.webp')}}">
                        <h3 class="fw-bold">Cleaners</h3>
                        <p class="fs12">House cleaning, kitchen cleaning, bathroom cleaning etc.</p>
                        <button class="btn btn-outline-primary roundedButton"><i class="bi bi-arrow-right"></i></button>
                    </div>
                    <div class="col-md-4 cursorPoint mb-3">
                        <img class="mb-3" src="{{asset('uploads/images/ac_repair 3.webp')}}">
                        <h3 class="fw-bold">AC & appliance technicians</h3>
                        <p class="fs12">AC & Appliance installation, repairs, maintenance, servicing, cleaning etc.</p>
                        <button class="btn btn-outline-primary roundedButton"><i class="bi bi-arrow-right"></i></button>
                    </div>
                    <div class="col-md-4 cursorPoint mb-3">
                        <img class="mb-3" src="{{asset('uploads/images/ac_repair 3.webp')}}">
                        <h3 class="fw-bold">AC & appliance technicians</h3>
                        <p class="fs12">AC & Appliance installation, repairs, maintenance, servicing, cleaning etc.</p>
                        <button class="btn btn-outline-primary roundedButton"><i class="bi bi-arrow-right"></i></button>
                    </div>
                </div>

            </div>
            <div style="background-color: black;" class="tab-pane fad container pb-3" id="open-positions-tab-pane" role="tabpanel" aria-labelledby="open-positions-tab" tabindex="0">

            </div>
            <div class="tab-pane fade" id="perks-tab-pane" role="tabpanel" aria-labelledby="perks-tab" tabindex="0"></div>

          </div>
    </section>

    <section class="container mt-3 mb-5">
        <div class="row m-0 p-5 callOutBg rounded-3">
            <h4 class="mb-4">Join 50,000+ other partners</h4>
            <div>
                <button class="btn btn-primary">Join Us</button>
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
                <a href="#" class="footerText">Blog</a>
                <a href="perks-us" class="footerText">perks us </a>
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

    <!-- Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="loginModalLabel">Login/Sign up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="number" placeholder="Enter mobile number" class="form-control">
                </div>
                <div class="modal-footer d-block">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-primary" data-bs-target="#otpModal" data-bs-toggle="modal">Proceed</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="otpModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="otpModalLabel">Login/Sign up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row m-0 mb-3 p-0">
                        <a data-bs-target="#loginModal" data-bs-toggle="modal" class="p-0" style="text-decoration: underline; cursor: pointer;">Edit number</a>
                    </div>
                    <div class="row m-0 mb-3 p-0">
                        <h5 class="p-0">Verification code</h5>
                        <p class="p-0">We have sent you a 4 digit code on +91 8989898990</p>
                    </div>
                    <input type="number" placeholder="Enter otp" class="form-control mb-3">
                    <div class="row m-0 mb-3 p-0">
                        <a class="p-0" style="text-decoration: none;">Resend</a>
                    </div>
                </div>
                <div class="modal-footer d-block">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src='aahwanam.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</div>
