<div>
<style>
    .itemBtn{
   background-color: transparent;
   padding: 5px 10px;
   text-align: center;
 }
 .active {
    border: 1px solid blue;
    background-color: aliceblue;
 }
  </style>
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

    <div class="row m-0 mt-4">
        <div class="col-md-6">
            <div class="row m-0 border rounded">
                <div class="border-bottom m-0 pb-3 pt-3 row">
                    <div class="col-1 p-0">
                        <div class="rounded text-bg-light text-center" style="padding: 10px">
                            <i class="bi bi-geo-alt-fill fs-4 grayTxt"></i>
                        </div>
                    </div>
                    <div class="col-11">
                        <p class="mb-1 fw-bold">Send booking details to</p>
                        <p class="mb-1 grayTxt">+91 9888878767</p>
                    </div>
                </div>
                <div class="border-bottom m-0 pb-3 pt-3 row">
                    <div class="col-1 p-0">
                        <div class="rounded text-bg-light text-center" style="padding: 10px">
                            <i class="bi bi-geo-alt-fill fs-4 grayTxt"></i>
                        </div>
                    </div>
                    <div class="col-9">
                        <p class="mb-1 fw-bold">Address</p>
                        <p class="mb-1 grayTxt">Home - 456-99 Begumpet Hyd</p>
                    </div>
                    <div class="col-2 text-end p-0 m-auto">
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#addressModal">Edit</button>
                    </div>
                </div>
                <div class="border-bottom m-0 pb-3 pt-3 row">
                    <div class="col-1 p-0">
                        <div class="rounded text-bg-light text-center" style="padding: 10px">
                            <i class="bi bi-clock-fill fs-4 grayTxt"></i>
                        </div>
                    </div>
                    <div class="col-9">
                        <p class="mb-1 fw-bold">Slot</p>
                        <p class="mb-1 grayTxt">Mon, Jun 10 - 04:00 PM</p>
                    </div>
                    <div class="col-2 text-end p-0 m-auto">
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#slotModal">Edit</button>
                    </div>
                </div>
                <div class="m-0 pb-3 pt-3 row">
                    <div class="col-1 p-0">
                        <div class="rounded text-bg-light text-center" style="padding: 10px">
                            <i class="bi bi-cash fs-4 grayTxt"></i>
                        </div>
                    </div>
                    <div class="col-11 m-auto">
                        <p class="mb-1 fw-bold">Payment Method</p>
                        <!-- <p class="mb-1 grayTxt">Mon, Jun 10 - 04:00 PM</p> -->
                    </div>
                    <div class="d-grid gap-2 p-0 pt-3">
                        <button class="btn btn-primary" type="button">Pay ₹1,307</button>
                    </div>
                    <!-- <div class="col-2 text-end p-0 m-auto">
                        <button class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div> -->
                </div>
                <div class="bg-light m-0 pb-2 pt-2 rounded-bottom row text-center">
                    <p class="fs14 mb-0">By proceeding, you agree to our <a href="#">T&C</a>, <a href="#">Privacy</a> and <a href="#">Cancellation Policy</a>.</p>
                </div>
            </div>

            <div class="m-0 mb-4 mt-4 row">
                <p class="fw-bold fs-3">Cancellation & reschedule policy<p>
                <div>
                    <ul>
                        <li>Free cancellations/reschedules if done more than 3 hrs before the service or if a professional isn’t assigned. A fee will be charged otherwise.</li>
                        <li>A pack cancellation fee may additionally apply if you cancel the pack, after redeeming a service.</li>
                    </ul>
                </div>
                
                <a href="#">Read full policy</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row m-0 border rounded p-3">
                <p class="mb-1 grayTxt">PANDIT SERVICES</p>
                <p class="mb-1">Nomulu</p>
                <p class="mb-1 fs12 grayTxt">2 time Certifed From aryasamaj<p>
                <div class="row m-0 mb-3">
                    <div class="col-6 m-auto p-0">
                        <p class="fs-5">Nomulu</p>
                    </div>
                    <div class="col-6 m-auto p-0">
                        <div class="rounded float-end" style="background-color: aliceblue; border: 1px solid gray; width: fit-content;">
                            <span type='button' class="itemBtn" value="minus" onclick="button2()"><i class="bi bi-dash-lg"></i></span>
                            <span id="output-area"></span>
                            <span type='button' class="itemBtn" value="plus" onclick="button1()"><i class="bi bi-plus-lg"></i></span>
                        </div>
                        
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-6 p-0">
                        <p class="fs-5 fw-bold">Amount to pay</p>
                    </div>
                    <div class="col-6 p-0 text-end">
                        <p class="fs-5 fw-bold">₹1,307</p>
                        <a href="#" class="fw-bold">View breakup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="addressModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addressModalLabel">Select Address</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Search for location/apartment">
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="slotModal" tabindex="-1" aria-labelledby="slotModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="slotModalLabel">Select Slot</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="fw-bold fs-4 mb-1">When should the professional arrive?</p>
        <p class="grayTxt">Your service will take approx. 45 mins</p>

        <div class="row m-0">
            <div class="text-center active border rounded cursorPoint me-2" style="width: fit-content; padding: 10px 25px;">
                <p class="mb-2 grayTxt">Thu</p>
                <p class="mb-0 fw-bold">13</p>
            </div>
            <div class="text-center border rounded cursorPoint me-2" style="width: fit-content; padding: 10px 25px;">
                <p class="mb-2 grayTxt">Fri</p>
                <p class="mb-0 fw-bold">14</p>
            </div>
            <div class="text-center border rounded cursorPoint me-2" style="width: fit-content; padding: 10px 25px;">
                <p class="mb-2 grayTxt">Sat</p>
                <p class="mb-0 fw-bold">15</p>
            </div>
        </div>
        <p class="fw-bold fs-4 mb-2 mt-2">Select start time of service</p>
        <div class="row m-0" id="time-slots-container">
        
        </div>
        <script>
        const timeSlots = [
            { time: "09:00 AM" },
            { time: "09:30 AM" },
            { time: "10:00 AM" },
            { time: "10:30 AM" },
            { time: "11:00 AM" },
            { time: "11:30 AM" },
            { time: "12:00 PM" },
            { time: "12:30 PM" },
            { time: "01:00 PM" }
            // Add more time slots as needed
        ];

        const container = document.getElementById('time-slots-container');

        timeSlots.forEach(slot => {
            const slotDiv = document.createElement('div');
            slotDiv.className = 'col-4';
            
            slotDiv.innerHTML = `
                <div class="row m-0 p-0 pt-2 pb-2 mb-3 border rounded cursorPoint text-center">
                    <p class="m-0">${slot.time}</p>
                </div>
            `;

            container.appendChild(slotDiv);
        });
    </script>
      </div>
      <div class="modal-footer">
        <div class="d-grid gap-2 w-100">
            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Proceed to checkout</button>
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
</script>
</div>
