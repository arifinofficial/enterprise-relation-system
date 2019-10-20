<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
        {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
        @if ($errors->has('name'))
            <span class="invalid-feedback d-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
        @if ($errors->has('email'))
            <span class="invalid-feedback d-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="example-tel-input" class="col-sm-2 col-form-label">Telpon</label>
    <div class="col-sm-10">
        {!! Form::tel('phone', null, ['class' => $errors->has('phone') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
        @if ($errors->has('phone'))
            <span class="invalid-feedback d-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
        {!! Form::text('address', null, ['class' => $errors->has('address') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
        @if ($errors->has('address'))
            <span class="invalid-feedback d-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
        {!! Form::password('password', ['class' => $errors->has('password') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('password'))
            <span class="invalid-feedback d-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Role</label>
    <div class="col-sm-10">
        {!! Form::select('role[]', $roleData, null, ['class' => 'form-control select2 select2-multiple text-capitalize', 'title' => 'Pilih role', 'multiple', 'required']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-md-12 text-right">
        {!! Form::submit('Simpan', ['class' => 'btn btn-primary text-right']) !!}
    </div>
</div>