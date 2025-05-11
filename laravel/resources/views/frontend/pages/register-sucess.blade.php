@extends('layouts.master')

@section('content')
    @include('layouts.navbars.guest.navbar')
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('{{ asset('frontend/assets/img/book.jpg') }}'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <section class="section-box mt-90">
                            <div class="container">
                                <div style="text-align: center;
                                margin-bottom: 90px; padding-top: 110px;">
                                    <i class="fas fa-check-circle" style="font-size: 100px; color: rgb(20, 222, 5);"></i>
                                    <h2 style="color: white;">Registering your information was a success.</h2>
                                    <a class="btn btn-default btn-shadow hover-up mt-4" href="">Continue your payment </a>
                                </div>
                            </div>
                          </section>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
