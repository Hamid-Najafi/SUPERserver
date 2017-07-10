@extends('layouts.admin')



@section('content')
    <h1>Create Users</h1>
    {!! Form::open(['method'=>'POST', 'action'=> 'AdminUserController@store']) !!}
    {{csrf_field()}}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name' , null ,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::email('email', null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('file','Image') !!}
        {!! Form::file('file', null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('role_id','Role:') !!}
        {!! Form::select('role_id' ,[''=>'Chose Option'] + $roles, null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('is_active','Status:') !!}
        {!! Form::select('is_active',array(1=>'Active' , 0=>'Not Active') , 1,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>


    <div>
        {!! Form::submit('create user', ['class'=>'btn btn-primary'])!!}
    </div>
    {!! Form::close() !!}



    @include('includes.form_errors')


@stop