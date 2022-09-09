<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Medicos_id') }}
            {{ Form::text('Medicos_id', $medicoscita->Medicos_id, ['class' => 'form-control' . ($errors->has('Medicos_id') ? ' is-invalid' : ''), 'placeholder' => 'Medicos Id']) }}
            {!! $errors->first('Medicos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Citas_id') }}
            {{ Form::text('Citas_id', $medicoscita->Citas_id, ['class' => 'form-control' . ($errors->has('Citas_id') ? ' is-invalid' : ''), 'placeholder' => 'Citas Id']) }}
            {!! $errors->first('Citas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>