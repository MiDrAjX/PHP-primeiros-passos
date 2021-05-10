<?php 

function criarConta(string $cpf, string $nomeTitular, float $saldo): array 
{
    retutn [
        $cpf => [
            'titular' => $nomeTitular,
            'saldo' => $saldo,
        ]
        ];
}