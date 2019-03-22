
@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit {{ $news->name }} News</div>

                <div class="panel-body">

				{!! Form::open(['action'=> ['NewsController@update', $news->id ,'files'=>true ], 'method'=>'POST' ])  !!}

				    {{ Form::hidden('_method', 'PUT') }} 
				    
				  <div class="form-group">
                    {{ Form::label('Title') }}
                    {{ Form::text('title', $news->title, [  'class'=>'form-control' ]) }}
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
                    {{ Form::textarea('content', $news->content, [ 'class'=>'form-control ckeditor' ]) }}
                </div>


				    <div class="form-group pull-right">
				        {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
				    </div>

				{!! Form::close()  !!}

            </div>
        </div>
    </div>
</div>
@endsection
