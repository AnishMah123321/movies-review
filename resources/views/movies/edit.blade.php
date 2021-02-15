@extends('layout')



@section('content')


		<section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Edit</h2>
          <p>Edit update and delete the movies you have saved and change their state as you wish. Then hit update or delete</p>
          <hr class="bottom-line">
        </div>
        
      </div>
    </div>
  <br/>

<form method="POST" action="/members/successlogin/{{ $movie->id}}">
	{{ method_field('PATCH') }}
	{{ csrf_field() }}

        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            <input name="heading" placeholder="Heading" class="form-control" type="text" value="{{ $movie->heading}}">
          </div>
        </div>
        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <textarea name="information" placeholder="Information" class="form-control">{{ $movie->information}}</textarea>
          </div>
        </div>
        <!-- End email input -->
        <div class="col-md-2 col-sm-4">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Update Movie <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>

      <form method="POST" action="/members/successlogin/{{ $movie->id}}">
	{{ method_field('DELETE') }}
	{{ csrf_field() }}

        <div class="col-md-2 col-sm-4">
          
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Delete Movie <i class="fa fa-arrow-right"></i></button>
          
        </div>
      </form>
 <br/>
<br/>


       </section> 



@endsection