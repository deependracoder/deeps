@extends('layouts.user')

@section('content')
<div class="welcome">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <h2>Your Wallet</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="statistics">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <i class="fa fa-money fa-fw bg-primary"></i>
            <div class="info">
              <h3>0.01</h3> <span>Balance</span>
              <p>Wallet balace in BTC</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <i class="fa fa-file fa-fw danger"></i>
            <div class="info">
              <h3>0.27</h3> <span>Active Investment</span>
              <p>Your active packages</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <i class="fa fa-users fa-fw success"></i>
            <div class="info">
              <h3>0.35</h3> <span>earning</span>
              <p>Your Total earning</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
