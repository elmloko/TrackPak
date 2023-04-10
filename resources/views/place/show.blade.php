@extends('layouts.app')

@section('template_title')
    {{ $place->name ?? "{{ __('Show') Place" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Place</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('places.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Place:</strong>
                            {{ $place->name_place }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
