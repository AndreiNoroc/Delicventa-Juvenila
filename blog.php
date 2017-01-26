<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<?php

require_once 'conn.php';
require 'blogForm.php';

?>

<body>

    <div class="brand">Delicventa Juvenila</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Acasa</a>
                    </li>
                    <li>
                        <a href="about.php">Despre</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="bibliografie.php">Bibliografie</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Aici puteti lasa sfaturi si masuri pentru combaterea delicventei juvenile!</strong></h2>
                    <hr>
                </div>
            </div>

    <div class="container">

                 <div class="row">
<?php

    $query="SELECT * FROM socio";
    $result = $conn->query($query);

    while ($r = $result->fetch_assoc()) {
?>

        
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><?= $r['title']; ?></h2>
                    <hr>
                    <h3>Articol:</h3>
                    <p style="margin-left:30px;"><?= $r['texts']; ?></p>
                    <h4 class="text text-right">Nume: <?= $r['user']; ?></h4>
                </div>
            </div>

<?php
    }
?>
        </div>

    <section id="article" style="margin-bottom:50px;">
        <div class="container" style="margin-bottom:-25px;">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color:white;">Adauga articol</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <form action="<?= $_SERVER['PHP_SELF'] ?>"  id="contactForm" method="POST" style="margin-top:50px;">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">

                                <div class="form-group" style="margin-top:25px;">
                                    <label class="label label-warning">Nume</label>
                                    <input type="text" class="form-control" placeholder="Nume" id="user" name="user" maxlength="40">
                                    <p class="help-block text-danger" style="color:white;"><?= $nameerr; ?></p>
                                </div>

                                <div class="form-group" style="margin-top:25px;">
                                    <label class="label label-warning">Titlu</label>
                                    <input type="text" class="form-control" placeholder="Titlu" id="title" name="title" maxlength="40">
                                    <p class="help-block text-danger" style="color:white;"><?= $titleerr; ?></p>
                                </div>

                                <div class="form-group" style="margin-top:25px;">
                                    <label class="label label-warning">Articol</label>
                                    <textarea class="form-control" placeholder="Text" id="texts" name="texts" maxlength="1001">
                                    </textarea>
                                    <p class="help-block text-danger" style="color:white;"><?= $texterr; ?></p>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center" style="margin-top:25px;">
                                <div id="success"></div>
                                <input type="submit" class="btn btn-ml" id="buttonSubmit" value="Posteaza">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Noroc Andrei 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
