<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>rZeronte | Web Developer</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Global CSS -->
    <?= $this->Html->css('../plugins/bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->css('cake.generic.css') ?>

    <!-- Plugins CSS -->
    <?= $this->Html->css('../plugins/font-awesome/css/font-awesome.css') ?>
    <?= $this->Html->css('../plugins/prism/prism.css') ?>

    <!-- Theme CSS -->
    <?= $this->Html->css('styles.css') ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58686503-1', 'auto');
  ga('send', 'pageview');

</script>

<body data-spy="scroll">

    <!---//Facebook button code-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- ******HEADER****** -->
    <header id="header" class="header navbar-fixed-top">
        <div class="container">

            <h1 class="logo pull-left">
                    <span class="logo-title">
                        <?php echo $this->Html->link('rZeronte Labs', "/"); ?>
                    </span>
            </h1><!--//logo-->

            <!-- Main menu-->
            <?php echo $this->element("mainmenu"); ?>
        </div>
    </header>

    <!-- ****** CONTENT ****** -->
    <section class="promo section">
        <?= $this->fetch('content') ?>
    </section>
    <!-- ******FOOTER****** -->
    <footer class="footer">
        <div class="container text-center">
            <small class="copyright">rZeronte Labs - <?php echo date("Y");?></small>
        </div><!--//container-->
    </footer>

    <!-- Javascript -->
    <?= $this->Html->script('../plugins/jquery-1.11.1.min.js') ?>
    <?= $this->Html->script('../plugins/jquery-migrate-1.2.1.min.js') ?>
    <?= $this->Html->script('../plugins/jquery.easing.1.3.js') ?>
    <?= $this->Html->script('../plugins/bootstrap/js/bootstrap.min.js') ?>
    <?= $this->Html->script('../plugins/jquery-scrollTo/jquery.scrollTo.min.js') ?>
    <?= $this->Html->script('../plugins/prism/prism.js') ?>
</body>
</html>

