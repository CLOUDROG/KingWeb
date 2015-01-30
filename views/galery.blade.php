@extends('main')
@section('content')

<div class="container_24">
    @foreach ( $images as $image )
    <div class="grid_3">
        <div >
            <img style="height: 200px; width: 200px; margin: 10px;" src="{{ asset( $image->images()['asset_path'].$image->images()['image_galery'] ) }}" alt="GaleryImage">
        </div>
    </div>
    @endforeach
</div>

@stop
