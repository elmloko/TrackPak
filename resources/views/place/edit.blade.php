@extends('layouts.app')

@section('template_title')
{{ __('Update') }} Place
@endsection

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Update') }} Place</span>
                </div>
                <div class="card-body">
                    {{-- Corregir estoCorregir esto --}}
                    <form method="POST" action="{{ route('locations.update', $locations->id) }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')

                        @include('place.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection