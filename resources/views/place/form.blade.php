<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_place') }}
            {{ Form::text('name_place', $place->name_place, ['class' => 'form-control' . ($errors->has('name_place') ? ' is-invalid' : ''), 'placeholder' => 'Name Place']) }}
            {!! $errors->first('name_place', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>