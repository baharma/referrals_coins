<?php

namespace App\Http\Livewire;

use App\Models\MyWallet;
use App\Models\ReveralsUser;
use App\Models\ReverealsCoint;
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

        $reveralDataModel = $this->referealCode;
        if(isset($reveralDataModel[$regereralId])){
            $reveralUserCode = ReveralsUser::where('token', $reveralDataModel[$regereralId])->first();
            $getLevels = ReverealsCoint::find($reveralUserCode->reveral_id);
            if($getLevels->level == 'A'){
                $presenta = 15;
            }elseif($getLevels->level == 'B'){
                $presenta = 10;
            }elseif($getLevels->level == 'C'){
                $presenta = 5;
            }else{
                $presenta = 0;
            }
            $bonus = $data->price * ($presenta / 100);
            $bonusWallet = $wallet->wallet + $bonus;
            $wallet->update([
                'wallet'=>$bonusWallet
            ]);
        }

        $countWallet = $wallet->wallet - $price;

        $wallet->update([
            'wallet'=>$countWallet
        ]);
        $reveralData = [
            'user' => $getUser,
            'reveral_id'=> $data->id,
            'token'=> Str::random(6) . '_' . now()->timestamp
        ];
        // dd($reveralData);
        ReveralsUser::create($reveralData);

        $this->emit('dataDone');
    }
}
