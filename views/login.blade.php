@extends ('base')
@section('browsertitle')
@stop
@section('content')
      <div class="row">
        <br>
        <br>
      </div>
      <div class="row justify-content-center">
        <div class="col-8">
          <h1>Login</h1>
          <hr>
          <form class="form" action="index.html" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
@stop

