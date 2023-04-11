@extends('layouts.app')

@section('template_title')
    {{ $package->name ?? "{{ __('Show') Package" }}
@endsection

@section('content')   
@include('layouts.headers.cards')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Paquetes</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('packages.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero de Paquete:</strong>
                            {{ $package->number_package }}
                        </div>
                        <div class="form-group">
                            <strong>Desde:</strong>
                            {{ $package->place->name_place}}
                        </div>
                        <div class="form-group">
                            <strong>Hasta:</strong>
                            {{ $package->location->name_location }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
