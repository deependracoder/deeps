@extends('layouts.user')

@section('content')
<div class="welcome">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <h2>Purchase Mininng Plan</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="welcome">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="content">
          <form id="Purchase" class="form bg-dark" action="{{route('user.plan.store',$plan->id)}}" method="post">
                            <h3 class="text-center text-white">Buy Plan</h3>
                            @csrf
                            <h4  class="form-group">
                              plan name: {{$plan->name}} 
                            </h5>
                            <div class="form-group">
                                <label for="amount" class="text-white">Amount:</label><br>
                                <input type="text" name="amount" id="amount" value="{{$plan->amount}}" class="form-control" readonly>
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" name="submit" class="btn btn-success btn-md" value="submit">
                            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 
@endsection
