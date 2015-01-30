@extends('main')
@section('content')

<div class="container_24 clearfix" id="registration">
    <h3>Register</h3>
    {{ Form::open(array('files' => true)) }}
    <table>
    
        @foreach($errors->get('title') as $message)
        <tr><td colspan="3" id="error">{{ $message }}</td></tr>
        @endforeach
    
        <tr><td >
        {{ Form::label('title', 'Bildes nosaukums') }}
        </td><td>
        {{ Form::text('title') }}
        </td></tr>
        
        @foreach($errors->get('description') as $message)
        <tr><td colspan="3" id="error">{{ $message }}</td></tr>
        @endforeach
    
        <tr><td >
        {{ Form::label('description', 'Bildes apraksts') }}
        </td><td>
        {{ Form::text('description') }}
        </td></tr>
        
        @foreach($errors->get('image_galery') as $message)
        <tr><td class="error">{{ $message }}</td></tr>
        @endforeach
        
        <tr><td>{{ Form::label('image_galery', 'Attēls') }}</td><td>
        {{ Form::file('image_galery') }}
        </td></tr>
    
        <tr><td>
        {{ Form::submit('Post it!') }}
        </td></tr>
        
    </table>
    
    {{ Form::close() }}
</div>
@stop