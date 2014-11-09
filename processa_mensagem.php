<?php


$nome = $_GET["nome"];
$email = $_GET["email"];
$assunto = $_GET["assunto"];
$mensagem = $_GET["mensagem"];

?>

<?php require_once("includes/topo.php"); ?>

<?php require_once("includes/menu.php"); ?>

    <section>

        <div class="container">

            <h2>Dados enviados com sucesso.</h2>

            <h4>Seguem, abaixo, os dados enviados:</h4>

            <br />

            <p>Nome: <?php echo $nome; ?></p><br />

            <p>E-mail: <?php echo $email; ?></p><br />

            <p>Assunto: <?php echo $assunto; ?></p><br />

            <p>Mensagem: <?php echo $mensagem; ?></p><br />


        </div>

    </section>

    <!--arquivo do jquery -->

    <script src="js/jquery-1.11.1.js"></script>

    <!--arquivo js bootstrap -->

    <script src="js/bootstrap.min.js"></script>



<?php require_once("includes/footer.php")?>