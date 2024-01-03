@extends('admin_master')

@section('content')
    <div>

        <div class="row">
            <h1>Users</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col"> Avatar </th>
                        <th scope="col">Plan Type</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><img alt="" src={{ asset('storage/' . $user->avatar) }} width="50px"
                                    height="50px" />
                            <td>
                                {{ optional($user->plans)->plan_name }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
