<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('asset/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('asset/plugins/iCheck/square/blue.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>SEN FORAGE</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg"><b>FACTURATION<b></p>

    <form action="../../index.html" method="post">
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Date Facture">
          <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
          </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="No Facture">
      <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="ID Client">
      <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Periode">
      <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Consommation totale">
      <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Prix du litre d'eau (en FCfa)">
      <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Montant Total (en chiffres)">
      <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Montant Total (en lettres)">
      <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
      </div>

      <div class="row">
         <!--<div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Je suis <a href="#">d'accord</a>
            </label>
          </div>
        </div>-->
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Valider</button>
        </div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Annuler</button>
        </div>

        <!-- /.col -->
      </div>
    </form>

     <!--<div class="social-auth-links text-center">
      <p>- OU -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Se connecter avec
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Se connecter avec
        Google+</a>
    </div>

    <a href="login.html" class="text-center">Je suis déjà membre</a>
  </div>-->
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>
</html>
