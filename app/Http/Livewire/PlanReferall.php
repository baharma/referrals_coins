<?php

namespace App\Http\Livewire;

use App\Models\ReverealsCoint;
use Livewire\Component;

class PlanReferall extends Component
{
    public $reveral;
    public function render()
    {
        return view('livewire.plan-referall');
    }

    // public function mount(ReverealsCoint $reverealsCoint) {
    //     $this->reveral = $reverealsCoint->all();
    // }
}
