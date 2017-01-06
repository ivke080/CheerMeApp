<html>
    <head>
        <meta charset="utf-8"/>
        <!--CSS-->
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- bootstrap -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />

        <!--js-->
         
     <script src="bower_components/angular/angular.min.js"></script>
     <script src="bower_components/angular-route/angular-route.js"></script>
       
<script src="https://cdn.firebase.com/v0/firebase.js"></script>
<script src="https://cdn.firebase.com/libs/angularfire/0.5.0/angularfire.min.js"></script>
        

        <script src="js/app.js"></script>
        <script src="js/main/main.controller.js"></script>
        <script src="js/categories/categories.controller.js"></script>
        <script src="js/account/login/login.controller.js"></script>
        <script src="js/chat/chat.controller.js"></script>

        <script src="bower_components/jquery/dist/jquery.min.js"></script>
   
  
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <title>Hackathon</title>
    </head>
    
    <body ng-app="hackathonapp">
        <?php
            session_start();
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user'];
            }
        ?>
        <div id="header-fix"></div>
        <div id="header">
            <a href="/#/"><div class='header-article left' style='background:url("img/crib.png");background-size:contain;'></div></a>
        <?php
            if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
                echo '<a href="/logout.php"><div class="header-article right" style="background:url(\'img/exitFailure.png\');background-size:contain;"></div></a>';
                echo '<a href="/#/profile" class="hideProfile"><div class="header-article right">'.strtoupper($user)[0].'</div></a>';

            }
        ?>
        </div>
        <div class="container">
            <div ng-view></div>
        </div>
   

        <!--<script src="js/scroll.js"></script>-->
        <!--<script src="js/hover.js"></script>-->

    </body>
</html>