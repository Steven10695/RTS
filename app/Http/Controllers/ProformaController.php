<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
// use App\Facades\APIResponse;
use Illuminate\Http\Request;
use PDF;
class ProformaController extends Controller
{
    
    public function generar($id){

        try {
        $urlEndPoint  = "https://www.zohoapis.com/crm/v2/functions/sa_obtener_datos_separacion/actions/execute?auth_type=apikey&zapikey=1003.8b69d879c97e5cf177147828cc73616d.b76188b7e456efed7437303fb500f8a5";
        $urlEndPoint = $urlEndPoint."&id=".$id;

        $response = Http::get($urlEndPoint);

        $json = $response->json();
        $output = $json['details']['output'];
        $cotizacion = json_decode($output,true) ;
        $pdf = \PDF::loadView('index', compact('cotizacion'));
        return $pdf->stream('Cotizacion.pdf');
        }
        catch (\Exception $e) {
            return $e;
            // return APIResponse::fail($e->getMessage());
        }
}
}