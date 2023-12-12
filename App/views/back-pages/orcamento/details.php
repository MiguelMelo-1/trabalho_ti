<!DOCTYPE html>
<html lang="en">

<head>

<?php include './../layout/head_base.php' ?>

    
    <title>CMHandyMans - Ver Orçamento</title>
 
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-2 pb-3 ps-2 mt-3">
            <nav class="navbar bg-transparente navbar-dark rounded">
                <a href="../../../../index.html" class="navbar-brand mx-4 mb-3">
                    <!-- <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3> -->
                    <img src="../../../img/logo/cmhandy_logo_branco.png" alt="cmhandymanlogo" class="img-fluid">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <!-- <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> -->
                        <i class="fa fa-user fa-2x"></i>
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">John Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="../dashboard.html" class="nav-item nav-link"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="../ferramentas.html" class="nav-item nav-link"><i
                            class="fa fa-toolbox me-2"></i>Ferramentas</a>
                    <a href="../funcionários.html" class="nav-item nav-link"><i
                            class="fa fa-hard-hat me-2"></i>Funcionários</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-hammer me-2"></i>Trabalhos</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="../trabalho/trabalhos_pendentes.html" class="nav-link dropdown-item">Pendentes</a>
                            <a href="../trabalho/trabalhos_desenvolvimento.html" class="nav-link dropdown-item">Em
                                desenvolvimento</a>
                            <a href="../trabalho/trabalhos_concluidos.html" class="nav-link dropdown-item">Concluidos</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-file-alt me-2"></i>Orçamentos</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="consultar_orcamentos.html" class="nav-link dropdown-item">Consultar orçamentos</a>
                            <a href="criar_orcamento.html" class="nav-link dropdown-item">Criar Orçamento</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-transparente navbar-dark px-4 py-0 mt-3 rounded">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-transparente border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <i class="fa fa-user fa-2x"></i>
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-transparente border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <!-- <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> -->
                            <i class="fa fa-user fa-2x"></i>
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end bg-transparente border-0 rounded-0 rounded-bottom m-0">
                            <!-- <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a> -->
                            <a href="../../../../index.html" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <div class="container-fluid pt-4 px-4">
                <div class="bg-transparente rounded p-4">
                    <div class="row align-items-center mt-2">
                        <div class="col-6 text-start">
                            <h2 class="text-lg font-medium me-auto">ORÇAMENTO Nº 1</h2>
                        </div>

                        <div class="col-6 d-flex justify-content-end">
                            <div class="mt-4 text-end">
                                <label class="text-lg font-medium justify-center me-2">Estado:</label>
                                <i class="fa fa-circle-check fa-xl mt-3 font-medium text-warning"> Pendente</i>
                            </div>
                            <div class="mt-4 ms-5 text-end">
                                <a class="btn btn-cmhandy shadow-md mr-2" href="#" target="_blank">PDF</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="bg-transparente rounded p-4">
                    <h6 class="mb-4">Dados do cliente</h6>
                    <div class="row g-3 mt-5">
                        <div class="col-6">
                            <label for="inputNome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="inputNome" value="johne doe" disabled>
                        </div>
                        <div class="col-6">
                            <label for="inputNif" class="form-label">NIF </label>
                            <input type="number" class="form-control" id="inputNif" value="123456789" disabled>
                        </div>
                    </div>
                    <div class="row g-3 mt-5">
                        <div class="col-6">
                            <label for="inputMorada" class="form-label">Morada </label>
                            <input type="text" class="form-control" id="inputMorada" value="Rua josé ninguem" disabled>
                        </div>
                        <div class="col-6">
                            <label for="inputCodPostal" class="form-label">Cód.Postal</label>
                            <input type="text" class="form-control" id="inputCodPostal" value="1234-123" disabled>
                        </div>
                    </div>
                    <div class="row g-3 mt-5">
                        <div class="col-4">
                            <label for="inputLocalidade" class="form-label">Localidade </label>
                            <input type="text" class="form-control" id="inputLocalidade" value="Santarém" disabled>
                        </div>
                        <div class="col-4">
                            <label for="inputEmail" class="form-label">Email </label>
                            <input type="email" class="form-control" id="inputEmail" value="null@gmail.com" disabled>
                        </div>
                        <div class="col-4 ">
                            <label for="inputTlm" class="form-label">Telemóvel </label>
                            <input type="number" class="form-control" id="inputTlm" value="123546789" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-transparente rounded p-4">
                    <h6 class="mb-4">Materiais</h6>
                    <div class="intro-y col-span-12 overflow-hidden lg:overflow-visible">
                        <table class="table mt-5" id="tabelaMateriais">
                            <tr>
                                <th class="text-center whitespace-nowrap w-5/12">MATERIAIS</th>
                                <th class="text-center whitespace-nowrap w-1/12">UNIDADE</th>
                                <th class="text-center whitespace-nowrap w-2/12">PRECO UN.</th>
                                <th class="text-center whitespace-nowrap w-1/12">QUANT.</th>
                                <th class="text-center whitespace-nowrap w-1/12">TOTAL</th>
                            </tr>
                            <tr class="w-full">
                                <td><input type="text" class="form-control text-center" value="Areia" disabled/></td>
                                <td><input type="text" class="form-control text-center" value="kg" disabled/></td>
                                <td><input type="text" class="form-control text-center" value="10€" disabled/></td>
                                <td><input type="text" class="form-control text-center" value="1" disabled/></td>
                                <td><input type="text" class="text-center form-control" value="10€" disabled></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-transparente rounded p-4">
                    <h6 class="mb-4">Mão de obra</h6>
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table class="table mt-5" id="tabelaMaoObra">
                            <tr>
                                <th class="text-center whitespace-nowrap w-6/12">DESCRIÇÃO</th>
                                <th class="text-center whitespace-nowrap w-2/12">PRECO UN.</th>
                                <th class="text-center whitespace-nowrap w-2/12">HORAS</th>
                                <th class="text-center whitespace-nowrap w-2/12">TOTAL</th>
                            </tr>
                            <tr class="w-full">
                                <td><input type="text" class="form-control" value="Pavimentar o chão" disabled/></td>
                                <td><input type="text" class="form-control text-center" value="5€" disabled/></td>
                                <td><input type="text" class="form-control text-center" value="4" disabled/></td>
                                <td><input type="text" class="text-center form-control" value="20€" disabled></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- //TODO: Criar divisão de ver o tipo de trabalho e a sua descrição -->

            <div class="container-fluid pt-4 px-4">
                <div class="bg-transparente rounded p-4">
                    <!-- <input type="hidden" id="sessionAcesso" class="form-control w-32"
                                value="{{ session('acesso') }}"> -->
                    <div class="row">
                        <div class="col-6 text-start">
                            <a href="consultar_orcamentos.html" class="btn btn-warning"><i class="fa fa-arrow-left mx-2"></i>Voltar</a>
                        </div>
                        <div class="col-6 text-end">
                            <a href="#" class="btn btn-success mx-2"><i class="fa fa-check mx-2"></i>Aprovar</a>
                            <a href="#" class="btn btn-danger mx-2"><i class="fa fa-ban mx-2"></i>Recusar</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-transparente rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            <p class="text-3 text-color-light"><a href="#">CMHandyMans</a>. © 2023. Todos os Direitos
                                Reservados</p>
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php include './../layout/script_base.php' ?>


</body>

</html>