<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use PDF;
class CotizacionController extends Controller {


    public function generarPDF($id){
        // $today = Carbon::now()->format('d/m/Y');
        // $pdf = \PDF::loadView('index', compact('today'));
        // return $pdf->download('ejemplo.pdf');
        try {
          $urlEndPoint  = "https://www.zohoapis.com/crm/v2/functions/getdatacotizacionall/actions/execute?auth_type=apikey&zapikey=1003.1a51d5ade10533d453bdcb6f88f26b31.4a78fd92c92e60c6577a65b3bf19ec9b";
          $urlEndPoint = $urlEndPoint."&id=".$id;
  
          $response = Http::get($urlEndPoint);
  
          $json = $response->json();
          $output = $json['details']['output'];
          $cotizacion = json_decode($output,true) ;
          $pdf = \PDF::loadView('cotizacion',compact('cotizacion'));
          return $pdf->stream('Cotizacion-RTS.pdf');
          }
          catch (\Exception $e) {
              return $e;
              // return APIResponse::fail($e->getMessage());
          }
      }
}    
?>