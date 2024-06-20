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

    <section>
        <div class="row m-0 d-block pt-4 pb-3" style="border-bottom: 1px solid #eee;">
            <a href="#"><p class="d-inline-block">BEAUTY</p></a>
            <a href="#"><p class="d-inline-block">HAPPY HOMES</p></a>
            <a href="#"><p class="d-inline-block">INTERIORS</p></a>
            <a href="#"><p class="d-inline-block">WELLNESS</p></a>
            <a href="#"><p class="d-inline-block">LIFESTYLE</p></a>
            <a href="#"><p class="d-inline-block">UC IMPACT</p></a>
            <a href="#"><p class="d-inline-block float-end m-0 me-3"><button class="btn btn-primary">Book Services</button></p></a>
        </div>
    </section>

    <section>
        <div class="row m-0 mt-3">
            <div class="col-md-6 cursorPoint">
                <img src="{{asset('uploads/images/blog1.jpeg')}}" class="rounded-4 w-100">
                <div class="m-0 mb-3 mt-2 row">
                    <div class="col-6 p-0">
                        <span class="fs12 m-0 chipGradiant">Beauty</span>
                    </div>
                    <div class="col-6 p-0" style="text-align: end;">
                        <p class="fs12 m-0">By Marzii Company</p>
                    </div>
                </div>
                <h3>Here Is Why You Should Opt For Chocolate Wax!</h3>
            </div>
            <div class="col-md-6">
                <div class="row m-0 mb-3">
                    <div class="col-md-6">
                        <img src="{{asset('uploads/images/blog2.png')}}" class="rounded-4 w-100">
                    </div>
                    <div class="col-md-6">
                        <p class="m-0 mb-4"><span class="fs12 m-0 chipGradiant">Beauty</span></p>
                        <h3 class="mb-4">Here Is Why You Should Opt For Chocolate Wax!</h3>
                        <p class="fs12 m-0">By Marzii Company</p>
                    </div>
                </div>
                <div class="row m-0 mb-3">
                    <div class="col-md-6">
                        <img src="{{asset('uploads/images/blog3.jpeg')}}" class="rounded-4 w-100">
                    </div>
                    <div class="col-md-6">
                        <p class="m-0 mb-4"><span class="fs12 m-0 chipGradiant">Beauty</span></p>
                        <h3 class="mb-4">Here Is Why You Should Opt For Chocolate Wax!</h3>
                        <p class="fs12 m-0">By Marzii Company</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row m-0">
            <p>CHECK OUT</p>
            <h3 class="mb-4">Our Recent Publications</h3>
            <div class="col-md-4 cursorPoint">
                <img src="{{asset('uploads/images/blog1.jpeg')}}" class="rounded-4 w-100">
                <div class="m-0 mb-3 mt-2 row">
                    <div class="col-6 p-0">
                        <span class="fs12 m-0 chipGradiant">Beauty</span>
                    </div>
                    <div class="col-6 p-0" style="text-align: end;">
                        <p class="fs12 m-0">By Marzii Company</p>
                    </div>
                </div>
                <h3>Here Is Why You Should Opt For Chocolate Wax!</h3>
            </div>
            <div class="col-md-4 cursorPoint">
                <img src="{{asset('uploads/images/blog1.jpeg')}}" class="rounded-4 w-100">
                <div class="m-0 mb-3 mt-2 row">
                    <div class="col-6 p-0">
                        <span class="fs12 m-0 chipGradiant">Beauty</span>
                    </div>
                    <div class="col-6 p-0" style="text-align: end;">
                        <p class="fs12 m-0">By Marzii Company</p>
                    </div>
                </div>
                <h3>Here Is Why You Should Opt For Chocolate Wax!</h3>
            </div>
            <div class="col-md-4 cursorPoint">
                <img src="{{asset('uploads/images/blog1.jpeg')}}" class="rounded-4 w-100">
                <div class="m-0 mb-3 mt-2 row">
                    <div class="col-6 p-0">
                        <span class="fs12 m-0 chipGradiant">Beauty</span>
                    </div>
                    <div class="col-6 p-0" style="text-align: end;">
                        <p class="fs12 m-0">By Marzii Company</p>
                    </div>
                </div>
                <h3>Here Is Why You Should Opt For Chocolate Wax!</h3>
            </div>
        </div>
    </section>

    <section class="footer p-5 pb-1" id="reviewsFooter">
        <div class="row m-0 d-block pb-4" style="border-bottom: 1px solid #424242;">
            <a href="about"><p class="d-inline-block">About Us</p></a>
            <a href="impact"><p class="d-inline-block">UC Impact</p></a>
            <a href="terms"><p class="d-inline-block">Terms & Conditions</p></a>
            <a href="privacy-policy"><p class="d-inline-block">Privacy Policy</p></a>
            <a href="#"><p class="d-inline-block">Interest-Based Advertising</p></a>
            <a href="anti-policy"><p class="d-inline-block">Anti Discrimination Policy</p></a>
            <a href="#"><p class="d-inline-block">Partner Welfare Policy</p></a>
            <a href="#"><p class="d-inline-block">Information Security Policy Statement & Objective</p></a>
            <a href="blogs"><p class="d-inline-block">Blog</p></a>
            <a href="reviews"><p class="d-inline-block">Reviews</p></a>
            <a href="#"><p class="d-inline-block">Near Me</p></a>
            <a href="carrers"><p class="d-inline-block">Careers</p></a>
            <a href="#"><p class="d-inline-block">Contact Us</p></a>
            <a href="#"><p class="d-inline-block">Quick Links</p></a>
            <a href="#"><p class="d-inline-block">RO Water Purifier</p></a>
        </div>
        <div class="row m-0 d-block pb-4 pt-4" style="border-bottom: 1px solid #424242;" id="countryList">
            <p style="color: #fff; font-size: 16px;">Serving in</p>
            <p>IND</p>
            <a href="#"><p class="d-inline-block">Agra</p></a>
            <a href="#"><p class="d-inline-block">Ahmedabad</p></a>
            <a href="#"><p class="d-inline-block">Alwar</p></a>
            <a href="#"><p class="d-inline-block">Amritsar</p></a>
            <a href="#"><p class="d-inline-block">Aurangabad</p></a>
            <a href="#"><p class="d-inline-block">Bangalore</p></a>
            <a href="#"><p class="d-inline-block">Bhopal</p></a>
            <a href="#"><p class="d-inline-block">Bhubaneswar</p></a>
            <a href="#"><p class="d-inline-block">Chandigarh Tricity</p></a>
            <a href="#"><p class="d-inline-block">Chennai</p></a>
            <a href="#"><p class="d-inline-block">Coimbatore</p></a>
            <a href="#"><p class="d-inline-block">Cuttack</p></a>
            <a href="#"><p class="d-inline-block">Dehradun</p></a>
            <a href="#"><p class="d-inline-block">Delhi NCR</p></a>
            <a href="#"><p class="d-inline-block">Guntur</p></a>
            <a href="#"><p class="d-inline-block">Guwahati</p></a>
            <a href="#"><p class="d-inline-block">Gwalior</p></a>
            <a href="#"><p class="d-inline-block">Hyderabad</p></a>
            <a href="#"><p class="d-inline-block">Indore</p></a>
            <a href="#"><p class="d-inline-block">Jabalpur</p></a>
            <a href="#"><p class="d-inline-block">Jaipur</p></a>
            <a href="#"><p class="d-inline-block">Jamshedpur</p></a>
            <a href="#"><p class="d-inline-block">Jodhpur</p></a>
            <a href="#"><p class="d-inline-block">Kakinada</p></a>
            <a href="#"><p class="d-inline-block">Kanpur</p></a>
            <a href="#"><p class="d-inline-block">Karnal</p></a>
            <a href="#"><p class="d-inline-block">Kochi</p></a>
            <a href="#"><p class="d-inline-block">Kolkata</p></a>
            <a href="#"><p class="d-inline-block">Kota</p></a>
            <a href="#"><p class="d-inline-block">Lucknow</p></a>
            <a href="#"><p class="d-inline-block">Ludhiana</p></a>
            <a href="#"><p class="d-inline-block">Madurai</p></a>
            <a href="#"><p class="d-inline-block">Meerut</p></a>
            <a href="#"><p class="d-inline-block">Mumbai</p></a>
            <a href="#"><p class="d-inline-block">Mysore</p></a>
            <a href="#"><p class="d-inline-block">Nagpur</p></a>
            <a href="#"><p class="d-inline-block">Nashik</p></a>
            <a href="#"><p class="d-inline-block">Panipat</p></a>
            <a href="#"><p class="d-inline-block">Patna</p></a>
            <a href="#"><p class="d-inline-block">Prayagraj</p></a>
            <a href="#"><p class="d-inline-block">Pune</p></a>
            <a href="#"><p class="d-inline-block">Raipur</p></a>
            <a href="#"><p class="d-inline-block">Rajahmundry</p></a>
            <a href="#"><p class="d-inline-block">Ranchi</p></a>
            <a href="#"><p class="d-inline-block">Ratnagiri</p></a>
            <a href="#"><p class="d-inline-block">Rohtak</p></a>
            <a href="#"><p class="d-inline-block">Sonipat</p></a>
            <a href="#"><p class="d-inline-block">Surat</p></a>
            <a href="#"><p class="d-inline-block">Thiruvananthapuram</p></a>
            <a href="#"><p class="d-inline-block">Udaipur</p></a>
            <a href="#"><p class="d-inline-block">Vadodara</p></a>
            <a href="#"><p class="d-inline-block">Varanasi</p></a>
            <a href="#"><p class="d-inline-block">Vijayawada</p></a>
            <a href="#"><p class="d-inline-block">Visakhapatnam</p></a>
            <a href="#"><p class="d-inline-block">Warangal</p></a>
        </div>
        <div class="row m-0 pt-4">
            <div class="col-md-2 mb-3">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('uploads/images/new_brand_logo_white.png')}}" style="width: 10em;">
                  </a>
            </div>
            <div class="col-md-4 mb-3">
                <p class="fs14 grayTxt m-0">© 2014-24 UrbanClap Technologies India Pvt. Ltd.</p>
            </div>
            <div class="col-md-3 mb-3">
                <i class="bi bi-twitter whiteTxt me-2"></i>
                <i class="bi bi-facebook whiteTxt me-2"></i>
                <i class="bi bi-instagram whiteTxt me-2"></i>
                <i class="bi bi-linkedin whiteTxt me-2"></i>
            </div>
            <div class="col-md-3 mb-3">
                <img src="{{asset('uploads/images/googleplay.webp')}}" class="me-2 mb-2" style="width: 7em;" alt="">
                <img src="{{asset('uploads/images/applestore.webp')}}" class="mb-2" style="width: 7em;" alt="">
            </div>
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
