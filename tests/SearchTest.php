<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use carlos\DigitalCep\Search; // classe a ser testada

class SearchTest extends TestCase{
    
    /**
     * @dataProvider dadosTest
     */
    public function testgetAddressFromZipcodeDefaultUsage(string $input, array $esperado)
    {
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipcode($input);
        
        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTest()
    {
        return [
            "Endereço Paraça da Sé" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ],
            "Endereço Qualquer" => [
                "03624010",
                [
                    "cep" => "03624-010",
                    "logradouro" => "Rua Luís Asson",
                    "complemento" => "",
                    "bairro" => "Vila Buenos Aires",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ]
        ];
    }
}