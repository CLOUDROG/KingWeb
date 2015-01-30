@extends('main')
@section('content')


<div class="container_24" id="login_welcome">
    @foreach($errors->all() as $message)
    <p class="error">{{ $message }}</p>
    @endforeach
    
    <h3>{{{ Auth::user()->username }}}, tev tomēr kautkā sanāca tikt iekšā, tad nu, Čau!</h3>
</div>

@stop