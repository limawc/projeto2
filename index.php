<?php require_once("includes/topo.php"); ?>

<?php require_once("includes/menu.php"); ?>

<?php require_once("includes/functions.php"); ?>

<div>

    <?php

        $url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

        $rota = explode("/",$url['path'],2);

        direcionaRota($rota);

    ?>

</div>

        <!--arquivo do jquery -->

        <script src="js/jquery-1.11.1.js"></script>

        <!--arquivo js bootstrap -->

        <script src="js/bootstrap.min.js"></script>

<?php require_once("includes/footer.php")?>



