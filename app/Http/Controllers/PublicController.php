<?php

namespace App\Http\Controllers;

use App\Admin\Mining;
use App\User;
use App\User\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function cron()
{
  $repeats = Mining::where('status', 1)->get();
  foreach ($repeats as $rep){
     if ($rep->next < Carbon::now() &&  $rep->status !=0)
      {
         $addbal = ($rep->amount * $rep->package->percent) / 100;
         $rep['total_rtnd'] = $rep->total_rtnd + 1;
         $rep['next'] = Carbon::parse()->addHours($rep->package->hours);
         if ($rep->rtn_time == $rep['total_rtnd'])
         {
             $inv = Mining::findOrFail($rep->id);
             $inv->status = 0;
             $inv->save();
         }
         $rep->save();
         $wallet = Wallet::where('user_id',$rep->user_id)->first();
         $wallet->balance = $wallet->balance +  $addbal;
         $wallet->save();


     }
 }
}
}
