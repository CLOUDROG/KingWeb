<?php
class Galery extends Eloquent {
    
    protected $table = 'galery';
    
    public function images() {
        return array(
            'server_path' => public_path().'/uploads/',
            'asset_path' => 'uploads/',
            'image_galery' => 'galery_'.$this->id.'.jpg',
        );
    }
}