@extends('layouts.main')

@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Show Category</h2>
                </div>   
                
                 <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Created By</th>
                                <th>Created at</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td> {{ $category->user->name }}</td>
                                
                                     <td>
                                         <span class="label label-info"><i class='fas fa-calendar'></i> {{ $category->created_at->format('d M, Y') }}</span>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
        
       			 </div>
            </div>
        </div>
    </div>
</div>



@endsection