 @extends('layout')



@section('content')

<section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Create</h2>
          <p>Create the movies you have watched recently or before with a title and short description about your views, then hit create.</p>       
          <hr class="bottom-line">
        </div>
        
      </div>
    </div>
  </section>



  @if (count($errors) > 0)
  @foreach ($errors->all() as $error)
  <p class="alert alert-danger">{{$error}}</p>
  @endforeach
  @endif
<form method="POST" action="/members/successlogin" class="mc-trial row">
       {{csrf_field()}}
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            <input name="heading" placeholder="Movie Title" class="form-control" type="text" required>
          </div>
        </div>
        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <textarea name="information" placeholder="Your Review" class="form-control" required></textarea>
          </div>
        </div>
        
<div class="">
    <b> Your Rating (1 to 5):</b> <input type="number" name="rating" min="1" max="5"> &nbsp<b class="fa fa-star"></b>
</div>

 <br/>
 <br/>
        <div class="container text-center">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Create Movie <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>
 <br/>
<br/>



@endsection



