@extends('front_master')

@section('content')
    <div>
        <h1 class="text-success text-center">
            you choosed the plan successfully please go back to home page
            <a class="btn btn-success" href={{ route('HPage') }}>Go HomePage</a>
        </h1>

    </div>
@endsection
