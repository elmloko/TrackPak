<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_location') }}
            {{ Form::text('name_location', $location->name_location, ['class' => 'form-control' . ($errors->has('name_location') ? ' is-invalid' : ''), 'placeholder' => 'Name Location']) }}
            {!! $errors->first('name_location', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>