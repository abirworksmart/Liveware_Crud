<?php

namespace App\Livewire;
use App\Models\Customer;

use Livewire\Component;

class Customerss extends Component
{
    public $customers = [];

    public function mount()
{
    $this->customers = Customer::all();
}

    public function render()
    {
        return view('livewire.customerss');
    }

    public function deleteCustomer(Customer $id)
    {
        $id->delete();
        session()->flash('delete', 'Customer delete Successfully');
        return $this->redirect('/customer', navigate:true);
    }

}
