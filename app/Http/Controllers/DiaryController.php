<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Diary;
use Input;
use Redirect;

class DiaryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $diaries = Diary::all();
        
		return view('diary.home', compact('diaries'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	   return view('diary.create');	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();
        $diary = new Diary;
        $diary->title = $input['title'];
        $diary->body = $input['body'];
        $diary->save();
	       
        return Redirect::action('DiaryController@index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Diary $diary)
	{
        $id = $diary->id;
        $previous = Diary::where('id','<',$id)->max('id');
        $next = Diary::where('id','>',$id)->min('id');
		return view('diary.show', compact('diary'))->with('previous',$previous)->with('next', $next);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Diary $diary)
	{
		return view('diary.edit', compact('diary'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$input = Input::all();
        
        $diary = Diary::find($input['id']);
        $diary->title = $input['title'];
        $diary->body = $input['body'];
        $diary->save();
        
        return Redirect::action('DiaryController@index');
	}

    public function delete(Diary $diary){
        return view('diary.delete', compact('diary'));
    }
    
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
        $diary = Diary::find(Input::get('id'));
        $diary->delete();
		return Redirect::action('DiaryController@index');
	}

}
