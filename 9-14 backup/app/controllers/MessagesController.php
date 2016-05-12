<?php

class MessagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
    //$results = DB::table('messages')
      //->select('*')
      //->distinct()
      //->get();

    return Messages::all()->toJson();

    //$json = json_encode($results);
    //return $json;
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
    $message = Input::get('message');
    $user = Input::get('user');
    $timestamp = date('M');
    $thread = Input::get('thread');
    $results = DB::insert('insert into messages (message, user, timestamp, thread) values (?,?,?,?)', array($message, $user, $timestamp, $thread));
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
    $results = DB::table('messages')
      ->select('*')
      ->where('id', $id)
      ->get();
    $json = str_replace(array('[', ']'), '', json_encode($results));
    return $json;
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
    var_dump(Input::all());
    $_message = Input::get('message');
    $results = DB::update('update messages set message = ? where id = ?', array($_message , $id));
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

				$results = DB::delete('delete from messages where id = ?', array($id));
        return $results;
	}
}
