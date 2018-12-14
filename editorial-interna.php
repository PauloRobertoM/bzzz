<?php include 'components/header.php'; ?>

    <section class="pagina-interna noticias editorial-interno">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-8 col-md-8 col-sm-8">
    				<h2 class="titulo-geral">Notícias</h2>

                    <img src="assets/images/editorial-interna.jpg" class="img-editorial" alt="">
                    <span>Há 3 horas</span>
                    <h4>Lorem ipsum dolor sit am, consectetur erat sed maximus semper, lectus mi.</h4>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent molestie dapibus porta. In mauris justo, placerat eget risus vel, interdum feugiat erat. Praesent placerat orci varius, tempor erat auctor, condimentum erat. Maecenas sit amet volutpat lectus, et interdum metus. Pellentesque sed vehicula lacus.</p>

                    <p>Etiam ac erat in odio eleifend feugiat. Etiam id dignissim lectus, ut varius arcu. Nam est augue, faucibus convallis gravida quis, viverra ut nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam fermentum mauris nunc. Nam eu condimentum tortor. Proin condimentum, lorem et interdum molestie, justo dui viverra velit, et gravida nulla orci et leo. Morbi et nisi consequat risus sodales gravida. Aenean ut mollis justo, a hendrerit dui. Curabitur vel blandit neque.</p>

                    <p>Proin luctus quam nec lacinia interdum. Integer ac tortor odio. Aenean sollicitudin tincidunt tellus, at ultrices sem luctus laoreet. Vivamus ut sollicitudin mi, a consequat mi. Donec gravida euismod leo. Vivamus urna orci, feugiat ac ligula a, imperdiet interdum sem. Integer mauris lorem, blandit id sapien eget, luctus rutrum augue. Duis tincidunt lorem leo, ac suscipit arcu hendrerit vitae. Donec scelerisque sodales posuere. Nullam et orci ac nulla maximus volutpat in a nibh. In hac habitasse platea dictumst. Proin ultrices velit ut mauris efficitur, quis tempor massa volutpat. In tortor erat, tempus a viverra blandit, sagittis aliquet arcu.</p>

                    <div class="shares">
                        <ul>
                            <li><a href="" class="hvr-float"><img src="assets/images/face.png" alt=""></a></li>
                            <li><a href="" class="hvr-float"><img src="assets/images/twitter.png" alt=""></a></li>
                            <li><a href="" class="hvr-float"><img src="assets/images/gplus.png" alt=""></a></li>
                            <li><a href="" class="hvr-float"><img src="assets/images/link.png" alt=""></a></li>
                        </ul>
                        <!-- COMMENTS -->
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7&appId=300193366983202";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                        <div class="fb-comments" data-href="" data-width="100%" data-numposts="5"></div>
                    </div><!-- .shares -->

                    <div class="mais-lidas">
                        <h2 class="titulo-geral">Últimas Notícias</h2>

                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <a href="">
                                    <img src="assets/images/campanha.jpg" alt="Campanha - BZZZ" />
                                    <div class="content">
                                        <h2>MUNDO</h2>
                                        <h4>Lorem ipsum dolor sit am, consectetur erat sed maximus semper, lectus mi.</h4>
                                        <p>Há 3 horas</p>
                                    </div><!-- content -->
                                </a>
                            </div><!-- md-3 -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <a href="">
                                    <img src="assets/images/campanha.jpg" alt="Campanha - BZZZ" />
                                    <div class="content">
                                        <h2>MUNDO</h2>
                                        <h4>Lorem ipsum dolor sit am, consectetur erat sed maximus semper, lectus mi.</h4>
                                        <p>Há 3 horas</p>
                                    </div><!-- content -->
                                </a>
                            </div><!-- md-3 -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <a href="">
                                    <img src="assets/images/campanha.jpg" alt="Campanha - BZZZ" />
                                    <div class="content">
                                        <h2>MUNDO</h2>
                                        <h4>Lorem ipsum dolor sit am, consectetur erat sed maximus semper, lectus mi.</h4>
                                        <p>Há 3 horas</p>
                                    </div><!-- content -->
                                </a>
                            </div><!-- md-3 -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <a href="">
                                    <img src="assets/images/campanha.jpg" alt="Campanha - BZZZ" />
                                    <div class="content">
                                        <h2>MUNDO</h2>
                                        <h4>Lorem ipsum dolor sit am, consectetur erat sed maximus semper, lectus mi.</h4>
                                        <p>Há 3 horas</p>
                                    </div><!-- content -->
                                </a>
                            </div><!-- md-3 -->
                        </div><!-- row -->
                        <div class="borda"></div>
                    </div><!-- mais-lidas -->

                    <img src="assets/images/banner-interno.jpg" alt="" class="banner-interno">
    			</div><!-- md-8 -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <?php include 'components/sidebar.php'; ?>
                </div><!-- col-md-4 -->
    		</div><!-- row -->
    	</div><!-- container -->
    </section><!-- pagina-interna noticias -->


<?php include 'components/footer.php'; ?>