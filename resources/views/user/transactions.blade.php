@extends('layouts.user')

@section('content')
<div class="welcome">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <h2>Transactions</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <div class="welcome container-fluid">
  <h2 class="text-white text-center mt-5"> Transactions history</h2>
  <table class="table table-dark  table-striped">
        <thead>
          <tr>
          <th scope="col">Amount</th>
          <th scope="col">Date</th>
          <th scope="col">Fee</th>
          <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody style="background-color: #0B6D4D;">
        @foreach($trans as $tran)
        <tr style="background-color: #0B6D4D;">
        <td>{{$tran->amount}}</td>
          <td>{{$tran->created_at->format('d-m-Y')}}</td>
          <td>{{$tran->fee}}</td>
          <td><button class="btn btn-success btn-sm">success</button></td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    
@endsection
