<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Route::get("default_controller","test/route");


Route::prefix("auth",function(){
  Route::get("register","auth/register/index");
  Route::post("register-action","crud/save");
  Route::get("login","auth/login/index");
  Route::get("profile","auth/profile/index");
}); // => Route::named('test')
