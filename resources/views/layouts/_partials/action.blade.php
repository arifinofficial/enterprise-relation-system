{!! Form::model($model, ['url' => $delete_url, 'method' => 'DELETE' ]) !!}
<a href="{{ $show_url }}" class="btn btn-sm btn-outline-primary" style="padding-bottom:0px; padding-top:0px;">
    <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
</a>
<a href="{{ $edit_url }}" class="btn btn-sm btn-outline-warning" style="padding-bottom:0px; padding-top:0px;">
    <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
</a>
<button type="submit" class="btn btn-sm btn-outline-danger" style="padding-bottom:0px; padding-top:0px;" onclick="return confirm('Apakah anda yakin menghapus data ini?');">
    <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
</button>
{!! Form::close() !!}