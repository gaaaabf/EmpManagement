@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Employee</div>
        <div class="card-body">
            <form method="POST" action="{{ url('userDashboard/update', $user->id) }}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">
                    </div>
                </div>

                @if($user->user_type == 1)
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="company" value="{{$user->email}}" required autocomplete="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="department" value="{{$user->employee->fk_user_id}}" required autocomplete="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="address" value="{{$user->employee->address}}" required autocomplete="email">
                    </div>
                </div>
                @else
                @endif
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <a class="btn btn-danger" href="{{ url('userDashboard') }}">BACK</a>
</div>
@endsection

