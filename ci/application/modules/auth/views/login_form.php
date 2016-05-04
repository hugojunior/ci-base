<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?=base_url();?>assets/libs/AdminLTE/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/libs/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/libs/AdminLTE/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/libs/AdminLTE/plugins/iCheck/square/blue.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Fazer</b>Login</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Faça login para acessar sua conta</p>
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Login" name="login">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Senha" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> &nbsp;&nbsp;&nbsp;Permanecer conectado
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            </div><!-- /.col -->
          </div>
        </form>
        <hr>
        <a href="<?=base_url();?>auth/forgot">Recuperar minha senha</a><br>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="<?=base_url();?>assets/libs/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?=base_url();?>assets/libs/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/libs/AdminLTE/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%'
        });
      });
    </script>
  </body>
</html>