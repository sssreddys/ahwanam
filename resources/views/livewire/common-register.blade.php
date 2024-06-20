<div>

    <section>
        <div class="row m-0 loginBannerBg"
            style="background-image: url('{{ asset('uploads/images/weddingring-transformed.jpeg') }}')">

            <a class="navbar-brand pb-4 pt-4" href="/">
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
                        @if (session()->has('message'))
                            <div id="successAlert" style="text-align: center;" class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Registration Type:</label><br>
                            <div class="form-check form-check-inline">
                                <input style="form-check-input;font-family: Montserrat;" type="radio" name="formType" value="user" wire:click="$set('registrationType', 'user')" checked>
                                <label class="form-check-label" for="userRadio">User</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input style="form-check-input;font-family: Montserrat;" type="radio" name="formType" value="vendor" wire:click="$set('registrationType', 'vendor')"  >
                                <label class="form-check-label" for="vendorRadio">Vendor</label>
                            </div>
                        </div>
                        @if ($registrationType === 'user')
                            @livewire('user-register')
                        @elseif ($registrationType === 'vendor')
                            @livewire('vendor-register')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
