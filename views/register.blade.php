@extends('main')
@section('content')

<div class="container_24 clearfix" id="registration">
    <h3>Register</h3>
    {{ Form::open(array('url' => 'user/register')) }}
    <table>
    
        @foreach($errors->get('fullname') as $message)
        <tr><td colspan="3" id="error">{{ $message }}</td></tr>
        @endforeach
    
        <tr><td >
        {{ Form::label('fullname', 'Tavs vārds') }}
        </td><td>
        {{ Form::text('fullname') }}
        </td></tr>
        
        @foreach($errors->get('username') as $message)
        <tr><td colspan="3" id="error">{{ $message }}</td></tr>
        @endforeach
    
        <tr><td >
        {{ Form::label('username', 'Tavs lietotājvārds') }}
        </td><td>
        {{ Form::text('username') }}
        </td></tr>
        
        @foreach($errors->get('igname') as $message)
        <tr><td colspan="3" id="error">{{ $message }}</td></tr>
        @endforeach
    
        <tr><td >
        {{ Form::label('igname', 'Tavs servera segvārds') }}
        </td><td>
        {{ Form::text('igname') }}
        </td></tr>
    
        @foreach($errors->get('email') as $message)
        <tr><td colspan="3" id="error">{{ $message }}</td></tr>
        @endforeach
        
        <tr><td>
        {{ Form::label('email', 'E-pasta adrese') }}
        </td><td>
        {{ Form::email('email') }}
        </td></tr>
    
        @foreach($errors->get('password') as $message)
        <tr><td colspan="3" id="error">{{ $message }}</td></tr>
        @endforeach
    
        <tr><td>
        {{ Form::label('password', 'Parole') }}
        </td><td>
        {{ Form::password('password') }}
        </td></tr>
    
        <tr><td>
        {{ Form::label('password_confirmation', 'Parole atkārtoti') }}
        </td><td>
        {{ Form::password('password_confirmation') }}
        </td></tr>
    
        <tr><td>
        {{ Form::submit('Register') }}
        </td></tr>
        
    </table>
</div>

{{ Form::close() }}
@stop