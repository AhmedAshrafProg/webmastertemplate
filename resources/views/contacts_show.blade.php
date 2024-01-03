@extends('admin_master')

@section('content')
    <div>
        <div class="row">
            <h1>Contacts Info</h1>
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
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
