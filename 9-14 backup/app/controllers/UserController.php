<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    $user = Input::get('user');
    $password = Input::get('password');
    echo $user;
    echo $password;
    echo 'test';
	}
}
