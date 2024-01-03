@extends('admin_master')
@section('content')
    
@if (session('message'))
<div class="alert alert-success" role="alert">
    {{ session('message') }}
</div>
@endif

<div class="row">
    <h1>Plans <a href={{ route('plans.create') }}><button class="btn btn-success text-white">Create New Plan</button></a></h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Plan Name</th>
            <th scope="col"> Price</th>
            <th scope="col"> Bandwidth </th>
            <th scope="col"> Ftp Number</th>
            <th scope="col"> Disk Space</th>
            <th scope="col"> Databases</th>
            <th scope="col"> Domain Type</th>
            <th scope="col"> Operation</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($plans as $key => $row )
          <tr>
            <td>{{ $key=$key+1 }}</td>
            <td>{{ $row->plan_name }}</td>
            <td>{{ $row->plan_price }} $</td>
            <td>{{ $row->plan_bandwidth }} GB</td>
            <td>{{ $row->plan_ftp_number }} Accounts</td>
            <td>{{ $row->plan_disk_space }} GB</td>
            <td>{{ $row->plan_databases }} DataBases</td>
            <td>{{ $row->plan_domain_type }} </td>  
            <td><a href={{ route('plans.edit',$row->id) }} class="btn btn-info">Edit </a>
                <a href={{ route('plans.delete',$row->id) }} class="btn btn-danger" id="delete">Delete </a></td>       
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


@endsection