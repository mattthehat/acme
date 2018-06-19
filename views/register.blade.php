@extends ('base');
@section('browsertitle')
@stop
@section('content')
      <div class="row">
        <br>
        <br>
      </div>
      <div class="row justify-content-center">
        <div class="col-8">
          <h1>Register</h1>
          <hr>
          @if(isset($_SESSION['msg']))
            @include('errorMessage')
          @endif
            <form id="registerform" class="form" action="/register" method="post" novalidate>
              <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control" id="first_name" aria-describedby="first_nameHelp" placeholder="Enter first name" value="@if(isset($_REQUEST['first_name'])) {{$_REQUEST['first_name']}} @endif">
              </div>
              <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="last_name" aria-describedby="last_nameHelp" placeholder="Enter last name" value="@if(isset($_REQUEST['last_name'])) {{$_REQUEST['last_name']}} @endif">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email"  placeholder="Enter email address" value="@if(isset($_REQUEST['email'])) {{$_REQUEST['email']}} @endif">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" >
              </div>
              <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm password">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
@stop


