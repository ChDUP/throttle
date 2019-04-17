@extends('layouts.app')

@section('content')
    <h1 class="title">{{ __('users/account.title') }}</h1>

    @if ($setups->count())
        <h2>{{ __('users/account.addresses') }}</h2>
        <div class="row">
        @foreach ($addresses as $address)
            <div class="col-xs-12 col-md-3">
                    {{ $address->city }}
            </div>
        @endforeach
        </div>
    @endif
    <a class="btn btn-primary" href="addresses/create">{{ __('users/account.new_address') }}</a>

    @if ($setups->count())
        <h2>{{ __('users/account.setups') }}</h2>
        <div class="row">
        @foreach ($setups as $setup)
            <div class="col-xs-12 col-md-3">
                <a href="/setups/{{ $setup->id }}" title="{{ __('users/account.see') }} {{ $setup->name }}">
                    {{ $setup->name }}
                </a>
            </div>
        @endforeach
        </div>
    @endif
    <a class="btn btn-primary" href="setups/create">{{ __('users/account.new_setup') }}</a>
@endsection
