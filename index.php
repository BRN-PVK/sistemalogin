<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Pagina Principal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>

    <body>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <div class="cotn_principal">
            <div class="cont_centrar">
            <div class="cont_login">
                <div class="cont_info_log_sign_up">
                <div class="col_md_login">
                    <div class="cont_ba_opcitiy">
                    <h2>LOGIN</h2>
                    <p></p>
                    <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                    </div>
                </div>
                <div class="col_md_sign_up">
                    <div class="cont_ba_opcitiy">
                    <h2>CADASTRO</h2>


                    <p></p>

                    <button class="btn_sign_up" onclick="cambiar_sign_up()">CADASTRO</button>
                    </div>
                </div>
                </div>


                <div class="cont_back_info">
                <div class="cont_img_back_grey">
                    <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png"
                    alt="" />
                </div>

                </div>
                <div class="cont_forms">
                <div class="cont_img_back_">
                    <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png"
                    alt="" />
                </div>
                <form name = "login" action="./php/logar.php" method="POST">
                    <div class="cont_form_login">
                        <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons"></i></a>
                        <h2>LOGIN</h2>
                        <input type="text" placeholder="Usuário" name="usuario"/>
                        <input type="password" placeholder="Senha" name="senha"/>
                        <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                    </div>
                </form>

                <form name = "reg" action="./php/cadastrar.php" method="POST">
                <div class="cont_form_sign_up">
                    <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons"></i></a>
                    <h2>CADASTRO</h2>
                    <input type="text" placeholder="Usuário" name="usuario"/>
                    <input type="password" placeholder="Senha" name="senha"/>
                    <button class="btn_sign_up" onclick="cambiar_sign_up()">CADASTRO</button>

                </div>

                </div>

            </div>
            </div>
        </div>
        <script>
                /* ------------------------------------ Click on login and Sign Up to changue and view the effect
            ---------------------------------------
            */

                function cambiar_login() {
                document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";
                document.querySelector('.cont_form_login').style.display = "block";
                document.querySelector('.cont_form_sign_up').style.opacity = "0";

                setTimeout(function () { document.querySelector('.cont_form_login').style.opacity = "1"; }, 400);

                setTimeout(function () {
                    document.querySelector('.cont_form_sign_up').style.display = "none";
                }, 200);
                }

                function cambiar_sign_up(at) {
                document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
                document.querySelector('.cont_form_sign_up').style.display = "block";
                document.querySelector('.cont_form_login').style.opacity = "0";

                setTimeout(function () {
                    document.querySelector('.cont_form_sign_up').style.opacity = "1";
                }, 100);

                setTimeout(function () {
                    document.querySelector('.cont_form_login').style.display = "none";
                }, 400);


                }



                function ocultar_login_sign_up() {

                document.querySelector('.cont_forms').className = "cont_forms";
                document.querySelector('.cont_form_sign_up').style.opacity = "0";
                document.querySelector('.cont_form_login').style.opacity = "0";

                setTimeout(function () {
                    document.querySelector('.cont_form_sign_up').style.display = "none";
                    document.querySelector('.cont_form_login').style.display = "none";
                }, 500);

                }




            </script>
        <script type="text/javascript">
        </script>
    </body>
</html>