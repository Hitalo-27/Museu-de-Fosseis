<?php

class Conexao
{
    public static function pegarConexao()
    {

        //Conexão Local
        $conexao = new PDO(
            "mysql:host=localhost;
                            dbname=bdmuseu",
            "root",
            ""
        );

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET CHARACTER SET utf8");

        return $conexao;
    }
}
