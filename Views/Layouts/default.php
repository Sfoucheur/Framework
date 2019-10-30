<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Exemple</title>

        <link rel="stylesheet" href="<?php echo WEBROOT."Vendors/bootstrap/css/bootstrap.min.css" ?>">
        <link rel="stylesheet" href="<?php echo WEBROOT."Vendors/DataTables/datatables.min.css" ?>">
        <link rel="stylesheet" href="<?php echo WEBROOT."Vendors/jQueryUI/css/jquery-ui.min.css" ?>">

    </head>

        <script src= <?php echo WEBROOT."Vendors/jQuery/jquery-3.4.1.min.js" ?>></script>
        <script src= <?php echo WEBROOT."Vendors/bootstrap/js/bootstrap.min.js" ?>></script>
        <script src= <?php echo WEBROOT."Vendors/chartJS/chart.js" ?>></script>
        <script src= <?php echo WEBROOT."Vendors/jQueryUI/js/jquery-ui.min.js" ?>></script>
        <script src= <?php echo WEBROOT."Vendors/DataTables/datatables.min.js" ?>></script>
        <script src= <?php echo WEBROOT."Vendors/SweetAlert2/sweetalert2.min.js" ?>></script>

    <body>

        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Exemple de Templates<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main role="main" class="container">

            <div class="starter-template">

                <?php
                    echo $content;
                ?>

            </div>

        </main>

        <footer></footer>

    </body>
</html>
