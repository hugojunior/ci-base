<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Usuário Logado</title>
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
        <a href="<?=base_url();?>"><b>Usuário</b>Logado</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="text-center">Você está logado como: <span style="font-size:18px;"><strong>Hugo Júnior</strong></span>.</p>
        <p class="text-right"><a href="<?=base_url();?>auth/logout" class="btn btn-block btn-primary">Sair</a></p>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="<?=base_url();?>assets/libs/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?=base_url();?>assets/libs/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
