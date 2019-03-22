@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Setting</div>
			 
					<div class="panel-body">
					    {!! Form::open(['action'=> 'SettingController@save', 'method'=>'POST']) !!}
					    
					    <div class="form-group">
					      {!! Form::label('sitename') !!}
					      {!! Form::text('sitename',$setting->sitename,['class'=>'form-control']) !!}
					    </div>
					    <div class="form-group">
					      {!! Form::label('email') !!}
					      {!! Form::email('email',$setting->email,['class'=>'form-control']) !!}
					    </div>
					     <div class="form-group">
					      {!! Form::label('keywords') !!}
					      {!! Form::textarea('keywords',$setting->keywords,['class'=>'form-control']) !!}
					    </div>
					     <div class="form-group">
					      {!! Form::label('description') !!}
					      {!! Form::textarea('description',$setting->description,['class'=>'form-control']) !!}
					    </div>
					    <div class="form-group">
					      {!! Form::label('maintenance') !!}
					      {!! Form::select('maintenance',['enable','disable'],$setting->maintenance,['class'=>'form-control']) !!}
					    </div>
					   
					    <div class="form-group">
					      {!! Form::label('message_maintenance') !!}
					      {!! Form::textarea('message_maintenance',$setting->message_maintenance,['class'=>'form-control']) !!}
					    </div class="form-group pull-right">
					    {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
					    </div>
					    {!! Form::close() !!}
					  
					
					</div>
		        </div>
            </div>
        </div>
    </div>
</div>

@endsection