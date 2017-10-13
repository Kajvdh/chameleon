<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equic="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- jQuery -->
        <script src="{$fullurl}/js/jquery-1.11.0.min.js"></script>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{$fullurl}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{$fullurl}/css/bootstrap-theme.min.css">
        <script src="{$fullurl}/js/bootstrap.min.js"></script>
        <!--[if lt IE 9]>
          <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	<script type="text/javascript" src="../analyticstracking.js"></script>        
        
        
        <!-- Custom CSS -->
        <link href="{$fullurl}/css/custom_css/login.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="container">
            {if isset($error)}
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Oeps!</strong> {$error}
            </div>
            {/if}
            <form class="form-signin" role="form" method="POST" action="{$fullurl}/login">
                <h2 class="form-signin-heading">Log aub in</h2>
                <input type="text" class="form-control" name="login" placeholder="Nicknaam" required autofocus>
                <input type="password" class="form-control" name="pass" placeholder="Wachtwoord" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>

        </div>
        <center>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Chatbottom -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-4097649742400196"
                 data-ad-slot="7880458067"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </center>
    </body>

</html>
