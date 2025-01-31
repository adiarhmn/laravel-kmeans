@extends('_layouts.auth')
@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="overflow-hidden position-relative radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="mb-0 card">
                            <div class="card-body">
                                <a href="./index.html" class="py-3 text-center text-nowrap logo-img d-block w-100">
                                    <img src="{{ asset('assets/images/logos/my-logo.png') }}" width="180" alt="">
                                </a>
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <a href="{{url('/')}}" class="py-8 mb-4 btn btn-primary w-100 fs-4 rounded-2">
                                        Login</a>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="mb-0 fs-3 fw-bold">Don't have account?</p>
                                        <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Daftar</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
