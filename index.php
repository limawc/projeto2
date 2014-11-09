<?php require_once("includes/topo.php"); ?>

<?php require_once("includes/menu.php"); ?>

<div>

    <?php

        $arquivo = $_GET["arquivo"];

        require_once("$arquivo");

    ?>

</div>

        <!--arquivo do jquery -->

        <script src="js/jquery-1.11.1.js"></script>

        <!--arquivo js bootstrap -->

        <script src="js/bootstrap.min.js"></script>

<?php require_once("includes/footer.php")?>



