<!DOCTYPE html>

<html>



<head>
    <meta charset="utf-8">
    <link href="/trabalho_ti/public/assets/img/logo/cmhandy_logo_branco.png" rel="shortcut icon">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <link rel="stylesheet" href="/trabalho_ti/public/assets/css/app.css" />
    <link rel="stylesheet" href="/trabalho_ti/public/assets/fontawesome-free-6.1.1-web\css\all.css">

    <title>CMHandyMans - Login</title>

    <style>
        body {
            overflow: hidden;
        }
    </style>

</head>

<body class="py-5">


    <!-- BEGIN: Login Form -->
    <div class="relative">
        <div class="flex items-center h-screen py-5 xl:py-0 ">
            <div class="mx-auto  px-5 sm:px-8 py-8 rounded-md shadow-md w-full sm:w-3/4 lg:w-2/4 xl:w-auto" style="background-color: rgba(0,0,0,0.6)">
                <img alt="cmhandymanlogo" src="/trabalho_ti/public/assets/img/logo/cmhandy_logo_branco.png" height="81px" width="350px">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left text-white mt-5">Entrar</h2>
                <div class="intro-x mt-3">
                    <form id="login-form" action="/trabalho_ti/login/verify" method="POST">
                        <input name="email" id="email" type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Email" required>
                        <input name="password" id="password" type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Palavra-passe" required>
                        <div id="error-password" class="login__input-error text-danger mt-2"></div>
                        <div class="mt-5 text-white">
                            <input type="checkbox" class="h-4 w-4" onclick="myFunction()"><label class="ml-2">Vizualizar
                                a
                                Palavra-passe</label>
                        </div>
                        <div class="intro-x flex text-xs sm:text-sm mt-4">
                            <a class="text-agrodireto-3" href=" {{ route('ForgetPasswordGet') }}">Recuperar a Palavra-passe?</a>
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center">
                            <input name="btn-login" id="btn-login" type="submit" formmethod="POST" class="btn btn-cmhandy py-3 px-4 w-full sm:w-32 mr-3 align-top" value="Entrar">
                            <!-- <button id="btn-login" type="submit" class="btn btn-cmhandy py-3 px-4 w-full sm:w-32 mr-3 align-top">Entrar</button> -->
                            <a href="/trabalho_ti/register"> <button class="btn btn-outline-secondary py-3 px-4 w-full sm:w-32 sm:mt-0 mt-3 align-top text-white">Registar-me</button></a>
                        </div>
                    </form>
                </div>
                <div class="intro-x mt-5 text-slate-400 text-center">
                    Ao prosseguir está a concordar com os nossos<br> <a class="text-agrodireto-3" href="#">Termos e Condições</a> & <a class="text-agrodireto-3" href="#">Política de Privacidade.</a>
                </div>
                <div>
                    <button onclick="location.href='/trabalho_ti/public/'" class="btn btn-outline-secondary py-3 px-4 w-full sm:w-32 sm:mt-0 mt-3 absolute top-0 left-0 text-white">Voltar atrás</button>
                </div>
                <div class="flex text-slate-600 mt-5">
                    <div class="flex w-full justify-center">
                        <i class="text-center w-5 h-5 mr-2 text-white fa-regular fa-envelope"></i><label class="mr-5 text-white">geral@cmhandyman.pt</label>
                    </div>
                    <div class="flex w-full justify-center">
                        <i class="w-5 h-5 mr-2 text-white fa-solid fa-phone"></i><label class="text-white">123456789</label>
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
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <!-- <script>
        (function() {
            async function login() {
                // Reset state
                $('#login-form').find('.login__input').removeClass('border-danger')
                $('#login-form').find('.login__input-error').html('')

                // Post form
                let email = $('#email').val()
                let password = $('#password').val()

                // Loading state
                $('#btn-login').html('<i data-loading-icon="oval" data-color="white" class="w-5 h-5 mx-auto"></i>')
                tailwind.svgLoader()
                await helper.delay(1500)

                axios.post(`login`, {
                    email: email,
                    password: password
                }).then(res => {
                    location.href = './area-reservada'
                }).catch(err => {
                    $('#btn-login').html('Login')
                    if (err.response.data.message != 'Wrong email or password.') {
                        for (const [key, val] of Object.entries(err.response.data.errors)) {
                            $(`#${key}`).addClass('border-danger')
                            $(`#error-${key}`).html(val)
                        }
                    } else {
                        $(`#password`).addClass('border-danger')
                        $(`#error-password`).html(err.response.data.message)
                    }
                })
            }

            $('#login-form').on('keyup', function(e) {
                if (e.keyCode === 13) {
                    login()
                }
            })

            $('#btn-login').on('click', function() {
                login()
            })
        })
    </script> -->

</body>

</html>