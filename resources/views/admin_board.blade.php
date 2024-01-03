@extends('admin_master')

@section('content')
    <div>
        <div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
            <h2 class="font-w600 mb-2 mr-auto ">Dashboard</h2>
            <div class="weather-btn mb-2">
                <span class="mr-3 fs-22 font-w600 text-black"><i class="fa fa-cloud mr-2"></i>21</span>
                <select class="form-control style-1 default-select  mr-3 ">
                    <option>Medan, IDN</option>
                    <option>Jakarta, IDN</option>
                    <option>Surabaya, IDN</option>
                </select>
            </div>
            <a href="javascript:void(0);" class="btn btn-secondary text-white mb-2"><i
                    class="las la-calendar scale5 mr-3"></i>Filter Periode</a>
        </div>

        <div class="row">
            <h1>Plans Info</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col"> Avatar</th>
                        <th scope="col"> Is Admin</th>
                        <th scope="col"> email</th>
                        <th scope="col"> Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $row)
                        <tr>
                            <td>{{ $key = $key + 1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td><img alt="" src={{ asset('storage/' . $row->avatar) }} width="50px"
                                    height="50px" />
                            </td>
                            <td>
                                @if ($row->is_admin === 0)
                                    no
                                @else
                                    yes
                                @endif


                            </td>
                            <td>{{ $row->email }} </td>
                            <td>
                                @if ($row->is_admin === 1)
                                    <a href={{ route('plans.delete', $row->id) }} class="btn btn-info">Edit
                                    </a>
                                @else
                                    <a href={{ route('plans.delete', $row->id) }} class="btn btn-danger"
                                        id="delete">Delete
                                    </a>
                                    <a href={{ route('plans.delete', $row->id) }} class="btn btn-info">Edit
                                    </a>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">
            <h1>Plans Info</h1>
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
                    @foreach ($plans as $key => $row)
                        <tr>
                            <td>{{ $key = $key + 1 }}</td>
                            <td>{{ $row->plan_name }}</td>
                            <td>{{ $row->plan_price }} $</td>
                            <td>{{ $row->plan_bandwidth }} GB</td>
                            <td>{{ $row->plan_ftp_number }} Accounts</td>
                            <td>{{ $row->plan_disk_space }} GB</td>
                            <td>{{ $row->plan_databases }} DataBases</td>
                            <td>{{ $row->plan_domain_type }} </td>
                            <td><a href={{ route('plans.edit', $row->id) }} class="btn btn-info">Edit </a>
                                <a href={{ route('plans.delete', $row->id) }} class="btn btn-danger" id="delete">Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">
            <h1>Contacts Info</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Name </th>
                        <th scope="col"> Email </th>
                        <th scope="col"> Phone </th>
                        <th scope="col"> Address </th>
                        <th scope="col"> Message</th>
                        <th scope="col"> Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $key => $row)
                        <tr>
                            <td>{{ $key = $key + 1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->address }}</td>
                            <td>{{ $row->message }}</td>
                            <td><a href={{ route('contacts.edit', $row->id) }} class="btn btn-info">Edit </a>
                                <a href={{ route('contacts.delete', $row->id) }} class="btn btn-danger"
                                    id="delete">Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
