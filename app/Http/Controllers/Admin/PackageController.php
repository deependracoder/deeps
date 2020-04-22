<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Package;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function pak_create(){
        return view('admin.create_plan');
    }
    public function pak_store(Request $request){
        $this->validate($request,[
        'name' => 'required',
        'min' => 'required',
        'max' => 'required',
        'times' => 'required',
        'percent' => 'required',
        'hours' => 'required',
        'refer' => 'required'
        ]);
        Package::create($request->all());
        return redirect()->route('admin.home');
    }
}
