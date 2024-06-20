<?php

namespace App\Livewire;

use App\Models\Vendor;
use App\Models\VendorType;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class VendorRegister extends Component
{


    use WithFileUploads;

    public $vendor_id;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $address;
    public $image;
    public $password;
    public $confirmPassword;
    public $vendor_type = '';
    public $vendorTypes = [];
    public $name=[];
    public $newVendorType = ''; // Added property to store new vendor type
    public $showAddVendorTypeModal = false;
    public $gender;
    public $registrationType = '';

    public $passwordConfirmation;
    public $pincode;
    public $consent = false;

    public $countries = [];
    public $states = [];
    public $cities = [];

    public $selectedCountry = null;
    public $selectedState = null;
    public $selectedCity = null;

public function registerVendor(){
        $validatedData = $this->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:vendors',
        'phone' => 'required|unique:vendors',
        'address' => 'required',
        'gender' => 'required',
        'image' => 'required|image|max:2048', // Limit image to 2MB
        'password' => 'required|min:8',
        'confirmPassword' => 'required|same:password', // Confirm password should match password
    ], [
        'confirmPassword.same' => 'The confirm password must match the password field.',
        // 'vendor_type' => 'required',
    ]);

    // Split the name into first and last names
   // Combine first_name and last_name into a single 'name' field with capitalized first letters
   $validatedData['first_name'] = ucwords($validatedData['first_name']);
   $validatedData['last_name'] = ucwords($validatedData['last_name']);

    // unset($validatedData['first_name']);
    // unset($validatedData['last_name']);
    $validatedData['password'] = bcrypt($validatedData['password']);

    // Store the uploaded image in the public/vendor_images directory
    $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
    $validatedData['image'] = $this->image->storeAs('vendor_images', $imageName);
    //dd($validatedData);
   Vendor::create($validatedData);

    // session()->flash('message', 'Vendor Registered Successfully!');
    // $this->emit('vendorRegistered');
    return redirect()->route('register')->with('message', 'Vendor registered successfully!');
    $this->reset();


}

public function fetchPincodeDetails()
{
    $response = Http::get('https://api.postalpincode.in/pincode/' . $this->pincode);
    $data = json_decode($response->body());

    if (isset($data->PostOffice[0])) {
        $this->city = $data->PostOffice[0]->Block;
        $this->state = $data->PostOffice[0]->State;
        $this->district = $data->PostOffice[0]->District;
        $this->region = $data->PostOffice[0]->Region;
        $this->circle = $data->PostOffice[0]->Circle;
        $this->block = $data->PostOffice[0]->Block;
        $this->deliveryStatus = $data->PostOffice[0]->DeliveryStatus;
    } else {
        $this->resetFields();
        session()->flash('error', 'No details found for the given pincode.');
    }
}

private function resetFields()
{
    $this->city = null;
    $this->state = null;
    $this->district = null;
    $this->region = null;
    $this->circle = null;
    $this->block = null;
    $this->deliveryStatus = null;
}


    public function mount()
    {
        // try {
        //     // Fetch vendor types from the database
        //     $vendorTypes = VendorType::pluck('name')->toArray();

        //     // Check if vendor types were successfully fetched
        //     if (!empty($vendorTypes)) {
        //         // Set the list of vendor types
        //         $this->vendorTypes = $vendorTypes;
        //     } else {
        //         // If vendor types were not fetched, throw an error
        //         throw new \Exception('Failed to retrieve vendor types.');
        //     }
        // } catch (\Exception $e) {
        //     // Handle the exception by setting the list of vendor types to an empty array
        //     $this->vendorTypes = [];

        //     // You can add an error message here if you want to notify the user
        //     // Example: $this->addError('vendorTypes', 'Error: ' . $e->getMessage());
        // }
    }


    public function showAddVendorType()
    {


        if ($this->vendor_type === 'addVendorType') {

            $this->showAddVendorTypeModal = !$this->showAddVendorTypeModal;
            $this->vendor_type='';
        } else {

            $this->showAddVendorTypeModal==$this->showAddVendorTypeModal;

        }
    }
    public function closeAddVendorType()
    {


        $this->showAddVendorTypeModal = false;
        $this->newVendorType = '';
        $this->vendor_type='';
    }
    public function addVendorType()
    {
        try {
            // Append new validation rules to the existing ones
            $this->validate([
                'newVendorType' => 'required|unique:vendor_types,name',
            ]);
            // Save the new vendor type to the database
            VendorType::create(['name' => $this->newVendorType]);

            // Attempt to fetch vendor types from the database
            $vendorTypes = VendorType::pluck('name')->toArray();

            // Check if vendor types were successfully fetched
            if (!empty($vendorTypes)) {
                // Update the list of vendor types
                $this->vendorTypes = $vendorTypes;
            } else {
                // If vendor types were not fetched, throw an error
                throw new \Exception('Failed to retrieve vendor types.');
            }

            // Reset the input field
            $this->newVendorType = '';
            $this->closeAddVendorType();
        } catch (\Exception $e) {
            // Handle the exception by displaying a user-definable error message
            $this->addError('newVendorType', 'Error: ' . $e->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.vendor-register');
    }
}
