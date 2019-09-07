<?php
function mostrarPublicacao($titulo, $mensagem)
{
    echo "
    <div class='card m-md-5 mt-2 col-4''>
        <div class='card-header text-center'>
            <div class='row'>
            <h4> <b>{$titulo}</b></h4>
         </div>
        </div>
        <div class='card-body'>
            <p class='m-2 card-text'>
                <span class='card-text-muted'> {$mensagem} </span>
            </p>
        </div>
    </div>";
}
