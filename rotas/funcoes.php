<?php

use controllers\Carrinho;
use models\Conexao;

function formatarPreco($preco)
{
    return number_format($preco, 2, ",", ".");
}


