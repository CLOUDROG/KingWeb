@extends('main')
@section('content')

<div class="container_24">
    @foreach ( $images as $image )
    <div  style="float: left">
        <div >
            <img style="height: 200px; width: 200px; margin: 10px;" src="{{ asset( $image->images()['asset_path'].$image->images()['image_galery'] ) }}" alt="GaleryImage">
        </div>
    </div>
    @endforeach
    <div style="clear: both;">  
        <nav >
            <ul>
                <li ><a href="/galery/add">Add Photo</a></li>
            </ul>
        </nav>
    </div>
</div>

@stop
