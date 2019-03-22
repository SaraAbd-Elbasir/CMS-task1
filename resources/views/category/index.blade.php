@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Categories</h1>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Created By</th> 
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Show</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->user->name }}</td>
                                    
                                    <td>
                                        <a href="/category/{{ $category->id }}/edit" class="btn btn-info btn-xs"> 
                                            <i class='fas fa-edit'></i> Edit 
                                        </a>
                                    </td>
                                    
                                    <td>
                                    {!! Form::open(['action'=>['CategoriesController@destroy', $category->id ], 'method'=>'POST', 'onsubmit' => "return confirm('Are you sure you want to delete this post?')"]) !!}
                                      {{ Form::hidden('_method', 'DELETE') }}
		                                <button class="btn btn-danger btn-xs" type="submit">
		                                    <i class="fas fa-trash"></i> Delete 
		                                </button>
                         			 {!! Form::close() !!}
                                        
                                    </td>

                                     <td>
                                        <a href="/category/{{$category->id}}" class="btn btn-success btn-xs"> 
                                            <i class='fas fa-eye'></i> Show 
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
