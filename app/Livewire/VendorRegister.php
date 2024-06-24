<?php

namespace App\Livewire;

use App\Models\Vendor;
use App\Models\VendorType;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
class VendorRegister extends Component
{


    use WithFileUploads;

    public $vendor_id;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $addresses = [];
    public $address;
    public $image;
    public $password;
    public $confirmPassword;
    public $vendor_type = '';
    public $errorMessage;
    public $vendorType;
    public $name = [];
    public $showAddVendorTypeModal = false;
    public $gender;
    public $registrationType = '';
    public $postalCode;
    public $locationData;
    public $passwordConfirmation;
    public $pincode;
    public $consent = false;
    public $status;
    public $country;
    public $state;
    public $district;
    public $cities = [];
    public $city;
    public $selectedCountry = null;
    public $selectedState = null;
    public $selectedCity = null;
    public $selectedDistrict = null;


    public function registerVendor()
    {
        $validatedData = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:vendors',
            'phone' => ['required', 'regex:/^(?:\+91|91|0)?[6-9]\d{9}$/', 'unique:vendors,phone'],
            'address' => 'required', // Ensure address is an array
            'postalCode' => 'required|digits:6',
            'gender' => 'required',
            'city' => 'required_without:selectedCity',
            'state' => 'required_without:selectedState',
            'country' => 'required_without:selectedCountry',
            'district' => 'required_without:selectedDistrict',
            'selectedDistrict' => 'required_without:district',
            'selectedCity' => 'required_without:city',
            'selectedState' => 'required_without:state',
            'selectedCountry' => 'required_without:country',
            // 'image' => 'image|max:2048', // Limit image to 2MB
            'password' => 'required|min:8',
            'confirmPassword' => 'required|same:password', // Confirm password should match password
            'consent' => 'accepted',
        ], [
            // 'first_name.required' => 'Please enter your first name.',
            // 'last_name.required' => 'Please enter your last name.',
            // 'email.required' => 'Please enter your email address.',
            // 'email.email' => 'Please enter a valid email address.',
            // 'email.unique' => 'This email address is already registered.',
            // 'phone.required' => 'Please enter your phone number.',
            'phone.regex' => 'Please enter a valid Indian phone number.',
            // 'address.required' => 'Please enter your address.',
            // 'postalCode.required' => 'Please enter your postal code.',
            // 'postalCode.digits' => 'Postal code must be exactly 6 digits.',
            // 'gender.required' => 'Please select your gender.',
            // 'city.required_without' => 'Please enter your city or select from the list.',
            // 'state.required_without' => 'Please enter your state or select from the list.',
            // 'country.required_without' => 'Please enter your country or select from the list.',
            // 'district.required_without' => 'Please enter your district or select from the list.',
            // 'selectedDistrict.required_without' => 'Please enter your district or select from the list.',
            // 'selectedCity.required_without' => 'Please enter your city or select from the list.',
            // 'selectedState.required_without' => 'Please enter your state or select from the list.',
            // 'selectedCountry.required_without' => 'Please enter your country or select from the list.',
            // 'password.required' => 'Please enter a password.',
            // 'password.min' => 'Password must be at least :min characters.',
            // 'confirmPassword.required' => 'Please confirm your password.',
            'confirmPassword.same' => 'Password and confirm password must match.',
            // 'consent.accepted' => 'You must accept the terms and conditions to proceed.',
        ]);

        // Process validated data
        $validatedData['first_name'] = ucwords($validatedData['first_name']);
        $validatedData['last_name'] = ucwords($validatedData['last_name']);
        $validatedData['password'] = bcrypt($validatedData['password']);
        //  $validatedData['status'] = (int) $this->status;
        $validatedData['vendor_type'] = $this->vendorType;

        // If address is not dynamically fetched, use manually entered data
        if (!empty($validatedData['address'])) {
            $validatedData['address'] = [
                'address' => $validatedData['address'],
                'postalCode' => $validatedData['postalCode'],
                'city' => $validatedData['city'],
                'state' => $validatedData['state'],
                'country' => $validatedData['country'],
                'selectedCountry' => $validatedData['selectedCountry'],
                'selectedCity' => $validatedData['selectedCity'],
                'selectedDistrict' => $validatedData['selectedDistrict'],
            ];
            // dd( $validatedData['address']);
        }
        // Store the uploaded image if provided
        //dd($validatedData);
        if ($this->image) {
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('vendor_images', $imageName);
            $validatedData['image'] = $imageName;
        }

dd($validatedData);

        // Uncomment the following line to actually create the vendor record
        Vendor::create($validatedData);

        // Flash a success message and reset the form
        session()->flash('message', 'Vendor registered successfully!');
        return redirect()->route('vendor-register');
    }


    public function fetchLocationData()
    {
        // Make sure postalCode is not empty
        if (!empty($this->postalCode)) {
            // Make HTTP request to fetch location data
            $response = Http::get('https://api.postalpincode.in/pincode/' . $this->postalCode);

            // Check if request was successful
            if ($response->successful()) {
                $data = $response->json();

                // Assuming the API returns data in a specific format
                if (!empty($data) && isset($data[0]['PostOffice'][0])) {
                    $postOffice = $data[0]['PostOffice'][0];

                    // Set state, country, and cities
                    $this->selectedState = $postOffice['State'];
                    $this->selectedCountry = $postOffice['Country'];
                    $this->selectedDistrict = $postOffice['District'];
                    $this->cities = array_column($data[0]['PostOffice'], 'Name');
                } else {
                    $this->resetLocationData(); // Reset locationData if no data found
                }
            } else {
                $this->resetLocationData(); // Handle error response
            }
        } else {
            $this->resetLocationData(); // Reset locationData if postalCode is empty
        }
    }

    private function resetLocationData()
    {
        $this->state = null;
        $this->country = null;
        $this->selectedState = null;
        $this->selectedCountry = null;
        $this->cities = [];
        $this->city = null;
        $this->selectedCity = null;
        $this->selectedDistrict = null;
        $this->district = null;
    }

    public function resetAll()
    {
        // Reset the form fields
        $this->reset([
            'first_name',
            'last_name',
            'email',
            'phone',
            'address',
            'postalCode',
            'gender',
            'city',
            'state',
            'country',
            'district',
            'selectedDistrict',
            'selectedCity',
            'selectedState',
            'selectedCountry',
            'password',
            'confirmPassword',
            'consent',
            'image',
        ]);
    }

    public function mount(Request $request)
    {
        $this->vendorType = $request->query('vendor_type', 'default');
        // dd( $this->vendorType);
        if ($this->vendorType == 'default') {
            session()->flash('message', 'Please choose a vendor type.');
            return redirect()->route('vendors'); // Change 'vendor-list' to your actual route name
        }
    }




    public function showAddVendorType()
    {


        if ($this->vendor_type === 'addVendorType') {

            $this->showAddVendorTypeModal = !$this->showAddVendorTypeModal;
            $this->vendor_type = '';
        } else {

            $this->showAddVendorTypeModal == $this->showAddVendorTypeModal;
        }
    }
    public function closeAddVendorType()
    {


        $this->showAddVendorTypeModal = false;
        $this->newVendorType = '';
        $this->vendor_type = '';
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
