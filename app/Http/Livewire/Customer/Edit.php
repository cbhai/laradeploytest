<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;

class Edit extends Component
{
    public Customer $customer;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function render()
    {
        return view('livewire.customer.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->customer->save();

        return redirect()->route('admin.customers.index');
    }

    protected function rules(): array
    {
        return [
            'customer.name' => [
                'string',
                'required',
            ],
            'customer.email' => [
                'string',
                'nullable',
            ],
        ];
    }
}
