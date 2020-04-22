@extends('layouts.admin')

@section('content')
<div class="welcome">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <h2>Mining Packages</h2>
            <p>Create Update Mining Plan</p>
          <button type="button" class="btn btn-primary justify-content-end" data-toggle="modal" data-target="#exampleModalCenter">
          Create New Plan
          </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="plan" action="{{ route('admin.plan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Plan Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="min" placeholder="Min amount">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="max" placeholder="Max Amount">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="times" placeholder="Return Times">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="percent" placeholder="Return percent">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="hours" placeholder="retun day">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="refer" placeholder="Referral comission">
            </div>
            <div class="modal-footer form-group">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
  <section class="statistics">
    <div class="container-fluid">
      <div class="row">
       
      </div>
    </div>
  </section>
@endsection
