<?php

namespace App\Http\Livewire;

use App\Models\MyWallet;
use App\Models\ReveralsUser;
use App\Models\LevelReverals;
use App\Models\ReverealsCoint;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowMyReferall extends Component
{
    public $reverall,$myWallet,$levelReferalls;

    public function render()
    {
        return view('livewire.show-my-referall');
    }

    public function mount()
    {
        $this->reverall = ReveralsUser::where('user', Auth::user()->id)->get();
        $this->myWallet = MyWallet::where('user', Auth::user()->id)->first();
        $this->levelReferalls = LevelReverals::where('user', Auth::user()->id)->get();
    }
}
