<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="stylesheet" href="/public/css/pdf.css"> --}}
    <title>Los Portales-Cotizacion </title>
  </head>
   <style>
      @page {
    margin: 50px 40px;
      }
      body {
          margin: 0px;
          font-family: "Roboto, sans-serif";
          font-size: 12px;
      }
      table{
          width: 100%;
          margin-bottom:8px;
      }
      table.collapsed{
          border-collapse: collapse;
      }
      p,h1,h2,h3,h4,h5{
          margin: 0px;
      }
      span{
          font-size: 10px;
      }
      .with-margin{
          margin-left: 40px;
          margin-right: 40px;
      }
      .xs-with-margin{
          margin-left: 5px;
          margin-right: 5px;
      }
      .bordered{
          border: 1px solid black;
      }
      .col-12{
          width: 100%;
      }
      .col-11{
          width: 92%;
      }
      .col-10{
          width: 83%;
      }
      .col-9{
          width: 75%;
      }
      .col-8{
          width: 66%;
      }
      .col-7{
          width: 58%;
      }
      .col-6{
          width: 50%;
      }
      .col-5{
          width: 42%;
      }
      .col-4{
          width: 34%;
      }
      .col-3{
          width: 25%;
      }
      .col-2{
          width: 16%
      }
      .col-1{
          width: 8%;
      }

      .pl-1{
          padding-left: 5px;
      }
      .pl-2{
          padding-left: 10px;
      }
      .pl-3{
          padding-left: 15px;
      }
      .pl-4{
          padding-left: 20px;
      }
      .pl-5{
          padding-left: 25px;
      }
      .pl-6{
          padding-left: 30px;
      }
      .pl-7{
          padding-left: 35px;
      }
      .pl-8{
          padding-left: 40px;
      }
      .pl-9{
          padding-left: 45px;
      }
      .pl-10{
          padding-left: 50px;
      }
      .pl-11{
          padding-left: 55px;
      }
      .pl-12{
          padding-left: 60px;
      }

      .pr-1{
          padding-right: 5px;
      }
      .pr-2{
          padding-right: 10px;
      }
      .pr-3{
          padding-right: 15px;
      }
      .pr-4{
          padding-right: 20px;
      }
      .pr-5{
          padding-right: 25px;
      }
      .pr-6{
          padding-right: 30px;
      }
      .pr-7{
          padding-right: 35px;
      }
      .pr-8{
          padding-right: 40px;
      }

      .py-1{
          padding-top: 5px;
          padding-bottom: 5px;
      }
      .py-2{
          padding-top: 10px;
          padding-bottom: 10px;
      }
      .py-4{
          padding-top: 20px;
          padding-bottom: 20px;
      }
      .pt-2{
          padding-top:10px;
      }
      .pt-4{
          padding-top:20px;
      }
      .pt-6{
          padding-top: 30px;
      }

      .p-1{
          padding: 5px;
      }
      .p-2{
          padding: 10px;
      }
      .p-3{
          padding: 15px;
      }
      .p-4{
          padding: 20px;
      }

      .p-no{
          margin: 0;
          padding: 0;
      }

      .m-0{
          margin: 0px;
      }

      .mb-1{
          margin-bottom: 5px;
      }
      .mb-2{
          margin-bottom: 10px;
      }
      .mb-3{
          margin-bottom: 15px;
      }
      .mb-4{
          margin-bottom: 20px;
      }
      .mb-5{
          margin-bottom: 25px;
      }
      .mb-6{
          margin-bottom: 30px;
      }
      .mb-7{
          margin-bottom: 35px;
      }
      .mb-8{
          margin-bottom: 40px;
      }
      .mb-9{
          margin-bottom: 45px;
      }
      .mb-10{
          margin-bottom: 50px;
      }
      .mb-11{
          margin-bottom: 55px;
      }
      .mb-12{
          margin-bottom: 55px;
      }

      .my-4{
          margin-top: 20px;
      }
      .mt-6{
          margin-top: 30px;
      }
      .mt-8{
          margin-top: 40px;
      }
      
      .mt-12{
          margin-top: 60px;
      }
      .mt-16{
          margin-top: 80px;
      }
      .my-12{
          margin-bottom: 60px;
          margin-top: 60px;
      }

      .checkbox-container{
          border: 1px solid #707070;
          width:15px;
          height: 15px;
      }


      .text-center{
          text-align: center;
      }
      .text-right{
          text-align: right;
      }
      .text-justify{
          text-align: justify;
      }
      .text-left{
          text-align: left;
      }
      .text-bold{
          font-weight: bolder;
      }
      .text-upper{
          text-transform: uppercase
      }
      .text-underline{
          text-decoration: underline
      }

      .text-red{
          color:red;
      }

      .text-gray{
          color: gray;
      }

      .text-white{
          color: white;
      }

      .bg-blue{
          background-color: #112d60;
          color: white;
      }
      .bg-gray{
          background-color: #707070;
          color: white;
      }
      .bg-gray2{
          background-color: #c7c3c3;
          color: black;
      }

      #header{
          padding-top:20px;
          padding-bottom:20px;
      }

      #footer {
          position: fixed;
          bottom: 0px;
          left: 0px;
          right: 0px;
          height: 50px;
      }

      #logo-ei{
          width: 70px;
      }
      #logo-ei-letras{
          width: 40px;
      }
      #logo-ei-horizontal{
          width: 300px;
      }
      #logo-proyecto{
          max-width:150px;
      }
      #plano-imagen{
          width: 600px;
      }

      .bb-1{
          border-bottom: 1px solid black
      }
      .bb-2-blue{
          border-bottom: 2px solid #112d60
      }

      .page-break{
          page-break-before:always;
      }

      #watermark {
          position: fixed;
          top: 35%;
          width: 100%;
          text-align: center;
          opacity: .2;
          transform: rotate(-30deg);
          transform-origin: 50% 50%;
          z-index: -1000;
      }

      /**
      * Border Collapse
      */
      .border-collapse{border-collapse: collapse;}
      .border-separate{border-collapse: separate;}

      /**
      * Font Size
      */

      .text-xxs{font-size: 0.5rem;}
      .text-xs{font-size: 0.75rem;}
      .text-sm{font-size: 0.875rem;}
      .text-base{font-size: 1rem;}
      .text-lg{font-size: 1.125rem;}
      .text-xl{font-size: 1.25rem;}
      .text-2xl{font-size: 1.5rem;}
      .text-3xl{font-size: 1.875rem;}
      .text-4xl{font-size: 2.25rem;}
      .text-5xl{font-size: 3rem;}
      .text-6xl{font-size: 4rem;}

        .rotate{
            transform: rotate(-90deg);
        }
        .inline {
            display: inline-block;
        }
        .orange {
            color: orange
        }
        .titulo {
            color: rgb(36, 57, 84);
        }
        .contenido {
            color:rgb(64, 100, 111)
        }
        .border-collapse {
            border: 1px solid black;
            border-collapse: collapse;
            }
        .table, .th , .td {
            height: 39px;
            border: 1px solid black;
            border-collapse: collapse;
        }
   </style>
  <body>
    <header>
        <table>
            <tr>
                <td class="col-4">
                    <img 
            src="data:image/png;base64,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"
            alt="" 
            srcset=""
            width="150"
            height="60">
                </td>
                <td class="col-6"></td>
                <td class="col-2">
                    <img 
            src= {{ 'data:image/png;base64,'.$cotizacion['logo']['logo_base64'] }}
            alt="" 
            srcset=""
            width="65"
            height="30">
                </td>
            </tr>
        </table>
    </header>
    <section class="mt-8">
        <h2 class="titulo"> Datos del Cliente </h2>
        <hr class="orange">
        <div class="col-12 mt-8">
            {{-- @php
                print_r($cotizacion['nombres']);
            @endphp --}}
            <div class="col-6 inline">
                <table class="contenido">
                    <tr>
                        <td class="col-5">NOMBRE </td>
                        <td class="col-6"> {{ $cotizacion['nombres'] ?? '' }} </td>
                    </tr>
                    <tr>
                        <td class="col-5">N° DOC</td>
                        <td class="col-6"> {{ $cotizacion['numero_de_documento'] ?? '' }}</td>
                    </tr>
                    <tr>
                        <td class="col-5">EMAIL</td>
                        <td class="col-6"> {{ $cotizacion['email'] ?? '' }} </td>
                    </tr>
                    <tr>
                        <td class="col-5">FECHA VIGENCIA</td>
                        <td class="col-6"> {{ $cotizacion['Fecha_de_Vigencia'] ?? '' }} </td>
                    </tr>
                </table>
            </div>
            <div class="col-5 inline">
                <table class="contenido">
                    <tr>
                        <td class="col-5"> APELLIDO </td>
                        <td class="col-6"> {{ $cotizacion['apellidos'] ?? '' }} </td>
                    </tr>
                    <tr>
                        <td class="col-5"> TELEFONO </td>
                        <td class="col-6"> {{ $cotizacion['telefono'] ?? '' }} </td>
                    </tr>
                    <tr>
                        <td class="col-5"> N° PROFORMA </td>
                        <td class="col-6"> {{ $cotizacion['numero_cotizacion'] ?? '' }} </td>
                    </tr>
                    <tr>
                        <td class="col-5"> DIAS RESTANTES </td>
                        <td class="col-6"> {{ $cotizacion['Dias_Restantes'] ?? '' }} </td>
                    </tr>
                </table>
            </div>    
        </div>
        <hr class="orange">
    </section>
    <section class="mt-8 bordered">
        <table>
            <tr>
                <td> PROYECTO:</td>
                <td> {{ $cotizacion['proyecto_nombre'] ?? '' }}</td>
            </tr>
        </table>
    </section>
    <section class="mt-8">
        <table class="table">
            <thead>
                <tr class="bg-blue">
                    <th class="th">UNIDAD INMOBILIARIA</th>
                    <th class="th">NÚMERO</th>
                    <th class="th">ÁREA TOTAL</th>
                    <th class="th">PRECIO NETO DE VENTA</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="td">{{ $cotizacion['item_unidad_inmobiliaria'] ?? '' }}</td>
                    <td class="td"> {{ $cotizacion['item_numero'] ?? '' }} </td>
                    <td class="td"> {{ $cotizacion['item_area_total'] ?? '' }} </td>
                    <td class="td"> {{ $cotizacion['item_precio_neto'] ?? '' }} </td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="mt-8">
        <h3 class="text-center bordered bg-blue" > COTIZACION</h3>
        <table>
            <tr>
                <td>
                    <table class="table">
                        <tr>
                            <td class="col-7 td pl-1"> SEPARACION</td>
                            <td class="col-5 td pl-1"> {{ $cotizacion['monto_separacion'] ?? '' }} </td>
                        </tr>
                        <tr>
                            <td class="col-7 td pl-1"> MONTO DE DESCUENTO</td>
                            <td class="col-5 td pl-1"> {{ $cotizacion['monto_descuento'] ?? '' }} </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="table">
                        <tr>
                            <td class="col-7 td pl-1"> SALDO CUOTA INICIAL</td>
                            <td class="col-5 td pl-1"> {{ $cotizacion['saldo_cuota_inicial'] ?? '' }} </td>
                        </tr>
                        <tr>
                            <td class="col-7 td pl-1"> SALDO FINANCIAR</td>
                            <td class="col-5 td pl-1"> {{ $cotizacion['saldo_financiar'] ?? '' }} </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </section>

    <section class="mt-4">
        <table>
            <tr>
                <td class="col-4"></td>
                <td class="col-4">PRECIO FINAL UNIDAD: {{ $cotizacion['precio_final_unidad'] ?? '' }} </td>
            </tr>
        </table>
    </section>
    <section>
        <table>
            <tr> 
                <td class="col-2"></td>
                <td class="col-3">
                    <table>
                        <tr>
                            <td><input type="checkbox" name="" id="" checked> </td>
                            <td class="pl-2">Crédito Directo </td>
                        </tr>
                    </table>                    
                </td> 
                <td class="col-3"> 
                    <table>
                        <tr>
                            <td><input type="checkbox" name="" id="" > </td>
                            <td class="pl-2">Crédito Bancario </td>
                        </tr>
                    </table>                    
                </td>
                <td class="col-3"> 
                    <table>
                        <tr>
                            <td><input type="checkbox" name="" id="" > </td>
                            <td class="pl-2">Contado</td>
                        </tr>
                    </table>                    
                </td>
                <td class="col-1"></td>
            </tr>
        </table>
    </section>
    <section>
        <h2 class="titulo"> Forma De Pago </h2>
        <hr class="orange">
        <div class="col-12 mt-6">
            <div class="col-6 inline">
                <table class="contenido">
                    <tr>
                        <td class="col-5"> BANCO </td>
                        <td class="col-6"> {{ $cotizacion['proyecto_banco'] ?? '' }} </td>
                    </tr>
                    <tr>
                        <td class="col-5"> EMPRESA </td>
                        <td class="col-6"> {{ $cotizacion['proyecto_empresa'] ?? '' }} </td>
                    </tr>
                </table>
            </div>
            <div class="col-5 inline">
                <table class="contenido">
                    <tr>
                        <td class="col-5"> NRO DE CUENTA </td>
                        <td class="col-6"> {{ $cotizacion['proyecto_nro_cuenta'] ?? '' }} </td>
                    </tr>
                    <tr>
                        <td class="col-5"> &nbsp; </td>
                        <td class="col-6"> &nbsp; </td>
                    </tr>
                </table>
            </div>    
        </div>
    </section>

    <section class="mt-6">
        <h2 class="titulo"> Datos del Promotor </h2>
        <hr class="orange">
        <div class="col-12 mt-6">
            <div class="col-6 inline">
                <table class="contenido">
                    <tr>
                        <td class="col-5">PROMOTOR </td>
                        <td class="col-6"> {{ $cotizacion['user_nombre'] ?? '' }} {{ $cotizacion['user_apellido'] ?? '' }} </td>
                    </tr>
                    <tr>
                        <td class="col-5">MOVIL</td>
                        <td class="col-6"> {{ $cotizacion['user_movil'] ?? '' }}  </td>
                    </tr>
                </table>
            </div>
            <div class="col-5 inline">
                <table class="contenido">
                    <tr>
                        <td class="col-5"> EMAIL </td>
                        <td class="col-6"> {{ $cotizacion['user_email'] }} </td>
                    </tr>
                    <tr>
                        <td class="col-5"> &nbsp; </td>
                        <td class="col-6"> &nbsp; </td>
                    </tr>
                </table>
            </div>    
        </div>
    </section>

    <section class="mt-6">
        <h4 class="titulo">CONDICIONES</h4>
        <br>
        <p class="text-justify">
            1. La presente proforma es solo informativa y tendrá una vigencia de 7 días calendario a partir de su emisión. La misma 
            no implica separación de venta por la/s unidad/es inmobiliaria/s en la presente, lo mismo ocurre para el precio de venta 
            y demás términos, condiciones u ofertas que la puedan contener
        </p>
         <p class="text-justify">
            2. El precio de venta consignado en la presente proforma, es sólo por la/s unidad/es inmobiliaria/s contenida/s en la 
            misma y tendrá validez por el tiempo de vigencia indicado en el punto 1 de la presente 
        </p>
        <p> {{ $cotizacion['condiciones'] ?? '' }} </p>
    </section>
    <section class="mt-8">
        <h2 class="titulo">UNIDAD INMOBILIARIA</h2>
        <hr class="orange">
        <table class="table">
            <tr>
                <td class="col-3 td pl-1 titulo">PLANTA</td>
                <td class="col-3 td pl-1"></td>
                <td class="col-3 td pl-1 titulo">AREA TOTAL</td>
                <td class="col-3 td pl-1"> {{ $cotizacion['area_total'] ?? '' }} </td>
            </tr>
        </table>
    </section>
    {{-- <div class="page-break"></div> --}}
    <section class="mt-8">
        <table>
            <tr>
                <td class="col-1"></td>
                <td class="col-3">
                    <img 
                        src={{'data:image/png;base64,'.$cotizacion['plano']['plano_base64']}}
                        alt="" 
                        srcset=""
                        width="450"
                        height="450"
                        >
                </td>
                <td class="col-2"></td>
            </tr>
        </table>
        <table>
            <td class="col-6 text-justify">Nota: Las medidas son tomadas a ejes de muros y son aproximadas.
                Las imágenes son referenciales y podrían estar sujetas a cambios.
            </td>
            <td class="col-6"></td>
        </table>
    </section>
    {{-- <div class="page-break"></div>
    <p class="text-gray"> hola mundo </p> --}}
  </body>
</html>