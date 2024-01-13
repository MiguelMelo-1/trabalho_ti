<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php require_once SITE_ROOT . '/App/views/back-pages/layout/head_base.php' ?>

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

    <?php require_once SITE_ROOT . '/App/views/back-pages/layout/sidebar.php' ?>
        
        <!-- Content Start -->
        <div class="content">
            
            <?php require_once SITE_ROOT .'/App/views/back-pages/layout/navbar.php' ?>

            <!-- table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-transparente rounded h-100 p-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-4">Orçamentos</h6>
                        <a href="/trabalho_ti/private/orcamentos/add_page" class="btn btn-cmhandy mx-1 alig"><i class="fa fa-plus me-2"></i>Novo Orçamento</a>
                    </div>
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
                                <td class="text-warning"><p class="text-warning"><i class="fa fa-circle-check me-1"></i>Pendente</p></td>
                                <td>Construção</td>
                                <td>John Doe</td>
                                <td>Rua josé ninguem</td>
                                <td>
                                    <!-- Irá redirecionar para a página de criar orçamentos mas com dados já preenchidos e será só consulta n podendo alterar nada -->
                                    <button type="submit" class="btn btn-cmhandy"><i class="fa fa-eye" data-bs-toggle="tooltip" data-bs-placement="right" title="Consultar"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- table End -->

            <?php require_once SITE_ROOT . '/App/views/back-pages/layout/footer.php' ?>

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php require_once SITE_ROOT . '/App/views/back-pages/layout/script_base.php' ?>

    <!-- tooltip script -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    <script>
        window.onload = function() {
            document.getElementById('orcamento').className = 'nav-item nav-link active';
        };
    </script>
</body>

</html>