@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Hello {{Auth::user()->first_name}}, Complete your profile</div>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('complete_profile') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Employer Details</h3>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input id="emp_name" type="text" class="form-control @error('emp_name') is-invalid @enderror" name="emp_name" value="{{ old('emp_name') }}" required autocomplete="emp_name" autofocus placeholder="Your Employee name " >
                                        @error('emp_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input id="emp_email" type="email" class="form-control @error('emp_email') is-invalid @enderror" name="emp_email" value="{{ old('emp_email') }}" required autocomplete="emp_email" autofocus placeholder="Your Employee email">
                                        @error('emp_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                         <input id="emp_address" type="text" class="form-control @error('emp_address') is-invalid @enderror" name="emp_address" value="{{ old('emp_address') }}" required autocomplete="emp_address" autofocus placeholder="Your Employee address" >
                                        @error('emp_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>Next of Kin Details</h3>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input id="nok_first_name" type="text" class="form-control @error('nok_first_name') is-invalid @enderror" name="nok_first_name" value="{{ old('nok_first_name') }}" required autocomplete="nok_name" autofocus placeholder="Your Next of kin first name ">
                                        @error('nok_first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input id="nok_last_name" type="text" class="form-control @error('nok_last_name') is-invalid @enderror" name="nok_last_name" value="{{ old('nok_last_name') }}" required autocomplete="nok_last_name" autofocus placeholder="Your Next of kin last name ">
                                        @error('nok_last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input id="nok_email" type="nok_email" class="form-control @error('nok_email') is-invalid @enderror" name="nok_email" value="{{ old('nok_email') }}" required autocomplete="nok_email" placeholder="Your next of kin email">

                                        @error('nok_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input id="tel" type="tel" class="form-control @error('nok_mobile_number') is-invalid @enderror" name="nok_mobile_number" value="{{ old('nok_mobile_number') }}" required autocomplete="nok_mobile_number" placeholder="Your Next of kin mobile number">

                                        @error('nok_mobile_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="nok_address" type="text" class="form-control @error('nok_address') is-invalid @enderror" name="nok_address" value="{{ old('nok_address') }}" required autocomplete="nok_address" placeholder="Your next of kin address">
                                        @error('nok_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Complete Profile
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
