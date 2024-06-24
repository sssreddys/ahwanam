<?php

namespace App\Livewire;

use Livewire\Component;

class VendorList extends Component
{
    public function render()
    {
        return view('livewire.vendor-list');
    }

    public function redirectToVendorRegister($vendorType)
    {
        // Redirect to vendor-register route with query parameter
        return redirect()->route('vendor-register', ['vendor_type' => $vendorType]);
    }
}
