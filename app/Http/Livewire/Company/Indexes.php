<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;

class Indexes extends Component
{

    public $showModal = false;
    public $name;
    public $status = 'Active';
    public $address;
    public $city;
    public $state;
    public $postal_code;
    public $phone_number;

    protected $rules = [
        'name'         => 'required',
        'status'       => 'required',
        'address'      => 'nullable',
        'city'         => 'nullable',
        'state'        => 'nullable',
        'postal_code'  => 'nullable',
        'phone_number' => 'nullable'
    ];

    public function addCompany()
    {
        $this->validate();

        $company = Company::create([
            'name'         => $this->name,
            'status'       => $this->status,
            'address'      => $this->address,
            'city'         => $this->city,
            'state'        => $this->state,
            'postal_code'  => $this->postal_code,
            'phone_number' => $this->phone_number,
        ]);

        $this->reset();

        session()->flash('success_message', 'Company was added successfully!');

        return redirect()->route('company.index');
    }

    public function render()
    {
        return view('livewire.company.indexes', [
            'companies' => Company::all()
        ]);
    }
}
