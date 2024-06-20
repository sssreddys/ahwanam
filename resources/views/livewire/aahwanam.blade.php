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

    <section class="homeBannerBg">
        <h1 class="whiteTxt" style="padding: 4em 0em;">India's Largest Event Planning Platform</h1>
    </section>

    <section>
        <div class="m-0 mb-4 mt-5 row">
            <h2>Home services at your doorstep</h2>
            <div class="col-md-5">

                <div class="border m-0 mb-5 mt-5 rounded row" style="padding: 20px 10px;">
                    <p class="fs-5">Want to Have a Look into Fxied Services?</p>
                    <div class="col-md-4 cursorPoint" style="text-align: center;">
                        <div class="row m-0 mb-3 topMenuBg">
                            <img src="{{ asset('uploads/images/photographer.png') }}" class="menuImg m-auto">
                        </div>
                        <p class="fs12">Photographer</p>
                    </div>
                    <div class="col-md-4 cursorPoint" style="text-align: center;" data-bs-toggle="modal" data-bs-target="#panditModal">
                        <div class="row m-0 mb-3 topMenuBg">
                            <img src="{{ asset('uploads/images/pandit.png') }}" class="menuImg m-auto">
                        </div>
                        <p class="fs12">Pandit</p>
                    </div>
                    <div class="col-md-4 cursorPoint" style="text-align: center;">
                        <div class="row m-0 mb-3 topMenuBg">
                            <img src="{{ asset('uploads/images/decorator.png') }}" class="menuImg m-auto">
                        </div>
                        <p class="fs12">Decorators</p>
                    </div>
                    <div class="col-md-4 cursorPoint" style="text-align: center;">
                        <div class="row m-0 mb-3 topMenuBg">
                            <img src="{{ asset('uploads/images/careting.png') }}" class="menuImg m-auto"
                                style="width: 66px !important;">
                        </div>
                        <p class="fs12">Catetring</p>
                    </div>
                    <div class="col-md-4 cursorPoint" style="text-align: center;">
                        <div class="row m-0 mb-3 topMenuBg">
                            <img src="{{ asset('uploads/images/dj.png') }}" class="menuImg m-auto">
                        </div>
                        <p class="fs12">Entertainment*: DJ, Singer, Choreographer</p>
                    </div>
                    <div class="col-md-4 cursorPoint" style="text-align: center;">
                        <div class="row m-0 mb-3 topMenuBg">
                            <img src="{{ asset('uploads/images/tents.png') }}" class="menuImg m-auto">
                        </div>
                        <p class="fs12">Tents</p>
                    </div>
                    <div class="col-md-6 cursorPoint">
                        <div class="row m-0 mb-3 topMenuBg">
                            <div class="col-7 m-auto">
                                <p class="fs12 m-0">Makeup and stylists</p>
                            </div>
                            <div class="col-5">
                                <img src="{{ asset('uploads/images/makeup.png') }}" class="menuImg me-auto">
                            </div>
                        </div>
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
                <div class="row m-0">
                    <div class="col-md-6 p-0">
                        <div class="row m-0">
                            <div class="col-2 p-0" style="text-align: center;">
                                <i class="bi bi-star fs30"></i>
                            </div>
                            <div class="col-10">
                                <p class="ratingHeaderTxt mb-2">4.8</p>
                                <p class="ratingSubTxt">Service Rating</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="row m-0">
                            <div class="col-2 p-0" style="text-align: center;">
                                <i class="bi bi-people fs30"></i>
                            </div>
                            <div class="col-10">
                                <p class="ratingHeaderTxt mb-2">5M+</p>
                                <p class="ratingSubTxt">Customers Globally</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <!-- <iframe width="100%" height="100%" src="./youtubeVideo.html"></iframe> -->

                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/K1-aTkk1CYE?si=JH2GDB1zzVZhma4Y"
                    referrerpolicy="strict-origin-when-cross-origin" showinfo="0" controls="0" autohide="1" allowfullscreen></iframe> -->
                <iframe src="https://www.youtube.com/embed/K1-aTkk1CYE" allowfullscreen="" class="mt-5 ytSize3"
                    style="border-radius: 8px;"></iframe>
            </div>
        </div>
    </section>

    <section>
        <div class="row m-0">
            <div class="MultiCarousel" data-items="1,6,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <h3 class="p-4">Vendor categories</h3>
                    <div class="item p-4">
                        <div class="p-2 bg-white rounded-3" style="box-shadow: 0 6px 16px 0 rgba(0, 0, 0, .12);">
                            <img src="{{ asset('uploads/images/bridal-makeup-artists.png') }}"
                                class="rounded-3 w-100">
                            <p class="fw-semibold mb-1 mt-3">Makeup Artist</p>
                            <p class="fs14">88482</p>
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="p-2 bg-white rounded-3" style="box-shadow: 0 6px 16px 0 rgba(0, 0, 0, .12);">

                            <img src="{{ asset('uploads/images/wedding-planners.png') }}" class="rounded-3 w-100">
                            <p class="fw-semibold mb-1 mt-3">Planners</p>
                            <p class="fs14">88482</p>
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="p-2 bg-white rounded-3" style="box-shadow: 0 6px 16px 0 rgba(0, 0, 0, .12);">

                            <img src="{{ asset('uploads/images/wedding-decorators.png') }}" class="rounded-3 w-100">
                            <p class="fw-semibold mb-1 mt-3">Decorators</p>
                            <p class="fs14">88482</p>
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="p-2 bg-white rounded-3" style="box-shadow: 0 6px 16px 0 rgba(0, 0, 0, .12);">

                            <img src="{{ asset('uploads/images/catering.png') }}" class="rounded-3 w-100"
                                style="height: 8.3em;">
                            <p class="fw-semibold mb-1 mt-3">Catteres</p>
                            <p class="fs14">88482</p>
                        </div>
                    </div>
                    <div class="item p-4" onclick="redirectToPage('photographers')">
                        <div class="p-2 bg-white rounded-3" style="box-shadow: 0 6px 16px 0 rgba(0, 0, 0, .12);">

                            <img src="{{ asset('uploads/images/wedding-photographers.png') }}"
                                class="rounded-3 w-100 h-100">
                            <p class="fw-semibold mb-1 mt-3">Photographers</p>
                            <p class="fs14">88482</p>
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="p-2 bg-white rounded-3" style="box-shadow: 0 6px 16px 0 rgba(0, 0, 0, .12);">

                            <img src="{{ asset('uploads/images/mehndi-artists.png') }}" class="rounded-3 w-100"
                                style="height: 8.3em;">
                            <p class="fw-semibold mb-1 mt-3">Mehendi Artist</p>
                            <p class="fs14">88482</p>
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="p-2 bg-white rounded-3" style="box-shadow: 0 6px 16px 0 rgba(0, 0, 0, .12);">

                            <img src="{{ asset('uploads/images/wedding-pandits.png') }}" class="rounded-3 w-100">
                            <p class="fw-semibold mb-1 mt-3">Pandit</p>
                            <p class="fs14">88482</p>
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary leftLst"><i class="bi bi-arrow-left"></i></button>
                <button class="btn btn-primary rightLst"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <section>
        <div class="row m-0">
            <div class="MultiCarousel" data-items="1,4,3,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <h3 class="p-4">Why Marzii?</h3>
                    <div class="item p-4">
                        <div class="rounded-3 p-3" style="background-color: #FFECEC;">
                            <img src="{{ asset('uploads/images/whyWBZ1.svg') }}" class="rounded-3">
                            <p class="fs-4 mt-5">Trusted marketplace from <b>Marzii.com</b> group</p>
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="rounded-3 p-3" style="background-color: #EBFDFF;">
                            <img src="{{ asset('uploads/images/whyWBZ3.svg') }}" class="rounded-3">
                            <p class="fs-4 mt-5"><b>2.8 Lakh+</b> trusted vendors across <b>40+ cities</b></p>
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="rounded-3 p-3" style="background-color: #F3EBFF;">
                            <img src="{{ asset('uploads/images/whyWBZ4.svg') }}" class="rounded-3">
                            <p class="fs-4 mt-5"><b>2.3 million</b> connections with <b>60K+</b> vendors</p>
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="rounded-3 p-3" style="background-color: #EDF1FF;">
                            <img src="{{ asset('uploads/images/whyWBZ2.svg') }}" class="rounded-3">
                            <p class="fs-4 mt-5"><b>20 Lakh+</b> and counting <b>happy</b> customers</p>
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="rounded-3 p-3" style="background-color: #FFF8EB;">
                            <img src="{{ asset('uploads/images/whyWBZ6.svg') }}" class="rounded-3">
                            <p class="fs-4 mt-5">Choose best vendors based on <b>user reviews</b></p>
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary leftLst"><i class="bi bi-arrow-left"></i></button>
                <button class="btn btn-primary rightLst"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <section class="yourDetailsBannerBg pt-5 pb-5">
        <h2 class="ps-3">Help us with your details</h2>
        <p class="ps-3 pb-4">Our executives will call you to understand your requirements to find suitable vendors</p>
        <div class="row m-0">
            <div class="col-md-3">
                <div class="mb-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Enter your name">
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <input type="number" class="form-control" id="exampleFormControlInput1"
                        placeholder="Enter mobile number">
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <form class="d-flex" role="search">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Search for vendors</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-grid gap-2 mb-3">
                    <button class="btn btn-primary" type="button">Submit</button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row m-0">
            <h3 class="p-4">Inspirations & Blogs</h3>
            <p class="ps-4">Get tips and ideas on latest and interesting wedding trends</p>
            <div class="MultiCarousel" data-items="1,6,3,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item p-4" style="text-align: center;">
                        <img src="https://images.shaadisaga.com/shaadisaga_production/static/blog_subcategory_banners/fallback-web-min.jpg"
                            class="blogImg">
                        <p class="fw-semibold mb-1 mt-3">Latest</p>
                    </div>
                    <div class="item p-4" style="text-align: center;">
                        <img src="	https://images.shaadisaga.com/shaadisaga_production/static/blog_subcategory_banners/72-mob-min.jpg"
                            class="blogImg">
                        <p class="fw-semibold mb-1 mt-3">Bridal Fashion</p>
                    </div>
                    <div class="item p-4" style="text-align: center;">
                        <img src="	https://images.shaadisaga.com/shaadisaga_production/static/blog_subcategory_banners/88-mob-min.jpg"
                            class="blogImg">
                        <p class="fw-semibold mb-1 mt-3">Wedding Planning</p>
                    </div>
                    <div class="item p-4" style="text-align: center;">
                        <img src="https://images.shaadisaga.com/shaadisaga_production/static/blog_subcategory_banners/80-mob-min.jpg"
                            class="blogImg">
                        <p class="fw-semibold mb-1 mt-3">Photo & Video Ideas</p>
                    </div>
                    <div class="item p-4" style="text-align: center;">
                        <img src="https://images.shaadisaga.com/shaadisaga_production/static/blog_subcategory_banners/137-mob-min.jpg"
                            class="blogImg">
                        <p class="fw-semibold mb-1 mt-3">Celebrity</p>
                    </div>
                    <div class="item p-4" style="text-align: center;">
                        <img src="https://images.shaadisaga.com/shaadisaga_production/static/blog_subcategory_banners/78-mob-min.jpg"
                            class="blogImg">
                        <p class="fw-semibold mb-1 mt-3">Decorating Ideas</p>
                    </div>
                    <div class="item p-4" style="text-align: center;">
                        <img src="https://images.shaadisaga.com/shaadisaga_production/static/blog_subcategory_banners/87-mob-min.jpg"
                            class="blogImg">
                        <p class="fw-semibold mb-1 mt-3">Pre Wedding Planning</p>
                    </div>
                    <div class="item p-4" style="text-align: center;">
                        <img src="https://images.shaadisaga.com/shaadisaga_production/static/blog_subcategory_banners/110-mob-min.jpg"
                            class="blogImg">
                        <p class="fw-semibold mb-1 mt-3">Wedding Day</p>
                    </div>
                    <div class="item p-4" style="text-align: center;">
                        <img src="https://images.shaadisaga.com/shaadisaga_production/static/blog_subcategory_banners/131-mob-min.jpg"
                            class="blogImg">
                        <p class="fw-semibold mb-1 mt-3">Hindu</p>
                    </div>
                    <div class="item p-4">
                        <img src="https://images.shaadisaga.com/shaadisaga_production/static/blog_subcategory_banners/96-mob-min.jpg"
                            class="blogImg">
                        <p class="fw-semibold mb-1 mt-3">Wedding Photographers</p>
                    </div>

                </div>
                <button class="btn btn-primary leftLst"><i class="bi bi-arrow-left"></i></button>
                <button class="btn btn-primary rightLst"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <section>
        <div class="row m-0">
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item p-4">
                        <div class="p-2 bg-white rounded-3" style="box-shadow: 0 6px 16px 0 rgba(0, 0, 0, .12);">
                            <img src="{{ asset('uploads/images/blog_1.avif') }}" class="rounded-3 w-100"
                                style="height: 13em;">
                            <p class="fw-semibold mb-4 mt-3">What To Wear When: Dainty Jewellery vs Statement
                                Jewellery!</p>
                            <p class="fs14 mb-1">JEWELLERY</p>
                            <p class="fs14 grayTxt">10 May 2024</p>
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="p-2 bg-white rounded-3" style="box-shadow: 0 6px 16px 0 rgba(0, 0, 0, .12);">
                            <img src="{{ asset('uploads/images/blog_2.avif') }}" class="rounded-3 w-100"
                                style="height: 13em;">
                            <p class="fw-semibold mb-4 mt-3">Here's Your Guide To Destination Wedding In Mahabalipuram!
                            </p>
                            <p class="fs14 mb-1">JEWELLERY</p>
                            <p class="fs14 grayTxt">10 May 2024</p>
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="p-2 bg-white rounded-3" style="box-shadow: 0 6px 16px 0 rgba(0, 0, 0, .12);">

                            <img src="{{ asset('uploads/images/blog_3.webp') }}" class="rounded-3 w-100"
                                style="height: 13em;">
                            <p class="fw-semibold mb-4 mt-3">Ultimate MET Gala Looks to Take Major Inspo From for your
                                We...</p>
                            <p class="fs14 mb-1">JEWELLERY</p>
                            <p class="fs14 grayTxt">10 May 2024</p>
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="p-2 bg-white rounded-3" style="box-shadow: 0 6px 16px 0 rgba(0, 0, 0, .12);">
                            <img src="{{ asset('uploads/images/blog_4.webp') }}" class="rounded-3 w-100"
                                style="height: 13em;">
                            <p class="fw-semibold mb-1 mt-3">Ace That Perfect Wing: Eyeliner Stencils To Help You Slay
                                Yo...</p>
                            <p class="fs14 mb-1">JEWELLERY</p>
                            <p class="fs14 grayTxt">10 May 2024</p>
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="p-2 bg-white rounded-3" style="box-shadow: 0 6px 16px 0 rgba(0, 0, 0, .12);">
                            <img src="{{ asset('uploads/images/blog_5.webp') }}" class="rounded-3 w-100"
                                style="height: 13em;">
                            <p class="fw-semibold mb-1 mt-3">Botanical Bliss: Creative Ways to Showcase Ferns in Your
                                Wed...</p>
                            <p class="fs14 mb-1">JEWELLERY</p>
                            <p class="fs14 grayTxt">10 May 2024</p>
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="p-2 bg-white rounded-3" style="box-shadow: 0 6px 16px 0 rgba(0, 0, 0, .12);">
                            <img src="{{ asset('uploads/images/blog_6.avif') }}" class="rounded-3 w-100"
                                style="height: 13em;">
                            <p class="fw-semibold mb-1 mt-3">#WBWedInIndia: Your Ultimate Goa Destination Wedding
                                Handboo...</p>
                            <p class="fs14 mb-1">JEWELLERY</p>
                            <p class="fs14 grayTxt">10 May 2024</p>
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary leftLst"><i class="bi bi-arrow-left"></i></button>
                <button class="btn btn-primary rightLst"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <section class="pb-5 pt-5"
        style="background: linear-gradient(to bottom right, hsla(0, 0%, 100%, 0), #fbebff 50%) 100% 100% / 50% 50% no-repeat, linear-gradient(to bottom left, hsla(0, 0%, 100%, 0), #fbebff 50%) 0 100% / 50% 50% no-repeat, linear-gradient(to top left, hsla(0, 0%, 100%, 0), #fbebff 50%) 0 0 / 50% 50% no-repeat, linear-gradient(to top right, hsla(0, 0%, 100%, 0), #fbebff 50%) 100% 0 / 50% 50% no-repeat;">
        <h2 class="ps-3">Our vendors have generated 100 Crore business last month!</h2>
        <p class="ps-3 pb-4">Here are some of our vendor testimonials</p>
        <div class="row m-0">
            <div class="col-md-4">
                <div class="bg-white rounded-3 p-5">
                    <p><i class="bi bi-quote fs-1"></i></p>
                    <p>"When I registered here as a verified vendor, I did not know that my business would improve
                        vastly within a short period. Understanding the requirements of the customers and serving them
                        has helped develop my business widely. My sincere thanks to the Marzii team for providing
                        me with leads and support consistently.</p>
                    <p class="mb-1"><b>Varun</b></p>
                    <p class="fs12">Caterers, Chennai</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white rounded-3 p-5">
                    <p><i class="bi bi-quote fs-1"></i></p>
                    <p>"When I registered here as a verified vendor, I did not know that my business would improve
                        vastly within a short period. Understanding the requirements of the customers and serving them
                        has helped develop my business widely. My sincere thanks to the Marzii team for providing
                        me with leads and support consistently.</p>
                    <p class="mb-1"><b>Varun</b></p>
                    <p class="fs12">Caterers, Chennai</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white rounded-3 p-5">
                    <p><i class="bi bi-quote fs-1"></i></p>
                    <p>"When I registered here as a verified vendor, I did not know that my business would improve
                        vastly within a short period. Understanding the requirements of the customers and serving them
                        has helped develop my business widely. My sincere thanks to the Marzii team for providing
                        me with leads and support consistently.</p>
                    <p class="mb-1"><b>Varun</b></p>
                    <p class="fs12">Caterers, Chennai</p>
                </div>
            </div>
        </div>
        <div class="row m-0 mt-5">
            <div class="col-md-10">
                <h3 class="">Become a vendor in Marzii! Double your business</h3>
            </div>
            <div class="col-md-2" style="text-align: end;">

                <button class="btn btn-primary" onclick="window.location='{{ route('vendors') }}'">Register as
                    vendor</button>

            </div>
        </div>
    </section>

    <section>
        <div class="row m-5 rounded-4 p-5"
            style="background: linear-gradient(to bottom right, hsla(0, 0%, 100%, 0), #ffebf0 50%) 100% 100% / 50% 50% no-repeat, linear-gradient(to bottom left, hsla(0, 0%, 100%, 0), #ffebf0 50%) 0 100% / 50% 50% no-repeat, linear-gradient(to top left, hsla(0, 0%, 100%, 0), #ffebf0 50%) 0 0 / 50% 50% no-repeat, linear-gradient(to top right, hsla(0, 0%, 100%, 0), #ffebf0 50%) 100% 0 / 50% 50% no-repeat;">
            <h1 class="fw-bold ps-4 mb-5">Planning a wedding now made easy</h1>
            <p class="ps-4">Helps plan your wedding like a loved one. Marzii is India’s most loved largest
                wedding services marketplace. Check prices, verified reviews and book best wedding photographers, bridal
                makeup artists, wedding venues, decorators, and all other wedding vendors at guaranteed best prices.</p>
            <div class="row m-0 mt-5">
                <div class="col-md-10">
                    <h3 class="">Explore wedding vendors for your big day</h3>
                </div>
                <div class="col-md-2" style="text-align: end;">
                    <button class="btn btn-primary">Hire a vendor</button>
                </div>
            </div>
        </div>
    </section>
    <!--
    <section>
        <div class="row m-0">
            <img src="images/goodbye_razor.webp" class="w-100">
        </div>
    </section>

    <section>
        <div class="row m-0">
            <div class="MultiCarousel" data-items="1,5,3,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Waxing</p>
                            <img src="images/waxing.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Pedicure</p>
                            <img src="images/pedicure_2.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Facial & Cleanup</p>
                            <img src="images/facial.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Manicure</p>
                            <img src="images/manicure.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4 pe-0">Threading & face wax</p>
                            <img src="images/threading.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Bleach & detan</p>
                            <img src="images/bleach.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Hairecare</p>
                            <img src="images/haircare.webp" class="rounded-3 w-100">
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary leftLst"><i class="bi bi-arrow-left"></i></button>
                <button class="btn btn-primary rightLst"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <section>
        <div class="row m-0">
            <div class="MultiCarousel" data-items="1,5,3,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Stress relief</p>
                            <img src="images/stress_relief.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Pain relief</p>
                            <img src="images/pain_relief.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Post workout</p>
                            <img src="images/post_workout.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Natural skincare</p>
                            <img src="images/natural_skincare.webp" class="rounded-3 w-100">
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary leftLst"><i class="bi bi-arrow-left"></i></button>
                <button class="btn btn-primary rightLst"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <section>
        <div class="row m-0">
            <img src="images/massage_for_men.webp" class="w-100">
        </div>
    </section>

    <section>
        <div class="row m-0">
            <div class="MultiCarousel" data-items="1,5,3,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Bathroom & kitchen cleaning</p>
                            <img src="images/bath_clean.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Full home <br>cleaning</p>
                            <img src="images/full_home.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Sofa & carpet cleaning</p>
                            <img src="images/sofa_clean.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Cockroach, ant & general pest control</p>
                            <img src="images/pest_control.webp" class="rounded-3 w-100">
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary leftLst"><i class="bi bi-arrow-left"></i></button>
                <button class="btn btn-primary rightLst"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <section>
        <div class="row m-0">
            <img src="images/native_ro.webp" class="w-100">
        </div>
    </section>

    <section>
        <div class="row m-0">
            <div class="MultiCarousel" data-items="1,5,3,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item p-2">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Water Purifier Repair</p>
                            <img src="images/water_repair.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Washing Machine Repair</p>
                            <img src="images/washing_repair.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Refrigerator Repair</p>
                            <img src="images/refrigator_repair.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Chimney Repair</p>
                            <img src="images/chimney_repair.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Television Repair</p>
                            <img src="images/tv_repair.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Native Water Purifier</p>
                            <img src="images/native_water.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Geyser Repair</p>
                            <img src="images/gesear_repair.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Microwave Repair</p>
                            <img src="images/microwave_repair.webp" class="rounded-3 w-100">
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary leftLst"><i class="bi bi-arrow-left"></i></button>
                <button class="btn btn-primary rightLst"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <section>
        <div class="row m-0">
            <div class="MultiCarousel" data-items="1,5,3,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item p-4">
                        <img src="images/fan_repair.webp" class="rounded-3 w-100">
                        <p class="fw-semibold mb-1 mt-3">Fan repair</p>
                        <p class="mb-1 fs14"><i class="bi bi-star-fill"></i> 4.82 (115.8k)</p>
                        <p class="fs14">₹199</p>
                    </div>
                    <div class="item p-4">
                        <img src="images/drill_hang.webp" class="rounded-3 w-100">
                        <p class="fw-semibold mb-1 mt-3">Drill & hang (wall decor)</p>
                        <p class="mb-1 fs14"><i class="bi bi-star-fill"></i> 4.86 (133.1k)</p>
                        <p class="fs14">₹129</p>
                    </div>
                    <div class="item p-4">
                        <img src="images/haircut.webp" class="rounded-3 w-100">
                        <p class="fw-semibold mb-1 mt-3">Flush tank repair (external - PVC)</p>
                        <p class="mb-1 fs14"><i class="bi bi-star-fill"></i> 4.79 (91.9K)</p>
                        <p class="fs14">₹159</p>
                    </div>
                    <div class="item p-4">
                        <img src="images/sofa_cleaning.webp" class="rounded-3 w-100">
                        <p class="fw-semibold mb-1 mt-3">Switch/socket replacement</p>
                        <p class="mb-1 fs14"><i class="bi bi-star-fill"></i> 4.87 (31.1k)</p>
                        <p class="fs14">₹109</p>
                    </div>
                    <div class="item p-4">
                        <img src="images/cupboard_repair.webp" class="rounded-3 w-100">
                        <p class="fw-semibold mb-1 mt-3">Cupboard hinge service (up to two)</p>
                        <p class="mb-1 fs14"><i class="bi bi-star-fill"></i> 4.84 (65.6K)</p>
                        <p class="fs14">₹199</p>
                    </div>
                    <div class="item p-4">
                        <img src="images/jet_spray.webp" class="rounded-3 w-100">
                        <p class="fw-semibold mb-1 mt-3">Jet spray (installation/ repair)</p>
                        <p class="mb-1 fs14"><i class="bi bi-star-fill"></i> 4.83 (100K)</p>
                        <p class="fs14">₹139</p>
                    </div>
                    <div class="item p-4">
                        <img src="images/tap_repair.webp" class="rounded-3 w-100">
                        <p class="fw-semibold mb-1 mt-3">Tap repair</p>
                        <p class="mb-1 fs14"><i class="bi bi-star-fill"></i> 4.81 (175.7K)</p>
                        <p class="fs14">₹129</p>
                    </div>
                    <div class="item p-4">
                        <img src="images/celling_fan.webp" class="rounded-3 w-100">
                        <p class="fw-semibold mb-1 mt-3">Ceiling fan installation</p>
                        <p class="mb-1 fs14"><i class="bi bi-star-fill"></i> 4.87 (56.7K)</p>
                        <p class="fs14">₹169</p>
                    </div>
                    <div class="item p-4">
                        <img src="images/washbashin.webp" class="rounded-3 w-100">
                        <p class="fw-semibold mb-1 mt-3">Washbasin pipe leakage</p>
                        <p class="mb-1 fs14"><i class="bi bi-star-fill"></i> 4.80 (87K)</p>
                        <p class="fs14">₹249</p>
                    </div>
                    <div class="item p-4">
                        <img src="images/switchboard_repair.webp" class="rounded-3 w-100">
                        <p class="fw-semibold mb-1 mt-3">Switchboard/switchbox repair</p>
                        <p class="mb-1 fs14"><i class="bi bi-star-fill"></i> 4.86 (90.3K)</p>
                        <p class="fs14">₹120</p>
                    </div>

                </div>
                <button class="btn btn-primary leftLst"><i class="bi bi-arrow-left"></i></button>
                <button class="btn btn-primary rightLst"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <section>
        <div class="row m-0">
            <div class="MultiCarousel" data-items="1,5,3,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Stress relief</p>
                            <img src="images/stress_man.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Pain relief</p>
                            <img src="images/pain_man.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Post workout</p>
                            <img src="images/post_man.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Relaxation</p>
                            <img src="images/relaxtation_man.webp" class="rounded-3 w-100">
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary leftLst"><i class="bi bi-arrow-left"></i></button>
                <button class="btn btn-primary rightLst"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <section>
        <div class="row m-0">
            <img src="images/smart_lock.webp" class="w-100">
        </div>
    </section>

    <section>
        <div class="row m-0">
            <div class="MultiCarousel" data-items="1,5,3,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Haircut & Beard grooming shaving</p>
                            <img src="images/salon_men.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Facial & Cleanup</p>
                            <img src="images/facial_men.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Pedicure & Manicure</p>
                            <img src="images/pedicure_man.webp" class="rounded-3 w-100">
                        </div>
                    </div>
                    <div class="item p-4">
                        <div class="border rounded-3 overflowHidden">
                            <p class="p-4">Hair color & Hair spa</p>
                            <img src="images/spa_man.webp" class="rounded-3 w-100">
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary leftLst"><i class="bi bi-arrow-left"></i></button>
                <button class="btn btn-primary rightLst"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </section> -->

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

    <!-- Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="loginModal" tabindex="-1"
        aria-labelledby="loginModalLabel" aria-hidden="true">
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
                        <button type="button" class="btn btn-primary" data-bs-target="#otpModal"
                            data-bs-toggle="modal">Proceed</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="otpModal" tabindex="-1"
        aria-labelledby="otpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="otpModalLabel">Login/Sign up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row m-0 mb-3 p-0">
                        <a data-bs-target="#loginModal" data-bs-toggle="modal" class="p-0"
                            style="text-decoration: underline; cursor: pointer;">Edit number</a>
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

