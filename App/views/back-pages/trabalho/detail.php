<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once SITE_ROOT . '/App/views/back-pages/layout/head_base.php' ?>
    
    <title>CMHandyMans - Ver Trabalhos</title>
    
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

            <div class="container-fluid pt-4 px-4">
                <div class="bg-transparente rounded p-4">
                    <div class="row align-items-center mt-2">
                        <div class="col-6 text-start">
                            <h2 class="text-lg font-medium me-auto">TRABALHO Nº<?php var_dump($trabalho) ?></h2>
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

            <form>
                <div class="container-fluid pt-4 px-4">
                    <div class="bg-transparente rounded p-4">
                        <h6 class="mb-4">Dados do cliente</h6>
                        <div class="row g-3 mt-5">
                            <div class="col-6">
                                <label for="inputNome" class="form-label">Nome </label>
                                <input type="text" class="form-control" id="inputNome" value="António Silva" disabled>
                            </div>
                            <div class="col-6">
                                <label for="inputNif" class="form-label">NIF </label>
                                <input type="number" class="form-control" id="inputNif" value="654678415" disabled>
                             </div>
                        </div>
                        <div class="row g-3 mt-5">
                            <div class="col-6">
                                <label for="inputMorada" class="form-label">Morada </label>
                                <input type="text" class="form-control" id="inputMorada" value="Rua da direita" disabled>
                            </div>
                            <div class="col-6">
                                <label for="inputCodPostal" class="form-label">Cód.Postal </label>
                                <input type="text" class="form-control" id="inputCodPostal" value="2580-383" disabled>
                            </div>
                        </div>
                        <div class="row g-3 mt-5">
                            <div class="col-4">
                                <label for="inputLocalidade" class="form-label">Localidade </label>
                                <input type="text" class="form-control" id="inputLocalidade" value="Lisboa" disabled>
                            </div>
                            <div class="col-4">
                                <label for="inputEmail" class="form-label">Email </label>
                                <input type="email" class="form-control" id="inputEmail" value="tousim@gmail.com" disabled>
                            </div>
                            <div class="col-4 ">
                                <label for="inputTlm" class="form-label">Telemóvel </label>
                                <input type="number" class="form-control" id="inputTlm" value="968371833" disabled>
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
                                    <th class="text-center whitespace-nowrap" style="display:none;">ID_PRODUTO</th>
                                    <th class="text-center whitespace-nowrap" style="display:none;">LINHA</th>

                                    <th class="text-center whitespace-nowrap w-5/12">MATERIAIS</th>
                                    <th class="text-center whitespace-nowrap w-1/12">UNIDADE</th>
                                    <th class="text-center whitespace-nowrap w-2/12">PRECO UN.</th>
                                    <th class="text-center whitespace-nowrap w-1/12">QUANT.</th>
                                    <th class="text-center whitespace-nowrap w-1/12">ACÇÕES</th>
                                </tr>
                                <tr class="w-full">
                                    <td style="display:none;"><input type="hidden"
                                            name="multiInputMateriais[1][produto_id]" id="produto_id"
                                            class="form-control" /></td>
                                    <td style="display:none;"><input type="hidden" name="multiInputMateriais[1][linha]"
                                            id="multiInputMateriais[1][linha]" class="form-control text-center"
                                            value="1" readonly /></td>
                                    <td><input type="text" name="multiInputMateriais[1][designacao]"
                                            id="multiInputMateriais[1][designacao]" class="form-control"
                                            autocomplete="off" onfocus="deleteTxt(this)" required /></td>
                                    <td><input type="text" name="multiInputMateriais[1][unidade]"
                                            id="multiInputMateriais[1][unidade]" class="form-control text-center" />
                                    </td>
                                    <td><input type="text" name="multiInputMateriais[1][preco]"
                                            id="multiInputMateriais[1][preco]" class="form-control text-center" /></td>
                                    <td><input type="text" name="multiInputMateriais[1][quantidade]"
                                            id="multiInputMateriais[1][quantidade]" class="form-control text-center"
                                            onfocus="deleteTxt(this)" value="1" min="1" required /></td>
                                    <td class="text-center"><button type="button"
                                            class="remove-item btn btn-danger">Eliminar</button></td>
                                </tr>
                            </table>
                            <div class="row m-1">
                                <div class="text-start col-6">
                                    <input type="button" name="add" value="Adicionar Linha" id="addRemoveIpMaterial"
                                        class="btn btn-success w-32">
                                </div>
                                <div class="text-end col-6">
                                    <input type="button" name="limpar" value="Limpar Materiais" id="limparMaterial"
                                        class="btn btn-outline-cmhandy w-32">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pt-4 px-4">
                    <div class="bg-transparente rounded p-4">
                        <h6 class="mb-4">Mão de obra</h6>
                        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                            <table class="table mt-5" id="tabelaMaoObra">
                                <tr>
                                    <th class="text-center whitespace-nowrap" style="display:none;">ID_PRODUTO</th>
                                    <th class="text-center whitespace-nowrap" style="display:none;">LINHA</th>
                                    <th class="text-center whitespace-nowrap w-6/12">DESCRIÇÃO</th>
                                    <th class="text-center whitespace-nowrap w-2/12">PRECO UN.</th>
                                    <th class="text-center whitespace-nowrap w-2/12">HORAS</th>
                                    <th class="text-center whitespace-nowrap w-2/12">ACÇÕES</th>
                                </tr>
                                <tr class="w-full">
                                    <td style="display:none;"><input type="hidden"
                                            name="multiInputMaoObra[1][produto_id]" id="produto_id"
                                            class="form-control" /></td>
                                    <td style="display:none;"><input type="hidden" name="multiInputMaoObra[1][linha]"
                                            id="multiInputMaoObra[1][linha]" class="form-control text-center" value="1"
                                            readonly /></td>
                                    <td><input type="text" name="multiInputMaoObra[1][designacao]"
                                            id="multiInputMaoObra[1][designacao]" class="form-control"
                                            autocomplete="off" onfocus="deleteTxt(this)" required /></td>
                                    <td><input type="text" name="multiInputMaoObra[1][preco]"
                                            id="multiInputMaoObra[1][preco]" class="form-control text-center" /></td>
                                    <td><input type="text" name="multiInputMaoObra[1][quantidade]"
                                            id="multiInputMaoObra[1][quantidade]" class="form-control text-center"
                                            onfocus="deleteTxt(this)" value="1" min="1" required /></td>
                                    <td class="text-center"><button type="button"
                                            class="remove-item btn btn-danger">Eliminar</button></td>
                                </tr>
                            </table>
                            <div class="row m-1">
                                <div class="text-start col-6">
                                    <input type="button" name="add" value="Adicionar Linha" id="addRemoveIpMaoObra"
                                        class="btn btn-success w-32">
                                </div>
                                <div class="text-end col-6">
                                    <input type="button" name="limpar" value="Limpar Mão de obra" id="limparMaoObra"
                                        class="btn btn-outline-cmhandy w-35">
                                </div>
                            </div>
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
                                    <a href="consultar_orcamentos.html" class="btn btn-cmhandy"><i
                                            class="fa fa-arrow-left mx-2"></i>Voltar</a>
                                </div>
                                <div class="col-6 text-end">
                                    <a class="btn btn-success mx-2"><i class="fa fa-check mx-2"></i>Iniciar Trabalho</a>
                                    <a class="btn btn-warning mx-2"><i class="fa fa-file-import mx-2"></i>Salvar</a>
                                </div>
                            </div>
                    </div>
                </div>
            </form>

            <?php require_once SITE_ROOT . '/App/views/back-pages/layout/footer.php' ?>

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php require_once SITE_ROOT . '/App/views/back-pages/layout/script_base.php' ?>

    <!-- page scripts -->
    <script>

        // Limpar cliente
        $('#limparCliente').click(function () {

            document.getElementById('inputNome').value = "";
            document.getElementById('inputNif').value = "";
            document.getElementById('inputMorada').value = "";
            document.getElementById('inputCodPostal').value = "";
            document.getElementById('inputLocalidade').value = "";
            document.getElementById('inputEmail').value = "";
            document.getElementById('inputTlm').value = "";

        });

        // Limpar Materiais
        $('#limparMaterial').click(function () {

            $('input[name*="multiInputMateriais"]').val("");

        });

        // Limpar mao de obra
        $('#limparMaoObra').click(function () {

            $('input[name*="multiInputMaoObra"]').val("");

        });

        // eliminar texto dos campos de input
        function deleteTxt(x) {
            x.value = "";
        }

        // clicar botão adicionar linha Material
        var i = 1;

        $("#addRemoveIpMaterial").click(function () {

            if ($('input[name="multiInputMateriais[' + i + '][designacao]"]').val() != "" && $('input[name="multiInputMateriais[' + i + '][quantidade]"]').val() != "" && $('input[name="multiInputMateriais[' + i + '][preco]"]').val() != "" && $('input[name="multiInputMateriais[' + i + '][unidade]"]').val() != "") {

                // adiciona linha
                ++i;

                $("#tabelaMateriais").append('<tr class="w-full"><td style="display:none;"><input type="hidden" name="multiInputMateriais[' + i + '][produto_id]" id="multiInputMateriais[' + i + '][produto_id]" class="form-control" /></td>' +
                    '<td style="display:none;"><input type="hidden" name="multiInputMateriais[' + i + '][linha]" class="form-control text-center" value=' + i + ' readonly /></td>' +
                    '<td><input type="text" name="multiInputMateriais[' + i + '][designacao]" id="multiInputMateriais[' + i + '][designacao]" class="form-control" autocomplete="off" onfocus="deleteTxt(this)" required /></td>' +
                    '<td><input type="text" name="multiInputMateriais[' + i + '][unidade]" class="form-control text-center"/></td>' +
                    '<td><input type="text" name="multiInputMateriais[' + i + '][preco]" id="multiInputMateriais[' + i + '][preco]" class="form-control text-center"/></td>' +
                    '<td><input type="text" name="multiInputMateriais[' + i + '][quantidade]" id="multiInputMateriais[' + i + '][quantidade]" class="form-control text-center" onfocus="deleteTxt(this)" value="1" min="1" required /></td>' +
                    '<td class="text-center"><button type="button" class="remove-item btn btn-danger">Eliminar</button></td>'
                );
            };
        });

        // remover linha Material
        $(document).on('click', '.remove-item', function () {

            var myTable = document.getElementById("tabelaMateriais");
            var numLinhas = myTable.rows.length;
            numLinhas = (numLinhas - 1);

            if (numLinhas > 1) {

                $(this).parents('tr').remove();
            }
        });

        // clicar botão adicionar linha Material
        $("#addRemoveIpMaoObra").click(function () {

            if ($('input[name="multiInputMaoObra[' + i + '][designacao]"]').val() != "" && $('input[name="multiInputMaoObra[' + i + '][quantidade]"]').val() != "" && $('input[name="multiInputMaoObra[' + i + '][preco]"]').val() != "") {

                // adiciona linha
                ++i;


                $("#tabelaMaoObra").append('<tr class="w-full"><td style="display:none;"><input type="hidden" name="multiInputMaoObra[' + i + '][produto_id]" id="multiInputMaoObra[' + i + '][produto_id]" class="form-control" style="background-color: rgb(232, 232, 232)" /></td>' +
                    '<td style="display:none;"><input type="hidden" name="multiInputMaoObra[' + i + '][linha]" class="form-control text-center" style="background-color: rgb(232, 232, 232)" value=' + i + ' readonly /></td>' +
                    '<td><input type="text" name="multiInputMaoObra[' + i + '][designacao]" id="multiInputMaoObra[' + i + '][designacao]" class="form-control" autocomplete="off" onfocus="deleteTxt(this)" required /></td>' +
                    '<td><input type="text" name="multiInputMaoObra[' + i + '][preco]" id="multiInputMaoObra[' + i + '][preco]" class="form-control text-center"/></td>' +
                    '<td><input type="text" name="multiInputMaoObra[' + i + '][quantidade]" id="multiInputMaoObra[' + i + '][quantidade]" class="form-control text-center" onfocus="deleteTxt(this)" value="1" min="1" required /></td>' +
                    '<td class="text-center"><button type="button" class="remove-item btn btn-danger">Eliminar</button></td>'
                );



            };
        });

        // remover linha mao obra
        $(document).on('click', '.remove-item', function () {

            var myTable = document.getElementById("tabelaMaoObra");
            var numLinhas = myTable.rows.length;
            numLinhas = (numLinhas - 1);

            if (numLinhas > 1) {

                $(this).parents('tr').remove();
            }
        });
    </script>
</body>

</html>