@extends('layouts.app')

@section('content')
    <h1 class="title">{{ __('addresses/create.title') }}</h1>
    <form action="/addresses" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="number" class="label">{{ __('addresses/address.number') }}</label>
            <input type="text" name="number" class="form-control {{ $errors->has('number') ? 'is-danger' : '' }}" value="{{ old('number') }}" required>
        </div>
        <div class="form-group">
            <label for="address_line" class="label">{{ __('addresses/address.address_line') }}</label>
            <input type="text" name="address_line" class="form-control {{ $errors->has('address_line') ? 'is-danger' : '' }}" value="{{ old('address_line') }}" required>
        </div>
        <div class="form-group">
            <label for="address_line2" class="label">{{ __('addresses/address.address_line2') }}</label>
            <input type="text" name="address_line2" class="form-control {{ $errors->has('address_line2') ? 'is-danger' : '' }}" value="{{ old('address_line2') }}" required>
        </div>
        <div class="form-group">
            <label for="postal_code" class="label">{{ __('addresses/address.postal_code') }}</label>
            <input type="text" name="postal_code" class="form-control {{ $errors->has('postal_code') ? 'is-danger' : '' }}" value="{{ old('postal_code') }}" required>
        </div>
        <div class="form-group">
            <label for="city" class="label">{{ __('addresses/address.city') }}</label>
            <input type="text" name="city" class="form-control {{ $errors->has('city') ? 'is-danger' : '' }}" value="{{ old('city') }}" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-valid">{{ __('addresses/create.save') }}</button>
        </div>
        @include('errors')
    </form>
@endsection
