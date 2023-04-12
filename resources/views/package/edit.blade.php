@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Package
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Package</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('packages.update', $package->id) }}" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            @include('package.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
