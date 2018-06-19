<div class="alert alert-warning alert-danger fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <ul>
      @foreach($_SESSION['msg'] as $error)
        <li>{{$error}}</li> 
      @endforeach
    </ul>
  </div>