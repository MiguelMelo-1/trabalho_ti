<!DOCTYPE html>
<html lang="en">

<head>

    <?php require SITE_ROOT . '/App/views/back-pages/layout/head_base.php' ?>

    <title>CMHandyMans - Funcionários</title>

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


        <?php require SITE_ROOT . '/App/views/back-pages/layout/sidebar.php' ?>


        <!-- Content Start -->
        <div class="content" style="height: 100%;">

            <?php require SITE_ROOT . '/App/views/back-pages/layout/navbar.php' ?>

            <!--TABLE-->
            <div class="bg-transparente mt-4 mx-4">
                <div class="l rounded p-4">
                    <h6 class="mb-4">Funcionários</h6>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Funcionário</th>
                                <th scope="col">NIF</th>
                                <th scope="col">€/hora</th>
                                <th scope="col">Contacto</th>
                                <th scope="col">email</th>
                                <th scope="col">Localidade</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($funcionarios as $funcionario) { ?>
                                    <td scope="row"><?= $funcionario['id_funcionario']; ?></th>
                                    <td><?= $funcionario['nome']; ?></td>
                                    <td><?= $funcionario['nif']; ?></td>
                                    <td><?= $funcionario['preco_hora']; ?>€</td>
                                    <td><?= $funcionario['tlm']; ?></td>
                                    <td><?= $funcionario['email']; ?></td>
                                    <td><?= $funcionario['localidade']; ?></td>
                                    <td>
                                        <div class="flex">
                                            <!-- Button trigger modal start -->
                                            <button type="button" class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#eliminarFuncionario<?= $funcionario['id_funcionario']; ?>"><i class="fa fa-trash"></i></button>
                                            <!-- Button trigger modal end -->

                                            <!-- Modal start -->
                                            <div class="modal fade" id="eliminarFuncionario<?= $funcionario['id_funcionario']; ?>" tabindex="-1" aria-labelledby="eliminarFuncionarioLabel<?= $funcionario['id_funcionario']; ?>" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-dark" id="eliminarFuncionarioLabel<?= $funcionario['id_funcionario']; ?>">
                                                                Remoção permanente de dados</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <i class="fa fa-triangle-exclamation fa-3x text-danger my-3"></i>
                                                            <p class="fs-4">Tem a certeza que deseja remover permanentemente
                                                                o funcionario Nº<?= $funcionario['id_funcionario']; ?>?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Sim</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal End -->

                                            <!-- Button trigger modal start -->
                                            <button type="button" class="btn btn-cmhandy mx-1" data-bs-toggle="modal" data-bs-target="#editarFuncionario<?= $funcionario['id_funcionario']; ?>"><i class="fa fa-pencil"></i></button>
                                            <!-- Button trigger modal end -->

                                            <!-- Modal start -->
                                            <div class="modal fade overflow-hidden" id="editarFuncionario<?= $funcionario['id_funcionario']; ?>" tabindex="-1" aria-labelledby="editarFuncionarioLabe<?= $funcionario['id_funcionario']; ?>l" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <form>
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-dark" id="editarFuncionarioLabel<?= $funcionario['id_funcionario']; ?>">Editar Funcionario Nº<?= $funcionario['id_funcionario']; ?></h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <i class="fa fa-pen-to-square fa-3x text-warning my-3 d-block mx-auto"></i>
                                                                <div class="row g-3 mt-2">
                                                                    <div class="col-6">
                                                                        <label for="inputNome" class="form-label">Nome</label>
                                                                        <input type="text" class="form-control" id="inputNome" placeholder="Insira o nome" style="color: white;" required value="<?= $funcionario['nome']; ?>">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="inputNif" class="form-label">NIF</label>
                                                                        <input type="number" class="form-control" id="inputNif" style="color: white;" placeholder="Insira o NIF" pattern="[0-9]{9}" required value="<?= $funcionario['nif']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="row g-3 mt-2">
                                                                    <div class="col-6">
                                                                        <label for="inputNascimento" class="form-label">Data de nascimento</label>
                                                                        <input type="date" class="form-control" id="inputNascimento" style="color: white;" required value="<?= $funcionario['data_nascimento']; ?>">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="inputPrecoHora" class="form-label">Valor por hora</label>
                                                                        <input type="number" class="form-control" id="inputPrecoHora" placeholder="Insira o valor" style="color: white;" required value="<?= $funcionario['preco_hora']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="row g-3 mt-2">
                                                                    <div class="col-6">
                                                                        <label for="inputTlm" class="form-label">Telemóvel</label>
                                                                        <input type="tel" class="form-control" id="inputTlm" style="color: white;" required value="<?= $funcionario['tlm']; ?>">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="inputEmail" class="form-label">Email</label>
                                                                        <input type="email" class="form-control" id="inputEmail" style="color: white;" placeholder="Insira o valor" required value="<?= $funcionario['email']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="row g-3 mt-2">
                                                                    <div class="col-6">
                                                                        <label for="inputCodPostal" class="form-label">Cód.Postal <i class="text-danger">*</i></label>
                                                                        <input type="text" class="form-control" id="inputCodPostal" style="color: white;" aria-describedby="nifcodPostalFormat" placeholder="Insira o cód. postal" maxlength="8" minlength="8" required value="<?= $funcionario['cod_postal']; ?>">
                                                                        <div id="codPostalFormat" class="form-text">Formato: 1234-123
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="inputLocalidade" class="form-label">Localidade</label>
                                                                        <input type="text" class="form-control" id="inputLocalidade" placeholder="Insira a Localidade" style="color: white;" required value="<?= $funcionario['localidade']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Salvar</button>
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal End -->

                                        </div>
                                    </td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Recent Sales End -->

            <?php require SITE_ROOT . '/App/views/back-pages/layout/footer.php' ?>

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-cmhandy btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php require SITE_ROOT . '/App/views/back-pages/layout/script_base.php' ?>

    <script>
        window.onload = function() {
            document.getElementById('funcionario').className = 'nav-item nav-link active';
        };
    </script>

</body>

</html>