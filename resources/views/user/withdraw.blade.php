@extends('layouts.user')
<style>
  #amount, #wallet {
    color: #fff;
    border: 2px solid #e4d7d7f0;
    background: transparent;
    outline: none;
    border-bottom: 0.5px solid #e4d7d7f0;
    padding-bottom: 8px;
}
.table{
  color: #fff;
}
#royi{
  background-color: #421111;
}
#royii{
  background-color: #210101;
}
</style>
@section('content')
<div class="welcome">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <h2>Withdraw</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
          </div>
          @if(Session::has('success'))
          <div class="alert alert-info alert-block col-md-6">
          <button type="button" class="close" data-dismiss="alert">×</button>    
          <strong>{{Session::get('success')}}</strong>
         </div>
         @endif
        </div>
      </div>
    </div>
  </div>
  
  <div class="welcome">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="content">
          <form id="withdraw" class="form bg-dark" action="{{route('user.store.withdraw')}}" method="post">
                            <div class="bg-primary">
                              <h3 class="text-center text-white">Cashout Now</h3>
                            </div>
                            
                            @csrf
                            <div class="form-group">
                                <label for="amount" class="text-white">Available Balance</label><br>
                                <h4 class="text-primary"> {{$bal}} </h4>
                            </div>
                            <div class="form-group">
                                <label for="amount" class="text-white">Amount:</label><br>
                                <input type="text" name="amount" id="amount" placeholder="0.001" class="form-control" autocomplete="off">
                                @error('amount')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="wallet" class="text-white">Wallet Address:</label><br>
                                <input type="text" name="wallet" id="wallet" class="form-control" autocomplete="off">
                                @error('wallet')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
  

  <div class="welcome">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
          <div class="bg-primary">
             <h3 class="text-center text-white">Cashout History</h3>
           </div>
          <table class="table table-borderless table-dark">
  <thead>
    <tr id="royii">
      
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
      <th scope="col">Fee</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($trans as $tran)
    <tr id="royi">
      <td>{{$tran->amount}}</td>
      <td>{{$tran->created_at->format('d-m-Y')}}</td>
      <td>{{$tran->fee}}</td>
      <td>{{$tran->status}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection
