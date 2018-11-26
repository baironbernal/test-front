@extends('layouts.adminpages')
@section('content')
@include('partials.admin.header')
<div class="page admin">
    <figure>
        <img src="{{ asset('images/main-profile-04.png') }}" alt="main-profile" class="img-responsive">
    </figure>
    <div class="main-menu">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Historial de transacciones</a></li>
            <li><a data-toggle="tab" href="#menu1">Trivias</a></li>
            <li><a data-toggle="tab" href="#menu2">Actividades</a></li>
        </ul>
    </div>


    <div class="bar-side">
        
    </div>
    <div class="content-tabs">
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3>HOME</h3>
                <p>Some content.</p>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>Menu 1</h3>
                <p>Some content in menu 1.</p>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
            </div>
        </div>
    </div>

    
</div>
@include('partials.footer')
@stop

