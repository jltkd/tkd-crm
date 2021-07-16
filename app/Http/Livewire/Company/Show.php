<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;

class Show extends Component
{
    public $company;

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.company.show');
    }
}
