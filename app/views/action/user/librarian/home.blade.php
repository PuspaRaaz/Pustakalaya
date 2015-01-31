@extends('layout.basic')

@section('content')

<div class="row">
  <div class="col-lg-8 col-md-7 col-sm-6">
    <h2>Issue, Return or Renew Books
    </h2>
  </div>
</div>

<hr>

<div class="transaction-form">
  <div class="row">
    <div class="col-lg-8">
      <form class="form-horizontal">
        <fieldset>
          <!--<legend>Issue, Renew or Return books</legend> -->

          <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Username</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputEmail" placeholder="Username" type="text">
            </div>
          </div>

          <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Books</label>
            <div class="col-lg-10">
              <textarea class="form-control" rows="3" id="inputBook" placeholder="Place book IDs here..."></textarea>
              <span class="help-block">Enter book ids seperated by a semicolon.</span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Renew</button>
              <button type="submit" class="btn btn-success">Issue</button>
              <button type="submit" class="btn btn-warning">Return</button>
              <button class="btn btn-default pull-right">Cancel</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>

    @include('layout.alertbox')

  </div>
</div>

@stop