@extends('layouts.main')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Show News:{{$news->title}}</h2>
                </div>   
                 <div class="container bootstrap snippet">
                      <div class="row">
                         <dl class="dl-horizontal">
                            <label>News Title:</label>
                            <p> {{$news->title}}</p>
                         </dl>

                            <dl class="dl-horizontal">
                                <label>News Photo:</label>
                                    <div style="margin-bottom: 2px">
                                    <img src="{{ asset('images/news/'.$news->photo) }}" class="img-responsive" />
                                    </div>
                            </dl>

                            <dl class="dl-horizontal">
                                <label>News Category:</label>
                            <p> {{$news->category->name}}</p>
                            </dl>

                            <dl class="dl-horizontal">
                               <label>New Content:</label>
                            <p> {!!$news->content!!}</p>
                            </dl>

                      </div>
                    
                 </div>
            </div>
        </div>
    </div>
</div>

    
@endsection