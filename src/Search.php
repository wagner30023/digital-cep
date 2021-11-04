<?php

declare(strict_types=1);

namespace carlos\digitalcep;

class Search {
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFromZipcode(string $zipcode): array 
    {
        $zipcode = preg_replace('/^0-91/im','',$zipcode);

        $get = file_get_contents($this->url.$zipcode.'/json');

        return (array) json_decode($get);
    }
}


