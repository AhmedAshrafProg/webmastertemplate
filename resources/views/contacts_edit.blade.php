@extends('admin_master')
@section('content')
    <div class="row">
        <h1>Plans Creation Info</h1>

        <div class="row container">
            <form method="POST" class="w-100" action={{ route('contacts.update') }}>
                @csrf
                <input type="hidden" value="{{ $contact->id }}" name="id" />

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" value="{{ $contact->name }}"
                            name="name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" value="{{ $contact->email }}"
                            name="email">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="phone" value="{{ $contact->phone }}"
                            name="phone">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="address" value="{{ $contact->address }}"
                            name="address">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="message" class="col-sm-3 col-form-label">Message</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="message" value="{{ $contact->message }}"
                            name="message">
                    </div>
                </div>
                <center> <button type="submit" class="btn btn-success text-white mb-4 btn-lg"> Submit The Contact
                        Fix</button> </center>
            </form>
        </div>
    </div>
@endsection
