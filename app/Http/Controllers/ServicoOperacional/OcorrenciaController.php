<?php

namespace sgcom\Http\Controllers\ServicoOperacional;

use Illuminate\Http\Request;
use sgcom\Http\Controllers\Controller;


class OcorrenciaController extends Controller
{
    private $totalPage = 15;

    public function index()
    {
      //  dd( auth()->user());

      // dd(BD::Opm::class)

        return view('servicooperacional.ocorrencia.index');
    }

}
