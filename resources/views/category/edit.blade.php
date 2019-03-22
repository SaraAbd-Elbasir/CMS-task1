@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit {{ $categories->name }} Category</div>

                <div class="panel-body">

				{!! Form::open(['action'=> ['CategoriesController@update', $categories->id ], 'method'=>'POST' ])  !!}

				    {{ Form::hidden('_method', 'PUT') }} 
				    
				    <div class="form-group">
				        {{ Form::label('Name') }}
				        {{ Form::text('name', $categories->name, [ 'placeholder'=>'Enter Category Name', 'class'=>'form-control' ]) }}
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
