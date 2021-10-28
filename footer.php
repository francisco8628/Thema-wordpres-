<footer>
        <section class="metodologia">
            <div class="center">
                <h2>Coneheça nossa metodologia</h2>
                <p>Lorem ipsum dolor siio. Sunt eveniet assumenda, edit, recusandae animi nemo corrupti magni!
                    <br />Entre em contato por email
                </p>
                <a href="">Entrar em Contato</a>
            </div>
        </section>
        <!--metodologia-->
        <div class="center">
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a><a href="">FAQ</a>
            </div>
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div>
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div>
            <div style="width: 40%; text-align: right;" class="col-footer">
                <img src="<?php echo get_theme_root_uri(); ?>/fr-thems/images/logo-footer.png" alt="">
            </div>
        </div>
        <!--center-->
    </footer>
    <?php wp_footer();?> 
    <script src="<?php echo get_theme_root_uri(); ?>/fr-thems/js/jquery.js"></script>
    <script src="<?php echo get_theme_root_uri(); ?>/fr-thems/js/slick.min.js"></script>
    <script type="text/javascript">
        $('section.client-slide .slider-container').slick({
            dots: true,
            arrows: false,
            infinite: false,
            speed: 1000,
            slidesToShow: 4,
            autoplay: true,
            centerMode: false,
            autoplaySpeed: 3000,
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                }
            ]
        });
        $('section.depoimentos .depoimentos-box').slick({
            dots: true,
            arrows: false,
            infinite: false,
            speed: 1000,
            slidesToShow: 1,
            autoplay: true,
            centerMode: false
        });

    </script>
    <script>
        //menu responsivo
        $('.menu-mobile i').click(function () {
            $('.menu-mobile').find('ul').slideToggle()
        })
    </script>
</body>

</html>