<div class="modal fade" id="panditModal" aria-hidden="true" aria-labelledby="panditModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="panditModalLabel">Fixed Services</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="m-0 mb-3 mt-3 row" style="padding: 20px 10px;">
            <p class="fs-5">At your Door Step Srvices</p>
            <div class="col-md-4 cursorPoint" style="text-align: center;">
                <div class="row m-0 mb-3 topMenuBg">
                    <img src="{{ asset('uploads/images/camera.png') }}" class="menuImg m-auto">
                </div>
                <p class="fs12">Photographer</p>
            </div>
            <div class="col-md-4 cursorPoint" style="text-align: center;" onclick="redirectToUrl('/product-details')">
                <div class="row m-0 mb-3 topMenuBg">
                    <img src="{{ asset('uploads/images/SHH.png') }}" class="menuImg m-auto">
                </div>
                <p class="fs12">Pandit</p>
            </div>
            <div class="col-md-4 cursorPoint" style="text-align: center;">
                <div class="row m-0 mb-3 topMenuBg">
                    <img src="{{ asset('uploads/images/tent.png') }}" class="menuImg m-auto">
                </div>
                <p class="fs12">Decorators</p>
            </div>
            <div class="col-md-4 cursorPoint" style="text-align: center;">
                <div class="row m-0 mb-3 topMenuBg">
                    <img src="{{ asset('uploads/images/Catering Service.png') }}" class="menuImg m-auto"
                        style="width: 66px !important;">
                </div>
                <p class="fs12">Catetring</p>
            </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#panditModal2" data-bs-toggle="modal">Open second modal</button>
      </div> -->
    </div>
  </div>
</div>

<script>
  function redirectToUrl(url) {
    window.location.href = url;
  }
</script>
    <script src='aahwanam.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</div>
