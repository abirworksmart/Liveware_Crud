<?php

namespace App\Livewire;
use App\Models\Customer;

use Livewire\Component;

class ViewCustomer extends Component
{
    public $customer = [];

    public function mount(Customer $id)
    {
        $this->customer= $id;

    }

    public function render()
    {
        return view('livewire.view-customer');
    }
}
