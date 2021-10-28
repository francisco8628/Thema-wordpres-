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

    <title>Contatos</title>
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
            </div><!--menu mobile-->
            <div class="clear"></div>          
        </div><!--Center-->
    </section> <!--topo-->
     
    <section class="contato">
          <div class="center">
              <div class="w50 contato-info">
                  <h2>A mais importante a, <br/> preimeira conversa</h2>
                  <br/>
                  <p><b>Telefone:</b>(19) 9 98837026</p>
                  <p><b>Telefone:</b>(19) 9 98837026</p>
                  <p><b>Telefone:</b>(19) 9 98837026</p>
                    <div class="mapa-container">
                        <div id="mapa">

                        </div><!--mapa-->
                    </div><!--mapa-container--> 
              </div><!--w50-->
              <div class="w50 contato-form">
                  <form action="">
                     <input placeholder="Nome" type="text">
                     <input placeholder="E-mail" type="text">
                     <input placeholder="Telefone" type="text">
                     <select name="" id="">
                         <option value="">Geral</option>
                         <option value="">Suporte</option>                      
                     </select>
                     <textarea placeholder="Mensagem" name="" id="" cols="30" rows="10"></textarea>
                     <input type="submit" value="Enviar">
                  </form><!--form-->
              </div><!--w50-->
              <div class="clear"></div>
          </div><!--center-->
    </section><!--contato-->
    

    <footer style="padding: 60px 0;">  
      
        <div class="center">
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a><a href="">FAQ</a>
            </div><!--col-footer-->
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div><!--col-footer-->
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div><!--col-footer-->
            <div style="width: 40%; text-align: right;" class="col-footer">
                <img src="images/logo-footer.png" alt="">
            </div><!--col-footer-->
        </div><!--center-->
    </footer>

    <script src="js/jquery.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
    <script src="js/map.js"></script>
  


</body>

</html>