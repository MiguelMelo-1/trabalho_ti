<!DOCTYPE html>
<html lang="pt">

<head>

    <?php include './../layout/head_base.php' ?>

    <title>CMHandyMans - Ferramentas</title>

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

    <?php include './../layout/sidebar.php' ?>

        <!-- Content Start -->
        <div class="content">

            <?php include './../layout/navbar.php' ?>

            <!-- TABLE start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-transparente rounded h-100 p-4">
                    <h6 class="mb-4">Ferramentas</h6>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Identificação</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Especificações</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Martelo</td>
                                <td>Ferramenta de mão</td>
                                <td>Martelar pregos</td>
                                <td>
                                    <div class="flex">
                                        <!-- Button trigger modal start -->
                                        <button type="button" class="btn btn-danger mx-1" data-bs-toggle="modal"
                                            data-bs-target="#eliminarFerramenta"><i class="fa fa-trash"></i></button>
                                        <!-- Button trigger modal end -->

                                        <!-- Modal start -->
                                        <div class="modal fade" id="eliminarFerramenta" tabindex="-1"
                                            aria-labelledby="eliminarFerramentaLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-dark" id="eliminarFerramentaLabel">Remoção permanente de dados</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <i class="fa fa-triangle-exclamation fa-3x text-danger my-3"></i>
                                                        <p class="fs-4">Tem a certeza que deseja remover permanentemente a ferramenta Nº1?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Sim</button>
                                                        <button type="button" class="btn btn-secondary">Cancelar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal End -->
                                        <!-- Button trigger modal start -->
                                        <button type="button" class="btn btn-cmhandy mx-1" data-bs-toggle="modal"
                                            data-bs-target="#editarFerramenta"><i class="fa fa-pencil"></i></button>
                                        <!-- Button trigger modal end -->

                                        <!-- Modal start -->
                                        <div class="modal fade overflow-hidden" id="editarFerramenta" tabindex="-1"
                                            aria-labelledby="editarFerramentaLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form >
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-dark" id="editarFerramentaLabel">Editar Ferramenta Nº1</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <i class="fa fa-pen-to-square fa-3x text-warning my-3 d-block text-center"></i>                           
                                                                <label class="form-label mt-5">Referência:</label>
                                                                <input type="text" name="text_referencia_add" id="text_referencia_add" class="form-control mb-2">
                                    
                                                                <label class="form-label mt-2">Identificação:</label>
                                                                <input type="text" name="text_identificacao_add" id="text_identificacao_add" class="form-control mb-2">
                                    
                                                                <label class="form-label mt-2">Tipo:</label>
                                                                <select class="form-select mb-2"  name="cmb_tipo_add" id="cmb_tipo_add"></select>
                                    
                                                                <label class="form-label mt-2">Especificações:</label>
                                                                <textarea type="text" name="text_especificacoes_add" id="text_especificacoes_add" class="form-control mb-2" rows="5" cols="5"></textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Concluido</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal End -->
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- TABLE End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-transparente rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            <p class="text-3 text-color-light"><a href="#">CMHandyMans</a>. © 2023. Todos os Direitos Reservados</p> 
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