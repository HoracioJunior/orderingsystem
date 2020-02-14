<?php

 function formatarPreco(float $preco)
{
   return number_format($preco,2,",", ".");
}
