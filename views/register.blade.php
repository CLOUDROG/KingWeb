@extends('main')
@section('content')

<div class="container_24 clearfix" id="registration">
    <h3>Register</h3>
    {{ Form::open(array('url' => 'user/register')) }}
    <table style="font-size: 20px; line-height: 2em;" >
    
        @foreach($errors->get('fullname') as $message)
        <tr><td colspan="3" class="error">{{ $message }}</td></tr>
        @endforeach
    
        <tr><td >
        {{ Form::label('fullname', 'Tavs vārds') }}
        </td><td>
        {{ Form::text('fullname') }}
        </td></tr>
    
        @foreach($errors->get('email') as $message)
        <tr><td colspan="3" class="error_msg">{{ $message }}</td></tr>
        @endforeach
        
        <tr><td>
        {{ Form::label('email', 'E-pasta adrese') }}
        </td><td>
        {{ Form::email('email') }}
        </td></tr>
    
        @foreach($errors->get('password') as $message)
        <tr><td colspan="3" class="error_msg">{{ $message }}</td></tr>
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