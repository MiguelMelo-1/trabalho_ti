<!DOCTYPE html>

<html>



<head>
    <meta charset="utf-8">
    <link href="/trabalho_ti/public/assets/img/logo/cmhandy_logo_branco.png" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <link rel="stylesheet" href="/trabalho_ti/public/assets/css/app.css" />
    <link rel="stylesheet" href="/trabalho_ti/public/assets/fontawesome-free-6.1.1-web\css\all.css">
    <title>CMHandyMans - Resgisto</title>

    <style>
        body{
            overflow: hidden;
        }
    </style>
    
</head>

<body class="py-5">
    <!-- BEGIN: Login Form -->
    <div class="relative h-screen ">
        <div class="flex py-5 xl:py-0 ">
            <div class="mx-auto  px-5 sm:px-8 py-8 rounded-md shadow-md w-full sm:w-3/4 md:w-1/2 xl:w-1/4"
                style="background-color: rgba(0,0,0,0.6)">
                <img alt="cmhandymanlogo" src="/trabalho_ti/public/assets/img/logo/cmhandy_logo_branco.png" height="81px"
                    width="350px">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left text-white mt-5">Registar
                </h2>

                <form action="/trabalho_ti/register/verify" method="POST">

                    <div class="intro-x mt-3">
                        <input type="text" name="text_userNome"
                            class="intro-x login__input form-control py-3 px-4 border-gray-300 block"
                            placeholder="Nome completo">
                        <input type="email" name="text_userEmail"
                            class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-3"
                            placeholder="Email">
                        <input type="password" id="text_userPassword" name="text_userPassword"
                            class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-3"
                            placeholder="Palavra-passe">
                        <input type="password" id="text_userPassword_confirmation" name="text_userPassword_confirmation"
                            class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-3"
                            placeholder="Confirmação da Palavra-passe">


                        <div class="intro-x text-slate-400 mt-3 text-xs sm:text-sx">
                            <p class="style: text-justify">O <b>nome do utilizador</b> só aceita letras e espaços. A
                                <b>Palavra-passe</b> deve ter no mínimo 8 caracteres, 1 caractere maiúsculo, 1 dígito e
                                1 caractere especial (permitidos: @ $ ! % * ? &)</p>
                        </div>

                        <div class="mt-3 text-white">
                            <input type="checkbox" class="h-4 w-4" onclick="myFunction()"><label class="ml-2">Vizualizar
                                a Palavra-passe</label>
                        </div>
                    </div>

                    <div class="intro-x flex text-white mt-4 text-xs sm:text-sm">
                        <input name="box_politica" id="box_politica" type="checkbox" class="h-4 w-4">
                        <label class="cursor-pointer select-none ml-2" for="box_politica">Concordo com a </label>
                        <a class="text-agrodireto-3 ml-1"
                            href="#">Política de
                            Privacidade.</a>
                    </div>

                    <div class="intro-x mt-5 text-center xl:text-center">
                        <input type="submit" value="Registar"
                            class="btn btn-cmhandy py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">
                        <a href="/trabalho_ti/login"
                            class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top text-white">Cancelar</a>
                    </div>
                </form>

                <div class="flex text-slate-600 mt-5">
                    <div class="flex w-full justify-center">
                        <i data-lucide="mail" class="text-center w-5 h-5 mr-2 text-white fa-regular fa-envelope"></i><label
                            class="mr-5 text-white">geral@cmhandyman.pt</label>
                    </div>
                    <div class="flex w-full justify-center">
                        <i data-lucide="phone" class="w-5 h-5 mr-2 text-white fa-solid fa-phone"></i><label class="text-white">123456789</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Login Form -->

    <!-- BEGIN: JS Assets-->
    <script src="/trabalho_ti/public/assets/js/app.js"></script>
    <!-- END: JS Assets-->

    <script>
        function myFunction() {
            var x = document.getElementById("text_userPassword");
            var y = document.getElementById("text_userPassword_confirmation");
            if (x.type === "password") {
                x.type = "text";
                y.type = "text";
            } else {
                x.type = "password";
                y.type = "password";
            }
        }
    </script>

</body>

</html>