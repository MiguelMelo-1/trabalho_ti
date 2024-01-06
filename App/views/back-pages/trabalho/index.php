<!DOCTYPE html>
<html lang="pt">

<head>

    <?php require_once SITE_ROOT . '/App/views/back-pages/layout/head_base.php' ?>

    <title>CMHandyMans - Trabalhos Pendentes</title>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <?php require_once SITE_ROOT . '/App/views/back-pages/layout/sidebar.php' ?>

        <!-- Content Start -->
        <div class="content">

            <?php require_once SITE_ROOT . '/App/views/back-pages/layout/navbar.php' ?>

            <!-- TABLE Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-transparente rounded h-100 p-4">
                    <h6 class="mb-4">Trabalhos Pendentes</h6>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tipo de Trabalho</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Morada</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Construção</td>
                                <td>Pendente</td>
                                <td>John Doe</td>
                                <td>Santarém</td>
                                <td><!-- Irá redirecionar para a página de criar orçamentos mas com dados já preenchidos e será só consulta n podendo alterar nada -->
                                    <a href="Ver_trabalho.html"><i class="fa fa-eye text-cmhandy" data-bs-toggle="tooltip" data-bs-placement="right" title="Consultar"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- TABLE End -->

            <?php require_once SITE_ROOT . '/App/views/back-pages/layout/footer.php' ?>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php require_once SITE_ROOT . '/App/views/back-pages/layout/script_base.php' ?>

</body>

</html>