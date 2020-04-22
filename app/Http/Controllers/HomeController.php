<?php

namespace App\Http\Controllers;

use App\Admin\Mining;
use App\Admin\Package;
use App\User\Transaction;
use App\User\Wallet;
use App\User\Withdraw;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $balance = Wallet::where('user_id',Auth::id())->first();
        $mine = Mining::where('user_id', Auth::id())->where('status',1)->get();

        $bal =$balance->balance;
        //dd($mine);
        return view('user.dash', compact('bal'));
    }
    public function buy_plan($id,$amount){

        return view('user.buy',compact('id'));
    }
    public function store_plan(Package $id, Request $request){
        $status = $id->status;
        if($status==1){
            $this->validate($request,[
                'amount' => 'required'
            ]);
            $plan = new Mining;
            $plan->user_id = Auth::id();
            $plan->package_id = $id->id;
            $plan->amount = $request->amount;
            $plan->rtn_time = $id->times;
            $plan->total_rtnd = 0;
            $plan->next = Carbon::parse()->addHours($id->hours);
            $plan->status = 1;
            $plan->save();
            return redirect()->route('user.dashboard');
        }
        
    }

    public function all_plans(){
        $plans = Package::all();
        return view('user.all_plans',compact('plans'));

    }
    public function plan_detail(Request $request){
        $this->validate($request,[
            'planid' => 'required|numeric',
            'amount' => 'required'
        ]);  
        $plan = Package::findOrFail($request->planid);
        if(empty($plan)){
            return redirect()->route('user.dashboard');
        }else{
            if($plan->status==1){
                $plan['amount']= $request->amount;
                return view('user.buy',compact('plan'));
            }else{
                return redirect()->route('user.dashboard');
            }
        }
    }

    public function my_plans(){
        $plans = Mining::where('user_id',3)->latest()->get();
        return view('user.my_plans',compact('plans'));
    }

    public function transactions(){
        $trans = Transaction::where('user_id', Auth::id())->latest('id')->get();
        return view('user.transactions', compact('trans'));
    }
    public function withdraw(){
        $balance = Wallet::where('user_id', Auth::id())->first();
        $trans = Withdraw::where('user_id',Auth::id())->latest('id')->get();
        $bal = $balance->balance;
        return view('user.withdraw', compact('bal','trans'));
    }

    public function withdraw_store(Request $request){
        $this->validate($request,[
            'amount' => 'required|numeric',
            'wallet' => 'required'
        ]);
        $balance = Wallet::where('user_id', Auth::id())->first();
        if($request->amount <= $balance->balance){
            $balance->balance = $balance->balance - $request->amount;
            $balance->save();
            $withdraw = new Withdraw;
            $withdraw->user_id = Auth::id();
            $withdraw->amount = $request->amount;
            $withdraw->fee = 0;
            $withdraw->wallet = $request->wallet;
            $withdraw->status = 3;
            $withdraw->note = "#";
            $withdraw->save();
            return redirect()->back()->withSuccess('Withdraw success');

        }
        return redirect()->back()->withSuccess('Not Enough Balance');
    }
}
