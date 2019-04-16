@extends('layouts.app')

@section('content')
    <h1 class="title">{{ $setup->name }}</h1>
    <span>{{ __('setups/show.owner') }} : <a href="/users/{{ $setup->owner_id }}">{{ $setup->owner }}</a></span>
    <div class="row">
        <div class="col-xs-12">
            <ul>
                <li>{{ __('setups/parts.size') }} : {{ $setup->size }}</li>
                <li>{{ __('setups/parts.frame') }} : {{ $setup->frame }}</li>
                <li>{{ __('setups/parts.flight_controller') }} : {{ $setup->flight_controller }}</li>
                <li>{{ __('setups/parts.power_board') }} : {{ $setup->power_board }}</li>
                <li>{{ __('setups/parts.esc') }} : {{ $setup->ESC }}</li>
                <li>{{ __('setups/parts.motors') }} : {{ $setup->motors }}</li>
                <li>{{ __('setups/parts.camera') }} : {{ $setup->camera }}</li>
                <li>{{ __('setups/parts.vtx') }} : {{ $setup->VTX }}</li>
                <li>{{ __('setups/parts.rx') }} : {{ $setup->RX }}</li>
                <li>{{ __('setups/parts.description') }} : {{ $setup->description }}</li>
            </ul>
        </div>
    </div>
@endsection
