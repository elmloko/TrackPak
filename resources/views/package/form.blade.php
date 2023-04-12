<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Numero de Paquete') }}
            {{ Form::text('number_package', $package->number_package, ['class' => 'form-control' .
            ($errors->has('number_package') ? ' is-invalid' : ''), 'placeholder' => 'Numero de Paquete']) }}
            {!! $errors->first('number_package', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hasta') }}
            {{ Form::select('place_id', $place , $package->place_id, ['class' => 'form-control' .
            ($errors->has('place_id') ? ' is-invalid' : ''), 'placeholder' => 'Hasta']) }}
            {!! $errors->first('place_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Donde') }}
            {{ Form::select('location_id', $location , $package->location_id, ['class' => 'form-control' .
            ($errors->has('location_id') ? ' is-invalid' : ''), 'placeholder' => 'Donde']) }}
            {!! $errors->first('location_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>