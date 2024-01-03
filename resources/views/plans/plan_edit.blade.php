@extends('admin_master')
@section('content')
    
<div class="row">
    <h1>Plans Creation Info</h1>
 
<div class="row container">
   <form method="POST" class="w-100" action={{ route('plans.update') }}>
       @csrf
       <input type="hidden" value="{{ $plan->id }}" name="id" />
        <div class="form-group row">
          <label for="plan_name" class="col-sm-3 col-form-label">Plan Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="plan_name" placeholder="Plan Name" value="{{ $plan->plan_name }}" name="plan_name">
          </div>
        </div>

        <div class="form-group row">
            <label for="plan_price" class="col-sm-3 col-form-label">Plan Price</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="plan_price" placeholder="Plan Price" value="{{ $plan->plan_price }}" name="plan_price">
            </div>
          </div>

          <div class="form-group row">
            <label for="plan_bandwidth" class="col-sm-3 col-form-label">Plan Bandwidth</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="plan_bandwidth" placeholder="Plan Bandwidth" value="{{ $plan->plan_bandwidth }}" name="plan_bandwidth">
            </div>
          </div>

          <div class="form-group row">
            <label for="plan_ftp_number" class="col-sm-3 col-form-label">Plan FTP Number</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="plan_ftp_number" placeholder="Plan FTP Number" value="{{ $plan->plan_ftp_number }}" name="plan_ftp_number">
            </div>
          </div>

          <div class="form-group row">
            <label for="plan_disk_space" class="col-sm-3 col-form-label">Plan Disk Space</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="plan_disk_space" placeholder="Plan Disk Space" value="{{ $plan->plan_disk_space }}" name="plan_disk_space">
            </div>
          </div>

          <div class="form-group row">
            <label for="plan_databases" class="col-sm-3 col-form-label">Plan Databases</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="plan_databases" placeholder="Plan Databases" value="{{ $plan->plan_databases }}" name="plan_databases">
            </div>
          </div>

          <div class="form-group row">
            <label for="plan_domain_type" class="col-sm-3 col-form-label">Plan Domain Type</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="plan_domain_type" placeholder="Plan Domain Type" value="{{ $plan->plan_domain_type }}" name="plan_domain_type">
            </div>
          </div>
<center> <button type="submit" class="btn btn-success text-white mb-4 btn-lg"> Submit The Plan Changes</button> </center>
   </form>
</div>
    </div>


@endsection