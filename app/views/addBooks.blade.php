@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Admin/<span class="lead">Puspe</span></h2>
  </div>
</div>

<div class="row">
  <div class="col-md-2">
    <ul class="nav nav-pills nav-stacked">
    <li><a href="{{{ URL::to('/admin') }}}">Home</a></li>
    <li><a href="{{{ URL::to('/recommended') }}}">Recommended Books</a></li>
    <li><a href="{{{ URL::to('/trending') }}}">Trending</a></li>
    <li><a href="{{{ URL::to('/addnewbook') }}}">Add New Book</a></li>
    <li class="active"><a href="{{{ URL::to('/addbooks') }}}">Add Books</a></li>
    </ul>
  </div>

  <div class="bookaddition-form">
    <div class="col-lg-7">
      <form class="form-horizontal">
        <fieldset>
          <legend>Add Books</legend>
          <div class="form-group">
            <label for="inputISBN" class="col-lg-2 control-label">ISBN</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputISBN" placeholder="ISBN" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputBookIDs" class="col-lg-2 control-label">Books IDs</label>
            <div class="col-lg-10">
              <textarea class="form-control" rows="3" id="inputBookIDs" placeholder="Place book IDs here..."></textarea>
              <span class="help-block">Enter book ids seperated by a semicolon.</span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Add</button>
              <button class="btn btn-default pull-right">Cancel</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
    <div class="col-lg-3">
      <div class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>        
    	<span class="badge"><b>12</b></span> <strong>Gone with the wind</strong> added.</a>
      </div>

      <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>To kill a mocking bird</strong> can't be added. Try again.</a>
      </div>

    </div>
  </div>
</div>

@stop


@stop
