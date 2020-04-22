@extends('layouts.user')
<style>
    @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);
@import url(https://fonts.googleapis.com/css?family=Montserrat:800);
.snip1265 {
  font-family: 'Raleway', Arial, sans-serif;
  color: #ffffff;
  text-align: left;
  font-size: 16px;
  width: 100%;
  max-width: 1000px;
  margin: 50px 10px 10px;
}
.snip1265 .plan {
  margin: 0;
  width: 25%;
  position: relative;
  float: left;
  background-color: #262626;
  border: 1px solid #1e1e1e;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.25);
}
.snip1265 .plan:hover,
.snip1265 .plan.hover {
  background-color: #1c1c1c;
}
.snip1265 .plan:hover i,
.snip1265 .plan.hover i {
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}
.snip1265 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.25s ease-out;
  transition: all 0.25s ease-out;
}
.snip1265 header {
  position: relative;
  padding: 20px 10px;
}
.snip1265 header i {
  font-size: 56px;
  margin: 0 15px;
  color: #f39c12;
  display: inline-block;
  float: left;
}
.snip1265 .plan-title {
  top: 0;
  font-weight: 800;
  margin: 10px 0 0;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.snip1265 .plan-cost {
  margin: 0;
  opacity: 0.2;
  color: #C3CCD2
}
.snip1265 .plan-price {
  font-family: 'Montserrat', Arial, sans-serif;
  font-weight: 800;
  font-size: 1.3em;
}
.snip1265 .plan-type {
  opacity: 0.8;
  font-size: 0.7em;
  text-transform: uppercase;
}
.snip1265 .plan-features {
  padding: 0;
  margin: 0 0 40px;
  text-align: center;
  list-style: outside none none;
  font-size: 0.8em;
  text-align: left;
}
.snip1265 .plan-features li {
  padding: 5px 5%;
  font-weight: 500;
  opacity: 0.5;
  border-left: 5px solid #f39c12;
  margin: 2px 20px;
}
.snip1265 .plan-select {
  background-color: rgba(0, 0, 0, 0.2);
  text-align: center;
}
.snip1265 .plan-select a {
  color: #ffffff;
  text-decoration: none;
  padding: 15px 20px;
  margin: 20px;
  border-radius: 40px;
  font-size: 0.75em;
  font-weight: 800;
  text-transform: uppercase;
  display: inline-block;
  background-color: #f39c12;
}
.snip1265 .plan-select a:hover {
  background-color: #262626;
}
.snip1265 .featured {
  margin-top: -10px;
  background-color: #262626;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
  z-index: 1;
}
.snip1265 .featured .plan-select a {
  margin: 30px 20px;
}
@media only screen and (max-width: 767px) {
  .snip1265 .plan {
    width: 50%;
  }
  .snip1265 .plan-title,
  .snip1265 .plan-select a {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
  .snip1265 .plan-select a,
  .snip1265 .featured .plan-select a {
    margin: 20px;
  }
  .snip1265 .featured {
    margin-top: 0;
  }
}
@media only screen and (max-width: 440px) {
  .snip1265 .plan {
    width: 100%;
  }
}
#exampleModalCenter .modal-dialog {
    -webkit-transform: translate(0,-50%);
    -o-transform: translate(0,-50%);
    transform: translate(0,-50%);
    top: 50%;
    margin: 0 auto;
}
.modal-content{
    color: white;
    background-color: #172442 !important;
}
#amount {
    color: black;
    border: none;
    background: #C3CCD2;
    outline: none;
    border-bottom: 0.5px solid #e4d7d7f0;
    padding-bottom: 8px;
}

</style>
@section('content')
<div class="welcome">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <h2>Mining Plans</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
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
            
<div class="snip1265">
    @foreach($plans as $plan)
  <div class="plan">
    <header><i class="ion-ios-navigate-outline"></i>
      <h4 class="plan-title">
        {{$plan->name}}
      </h4>
      <div class="plan-cost"><span class="plan-price ">{{$plan->percent}}</span><span class="plan-type">/day</span></div>
    </header>
    <ul class="plan-features">
      <li>Min- {{$plan->min}}
      </li>
      <li>Max- {{$plan->max}}
      </li>
      <li>Total- 
      </li>
      <li> Payment time
      </li>
      <li>Referral
      </li>
      <li>Daily Profit
      </li>
    </ul>
    <div class="plan-select">
    <button type="button" class="btn btn-primary mdlbtn" id="{{$plan->id}}" >
  Buy Now
</button>
    </div>
  </div>
  @endforeach
</div>
          </div>
        </div>
      </div>
    </div>
   


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Invest Amount</h5>
      </div>
      <div class="modal-body form-group d-flex justify-content-center">
        <form action="{{route('user.plan.detail')}}" method="POST">
            @csrf
                <input type="hidden" name="planid" id="planid" value="" />
                <input type="text" name="amount" class="form-control" placeholder="Enter Amount"  id="amount" required /> 
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
         </form>
    </div>
  </div>
</div>

<script>
    $('.mdlbtn').click(function(){
  var c_id = $(this).attr('id');
  $('#planid').val(c_id);
  $('#exampleModalCenter').modal('show');
});
    </script>
  </div>
 
@endsection
