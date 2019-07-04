@extends('default')
    @section('section')

     <div class="login-box">
           <div class="login-logo">
    <a href="#"><b>SEN FORAGE</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><b>Se connecter</b></p>

    <form action="/devweb/public/default-content" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Identifiant">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Mot de passe">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Se souvenir de moi
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Connexion</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    {{-- <div class="social-auth-links text-center">
      <p>- OU -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Se connecter avec
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Se connecter avec
        Google+</a>
    </div> --}}
    <!-- /.social-auth-links -->

    <a href="#">Mot de passe oublié</a><br>
    {{-- <a href="#" class="text-center">Nouvelle inscription</a> --}}
  </div>
  <!-- /.login-box-body -->
 </div>
<!-- /.login-box -->
@endsection

