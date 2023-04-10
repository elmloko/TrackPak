@extends('layouts.app')

@section('template_title')
    {{ $location->name ?? "{{ __('Show') Location" }}
@endsection

@section('content')
@include('layouts.headers.cards')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrando') }} Destinos</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('locations.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre del Destino:</strong>
                            {{ $location->name_location }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
