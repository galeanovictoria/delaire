@extends('layouts.adminlayout')


@section('content')

<div class="container padd">
    <div class="row">
        <h2>File upload</h2>
              <div class="col-sm-10 col-sm-offset-1 form-group">
               {!! Form::open(['url' => 'fileUpload', 'files'=>true]) !!}
                  {{ csrf_field() }}
                   {!! Form::label('title', 'Title:') !!}
                   {!! Form::text('title', null, ['class'=>'form-control'], 'required')  !!}
                    {!! Form::label('file', 'File:') !!}
                   {!! Form::file('file') !!}
                   {!! Form::label('message', 'Message:') !!}
                   {!! Form::textarea('message', null, ['class'=>'form-control', 'required']) !!}
                   
                   {!! Form::submit('Upload', ['class'=>'btn btn-lg btn-block btn-default hvr-fade', 'id'=>'submit']); !!}
                {!! Form::close() !!}
           </div>
    </div>
</div>
        
@endsection