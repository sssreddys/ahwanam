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
        <div class="row m-0" style="text-align: center; border-bottom: 1px solid #eee;">
            <h1 class="p-4">Anti Discrimination Policy</h1>
            <div class="col-md-2 m-0 m-auto mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>IND</option>
                    <option value="1">UAE</option>
                    <option value="2">SGP</option>
                    <option value="3">KSA</option>
                  </select>
            </div>
        </div>
    </section>

    <section class="bgGray pt-4 pb-4">
        <div class="container p-4" style="background-color: #fff; border: 1px solid #eee;">
            <p class="grayTxt">Anti-Discrimination Policy</p>
            <p class="grayTxt"><i>Marzii Company seeks to empower millions of service professionals across the world to deliver safe, reliable and high quality services at home. Marzii Company therefore does not tolerate, and prohibits discrimination against customers or service providers based on religion, caste, race, national origin, disability, sexual orientation, sex, marital status, gender identity, age or any other characteristic that may protected under applicable laws.</i></p>
            <p class="grayTxt"><i>Such discrimination includes, but is not limited to, refusing to provide or accept services based on any of these characteristics.</i></p>
            <p class="grayTxt"><i>Any customer or service partner found to have violated this prohibition will lose access to the Marzii Company platform.</i></p>
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
