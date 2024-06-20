<div>
    <form wire:submit.prevent="registerUser">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name:</label>
                    <input type="text" wire:model="first_name" id="first_name"
                        class="form-control">
                    @error('first_name')
                        <span class="text-danger"
                            style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name:</label>
                    <input type="text" wire:model="last_name" id="last_name"
                        class="form-control">
                    @error('last_name')
                        <span class="text-danger"
                            style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="inpu-group">
                <label>Gender :</label><br>
                <div class="form-check form-check-inline" style="margin-top:10px;">
                    <input class="form-check-input" type="radio" wire:model="gender" value="Male" id="maleRadio" name="gender">
                    <label class="form-check-label" for="maleRadio">Male</label>
                </div>
                <div class="form-check form-check-inline" style="margin-top:10px;">
                    <input class="form-check-input" type="radio" wire:model="gender" value="Female" id="femaleRadio" name="gender">
                    <label class="form-check-label" for="femaleRadio">Female</label>
                </div>
            </div>
        </div>
        <div>
            @error('gender')
                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" wire:model="email" id="email" class="form-control">
            @error('email')
                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" wire:model="phone" id="phone" class="form-control">
            @error('phone')
                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <textarea wire:model="address" id="address" class="form-control"></textarea>
            @error('address')
                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>

            <input type="file" class="form-control" wire:model="image"
                style="padding: 3px 5px;" />



            @error('image')
                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
            @enderror


            <div wire:loading wire:target="image" wire:key="image"><i
                    class="fa fa-spinner fa-spin mt-2 ml-2"></i> Uploading</div>


            {{-- ImagePreview --}}


            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" width="50"  height="50"   alt=""
                    class="mt-2">
            @endif
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" wire:model="password" id="password"
                class="form-control">
            @error('password')
                <span class="text-danger"
                    style="font-size: 11.5px;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirm Password:</label>
            <input type="password" wire:model="confirmPassword" id="confirm_password" class="form-control">
            @error('confirmPassword')
                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
            @enderror
        </div>
        {{-- <div class="mb-3">

            <select wire:change="showAddVendorType" style="font-size: 12px;"
                class="form-control" wire:model="vendor_type">
                <option style="font-size: 12px;" value="">Select Type</option>
                <option style="font-size: 12px;" value="addVendorType">Add Vendor Type
                </option>
                @foreach ($vendorTypes as $type)
                <option style="font-size: 12px;text-transform: capitalize" value="{{ ucwords($type) }}">{{ ucwords($type) }}</option>
                @endforeach
            </select>




            @error('vendor_type')
                <span class="text-danger"
                    style="font-size: 11.5px;">{{ $message }}</span>
            @enderror
        </div> --}}

        <div class="d-grid gap-2 mb-3">
            <button id="submitButton" type="submit" class="btn btn-primary" style="background-color: #EDC99E; border-color: #EDC99E;">
                <div wire:loading wire:target="register" wire:key="register"><i class="fa fa-spinner fa-spin"></i></div>
                Submit
            </button>


        </div>
    </form>

</div>
