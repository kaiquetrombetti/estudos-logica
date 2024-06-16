<?php

// Escreva um programa que tenha 3 pratos no cardapio e que retorne o prato escolhido
function cardapio($escolha) {
    switch ($escolha) {
        case "frango": 
            $escolha = "VocÊ escolheu o prato de frango";
            break;

        case "peixe":
            $escolha = "VocÊ escolheu o prato de peixe";
            break;
        
        case "carne":
            $escolha = "Você escolheu o prato de carne";
            break;
        default:
            $escolha = "Essa opção não é valida";
    }

    return $escolha;
}   

echo cardapio("t");