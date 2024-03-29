@extends('front_master')

@section('content')
    <div class="container">
        <!--Section: Contact v.2-->
        <section class="mb-4">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us
                directly. Our team will come back to you within
                a matter of hours to help you.</p>

            <div class="row">
                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form action={{ route('contact.store') }} method="POST">
                        @csrf
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <label for="name" class="">Your name</label>
                                    <input type="text" id="name" name="name" class="form-control">

                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <label for="email" class="">Your email</label>
                                    <input type="text" id="email" name="email" class="form-control">

                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <label for="phone" class="">Phone Number</label>
                                    <input type="text" id="phone" name="phone" class="form-control">

                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-3">
                                    <label for="address" class="">Address</label>
                                    <input type="text" id="address" name="address" class="form-control">

                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row mb-4">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <label for="message">Your message</label>
                                    <textarea type="text" id="message" name="message" rows="3" class="form-control md-textarea"></textarea>

                                </div>

                            </div>
                        </div>
                        <!--Grid row-->
                        <div class="text-center text-md-left">
                            <button class="btn btn-primary btn-lg" type="submit">Send Message</button>
                        </div>
                    </form>


                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>San Francisco, CA 94126, USA</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>contact@mdbootstrap.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>

        </section>
        <!--Section: Contact v.2-->
    </div>
@endsection
