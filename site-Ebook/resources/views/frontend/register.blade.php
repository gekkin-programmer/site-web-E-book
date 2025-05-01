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
                        <h1 class="text-white mb-2 mt-80">Welcome to the registration page!</h1>
                        <p class="text-lead text-white">Please enter your information to complete the payment
                            for your book .</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Register</h5>
                        </div>
                        <div class="card-body">
                            <form class=" text-start mt-20" method="POST" action="{{ route('account.processRegister') }}">
                                @csrf

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Personal Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">First Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="first_name" class="form-control"
                                                        value="{{ old('first_name') }}">
                                                    @error('first_name')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Last Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="last_name" class="form-control"
                                                        value="{{ old('last_name') }}">
                                                    @error('last_name')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Age <span class="text-danger">*</span></label>
                                                    <input type="number" name="age" class="form-control"
                                                        value="{{ old('age') }}">
                                                    @error('age')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">profession <span
                                                            class="text-sm mt-3 mb-0 font-weight-bolder"
                                                            style="opacity: 0.5;">(facultatif)</span></label>
                                                    <input type="text" name="profession" class="form-control"
                                                        value="{{ old('profession') }}">
                                                    @error('profession')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Email <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" class="form-control"
                                                        value="{{ old('email') }}">
                                                    @error('email')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Number <span class="text-danger">*</span> <span
                                                            class="text-sm ml-200 mb-0 font-weight-bolder"
                                                            style="opacity: 0.5;">please add the country code
                                                            !</span></label>
                                                    <input type="text" name="number" class="form-control"
                                                        value="{{ old('number') }}">
                                                    @error('number')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h5>Locations</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Country <span class="text-danger">*</span></label>
                                                    <select name="country" class="form-control select2 country"
                                                        id="">
                                                        <option value="">choose</option>
                                                    </select>
                                                    @error('country')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">State <span class="text-danger">*</span></label>
                                                    <select name="state" class="form-control select2 state"
                                                        id="">
                                                        <option value="">choose</option>
                                                    </select>
                                                    @error('state')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">City <span class="text-danger">*</span></label>
                                                    <select name="city" class="form-control select2 city"
                                                        id="">
                                                        <option value="">choose</option>
                                                    </select>
                                                    @error('city')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Adresse 1 <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="adresse_1" class="form-control"
                                                        value="{{ old('adresse_1') }}">
                                                    @error('adresse_1')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Adresse 2 <span
                                                            class="text-sm mt-3 mb-0 font-weight-bolder"
                                                            style="opacity: 0.5;">(facultatif)</span></label>
                                                    <input type="text" name="adresse_2" class="form-control"
                                                        value="{{ old('adresse_2') }}">
                                                    @error('adresse_2')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h5>Additional information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">How can you send money? <span
                                                            class="text-danger">*</span></label>
                                                    <select name="money" class="form-control select2" id="">
                                                        <option value="">choose</option>
                                                        <option value="national">Mobile Money</option>
                                                        <option value="internationale">Ria, western union...</option>
                                                        <option value="carte">Visa, Master Card</option>
                                                        <option value="autre">Other</option>
                                                    </select>
                                                    @error('money')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">How do you want to get your book?<span
                                                            class="text-danger">*</span></label>
                                                    <select name="book" class="form-control select2">
                                                        <option value="">choose</option>
                                                        <option value="email">Directly by email</option>
                                                        <option value="numero">Directly on Whatsapp</option>
                                                    </select>
                                                    @error('book')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom pt-10 pb-10"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="box-agree mt-30">
                                                <label class="lbl-agree font-xs color-text-paragraph-2" for="validate" style="display: flex; flex-direction: row;">
                                                  <input style="height: 20px; margin-right: -40px; margin-left: -50px;" id="validate" name="validate" class="lbl-checkbox" type="checkbox" value="0">
                                                  <p style="padding-right: 50px;">By checking this box, you confirm that the information is filled in correctly on the form</p>
                                                </label>
                                                @error('validate')
                                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>\
    
@endsection
