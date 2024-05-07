<?php

namespace App\Livewire;
use App\Models\Customer;

use Livewire\Component;

class EditCustomer extends Component
{

    public $name ;
    public $email;
    public $phone;
    public $customer;


    public function mount(Customer $id)
    {
        $this->customer= $id;
        $this->name = $id->name;
        $this->email = $id->email;
        $this->phone = $id->phone;

    }

    public function render()
    {
        return view('livewire.edit-customer');
    }

    public function updateCustomer()
    {
         $validated = $this->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|max:255'
    ]);

    $this->customer->update($validated);
    session()->flash('success', 'Customer Updated Successfully');
    return $this->redirect('/customer',navigate:true);
    }


}
