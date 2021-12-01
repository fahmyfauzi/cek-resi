<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CekResi extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function detail(Request $request)
    {
        //menangkap input dari form
        $courier = $request->courier;
        $awb = $request->awb;

        //validate
        $this->validate($request, [
            'courier' => 'required',
            'awb' => 'required'
        ]);

        // $jsonData = ApiCekResi::getApiResi($courier, $awb);
        $api_key = "4e0c0b1481ab0803b4d5e1c4e8a9cab88342cbae6d9139d3c1a20b3092254740";
        $response = Http::get('https://api.binderbyte.com/v1/track?api_key=' . $api_key . '&courier=' . $courier . '&awb=' . $awb . '')
            ->json();

        //dapatkan data array api
        $response = collect($response['data']['history'])->sortBy('date')->all();



        //menampilkan
        return view('detail', [
            'response' => $response,
        ]);
    }



    public function printPdf(Request $request)
    {
        // $courier = 'jnt';
        // $awb = 'JP6619474503';

        $courier = $request->courier;
        $awb = $request->awb;

        $api_key = "4e0c0b1481ab0803b4d5e1c4e8a9cab88342cbae6d9139d3c1a20b3092254740";
        $response = Http::get('https://api.binderbyte.com/v1/track?api_key=' . $api_key . '&courier=' . $courier . '&awb=' . $awb . '')
            ->json();

        //dapatkan data array api
        $response = collect($response['data']['history'])->sortBy('date')->all();
        $pdf = PDF::loadView('resi_pdf', ['response' => $response]);
        $pdf->setPaper('A4', 'potraite');
        return $pdf->stream('laporan.pdf');
    }
}
