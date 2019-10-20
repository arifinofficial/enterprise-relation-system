<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
        {!! Form::text('name', Auth::user()->name, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required', 'disabled']) !!}
        @if ($errors->has('name'))
            <span class="invalid-feedback d-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="example-csubmission-input" class="col-sm-2 col-form-label">Prihal</label>
    <div class="col-sm-10">
        {!! Form::select('csubmission', $cSubmission, null, ['class' => $errors->has('csubmission') ? 'form-control is-invalid' : 'form-control csubmission', 'required']) !!}
        @if ($errors->has('csubmission'))
            <span class="invalid-feedback d-block">
                <strong>{{ $errors->first('csubmission') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row file-wrapper">
    <label for="file" class="col-sm-2 col-form-label">Upload Bukti</label>
    <div class="col-sm-10">
        {!! Form::file('file', ['class' => 'filestyle', 'data-buttonname' => 'btn-secondary']) !!}
    </div>
</div>
<div class="form-group row">
    <label for="date-range" class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-10">
        <div class="input-daterange input-group" id="date-range">
            {!! Form::text('from', null, ['class' => $errors->has('from') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
            {!! Form::text('to', null, ['class' => $errors->has('to') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
        </div>
        @if ($errors->has('from'))
            <span class="invalid-feedback d-block">
                <strong>{{ $errors->first('from') }}</strong>
            </span>
        @endif
        @if ($errors->has('to'))
            <span class="invalid-feedback d-block">
                <strong>{{ $errors->first('to') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="desc" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
        {!! Form::textarea('description', null, ['class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control', 'rows' => 4]) !!} 
    </div>
</div>
<div class="form-group row">
    <div class="col-md-12 text-right">
        {!! Form::submit('Simpan', ['class' => 'btn btn-primary text-right']) !!}
    </div>
</div>