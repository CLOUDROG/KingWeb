<?php

class UserController extends BaseController {
    
    public function getRegister(){
        return View::make('register');
    }
    
    public function postRegister(){
    
        $data = Input::all();
        $rules = $rules = array(
            'fullname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|confirmed',
        );
        
        $validator = Validator::make($data, $rules);
        
        if ($validator->passes())
        {
            $user = new User();
            
            $user->fullname = $data['fullname'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            
            $user->save();
            
            Auth::login($user);
            
            return Redirect::to('user')->withMessage('Successfully registered!');
        }
        
        return Redirect::to('user/register')->withErrors($validator);
    }
    
    public function getLogin()
    {
        return View::make('login');
    }
    
    public function postLogin()
    {
        if (!empty(Input::get('remember_me')))
        {
            $remember_auth = true;
        } else {
            $remember_auth = false;
        }

        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')), $remember_auth))
        {
            return Redirect::intended('user')->withMessage('Successfully logged in!');
        }
        
        return Redirect::to('user/login')->withErrors(array('loginfailed' => 'Login failed!'));
    }
    
    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
    
    // this handles requests to prefix itself, in this case /user
    public function getIndex()
    {
        if (Auth::guest())
        {
            return Redirect::to('user/login');
        }
        
        return View::make('user');
    }
  

}