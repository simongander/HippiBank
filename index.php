<head>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<style>
 body {
     background-color: grey;
     color: white;
 }
</style>
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span><a class="navbar-brand" href = "">HippiBank</a></span>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav">
          <!-- Zeigt Routen automatisch in der Navigationsleiste an -->
        <?php
            require 'core/bootstrap.php';

            $uri = $_GET['uri'] ?? '';

            require 'routes.php';
            foreach($routeList as $routeName=>$route){
                if ($routeName === $uri) {
                    echo '<li class="active"><a href="'.$routeName.'">'.$routeDescriptions[$routeName].'</a></li>';
                }
                else {
                    echo '<li><a href="'.$routeName.'">'.$routeDescriptions[$routeName].'</a></li>';
                }
            };
        ?>
        </ul>
    </div>
  </div>
</nav>


<?php
require $router->parse($uri);
?>
</body>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
