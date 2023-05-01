<?php



function demo()
{
    return "hola soy un helper";
}

function money_format($val)
{
    return "$ ".number_format($val, 0, ",", ".");
}

