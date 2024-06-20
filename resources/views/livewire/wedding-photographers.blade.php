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

    <section>
        <div class="row m-0 p-5" style="border-bottom: 1px solid #eee;">
            <h4 class="mb-3">Wedding Photographers in India (75607):</h4>
            <p class="grayTxt">The biggest day of your life deserves to be captured by the most talented ones. Find the list of wedding photographers in all Indian cities. Both premium and budget photographers are listed in all categories including traditional, candid, drone & pre-wedding photography. Browse through their photos and reviews and contact them directly or simply request for a callback from us. ^_^</p>
        </div>
    </section>

    <section class="bgGray pt-4 pb-4">
        <div class="container">
            <div class="row m-0" id="profileCardsContainer">
                <!-- Dynamic content will be inserted here -->
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
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var contatUsArray = [
                {
                    "name": "Misty Moments",
                    "address": "Kolkata",
                    "reviews": '100 Reviews',
                    "price": "₹19,499",
                    "rating": "4.9",
                    "desc": "For 1 Day of Photo + Video",
                    "image": "https://images.shaadisaga.com/shaadisaga_production/photos/pictures/003/936/095/new_medium/mini_magick20220523-2778-1l10lqw.jpg?1653299455"
                },
                {
                    "name": "Misty Moments",
                    "address": "Kolkata",
                    "reviews": '100 Reviews',
                    "price": "₹19,499",
                    "rating": "4.9",
                    "desc": "For 1 Day of Photo + Video",
                    "image": "https://images.shaadisaga.com/shaadisaga_production/photos/pictures/003/936/095/new_medium/mini_magick20220523-2778-1l10lqw.jpg?1653299455"
                },
                {
                    "name": "Misty Moments",
                    "address": "Kolkata",
                    "reviews": '100 Reviews',
                    "price": "₹19,499",
                    "rating": "4.9",
                    "desc": "For 1 Day of Photo + Video",
                    "image": "https://images.shaadisaga.com/shaadisaga_production/photos/pictures/003/936/095/new_medium/mini_magick20220523-2778-1l10lqw.jpg?1653299455"
                },
                {
                    "name": "Misty Moments",
                    "address": "Kolkata",
                    "reviews": '100 Reviews',
                    "price": "₹19,499",
                    "rating": "4.9",
                    "desc": "For 1 Day of Photo + Video",
                    "image": "https://images.shaadisaga.com/shaadisaga_production/photos/pictures/003/936/095/new_medium/mini_magick20220523-2778-1l10lqw.jpg?1653299455"
                },
                {
                    "name": "Misty Moments",
                    "address": "Kolkata",
                    "reviews": '100 Reviews',
                    "price": "₹19,499",
                    "rating": "4.9",
                    "desc": "For 1 Day of Photo + Video",
                    "image": "https://images.shaadisaga.com/shaadisaga_production/photos/pictures/003/936/095/new_medium/mini_magick20220523-2778-1l10lqw.jpg?1653299455"
                },
                {
                    "name": "Misty Moments",
                    "address": "Kolkata",
                    "reviews": '100 Reviews',
                    "price": "₹19,499",
                    "rating": "4.9",
                    "desc": "For 1 Day of Photo + Video",
                    "image": "https://images.shaadisaga.com/shaadisaga_production/photos/pictures/003/936/095/new_medium/mini_magick20220523-2778-1l10lqw.jpg?1653299455"
                },
            ];

            var container = document.getElementById('profileCardsContainer');

            contatUsArray.forEach(function(contactUs) {
                var profileCard = `
                    <div class="col-md-4 mb-3">
                        <a href="vendor-dashboard" style="text-decoration: none">
                            <div class="p-4 profileCard">
                                <img src=${contactUs.image} class="w-100">
                                <div class="row m-0 mt-3">
                                    <div class="col-6 p-0"><h5>${contactUs.name}</h5></div>
                                    <div class="col-6 p-0" style="text-align: end"><span class="ratingChip">${contactUs.rating} <i class="bi bi-star-fill"></i></span></div>
                                </div>
                                <div class="row m-0">
                                    <div class="col-6 p-0"><p class="grayTxt mb-0">${contactUs.address}</p></div>
                                    <div class="col-6 p-0" style="text-align: end"><p class="grayTxt mb-0">${contactUs.reviews}</p></div>
                                </div>
                                <hr>
                                <div class="row m-0">
                                    <div class="col-6 p-0"><p class="grayTxt mb-0">${contactUs.price}</p></div>
                                    <div class="col-6 p-0" style="text-align: end"><p class="grayTxt mb-0">${contactUs.desc}</p></div>
                                </div>
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn btn-outline-primary" type="button">Send Enquiry</button>
                                </div>
                            </div>
                        </a>
                    </div>
                `;
                container.innerHTML += profileCard;
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

