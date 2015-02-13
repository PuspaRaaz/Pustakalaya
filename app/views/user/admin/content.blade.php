<div class="panel panel-default">
  <div class="panel-heading">
    <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Stats
  </div>
  <div class="panel-body">
    <a href="{{URL::to('/book')}}" class="btn btn">
      <h4><small><span class="glyphicon glyphicon-book" aria-hidden="true"></span></small> Book </h4>
      <span>234</span>
    </a>

    <a href="{{URL::to('/user')}}" class="btn btn-lg">
      <h4><small><span class="glyphicon glyphicon-user " aria-hidden="true"></span></small> User </h4>
      <span>34</span>
    </a>

    <a href="#" class="btn btn-lg">
      <h4><small><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></small> Notification </h4>
      <span>29</span>
    </a>
    <a href="#" class="btn btn-lg">
      <h4><small><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></small> Query </h4>
      <span>10</span>
    </a>
    <a href="#" class="btn btn-lg">
      <h4><small><span class="glyphicon glyphicon-user " aria-hidden="true"></span></small> Request </h4>
      <span>110</span>
    </a>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Create
  </div>

  <div class="panel-body">

    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
      <a href="{{URL::to('book/create')}}" class="btn btn-lg  btn-block">
        <h2><span class="glyphicon glyphicon-book" aria-hidden="true"></span></h2>
        <h4>Book</h4>
      </a>
    </div>


    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
      <a href="{{URL::to('bookitem/create')}}" class="btn btn-lg  btn-block">
        <h2><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></h2>
        <h4>Bookitem</h4>
      </a>
    </div>

    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
      <a href="#" class="btn btn-lg btn-block dropdown-toggle" data-toggle="dropdown">
        <h2><span class="glyphicon glyphicon-user " aria-hidden="true"></span></h2>
        <h4>User</h4>
      </a>
      <ul class="dropdown-menu">
        <li><a href="{{URL::to('user/create?type=student')}}">Student</a>
        </li>
        <li><a href="{{URL::to('user/create?type=admin')}}">Admin</a>
        </li>
        <li><a href="{{URL::to('user/create?type=librarian')}}">Librarian</a>
        </li>
        <li><a href="{{URL::to('user/create?type=verifier')}}">Verifier</a>
        </li>
      </ul>
    </div>

    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
      <a href="#" class="btn btn-lg btn-block">
        <h2><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></h2>
        <h4>Notification</h4>
      </a>
    </div>

  </div>
</div>
