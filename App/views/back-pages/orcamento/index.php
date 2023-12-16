<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php require './../layout/head_base.php' ?>

    <title>CMHandyMan - Consultar orcamento</title>

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

    <?php require './../layout/sidebar.php' ?>
        
        <!-- Content Start -->
        <div class="content">
            
            <?php require './../layout/navbar.php' ?>

            <!-- table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-transparente rounded h-100 p-4">
                    <h6 class="mb-4">Orçamentos</h6>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Tipo de trabalho</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Morada</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><i class="fa fa-circle-check text-warning">&nbsp; Pendente</i></td>
                                <td>Construção</td>
                                <td>John Doe</td>
                                <td>Rua josé ninguem</td>
                                <td>
                                    <!-- Irá redirecionar para a página de criar orçamentos mas com dados já preenchidos e será só consulta n podendo alterar nada -->
                                    <a href="details.php"><i class="fa fa-eye text-cmhandy" data-bs-toggle="tooltip" data-bs-placement="right" title="Consultar"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- table End -->

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

    <?php require './../layout/script_base.php' ?>

    <!-- tooltip script -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>

</html>