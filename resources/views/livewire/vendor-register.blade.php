<div>
    <!-- <section>
        <div class="row m-0 loginBannerBg">
            <a class="navbar-brand pb-4 pt-4" href="aahwanam.html">
                <img src="{{ asset('uploads/images/brand_logo_gold_txt.png') }}" style="width: 15em;">
            </a>
            <div class="row m-0 mb-5">
                <div class="col-md-6 m-auto">
                    <h1 class="whiteTxt" style="font-size: 6em;">Plan your perfect wedding with us</h1>
                </div>
                <div class="col-md-6">
                    <div class="bg-white p-5 rounded">
                        <div class="row m-0" style="text-align: center;">
                            <p class="fs-4 fw-bold mb-2">Registration</p>
                            <p class="">Let's plan your lifetime memory</p>
                        </div>
                        <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">First name</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone number</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Address</label>
                                <textarea type="text" rows="2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                              </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" class="btn btn-primary" style="background-color: #EDC99E; border-color: #EDC99E;">Submit</button>
                            </div>

                          </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-end" href="vendors">I am a vendor &nbsp;<button
                                        class="btn btn-outline-primary">Register now</button></a></li>
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
            <h4 class="mb-3">Register as a New Vendor on Marzii</h4>
            <p class="grayTxt">Create your account as Photographer</p>
        </div>
    </section>
    <section class="bgGray">
        <div class="container">
            <div class="row justify-content-center pb-5">


                <div class="col-md-8 regCard">
                    @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                    <form wire:submit.prevent="registerVendor">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">Your business first name</label>
                                    <input type="text" class="form-control" id="first_name"
                                        wire:model="first_name" placeholder="Enter Your First Name">
                                    @error('first_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Mobile number</label>
                                    <input type="text" class="form-control" id="phone"
                                        placeholder="Enter Mobile Number" wire:model="phone">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label><br>
                                    <div class="form-check form-check-inline" style="margin-top:10px;">
                                        <input class="form-check-input" type="radio" wire:model="gender"
                                            value="Male" id="maleRadio" name="gender">
                                        <label class="form-check-label" for="maleRadio">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline" style="margin-top:10px;">
                                        <input class="form-check-input" type="radio" wire:model="gender"
                                            value="Female" id="femaleRadio" name="gender">
                                        <label class="form-check-label" for="femaleRadio">Female</label>
                                    </div>
                                    <div> @error('gender')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="pincode" class="form-label">Pincode</label>
                                        <input type="text" class="form-control" id="postalCode"
                                            wire:model="postalCode" wire:keyup="fetchLocationData">
                                        @error('postalCode')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city" class="form-label">City</label>
                                        @if (count($cities) > 0)
                                            <select id="city" class="form-control" wire:model="selectedCity">
                                                <option value="">Select City</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city }}">{{ $city }}</option>
                                                @endforeach
                                            </select>
                                            @error('selectedCity')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        @else
                                            <input type="text" class="form-control" id="city"
                                                wire:model="city" placeholder="Enter City">
                                            @error('city')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        @endif
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password"
                                        wire:model="password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword"
                                        wire:model="confirmPassword">
                                    @error('confirmPassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Your business last name</label>
                                    <input type="text" class="form-control" id="last_name"
                                        placeholder="Enter Your Last Name" wire:model="last_name">
                                    @error('last_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Login email address</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Enter Your Login Mail" wire:model="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address"
                                        placeholder="Enter Your Detail Address" wire:model="address">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        @if ($selectedDistrict)
                                            <div class="form-group">
                                                <label for="selectedDistrict">District</label>
                                                <input type="text" id="selectedDistrict" class="form-control"
                                                    wire:model="selectedDistrict" readonly>
                                                @error('selectedDistrict')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        @else
                                            <div class="form-group">
                                                <label for="district">District</label>
                                                <input type="text" id="district" class="form-control"
                                                    wire:model="district">
                                                @error('district')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        @if ($selectedState)
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input type="text" id="state" class="form-control"
                                                    wire:model="selectedState" readonly>
                                                @error('selectedState')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        @else
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input type="text" id="state" class="form-control"
                                                    wire:model="state">
                                                @error('state')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="mb-3">
                                    @if ($selectedCountry)
                                        <div class="form-group">
                                            <label for="selectedCountry">Country</label>
                                            <input type="text" id="selectedCountry" class="form-control"
                                                wire:model="selectedCountry" readonly>
                                            @error('selectedCountry')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    @else
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input type="text" id="country" class="form-control"
                                                wire:model="country">
                                            @error('country')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                        wire:model="consent">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I hereby give my consent for sharing my ID/Aadhaar for the purpose of
                                        verification and allow your Service Provider to verify ID document from the
                                        Issuing Authority. I am duly informed that the details will be used only for
                                        verification purpose by WeddingBazaar.com Limited/its Service Provider and will
                                        not be stored
                                    </label>
                                    @error('consent')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mb-3">Create my account</button>
                                    <p>By signing up, you agree to Marzii's Terms & Conditions</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
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
    <script src='aahwanam.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $("#lat_area").addClass("d-none");
            $("#long_area").addClass("d-none");
        });
    </script>


    <script>
        // Prevent form submission on Enter key press
        document.getElementById('autocomplete').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
            }
        });

        google.maps.event.addDomListener(window, 'load', initialize);

        function initialize() {
            var input = document.getElementById('autocomplete');
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();

                // Log the entire place object to the console
                console.log(place);

                // Set latitude and longitude values
                $('#latitude').val(place.geometry['location'].lat());
                $('#longitude').val(place.geometry['location'].lng());

                // --------- show lat and long ---------------
                $("#lat_area").removeClass("d-none");
                $("#long_area").removeClass("d-none");
            });
        }
    </script>


    @livewireScripts
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.hook('message.sent', (message, component) => {
                console.log('Message sent:', message, 'Component:', component);
            });
        });
    </script>


</div>
