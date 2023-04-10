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
                            <span class="card-title">{{ __('Show') }} Package</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('packages.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Number Package:</strong>
                            {{ $package->number_package }}
                        </div>
                        <div class="form-group">
                            <strong>Place Id:</strong>
                            {{ $package->place_id }}
                        </div>
                        <div class="form-group">
                            <strong>Location Id:</strong>
                            {{ $package->location_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
