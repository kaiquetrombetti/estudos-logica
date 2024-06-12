<?php

function verificarTriangulo($lado1, $lado2, $lado3) {
     if   ($lado1 == $lado2 && $lado1 == $lado3 && $lado2 == $lado3) {
        return "Triângulo Equilátero";
     } elseif  ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        return "Triangulo Isósceles";
    } else {
      return "Escaleno";
    }
    }


$lado1 = 1;
$lado2 = 2;
$lado3 = 3;

echo verificarTriangulo($lado1, $lado2, $lado3);



