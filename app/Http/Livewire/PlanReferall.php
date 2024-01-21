<?php

namespace App\Http\Livewire;

use App\Models\MyWallet;
use App\Models\User;
use App\Models\ReveralsUser;
use App\Models\ReverealsCoint;
use App\Models\UseReverallCode;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
class PlanReferall extends Component
{
    public $reveral,$referealCode=[];
    protected $listeners = [
        'loginNow','addReferal'
    ];
    public function render()
    {
        return view('livewire.plan-referall');
    }

    // public function mount(ReverealsCoint $reverealsCoint) {
    //     $this->reveral = $reverealsCoint->all();
    // }

    public function getStarted($id){
        $refereal = ReverealsCoint::find($id);
        if(Auth::check()){
            return $this->emit('addReferal',$refereal->id);
        }else{
            return $this->emit('Notlogin');
        }
    }

    public function loginNow(){
        return to_route('login');
    }

    public function addReferal($refereal){
        if($refereal){

            $data = ReverealsCoint::find($refereal);

            $regereralId = $data->id;
            $price = $data->price;
        }
        $getUser = Auth::user()->id;
        $wallet = MyWallet::where('user',$getUser)->first();

        $countWallet = $wallet->wallet - $price;

        if($countWallet < 0 ){
            return $this->emit('yourMoney');
        }

        $wallet->update([
            'wallet'=>$countWallet
        ]);
        $reveralData = [
            'user' => $getUser,
            'reveral_id'=> $data->id,
            'date'=>now(),
            'transacted'=> $price,
            'token'=> Str::random(6) . '_' . now()->timestamp
        ];


        ReveralsUser::create($reveralData);

        $users = User::find(Auth::user()->id);

        if ($users->token_reveral) {
            $bonusReverall = User::where('self_reveral', $users->token_reveral)->first();

            if ($bonusReverall) {
                if ($bonusReverall->level == 'A') {
                    $presenta = 15;
                } elseif ($bonusReverall->level == 'B') {
                    $presenta = 10;
                } elseif ($bonusReverall->level == 'C') {
                    $presenta = 5;
                } else {
                    $presenta = 0;
                }

                $bonus = $data->price * ($presenta / 100);
                $bonusWallet = $wallet->wallet + $bonus;

                // Assuming you have a 'wallet' relationship defined in the User model
                $bonusReverall->wallet()->update([
                    'wallet' => $bonusWallet
                ]);
                $bonusForYou = $countWallet + $bonusWallet;
                $wallet->update([
                    'wallet'=>$bonusForYou
                ]);


            }
        }

        $users->update([
            'date'=>now(),
            'self_reveral'=>Str::random(6) . '_' . now()->timestamp
        ]);

        $this->emit('dataDone');
    }
}
