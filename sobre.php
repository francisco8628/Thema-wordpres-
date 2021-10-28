<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Sobre</title>
</head>

<body>
    <section class="topo">
        <div class="center">

            <div class="logo">
                <img src="images/logo.png" alt="">
            </div>
            <!--logo-->
            <ul class="menu-desktop">
                <li>
                    <a href="">Home</a>
                    <a href="">Sobre</a>
                    <a href="">Contatos</a>

                </li>
            </ul>
            <!--menu-desktop-->
            <div class="menu-mobile">
                <i class="fas fa-bars" style="color: white;font-size: 30px; margin-right: 10px;"></i>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contatos</a></li>
                </ul>
            </div>
            <!--menu mobile-->
            <div class="clear"></div>          
        </div>
        <!--Center-->


    </section> <!--topo-->

    <section class="sobre-equipe">
        <div class="center">
            <div class="w50 sobre-equipe-texto" >
                <h2>Uma equipe estrategica para um trabalho incrivel</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Itaque aut laudantium doloribus veritatis aperiam quidem,
                     corporis error iste. Ut itaque dolor illum tempora inventore
                      maxime dignissimos vero eos quod quisquam?</p>
            </div><!--"w50"-->
            <div class="w50">
                <img src="images/foto-equipe-01.png" alt="">
            </div><!--"w50"-->
        </div><!--center-->
    </section><!--sobre-equipe-->

    <section class="sobre-imagens">
        <div class="center">
            <div class="imagem-sobre">
                <img src="images/foto-1.png" alt="">
            </div><!--imagem sbre-->
            <div class="imagem-sobre">
                <img src="images/foto-1.png" alt="">
            </div><!--imagem sbre-->
            <div class="imagem-sobre">
                <img src="images/foto-1.png" alt="">
            </div><!--imagem sbre-->
            <div class="imagem-sobre">
                <img src="images/foto-1.png" alt="">
            </div><!--imagem sbre-->
        </div><!--center-->
    </section><!--"sobre-imagens"-->

    <footer>
        <section class="metodologia">
            <div class="center">
                <h2>Coneheça nossa metodologia</h2>
                <p>Lorem ipsum dolor siio. Sunt eveniet assumenda, edit, recusandae animi nemo corrupti magni!
                    <br />Entre em contato por email
                </p>
                <a href="">Entrar em Contato</a>
            </div><!--center-->
        </section><!--metodologia-->
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
                <img src="images/logo-footer.png" alt="">
            </div>
        </div><!--center-->
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
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