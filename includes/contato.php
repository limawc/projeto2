
            <!-- formulário -->

            <div class="container">

                <h1>Contato</h1>

                    <h2>Preencha o formulário e envie-nos uma mensagem.</h2>

                        <form role="form" name="mensagem" id="mensagem" method="GET" action="processa_mensagem.php">

                            <div class="row">

                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="nome">Nome: </label>
                                    <input class="form-control" type="text" name="nome" id="nome">
                                </div>

                            </div>


                            <div class="row">

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <label for="email">E-mail: </label>
                                    <input class="form-control" type="email" name="email" id="email" />
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group col-md-8 col-sm-8 col-xs-12">
                                    <label for="assunto">Assunto: </label>
                                    <input class="form-control" type="text" name="assunto" id="assunto" />
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group col-sm-12">
                                    <label for="mensagem">Mensagem: </label>
                                    <input class="form-control" type="textarea" name="mensagem" id="mensagem" />
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group col-sm-4">
                                    <input type="submit" value="Enviar" />
                                </div>

                            </div>

                        </form>

            </div>





