<!DOCTYPE html>
<html lang="pt">

<head>

    <?php include __DIR__ . '/App/views/back-pages/layout/head_base.php' ?>

    <title>CMHandyMans - Todos os Utilizadores</title>

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

        <?php include __DIR__ . '/App/views/back-pages/layout/sidebar.php' ?>

        <!-- Content Start -->
        <div class="content">

            <?php include __DIR__ . '/App/views/back-pages/layout/navbar.php' ?>

            <!-- Main Content Start -->
            <div class="container-fluid px-4">
                <h2 class="mt-4">Todos os Utilizadores</h2>

                <?php
                $users = [
                    ['id' => 1, 'name' => 'John Doe'],
                    ['id' => 2, 'name' => 'Jane Doe'],
                    ['id' => 3, 'name' => 'Joseph Ryan'],
                    ['id' => 4, 'name' => 'Ryan Reyonolds'],
                    ['id' => 5, 'name' => 'John David'],
                    ['id' => 6, 'name' => 'Melissa Lopez'],
                    ['id' => 7, 'name' => 'Jennifer Martinez'],
                ];
                ?>

                <ul>
                    <?php foreach ($users as $user): ?>
                        <li>ID: <?php echo $user['id']; ?> - Nome: <?php echo $user['name']; ?></li>
                    <?php endforeach; ?>
                </ul>


            </div>
            <!-- Main Content End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-transparente rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            <p class="text-3 text-color-light"><a href="#">CMHandyMans</a>. © 2023. Todos os Direitos Reservados</p>
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
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

    <?php include __DIR__ . '/App/views/back-pages/layout/script_base.php' ?>

</body>

</html>
