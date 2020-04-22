@extends('layouts.user')

@section('content')
<div class="welcome">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <h2>My active Mining Plans</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="statistics">
    <div class="container-fluid">
      <div class="row">
      <table class="table table-borderless text-white">
          <thead>
            <tr class="bg-primary">
              
              <th>Plan Name</th>
              <th>Date</th>
              <th>Amount</th>
              <th>Returned</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($plans as $plan)
            <tr class="bg-dark">
              <td>{{$plan->package->name}}</td>
              <td>{{$plan->created_at->format('d-m-Y')}}</td>
              <td>{{$plan->amount}}</td>
              <td>{{($plan->total_rtnd*$plan->package->percent)/100}}</td>
              <td>@if($plan->status==1) Active @else EXpired @endif</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection
