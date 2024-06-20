<?php

namespace App\Livewire;

use App\Models\UsersRegister;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
class UserRegister extends Component
{


use WithFileUploads;

    public $user_id;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $address;
    public $image;
    public $password;
    public $confirmPassword;
    public $user_type = '';
    public $vendorTypes = [];
    public $name=[];
    public $newVendorType = ''; // Added property to store new vendor type
    public $showAddVendorTypeModal = false;
    public $gender;
    public $registrationType = '';





    public function registerUser()
    {
        // Validate the incoming data
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
            // You can add more custom error messages here if needed
        ]);

        // Assuming 'vendors' is your database table name
        // Create a new vendor instance
        $users = new UsersRegister();

        // Set the vendor attributes from the validated data
        $users->first_name = ucwords($validatedData['first_name']);
        $users->last_name = ucwords($validatedData['last_name']);
        $users->email = $validatedData['email'];
        $users->phone = $validatedData['phone'];
        $users->address = $validatedData['address'];
        $users->gender = $validatedData['gender'];
        // Assuming you're storing the image path in the database, upload the image and store the path
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $imagePath = $this->image->storeAs('user_images', $imageName); // Adjust the storage path as needed
        $users->image = $imagePath;
        $users->password = Hash::make($validatedData['password']); // Hash the password for security
        // Save the vendor instance

        $users->save();

        // Optionally, you can return a response or redirect to another page after saving the data
        // For example:
        return redirect()->route('register')->with('message', 'User registered successfully!');
        //session()->flash('message', 'Vendor Registered Successfully!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.user-register');
    }



}
