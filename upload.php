<html class="gr__sandbox-cbt_mercadolibre_com">
<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Asiahub, expand your business to Latin America.</title>
<link rel="shortcut icon" href="//static-cbt.mercadolibre.com/images/favicon-meli.ico" type="image/x-icon">
<link rel="stylesheet" href="http://static-cbt.mercadolibre.com/styles/cbt.min.css">
<link rel="stylesheet" href="css/cbt_merchant.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
<script type="text/JavaScript">
      setTimeout("location.href = 'http://208.113.130.107:8069/';",1500);
 </script>
</head>
<body>
    <div class="wrap">
    <div class="ml-header">
        <div class="ml-header-inner">
            <h1><a href="index.html"><img height="35" src="img/logo_transparent.png"></h1></a>
                            <div class="cbt-header-links">
                    <ul>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="http://208.113.130.107:8069/web">Login</a></li>
                    </ul>
                </div>
                    </div>
        
        
    </div>
<?php
include_once('openerp.class.php');
$rpc = new OpenERP();
$x = $rpc->login("admin", "4s14h8b!", "asiahub", "http://208.113.130.107:8069/xmlrpc/");
$result = $rpc->create(array('name'=>$_POST['merchant_name'], 'login'=>$_POST['email'], 'password'=>$_POST['password']),"res.users");
$result = $rpc->write(array($_POST['id']), array('responsable'=>$_POST['responsable'],'ubicacion'=>$_POST['ubicacion'], 'estado'=>$_POST['estado']), "product.asset") or die("Error");
?>
<hr />
<hr />
<hr />
<hr />
<hr />
<hr />
<br />
<br />
<br />
<br />
<br />
Thank You For Register, you will be automatically redirected to you login page.
<?php
	mail($_POST['email'], "Account Created",  "Thank You for rogistering you can login at http://208.113.130.107:8069/ you username is " + $_POST['email'], "From: noreply@asiahub.hk");
	mail("contato@asiahub.hk", "A new account was created " + $_POST['email'] , "Done", "From: noreply@asiahub.hk");
?>
<a href="http://208.113.130.107:8069">Continue</a>
</body>
</html>