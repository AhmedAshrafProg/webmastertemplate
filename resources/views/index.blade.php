@extends('front_master')

@section('content')
    <!-- Start Header -->
    <div class="header text-center">
        <div class="overlay">
            <div class="container">
                <h1>Choose Your Plan</h1>
                <div class="plan float-left">Free Plan Contain 10GB</div>
                <div class="plan float-left">$10 Plan Contain 50GB</div>
                <div class="clearfix"></div>
                <div class="order hidden-xs">Order Now and Get Another Plan For Free</div>
            </div>
        </div>
    </div>
    <!-- End Header -->
    <!-- Start Features -->
    <div class="features">
        <div class="container">
            <h2 class="h1 text-center">Our Features</h2>
            <div class="feat float-left">
                <h2>Fast</h2>
                <p>This is Fast Feature This is Fast Feature This is Fast Feature This is Fast Feature This is Fast Feature
                </p>
            </div>
            <div class="feat float-left">
                <h2>Secure</h2>
                <p>This is Secure Feature This is Secure Feature This is Secure Feature This is Secure Feature This is
                    Secure Feature</p>
            </div>
            <div class="feat float-left">
                <h2>Cheap</h2>
                <p>This is Cheap Feature This is Cheap Feature This is Cheap Feature This is Cheap Feature This is Cheap
                    Feature</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- End Features -->
    <!-- Start About Us -->
    <div class="about-us">
        <div class="container">
            <h2 class="h1 text-center">About Us</h2>
            <p class="responsive-paragraph">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.
            </p>
        </div>
    </div>
    <!-- End About Us -->
    <!-- Start Our Works -->
    <div class="our-works">
        <div class="image float-left">
            <img class="responsive-image" src={{ asset('assets/images/01.png') }} alt="" />
        </div>
        <div class="image float-left">
            <img class="responsive-image" src={{ asset('assets/images/02.jpg') }} alt="" />
        </div>
        <div class="image float-left">
            <img class="responsive-image" src={{ asset('assets/images/03.jpg') }} alt="" />
        </div>
        <div class="image float-left">
            <img class="responsive-image" src={{ asset('assets/images/04.jpg') }} alt="" />
        </div>
        <div class="image float-left">
            <img class="responsive-image" src={{ asset('assets/images/05.jpg') }} alt="" />
        </div>
        <div class="image float-left">
            <img class="responsive-image" src={{ asset('assets/images/06.jpg') }} alt="" />
        </div>
        <div class="image float-left">
            <img class="responsive-image" src={{ asset('assets/images/07.jpg') }} alt="" />
        </div>
        <div class="image float-left">
            <img class="responsive-image" src={{ asset('assets/images/08.jpg') }} alt="" />
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- End Our Works -->
    <!-- Start Pricing Table -->
    <div class="pricing-table text-center">
        <div class="container2">
            <h2 class="h1">Our Pricing Plans</h2>
            <div class="container row">
                @foreach ($plans as $plan)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="pricing-plan my-3">
                            <form action={{ route('plans.select') }} method="POST">
                                @csrf
                                <h3>{{ $plan->plan_name }}</h3>
                                <span class="pricing">{{ $plan->plan_price }} $</span>
                                <ul class="classic-list">
                                    <input type="hidden" value="{{ $plan->id }}" name="id" />
                                    <li>Disk Space : {{ $plan->plan_disk_space }} GB</li>
                                    <li>Bandwidth : {{ $plan->plan_bandwidth }} GB</li>
                                    <li>FTP Accounts : {{ $plan->plan_ftp_number }}</li>
                                    <li>Databases : {{ $plan->plan_databases }}</li>
                                    <li>Domain Type : {{ $plan->plan_domain_type }}</li>
                                    @if ($user === null)
                                        <a href={{ route('login') }} class="text-white btn btn-primary">Login</a>
                                    @else
                                        <button type="submit" class="btn btn-success">Select Plan</button>
                                    @endif
                                </ul>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- End Pricing Table -->
    <!-- Start What They Say -->
    <div class="they-say">
        <div class="container">
            <h2 class="h1 text-center">What They Say About Us</h2>
            <div class="person-say float-left">
                <div class="avatar float-left">
                    <img class="responsive-image img-circle img-thumbnail" src={{ asset('assets/images/avatar.jpg') }}
                        alt="" />
                </div>
                <h3 class="float-left">Ahmed</h3>
                <p class="float-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <div class="person-say float-left">
                <div class="avatar float-left">
                    <img class="responsive-image img-circle img-thumbnail" src={{ asset('assets/images/avatar.jpg') }}
                        alt="" />
                </div>
                <h3 class="float-left">Mohamed</h3>
                <p class="float-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <div class="person-say float-left">
                <div class="avatar float-left">
                    <img class="responsive-image img-circle img-thumbnail" src={{ asset('assets/images/avatar.jpg') }}
                        alt="" />
                </div>
                <h3 class="float-left">Sayed</h3>
                <p class="float-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- End What They Say -->
    <!-- Start Information -->
    <div class="information">
        <div class="container">
            <h2 class="h1 text-center">Product Information</h2>
            <ul class="classic-list info-list">
                <li data-class="about" class="selected">About</li>
                <li data-class="history">History</li>
                <li data-class="spec">Specification</li>
                <li data-class="tech">Technical</li>
                <li data-class="review">Review</li>
            </ul>
            <div class="info-content">
                <div class="about">About Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                    in culpa qui officia deserunt mollit anim id est laborum.</div>
                <div class="history">History Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                    in culpa qui officia deserunt mollit anim id est laborum.</div>
                <div class="spec">Spec Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                    in culpa qui officia deserunt mollit anim id est laborum.</div>
                <div class="tech">Tech Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                    in culpa qui officia deserunt mollit anim id est laborum.</div>
                <div class="review">Review Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                    in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div>
    </div>
    <!-- End Information -->
@endsection
