@extends('layouts.app')
<style>
.mt-60{
    margin-top:60px;
}

.section-block-grey {
    padding: 90px 0px 90px 0px;
    background-color: #f9f9f9;
}

.serv-section-2 {
    position: relative;
    border: 1px solid #eee;
    background: #2B1B17;
    box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.16);
    border-radius: 5px;
    overflow: hidden;
    padding: 30px;
}

.serv-section-2:before {
    position: absolute;
    top: 0;
    right: 0px;
    z-index: 0;
    content: " ";
    width: 120px;
    height: 120px;
    background: #5f27cd;
    border-bottom-left-radius: 136px;
    transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;
}

.serv-section-2-icon {
    position: absolute;
    top: 18px;
    right: 22px;
    max-width: 100px;
    z-index: 1;
    text-align: center;
}

.serv-section-2-icon i {
    color: #fff;
    font-size: 48px;
    line-height: 65px;
    transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;
}

.serv-section-desc {
    position: relative;
}

.serv-section-2 h4 {
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.5;
}

.serv-section-2 h5 {
    color: #fff;
    font-size: 17px;
    font-weight: 400;
    line-height: 1;
    margin-top: 5px;
}

.section-heading-line-left {
    content: '';
    display: block;
    width: 100px;
    height: 3px;
    background: #5f27cd;
    border-radius: 25%;
    margin-top: 15px;
    margin-bottom: 5px;
}

.serv-section-2 p {
    margin-top: 25px;
    padding-right: 50px;
}

.serv-section-2:hover .serv-section-2-icon i {
    color: #fff;
}

.serv-section-2:hover:before {
    background: #5f27cd;
}
.card-pricing.popular {
    z-index: 1;
    border: 2px solid #fff;
}
.card-pricing .list-unstyled li {
    padding: .5rem 0;
    color: #fff;
    
}
.pricing .card-pricing{
    background-color: #000000;
}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
@section('content')
<div class="section-block-grey bg-dark">
    <div class="container bg-dark">
        <div class="section-heading center-holder text-center">
            <h3>Why to choose Cloud Mining</h3>
            <div class="section-heading-line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                <br>incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row mt-60">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-gem"></i> </div>
                    <div class="serv-section-desc">
                        <h4>INSTANT CONNECT</h4>
                        <h5>Business Planning</h5> </div>
                    <div class="section-heading-line-left"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2 serv-section-2-act">
                    <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="fas fa-cogs"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Bitcoin</h4>
                        <h5>We support BTC</h5> </div>
                    <div class="section-heading-line-left"></div>
                   
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-signature"></i> </div>
                    <div class="serv-section-desc">
                        <h4>WITHDRAWAL</h4>
                        <h5>Withdraw anytime</h5> </div>
                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
        </div>
		<div class="row mt-60">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-shield-alt"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Security </h4>
                        <h5>Secure Business</h5> </div>
                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2 serv-section-2-act">
                    <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="far fa-clock"></i> </div>
                    <div class="serv-section-desc">
                        <h4>24/7 Available </h4>
                        <h5>All time available </h5> </div>
                    <div class="section-heading-line-left"></div>
                   
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-signature"></i> </div>
                    <div class="serv-section-desc">
                        <h4> Customer Support </h4>
                        <h5>Support and Sell</h5> </div>
                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h2 class="text-center py-3">Mining Packages</h2>
    <div class="pricing card-deck flex-column flex-md-row mb-3">
        <div class="card card-pricing popular text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Starter</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">$<span class="price">3</span><span class="h6 text-muted ml-2">/ per month</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                <button type="button" class="btn btn-danger mb-3">Order now</button>
            </div>
        </div>
        <div class="card card-pricing popular shadow text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Professional</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">$<span class="price">6</span><span class="h6 text-muted ml-2">/ per month</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                <a href="#" target="_blank" class="btn btn-danger mb-3">Order Now</a>
            </div>
        </div>
        <div class="card card-pricing popular text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Business</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="45">$<span class="price">9</span><span class="h6 text-muted ml-2">/ per month</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                <button type="button" class="btn btn-danger mb-3">Order now</button>
            </div>
        </div>
        <div class="card card-pricing popular text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Enterprise</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="60">$<span class="price">12</span><span class="h6 text-muted ml-2">/ per month</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                <button type="button" class="btn btn-danger mb-3">Order now</button>
            </div>
        </div>
    </div>
</div>
@endsection