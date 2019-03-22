
@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create News</div>

                <div class="panel-body">
  
                {!! Form::open(['action'=> 'NewsController@store', 'method'=>'POST', 'files'=>true ])  !!}       
                <div class="form-group">
                    {{ Form::label('Title') }}
                    {{ Form::text('title', '', [ 'placeholder'=>'Enter New Title', 'class'=>'form-control' ]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('Featured Image') }}
                    {{ Form::file('photo', ['class'=>'form-control' ]) }}
                </div>


                <div class="form-group">
                    {{ Form::label('Category') }}
                    <select name="category_id" class="form-control" >

                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{  $category->name }} </option>
                        @endforeach
                    </select>
                </div>
                

                <div class="form-group">
                    {{ Form::label('Content') }}
                    {{ Form::textarea('content', '', [ 'placeholder'=>'Enter Content', 'class'=>'form-control ckeditor' ]) }}
                </div>


                 <div class="form-group pull-right">
                    {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
                </div>

                {!! Form::close()  !!}
            </div>
        </div>
    </div>
</div>
@endsection






