@extends('layouts.frontpages')

@section('content')
    @include('partials.header')

    <div class="page home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('partials.slide')
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@stop
