@extends('layouts.main')

@section('content')
    
 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Welcome </h2>
                </div>   
                  <div class="container bootstrap snippet">
                      <div class="row">

                          <div class="col-md-3 col-xs-6">
                              <div class="config-one-item animated animation fadeInDown">
                                <a href="/news"><i class="fa fa-desktop lblue"></i></a>
                                <h2>{{$countNews}}</h2>
                                <h4 class="br-lblue">News Count</h4>
                              </div>
                         </div>

                        <div class="col-md-3 col-xs-6">
                              <div class="config-one-item animated animation fadeInDown">
                                <a href="/category"><i class="fa fa-desktop lblue"></i></a>
                                <h2>{{$countCat}}</h2>
                                <h4 class="br-lblue">Categories Count</h4>
                              </div>
                        </div>
                      </div>
                  </div>
        </div>
    </div>
</div>

    



@endsection