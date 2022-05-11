<div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session))</p>
      <div class="row">
      <?if(isset($_SESSION['error'])):?>
        <div class="col-md-3">
            <div class="card bg-danger">
              <div class="card-header">
                <h3 class="card-title">Danger</h3>
              </div>
              <div class="card-body">
                <?=$_SESSION['error']?>
                <?unset($_SESSION['error'])?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
              <?endif;?>
      </div>
      <form action="<?=ADMIN?>/user/login" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="login" id="login" placeholder="Login">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>