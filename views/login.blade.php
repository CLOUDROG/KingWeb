@extends('main')
@section('content')

<div class="container_24 clearfix" id="registration">
    <h3>Login</h3>
    {{ Form::open(array('url' => 'user/login')) }}
    <table>
    
        @foreach($errors->all() as $message)
        <tr><td colspan="3" id="error">{{ $message }}</td></tr>
        @endforeach
    
        <tr><td >
        {{ Form::label('username', 'Tavs lietotājvārds') }}
        </td><td>
        {{ Form::text('username') }}
        </td></tr>
 
        <tr><td>
        {{ Form::label('password', 'Parole') }}
        </td><td>
        {{ Form::password('password') }}
        </td></tr>
        
        <tr><td>
        {{ Form::label('remember_me', 'Atcerēties mani') }}
        </td><td>
        {{ Form::checkbox('remember_me') }}
        </td></tr>
    
        <tr><td>
        {{ Form::submit('Login') }}
        </td></tr>
        
    </table>
</div>

{{ Form::close() }}
@stop

