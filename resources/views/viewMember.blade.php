

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{$team->FullName}}</h2>
               <div class="card-body">
                <form method="get" action="{{route('team')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$team->id}}">
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="FullName"  class="form-control @error('FullName') is-invalid @enderror" name="FullName" value="{{$team->FullName}}" required autocomplete="FullName" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="Email" type="email" class="form-control @error('Email') is-invalid @enderror" name="Email" value="{{$team->Email}}" required autocomplete="Email">

                                @error('Email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Telephone" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>
                        <div class="col-md-6">
                                <input id="Telephone" class="form-control @error('Telephone') is-invalid @enderror" name="Telephone" value="{{$team->Telephone}}" required autocomplete="Telephone" autofocus>

                                @error('Telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="JoineDate" class="col-md-4 col-form-label text-md-right">{{ __('Joined Date') }}</label>
                        <div class="col-md-6">
                                <input id="JoineDate"  class="form-control @error('JoineDate') is-invalid @enderror" name="JoineDate" value="{{$team->JoineDate}}" required autocomplete="dob" autofocus>

                                @error('JoineDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="CurrentRoute" class="col-md-4 col-form-label text-md-right">{{ __('Current Routes') }}</label>
                        <div class="col-md-6">
                                <input id="CurrentRoute"  class="form-control @error('CurrentRoute') is-invalid @enderror" name="CurrentRoute" value="{{$team->CurrentRoute}}" required autocomplete="CurrentRoute" autofocus>

                                @error('CurrentRoute')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                       
                        <div class="form-group row">
                            <label for="Comments" class="col-md-4 col-form-label text-md-right">{{ __('Comments') }}</label>

                            <div class="col-md-6">
                                <input id="Comments"  class="form-control @error('Comments') is-invalid @enderror" name="Comments" value="{{$team->Comments}}" required autocomplete="Comments" autofocus>

                                @error('Comments')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Back to Member List') }}
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
