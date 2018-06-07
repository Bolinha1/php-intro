<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 06/06/18
 * Time: 23:54
 */
function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro('O nome não pode ser vazio, por favor preencha-o novamente');
        return false;
    }
    else if(strlen($nome) < 3)
    {
        setarMensagemErro('O nome não pode conter menos de 3 caracteres');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMensagemErro('O nome não pode conter mais de 40 caracteres');
        return false;
    }
    return true;
}
function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro('Informe um número para idade');
        return false;
    }
    return true;
}