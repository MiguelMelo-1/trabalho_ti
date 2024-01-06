<!-- Sidebar Start -->
<div class="sidebar pe-2 pb-3 ps-2 mt-3">
    <nav class="navbar bg-transparente navbar-dark rounded">
        <a href="/trabalho_ti/public" class="navbar-brand mx-4 mb-3">
            <!-- <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3> -->
            <img src="/trabalho_ti/public/assets/img/logo/cmhandy_logo_branco.png" alt="cmhandymanlogo" class="img-fluid">
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <!-- <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> -->
                <i class="fa fa-user fa-2x"></i>
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0"><?= $_SESSION['nome'] ?></h6>
                <span><?= $_SESSION['acesso'] ?></span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a id="dashboard" href="/trabalho_ti/private" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a id="funcionario" href="/trabalho_ti/private/funcionarios" class="nav-item nav-link"><i class="fa fa-hard-hat me-2"></i>Funcionário</a>
            <a id="trabalho" href="/trabalho_ti/private/trabalhos" class="nav-item nav-link"><i class="fa fa-hammer me-2"></i>Trabalho</a>
            <a id="orcamento" href="/trabalho_ti/App/views/back-pages/orcamento/index.php" class="nav-item nav-link"><i class="fa fa-file-alt me-2"></i>Orçamento</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->


