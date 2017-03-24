<html>
<?php   if (isset($this->session->userdata['logged_in'])) {
    header("location: http://localhost/Jabes/index.php/user_authentication/user_login_process");
}
?>
<head>
    <title>Jabes | Gestão do Negócio</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/style.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome <-->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
     <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/iCheck/square/blue.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<?php
    if (isset($logout_message)) {
        echo "<div class='alert-info'>";
        echo $logout_message;
        echo "</div>";
    }  
?>
<div class="login-box">
    <?php echo form_open('user_authentication/user_login_process'); ?>
        <?php
            echo "<div class='error_msg'>";
            if (isset($error_message)) {
                echo $error_message;
            }
            echo validation_errors();
            echo "</div>";
        ?>
  <div class="login-logo">
  Jabes Web
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Digite suas credenciais para iniciar a sessão</p>
    <form action="#" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" id="name" placeholder="Usuário"/><br /><br />
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Lembrar meus dados
            </label>
          </div>
        </div>
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat" value=" Login " name="submit">Iniciar Sessão</button>
        </div>
      </div>
      <?php echo form_close(); ?>
    </form>
  </div>
  <?php
      if (isset($message_display)) {
        echo "<div class='callout callout-info'>";
        echo $message_display;
        echo "</div>";
      }
  ?>
</div>
<!-- JAVACRIPT SCRIPTS CALLS AND PLUGINS-->
<script src="<?php echo base_url(); ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url(); ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>