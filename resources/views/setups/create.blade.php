@extends('layouts.app')

@section('content')
    <h1 class="title">{{ __('setups/create.title') }}</h1>
    <form action="/setups" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="label">{{ __('setups/create.name') }}</label>
            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-danger' : '' }}" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="description" class="label">{{ __('setups/create.size') }}</label>
            <input type="text" name="size" class="form-control {{ $errors->has('size') ? 'is-danger' : '' }}" value="{{old ('size') }}" required>
        </div>
        <div class="form-group">
            <label for="frame" class="label">{{ __('setups/create.frame') }}</label>
            <input type="text" name="frame" class="form-control {{ $errors->has('size') ? 'is-danger' : '' }}" value="{{old ('frame') }}" required>
        </div>
        <div class="form-group">
            <label for="description" class="label">{{ __('setups/create.flight_controller') }}</label>
            <input type="text" name="flight_controller" class="form-control {{ $errors->has('flight_controller') ? 'is-danger' : '' }}" value="{{old ('flight_controller') }}" required>
        </div>
        <div class="form-group">
            <label for="description" class="label">{{ __('setups/create.power_board') }}</label>
            <input type="text" name="power_board" class="form-control {{ $errors->has('power_board') ? 'is-danger' : '' }}" value="{{old ('power_board') }}">
        </div>
        <div class="form-group">
            <label for="description" class="label">{{ __('setups/create.esc') }}</label>
            <input type="text" name="esc" class="form-control {{ $errors->has('esc') ? 'is-danger' : '' }}" value="{{old ('esc') }}">
        </div>
        <div class="form-group">
            <label for="description" class="label">{{ __('setups/create.motors') }}</label>
            <input type="text" name="motors" class="form-control {{ $errors->has('motors') ? 'is-danger' : '' }}" value="{{old ('motors') }}">
        </div>
        <div class="form-group">
            <label for="description" class="label">{{ __('setups/create.camera') }}</label>
            <input type="text" name="camera" class="form-control {{ $errors->has('camera') ? 'is-danger' : '' }}" value="{{old ('camera') }}">
        </div>
        <div class="form-group">
            <label for="description" class="label">{{ __('setups/create.vtx') }}</label>
            <input type="text" name="vtx" class="form-control {{ $errors->has('vtx') ? 'is-danger' : '' }}" value="{{old ('vtx') }}">
        </div>
        <div class="form-group">
            <label for="description" class="label">{{ __('setups/create.rx') }}</label>
            <input type="text" name="rx" class="form-control {{ $errors->has('rx') ? 'is-danger' : '' }}" value="{{old ('rx') }}">
        </div>
        <div class="form-group">
            <label for="description" class="label">{{ __('setups/create.description') }}</label>
            <input type="text" name="description" class="form-control {{ $errors->has('description') ? 'is-danger' : '' }}" value="{{old ('description') }}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-valid">{{ __('setups/create.save') }}</button>
        </div>
        @include('errors')
    </form>
@endsection
