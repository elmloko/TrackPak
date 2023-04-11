@extends('layouts.app')

@section('template_title')
Package
@endsection
@section('content')
@include('layouts.headers.cards')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Paquetes') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('packages.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Nuevo') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Numero de Paquete</th>
                                    <th>Hasta</th>
                                    <th>Donde</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $package)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $package->number_package }}</td>
                                    {{-- <td>{{ $package->place_id }}</td>
                                    <td>{{ $package->location_id }}</td> --}}

                                    <td>{{ $package->place->name_place }}</td>
                                    <td>{{ $package->location->name_location }}</td>

                                    <td>
                                        <form action="{{ route('packages.destroy',$package->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('packages.show',$package->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('packages.edit',$package->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $packages->links() !!}
        </div>
    </div>
</div>
@endsection