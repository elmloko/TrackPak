@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Location
@endsection

@section('content')
@include('layouts.headers.cards')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Destinos</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('locations.update', $location->id) }}" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            @include('location.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
