@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row text-white home-title">
                <h1 class="text-uppercase mx-auto font-weight-bold">{{ __('home.title') }}</h1>
                <h2 class="mx-auto font-weight-bold">{{ __('home.subtitle') }}</h2>
        </div>
            <div class="row searchbar rounded-lg p-3">
                <form method="post" action="/home">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9">
                            <input type="text" class="form-control-plaintext bg-white p-2 rounded h3" placeholder="Code postal ou ville">
                        </div>
                        <div class="col-xs-12 col-sm-3">
                                <button type="button" class="btn btn-search btn-block p-2 font-weight-bold">Rechercher</button>
                        </div>

                    </div>
                </form>
            </div>
    </div>
</div>
@endsection
