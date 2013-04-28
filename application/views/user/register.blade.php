@layout('site.master')

@section('content')
<h3>Please register, why dont you.</h3>
<form class="form-horizontal" action="" method="post">
  <div class="control-group">
    <label class="control-label" for="inputName">Username</label>
    <div class="controls">
      <input type="text" name="inputName" id="inputName" placeholder="Username">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="text" name="inputEmail" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" name="inputPassword" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword2">Password, again!</label>
    <div class="controls">
      <input type="password" name="inputPassword2" id="inputPassword2" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> Remember me
      </label>
      <button type="submit" class="btn">Register</button>
    </div>
  </div>
</form>
@endsection
