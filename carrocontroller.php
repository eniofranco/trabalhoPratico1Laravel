<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class carrocontroller extends Controller
{
    public function carros(){

        $titulo = 'CONCESSIONÁRIA COMPRA CERTA';

        $subtitulo = 'Carros da Concessionária';

        $carros = ['Jetta Classic','GOLF Sportline','Linea GTX','Cruze LTZ','Santana LX'];

        $ano = ['2015','2020','2011','2018','2000'];

        $fabricante = ['Volkswagen', 'Volkswagen', 'FIAT', 'Chevrolet', 'Volkswagen'];

        $endereco = 'Endereço: Avenida Humberto Mallard, 155 - Santos Dumont - Pirapora/MG';

        $telefone = 'Telefone: 3741-2345';


    return view ('carros', compact('titulo','subtitulo', 'carros', 'ano', 'fabricante', 'endereco','telefone'));
}
}
