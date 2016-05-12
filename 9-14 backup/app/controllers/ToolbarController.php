<?php

class ToolbarController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$user = Session::get('user');
		$check =  DB::select('SELECT * FROM toolbar WHERE contact_id = ? AND user_id = ?', array($id, $user));
		if ($check) {
				if ($check[0]->touch == 0){
					$touch = 'btn-default';
				} else {

				$touch = 'btn-primary';
				}
				if ($check[0]->favorite == 0){
					$favorite = 'btn-default';
				} else {
					$favorite = 'btn-primary';
				}

			$toolbarOptions = ['touch' => $touch, 'favorite' => $favorite ];
			$json = json_encode($toolbarOptions);
			return $json;

		} else {

			$results = DB::insert('insert into toolbar (user_id, contact_id, favorite, touch) values (?, ?, ?, ?)', array($user, $id, 0, 0));
			$toolbarOptions = ['touch'=>'btn-default', 'favorite'=>'btn-default'];
			$json = json_encode($toolbarOptions);
			$json = '['.$json.']';
			return $json;
		}
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}