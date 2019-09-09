<?php
function mostrarPublicacao($postagem)
{
    echo "
    <div class='card m-md-5 mt-2 col-4''>
        <div class='card-header text-center'>
            <div class='row'>
            <h4 class='col-10'> <b>{$postagem['titulo']}</b></h4>
            <div class='col-2'>
                <div class='dropdown d-flex justify-content-end'>
                    <button class='btn btn-link dropdown-toggle ' type='button' id='dropdown' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <i class='fa fa-ellipsis-h'></i>
                    </button>
                    <div class='dropdown-menu dropdown-menu-right' aria-labelledby='dropdown'>
                        <div class='h6 dropdown-header'>Opções</div>
                        <form action='editar.php' method='get' >
                            <input type='hidden' name='idPostagem' value='{$postagem['idPostagem']}' >
                            <button class='dropdown-item' href='#'> Editar </button >
                        </form>

                        <form action='remover.php' method='get' >
                            <button class='dropdown-item' href='#'> Apagar </button >
                            <input type='hidden' name='idPostagem' value='{$postagem['idPostagem']}' >
                        </form>
                    </div>
                </div>
            </div>
    </div>
        </div>
        <div class='card-body'>
            <p class='m-2 card-text'>
                <span class='card-text-muted'> {$postagem['mensagem']} </span>
            </p>
        </div>
    </div>

    ";
}
