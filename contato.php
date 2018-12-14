<?php include 'components/header.php'; ?>

    <section class="pagina-interna noticias contato">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-8 col-md-8 col-sm-8">
    				<h2 class="titulo-geral">Contato</h2>
                    <form>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="NOME" value="" />

                        <input type="text" name="assunto" id="assunto" class="form-control" placeholder="ASSUNTO" value="" />

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="email" id="email" class="form-control" placeholder="E-MAIL" value="" />
                            </div><!-- .md-6 -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="TELEFONE" value="" />
                            </div><!-- .md-6 -->
                        </div><!-- .row -->

                        <textarea name="mensagem" id="mensagem" class="form-control" placeholder="MENSAGEM"></textarea>

                        <button>enviar</button>
                    </form>

                    <img src="assets/images/banner-interno.jpg" alt="" class="banner-interno">
    			</div><!-- md-8 -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <?php include 'components/sidebar.php'; ?>
                </div><!-- col-md-4 -->
    		</div><!-- row -->
    	</div><!-- container -->
    </section><!-- pagina-interna noticias -->


<?php include 'components/footer.php'; ?>