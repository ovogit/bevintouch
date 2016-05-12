<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
| TODO 
|  
|
*/

Route::resource('contacts', 'ContactsController');
Route::resource('contact', 'ContactController');
Route::resource('messages', 'MessagesController');
Route::resource('toolbar', 'ToolbarController');

Route::get('/touch' , function() {

		function objectToArray($d) {
			if (is_object($d)) {
				// Gets the properties of the given object
				// with get_object_vars function
				$d = get_object_vars($d);
			}
	 
			if (is_array($d)) {
				/*
				* Return array converted to object
				* Using __FUNCTION__ (Magic constant)
				* for recursive call
				*/
				return array_map(__FUNCTION__, $d);
			}
			else {
				// Return array
				return $d;
			}
		}

		$user = Session::get('user');
		$results = DB::table('toolbar')
		->select('contact_id')
		->where(array('user_id' => $user, 'touch' => 1))
		->get();
		$response = [];
		foreach($results as $result) {
			$id = $result->contact_id;
			$contact = DB::select('select * from contacts where id = ?', array($id));
			$array = objectToArray($contact);
		 $response[] = $array;

		}
		
		if (empty($response)){
		return	null;
		}
    $json = str_replace(array('[', ']'), '', json_encode($response));
		return '['.$json.']';

});
Route::get('/favorite' , function() {

		function objectToArray($d) {
			if (is_object($d)) {
				// Gets the properties of the given object
				// with get_object_vars function
				$d = get_object_vars($d);
			}
	 
			if (is_array($d)) {
				/*
				* Return array converted to object
				* Using __FUNCTION__ (Magic constant)
				* for recursive call
				*/
				return array_map(__FUNCTION__, $d);
			}
			else {
				// Return array
				return $d;
			}
		}

		$user = Session::get('user');
		$results = DB::table('toolbar')
		->select('contact_id')
		->where(array('user_id' => $user, 'favorite' => 1))
		->get();
		$response = [];
		foreach($results as $result) {
			$id = $result->contact_id;
			$contact = DB::select('select * from contacts where id = ?', array($id));
			$array = objectToArray($contact);
		 $response[] = $array;

		}
		if (empty($response)){
		return	null;
		}
		
    $json = str_replace(array('[', ']'), '', json_encode($response));
		return '['.$json.']';

});
Route::post('/favorite/{id}', function( $id ) {
		$user = Session::get('user');
		$check =  DB::select('SELECT favorite FROM toolbar WHERE contact_id = ? AND user_id = ?', array($id, $user));
		if ($check[0]->favorite == 0){
			$update = DB::update('UPDATE toolbar set favorite = ? WHERE contact_id = ? AND user_id = ?', array(1, $id, $user));
			return '1';
		} else {
			$update = DB::update('UPDATE toolbar set favorite = ? WHERE contact_id = ? AND user_id = ?', array(0, $id, $user));
			return '0';
		}
});
Route::post('/touch/{id}' , function( $id ) {

		$user = Session::get('user');
		$check =  DB::select('SELECT touch FROM toolbar WHERE contact_id = ? AND user_id = ?', array($id, $user));
		if ($check[0]->touch == 0){
			$update = DB::update('UPDATE toolbar set touch = ? WHERE contact_id = ? AND user_id = ?', array(1, $id, $user));
			return '1';
		} else {
			$update = DB::update('UPDATE toolbar set touch = ? WHERE contact_id = ? AND user_id = ?', array(0, $id, $user));
			return '0';
		}
});
Route::get('/cities/{city}', function( $city ) {
    $results = DB::table('contacts')
      ->select('*')
      ->where('business_city',$city)
      ->get();
	$json = json_encode($results);
	return $json;
});

Route::get('/cities', function(){
	$results = DB::table('contacts')
		->select('business_city')
		->orderBy('business_city')
		->distinct()
		->get();

	$json = json_encode($results);
	return $json;
});
Route::any('/logout', function() {
  Auth::logout();
  return Redirect::to('/');
});

Route::any('/login', function() {
  // did the user input anything?
  if (Input::has('user') && Input::has('password')){

      $user = Input::get('user');
      Session::put('user', $user);
      $password = Input::get('password');


      //attempt to authorize the user
      if (Auth::attempt(array('user' => $user, 'password' => $password), true))
      {
        
        $type = Auth::user()->type();
        //figure out if user is an admin
        Session::put('type', $type);
        return Redirect::to('/')->with('type', $type);
      }
      else
      {
          //Session::put('user', $user);
        return Redirect::to('/')->with('message', 'Incorrect Username or Password');
      }
    }
    else
    {
        return Redirect::to('/')->with('message', 'Please fill out both fields.');
    }

});
Route::get('/', function(){

  if (Auth::check()){
    //return View::make('home')->with('message', 'test');
    $type = Auth::user()->type();
    if ($type == '1'){
      return View::make('admin')->with('type', $type);
    }
    else {
      return View::make('home')->with('type', $type);
    }
  }
  else
  {
    $data = Session::get('message');
    return View::make('login')->with('warning', $data);
  }


});