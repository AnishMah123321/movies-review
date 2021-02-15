<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Mail\Newsletter;
use Illuminate\Support\Facades\Mail;
use Auth;
class MoviesController extends Controller
{
    public function index()
    {
    	$movie = Movie::all();
    	return view('members.successlogin', compact('movie'));

    }

    public function create()
    {
    	return view('movies.create');
    }

 public function show(Movie $movie)
 {
return view('movies.view', compact('movie'));

 }

 public function edit($id)
 {
 	$movie = Movie::findOrFail($id);
  

    return view('movies.edit', compact('movie'));

 }

  public function update($id)
  {

     $movie = Movie::findOrFail($id);
  $movie->heading = request('heading');
   $movie->information = request('information');
  $movie->save();
  return redirect('/members/successlogin');
  }

public function destroy($id)
  {
 Movie::find($id)->delete();
 return redirect('/members/successlogin');
  }

public function store()
{
	$movie = new Movie();
	$movie->heading = request('heading');
	$movie->information = request('information');
  $movie->rating = request('rating');
  $movie->owner_id = Auth::user()->id;
  $movie->owners = Auth::user()->name;
  $movie->save();

  Mail::to($movie->owner->email)->send(
   new Newsletter($movie) 
  ); 

	return redirect('members/successlogin');

}    
public function __construct() 
{
  $this->middleware('auth');
}

public function saveWatch()
{

   return $posts = post::where('owner_id',1);
}

public function view_movie($owner_id){
    $owner = User::find($owner_id);
    $movies = $owner->movies()->get();

    return View::make("view")->with(array("owner" => $owner, "movies" => $movies));
}



}
