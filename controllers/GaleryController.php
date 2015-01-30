<?php

class GaleryController extends BaseController {
    
    public function getIndex(){
        return View::make('galery', array('images' => Galery::all()));
    }
    
    public function getAdd()
    {
        return View::make('galery_add');
    }
    
    public function postAdd()
    {
        $data = Input::all();
        
        $rules = $rules = array(
            'title' => 'required|min:3|max:20|unique:galery,title',
            'description' => 'required|min:5',
            'image_galery' => 'required|image|mimes:jpeg',
        );
        
        $validator = Validator::make($data, $rules);
        
        if ($validator->passes())
        {
            $galery = new Galery();
            
            $galery->title = $data['title'];
            $galery->description = $data['description'];
            
            $galery->save();
            
            $images = $galery->images();
            Input::file('image_galery')->move($images['server_path'], $images['image_galery']);
            
            return Redirect::to('galery');
        }
        
        return Redirect::to('galery/add')->withErrors($validator);
    }
}
