<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    @page {
    margin: 100px 40px;
    }
    body {
          margin: 50px;
          font-family: "Roboto, sans-serif";
          font-size: 12px;
      }
      header {
                position: fixed;
                top: -80px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                 /* background-color: #03a9f4; */
                color: white;
                /* text-align: center; */
                /* line-height: 35px;   */
            }
            footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                /** Extra personal styles **/
                /* background-color: #03a9f4; */
                /* color: white; */
                /* text-align: center; */
                /* line-height: 35px; */
            }
            td {
            vertical-align: top;
            }
            table {
            border-collapse: collapse;
            }
            /* .tr {
                padding-right: 15em;
                margin: 0 1em;
                border-bottom: 1px solid grey;
            } */
            tr.border-bottom > td {
            border-bottom: 1pt solid black;
            }

            /* ********** */
            /* ********** */
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

        #watermark {
                position: fixed;

                /** 
                    Establece una posición en la página para tu imagen
                    Esto debería centrarlo verticalmente
                **/
                bottom:   8cm;
                left:     4.5cm;

                width:    13cm;
                height:   13cm;

                /** Tu marca de agua debe estar detrás de cada contenido **/
                z-index:  -1000;
            }
        
            .fon{
                height: 1000px; 
            }

        
      
</style>
<body>

    <div id="watermark">
        <img 
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAJYCAYAAAC+ZpjcAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDA2IDc5LmRhYmFjYmIsIDIwMjEvMDQvMTQtMDA6Mzk6NDQgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMi40IChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpEMzMyNEU4NDBGMzkxMUVDODREMkExM0M2OTZFM0EwQyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpEMzMyNEU4NTBGMzkxMUVDODREMkExM0M2OTZFM0EwQyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkQzMzI0RTgyMEYzOTExRUM4NEQyQTEzQzY5NkUzQTBDIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkQzMzI0RTgzMEYzOTExRUM4NEQyQTEzQzY5NkUzQTBDIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+TzJFlgAAWLFJREFUeNrs3QeY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"
            height="100%" 
            width="100%" />
    </div>

    <header>
        {{-- Our Code World --}}
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAABFCAYAAADjA8yOAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDA2IDc5LmRhYmFjYmIsIDIwMjEvMDQvMTQtMDA6Mzk6NDQgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjc4NTlCREFFMEYyQTExRUNCRkVFREVBRTAxRjUwRkMyIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjc4NTlCREFEMEYyQTExRUNCRkVFREVBRTAxRjUwRkMyIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMi40IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkY1RTU3QjQzMENEQTExRUM4MThGQTNGQjk1OEVCNkU1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkY1RTU3QjQ0MENEQTExRUM4MThGQTNGQjk1OEVCNkU1Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+0j+5VAAALelJREFUeNrsfQd4VNXW9preMzPJTJJJJZUUIAkQuqIISlVBiAqIoNIUCEWKCqIgXDoBBOlFinSk9y6IIZQgNb2XSTIp0/u/9jkJhKZ4zb3X5/9mP89Jppyzzy7vfte71t5nD8PpdIIrudL/L4npagJXcgHalVzJBWhXcqX/fGKTPxqt/r92QwdqdhGXCwI+F0as3Tl/1YT5H0OoP/uzEe9+2ym+ycK8ojJwOBzAYDCeca0DeGwOyIRCeJb2t+N1bkI+iHkcsOHrZyUehw1cDgdeHjkV4F4mRE0cCm8HB8Dg1rEgFwkhNbcQ9GYzsFmsP6yHwWyFMJUSIn29YOL2Q3BNXQ4hHnL4ce9xmPFON3jn9Q5QVKyGLkvWQ7C/DwyICofOcVFgMlueW7Zn3sfChkB3MzT10UJm7irgcr0hKGgG5ObOBq32KnA4ymdeZ7VWgIdHd2Ay+SCRtKCuMxrTIS2tDwiFraFp08Nw+3Yv0OsvQWjoTmxPC5SUbAaLpQQ8Pd8DX99hVB/U1NwAg+E+Xq8CjeY4sNlyzC8O7+AEqbQ9Xn8fqqvPg9mcD1VVuyE8fD8UFS0BPj8cv2+L9+dh3lY8n4Wvxfifgfmy8GBCXt584PF8QaX6BGy2ajzPBiyWAO+lANK9bLYYdLrroFbvgYqKJWC3IwMz6+oHWM4hWMe3qDL7+Q3/7zM0AbOQy6HAPGHz/jWrhk75HCQiOaTlSZaP+m7B4cs3xoYH+lAN6XJWXekfLTkcDmRmHheEfB5M3nZg9aJB4z8BLxWAFEdtgBeATALrpyxZvPNc8oSIIF8XqF3pnwtoSmYgmAV4jNu0b/28geOHgsITQCFHnWADypYo3FEPsGHTl0sW7D6XPCaskQ+wXKB2pX8aoAkz18mMz1FmJA1OHILiB8DLA1A41RPA+NoTP+OykamTluw5f3VsODK1C9Su9I8BNMXMfFpmjN24d/PCDyegzPAH8HB/HMxPghqZfOOUpMVbTv06jTA1k+kCtSv9jwFNwMwnzIzgnLLt4A9LhowbCErlI5nxvESBmsgPDmz7aumMXeevjiGOIsXUDheoXel/AOg6mSGmHMCDa+YOSBwBnr4IZo9nM/PzmFrII0y9ZPc5Wn4wXEztSv9tQD8pM+YNGPsJKLxop89ue/GMyLkKmqk3fLlk8a6zyePDAon8YLpA7Ur/HUA/U2bUOYB/BczPcBQ3fLFk4a7zKWOC/bwoQBMrQO5X/7Dj4YK6C9ANBuY6mZG4Ye/WuQNGjwCvvyAz/gzUIj5sGT93yaJth1Z4esgoR5HMJdY/2MjeTIarU/8vJ3aDyYza6exJ2w6tXPrRxP6gUNHRDLvt79+ASAw+B8BaTkZgWBN/FeRx2A+lhwN5mcNkgc1uh2qjCaxk6tzVty5A/y2ZwadlxvwBicPBEzWz8m8yc10iayqq9QBFBfDO7G+3bZj48YC8IjXwUIYwKdg6gYVgJus8yrVm6j3DBWcXoP9tZq6dAUzcsGfr0o8m9AdPH9qZaygwV+kAigth0Lwv1q/9/OOPMwpKoAZZmIXywl4rMyxWG6i1WmpxEovpWkDoAvTf0MwEzJO3HECZMYmWGYoGkhlMwswEzMXw3uyJmwmY0wuKkayNFGiJvJCKhCCSiKGyugY8ZG61K+T+2C3kcTjI7ihfWEyyPA/4Aj51HZEvRP97yaWgtVmB+ycDQ2e1g7ub+OEAImtPBAIela9cKgYfpTvYLVZ0aDnAQXnEcIn7fy6g62QGCc2N27RvU9LgxEHUDCCZNLE1EJjJktbCAhg0/8u16z//eOj9/GKoMdBgJuCTiURgc9jhxIVkMKGK5rCeURUGo5XdZpdaHTZW3XJULp7HZeO5NXo1epZWfUWVjdc4NE0pc7OnFatZV+5mdNQZ9FwmAp/hJPqcLDFhW/Elw2KzsQl8nZiVVW8AbUhQlbxp+BWpRARCrHdNjS4IdEbxtbuZXgE+nuLcghILlFWWWL2UGqWHPEeMg8dgNFOTRC/cFAzGM5fSulIDANpZ28AcBBVhs4nbD61NGjJxEHj6oQMob0DNjMxcmA+9v5u8a/mEj4feyS1E/KHMQPazU7OFTvDx9ICBc1bA4ZlLAQIDnjPyHLtBLPSnyqUz0Hk/rDlWHdn4weL18NWJi0XdtyZ1vJyZl/3ZpDmnIb8Ev3OrVyYmXfn665jz8iD4w37lv66YqbxbUPzGiaRNm0Cr8yLXbVz9E2xct4NuDw4Xsi5cgxkZecd+/m78W2Ih36JHyfQiieCY3NZicwUj/yOAZtQCWioSCAYv27xz05iJPUEVBuAufRzMDAQAMbcmM/2eOHUO/F7qBlRcDWUKWVn3lDp4KDNKoM/MiZs3fzVsUGFRCRjNFuDzHhXVUyaHY79eg8NLfgSQyenVes9KWoM7Wo3Lb77fdyYLWb2sRktNzJAiyCVi7r60bCboDa1gy94vuk9beOjeqtkRV0f0f+1WfhFXLBRQA1eAA/fQpr1HwUOa0bd319EVKG/I3aqramBol5fKC9UVyj0L1h2T4gB7bWjCQguL9UtTD7n+X98klSxaMk25/0GO+PzPJ3qV7T32yYfu0p+SRn3wTkFl9R8qI7RBYLSx0AKxseksIA6xUw8muFIDAppMZMjFQjDR5s8o4XIt1BcUmBg0iClxiUyoqQQQI3g9vZzg5GdBS5UVEQmQXsACqzEYyktZaIoBUIMi1dNAJloUQUKiGW/PnLh2z9SRQ3FUgIfQAAEKT3A6HoGWz3eDSl8ZTWFEDwv5dGjvycTniqCw9N6BC8nHRid0h4ggPzBZLA+1dBOUDS0a+f+8SW+KLb50vVviTweAL5Oc6ejZBJw2dDBRYEiEQjjkJkbBLMtvGR12rLRCQ0VXSlA6XCvXwPq12z+Biir4ZM7nXds0aXw8s0gNoWIRxcx+eO3LzSJgyccJBxK+nPtJ2p5jfaaHNYIKnZ6SbU8mAWqcXCsTTHoRKCUGkLL0wGfwoH98LLYP34XWhgJ0XTSDmPxZG/bMbtOs8aZlw999J8DXc86k3qMmE+eKAicBqcLL4vX+G9sTOjTZrpAKjupqSmBo15fAA3XmskOnECRyMFgZr649cb1f2dmL7yEby0EqoQdFSSn0mjFh0z4KzOD+++9JExtHDPuCyxGjn1lTayOIz6mDmLAIGDF9GKxM/A7pNvLZgGaziUYQwclLcCs2ElpGheKY0YMU67I/IxfulVbA0HYt4X6Qb+lvl6/DpsNnKKe2T1QYKHHwkkFsR2BTUsNmF2iQ4au1BuoRMR4OwBqrA+7rDE4yWM9n5VtuVtbAgr7d4VpyKlqZMkgYMRWEXgqInDsZ3ujaMSStsFR1De8Lz5u6RzCDjA+jokvg1aB04DKKQSSKAT/39lBtcMmOBgH0E49NrV300aCPoXPCoMK93zeZ2PPVKaadSbyv+3w0FsxeAF27bO36UpOhc9973Rjlrof8nEMtq9RHQmtyDvpWORjQw7e8WKZ4PdPXt8PZni26nl3cPvzT3Vfur4J9R4dBeRoy8/SN+6Z+OgRvyzl3pucvZ84fjuzZsyyiVfz83sDgo6oxUM+iOZ2EPZ2wePj7sHLZdhwIFQBe7k8DRWdkoqY1vzN5OHSIiYTSykpQKd3BUyQEexWa/ZRb4COTgLqg9A2077Bs+AAo1+nAYrFBOTql1mcAT4/yR4UDsEdcJPjIZfBRq5jj3Xcfg5SfDh6CmIhpmwV8XfqDLAOWpRwlDxiyL0P/z752zlk56+TxpK+z9BWVYLE74Wk/j4EyQwhRivvQRL4UB70HaI1SEApFYHcSDe9wofXvApp6bIpPx5lrH5v6GLzR/J2+5Ov73tg7BT8tbjytd5dxzF1rhWuu3M9aO/Ltuc0EyaAp+CLp6KX1AzVV4GGyPpK4xCfjc05jJ0F1iO9ru37sNyNxVp+3h08JVyVbtcaue2kww9mzvW8lpxyO8ENf88KFBW+zWbyfmzf/7m3i7VutegrUVqsWidENhn6aAGvGzwTw9nga0DbbXfDxSsgpLn3t7O/3ELNOygeQ8HiQX1rmhNsZxn4JYzyxgKK562ZNGNWlA8W+N3IKYO6RsyBAWfKUY4z3MKG/0MTPBzzdRBDl612wcv3c8SN6j5yHA2vhoosptISKCKIrHqACyC2CKV2HwL6TGyf1btN8/h+1ud1YDbfv24HF4eHlZiRtBvDc4E/Dka70J4B+8rGppCETh1CPTZHpbCIRjv/i49dvTOaeL0e+Pq7vG8OH9+gAZWlTP7ySmjQ3pxC8iCTmC1Dicp/AmINSJtIi9elP8ktPD4mOmDp+x+ckVAHr9Lr04OTkz45cv3GysUJBByLcsDPPnpv1Fmr0Xc3jZvTjcEQUqJ0kdobu2ZKR/WHNhgMABaVPg1qGMigzDyXALdoZrWXFKhPqaC8FRxwb6ae7cJWBoFN3bxV7xGi1IogcoDOZUGGgFeA+HS4TYoUIS++8fA28sR3UqMOTjcbFg5dOW6xyONuXMRgiu8XCYDGZDCk6lgtvPyB+hVvI3fQVvfuPn3d8/8qVDOKumi31nEBARraDTKSClr5G4LD5VGjQlRoI0PVlxsPHprz8amcArTQDeSG4T5z3PN2jU2DH1vGpzKpNc4+fTZqEvhBIJH/gwWPvCdC/wb4m0TFWRu53S97hKeIbhSZ+UFKZ5n/r95ONkcEpMBPpyq3N79SpmX3x8r0I6j5stpCSHxaLDvOSQuLwd2DJqK8BVIrHAW13RKH3twl8lIMfK0RJGbBRMhyZNwWuFZQEjRs5Latp/8TdG2aMb1KCDq3NZkdnVICm/hmhS3Tc+Cw2pKnLoUSrhZTc4tiTOw712r1ixoowH+9L85HZeVhoBqkomqS+jfzAjho729PDA37YtmLdud9iRAL+L+b6gMbBllqigWnd+4CHhwzy8+3AcU14/ntTGM8DM5k0mbTt4OqF1NPZTzw2RUBTXACvTh+/avmYgQc4ukNDNvz02SQBAlEkesGYNmYhFtNg3fXz2IF37y6a7e/f43z37hvHG0yPQr7kPAJquRzg5OmZva9fn/ozi8UFwtROSlc6YeqAXgC+jQDUlfCEOKXmRZ4KPiIb2nA0IZNC5+jw7EZt48imF37jz1+BLy6lwNKbd6kL2eynUUUYnITQ3FCHu4kkIGexukF63oydKbfblOv0sOXERVh39hdYcy8NFu4+Am+SPT9eaQ03C0oDiPPsLXPTEGZXoBNdd3CQBXpEBsHrTVVgQevhWu/dQAxdfwZwyraDy+cPSBxKL86vN2lCwnO5hQBdOmv3f/XZCF31Lb+9h3qtR1kKfP7jcw8vAmoCVgLsk6cmfOHt3WVfeNiHiyPC507MyLinksnoc8hB5KxcSssP1NC74lB+sNlEftSAQuYJwycPhlVjplLLTJ8YsEL6FRasBgtZqcVCVkGvHh1JLBrEmLEXgyXOqdRWVd5Lx3O0UCZzA4vKCzgMMqmBOthoYoHJIrSgJtaZTeAmVKJ2jgK5yAQqMf/nnW7i2TsXr/+hrLR8B0qfZHATWCltlV0A285eaWG/lBIBe4705XdqW/Bpl5fvEsVjrhe31xm0qMllIBWyoKLC4EJlQwCaemyKx6ndN+PgmnkDEuknTZ58OpuwosUGA7p3WihBkJ3+bdAPZRoAT8VfA3N9UBOJodcDXE0ZubFL54vREY2//Dor64M1JL86wq0DP2H0EyeJ/GDtjoub3pd2lmyQNOx9WLVmL1qOCgB/r/qTLfSLAiNAGycs6tMY8qyJMKBbN9BUl2GeXNTKHBt4etioddcCEteWA5vjTe2wJOSZ0WfAAkr4Nh5HChyUOAJmOkgceVCmiQcGL+he77GfjN+3dvP8s6t++hyUOPh1ZHVgObYuC45tP0RPMIX5Hfr5mymjGhOd78D3TjyHwaKLz1I+dPqYrsVVfx/Q9aMZ5LGpJUMmDqTA7PmMJaBk1i8mwtyrXcv5Ndr7ktLy1J4S0b8H5keDiZYUmVmXokJz9rXw8nptra8PzCtVg1wgeJrRybmnzn7zjtNppaIfZKspPk8MqUdWwZRNB8GC2tVXKiYRi0jMWnu7zAj9I3zgg7b7wCfQF3N6HTKKrcARy8Fb5AadurzbxOkf7ejVxB+qzEyQ8qzQyk8DLNS2dmYE3Ok9KNLHTWnq3lgJjsAz4Mk7j8xeCBrLHcipbAEDO7ddfLpClxQHjGCmsrHw7LFzAMEMWNDzPThyPU175ubFEohvZbI67KDVrIPy6kLwkL+KCsRIySaxpDlaIDm1RZYrNQCgpSIBetaseo9N+Tx/PTOaZGjb5makn8hQkr/ig6oqJDXh3y8ICekRIisuPvixSvXqNYGw3S92++Vez5MpJNBy+gyJfjD2NY+b2dthN0MzvwBYPqIfTN5xAhzouMnFvPuppZUwtH00jOoSD5XFR+HuPRM08k8HLzFqcGkkcJkV0Fa1Lc2NrQIfqQJUdgaEyZMhSHoBy1MGensEDG//4X2W/Rb4cx8Ah3sTzHZP0FqDQcLJhljlZTDxvoDpHVo6Izx1maVVx6CJuxp6t/sXiJ1nIVB4HXrGxECVVQTuzp+hsOAHYAt7IxVL0NhZqNXbTieTitoQa0Tv+8bBg137mvVQPdGfcYDeH67u/bMDVfR3zFrVxaj9jIScWLV51L2n83E6zY/d+ym/4+GedKyH+dX2SO3nbApObLYble8fD05nbX7sJ857VmiH8bC8LwxoJ4sJk3YcXjV/wNhh9NPZf7CeGcvSOtj/vjvfCdklx99tqJ0FKJ1MFtlp0+LNpmqUIYG/s9hPA/oxUKOmPnnyu7fRTO+Kjfm2n8NugiAPT5je6xUY8uNRqLEgmOPDEMwtKd8wv7zGTcAXmiw2BqrYKpBJGGAwVLGChbOFkeEd9AZ7qIPFNAIHj2qTJwLazGQzrvC7R3biqNX73KsMZJo+ACWMDb1Pu9Rkc+eQSEuIp0MzvkfbarCf56f9vkj+dggKj+AVkRl35+VJ3G9n9O2UVoaqGfKzzwhKNYEcd6bMymKJjHZ7ZW0n2qnNEkl3MBhkhtLs5qR2OGThOUZ8b6jd6JDpRs5nMnk1NmrmFEicsm4VFVk4o6M/I22EHpHTWcJgOMjiPguP5201mYo4Dofa3W6v8LdYikPwf67DUZHDZApLSMfa7Tq2w2ESYtl0DLyQzseKh70uBi9yUmsQnCZyPpPJRQBL8b8Iy2j0stlyPPT6m02t1qLbQmF0GputsDoculrQ1oGeXj2I9yCbM7ohWI0slsRKNmtkMGiQkw0miWNMNm5ksz3wtUmGClJeXwU4qAlcUzWWTUM2eXwM0DO2Hnh7/ifThoGH8s/XM3vI4bfb+Zf3nt8K8ZLkcHYDrpkh8qK8/HLgjZtT0dmr/JUs0yDgfdbqyTpQE8fxzJkZfWXSZmP9/HokWQzFEO0vhS87R4LepIMBHRtTjVlZebGppmLrLT6fqfPxGenGZHKcBkMRWCwVTXTW0NM2hqgVh2vOIvmabJJaBmSFASv8YGF54b7CkuMDibzFhmSy2RyRzWY1kGcMyNIQg2XIZKhJyb5z55WLBJ2VZomWU/Wq3GYrIEtH+Ddu9H8QFrLqZZONxTEaTmeXmE9zPD37+IhETYstFg0FGAJcFkuITuHObdXV594XiWRrTaaqoTLZa1jPT7GchYFlZetzSHv7+o4KtNs1eRrN4fFCoWSw06mt60viESMYBWAyGQ1crnwSnx+w1OFoHltefigwK+vdK1g/jsl0TXf79ptiqzUVBwzwMjMHqoODVzV3OqvUOt3FitzcKyjrXo3j8bxus1hSvHcpgkyIfs6VX7ncgOM8ns9EsgspKbfVqg4rLBy9C8EVw+U2Ky8tXacwm9PMhYVHnAzG0qEKRZ8tNlsVGSzkXArcHI4XEsnd5mr1pmvY5ya5/GUEq9VEdkzlcpUIYhnFnDh+QK3esrSk5PuRfL6HGimvNnBFMKEmO6+uwME9i8USPw7oy3cz3gUzjviwQHqf0j+MtSHqcmuKd/92COLakpHfcIAmkQytDgzpaVtB6dWkhixx/qMZX1IcMghqsOiZ2dvelMlaJNXUpKP25cLbceRpcTkYtCXA5AggK+vTvT4+I1JMpqygioo9uwMCJr2j12eThsYaODzsThaH6eBB/dGOn2OJmGEcrvIXsxlWElbw9Owcjix1DE30yJqaS5fptU7Osvz8f+XxeC1+EYnip+p0Kdl8fnO9ycTgh4bOaJ2TM2Fvdu70iRyOz3KptHO1xZIjzMz89FRMzJlowkg0mCVQXX2tbWnpnPdlsvjKmpqrKrwnDtg3QCQKg4KCuUdFouBMZGpOfv6sn/z8JrcvKflxkcGgXUsGNrZFHyzIAhz8rTA/C3ajUySKliOI/JD9ZDk5n67i8VrmKBT9Pi0tXX9fIGhrsNlKBb6+gxsjq55Wq7clIdMOwT4oZrNDZSkp3r/HxWXLxOLG1Vgfanteu73cz26XehBQWq1lUFX1CxQVJa0mYPbwGNcKy5YpFEbprNZi77KyHw5kZo7ZjINui9VagBY3Bry8BlPygbBzbu6kDT4+Q24bjbdDCgsXbAsNXd3HZMqg2qKq6gwQkGI7+5WXrxotk3WfyWIpN9RaJ8qiEQslEIRWczieiBvvx+PQkxK6z4HGEQD3smhUPS8RqiyvhOi2jZpOf2cu2PlooE0NB2iSFxoIbvsOa0DhEe9ttfxJEB1LX11DS4+oqPHTOVwhuLmFAIcvguKKVCgpSQWT1YD/13Y3GG6Hhof/0Co8fF2frKzJfcxmtRLNMDFxxJ5a6GgIg5hO6qjVc8jAOchWb5QGBk7OVio7Znt5fXrT4dCDQvHh797en2ZLpZ7Zen26zmBIlri7910hFDa5wGRK8u32Kg3+L9Lp0vcxmcozaJpj8V6eyCGZkZHHWlZWno0qK9vfn8ORUbcm5js9PeGUXD5kjZtbp2Go+JQEqO7uPYi1aldSsi4yOvpSbFTUyRalpcvbYf6+ISFLKvDibBxo2eiD3MX20GIXPUBwZwcHf5Xj6fmBlgxQrfaSu05X4OflNXS5WNziFJarAGWBhsNpVIgAP4PnbSsuXhus1R6R4gAt9PP7yksgaHEzJSWoEPN3c3d/g3JekfkrUR/raZ/HjWJalC0+XG6LSgTgVQS+pqbmikWnu5WnUn31WlTU7o4y2avYfm9he72NdemEr19Gxs8ZXF19uxmCuGlY2JaulZWHeqM1UcpkL2FftsOB/Sv6UutwsCyXs9khEBQ0f5NC8Wa21VqYbTKlZZvN+XhkZyOoNaTd1Op1jwO6a2xk6q6Nc/pTnlZ6Hj1N97xkssB9FsQLPCJAwO+Y3JBrZswIaKms4/0m0Z8AmphOxEl83sMaBMw6Hc3gnTpvH63yan9RKFAgowWDuywUWS2KWqlGNvuurNy1SakcvLus7GcnssMFpbKvJi9v5no2W0C0GpM2YwzKLPJ4/nj4UUyNjOWgo34MSUDANFCpxpPNteV2exmCrFgql3fHDngfLcQVfF9QzecHKtEKoCRIpJwjHi+MYjGT6XcG3seGHUAGSJRIFHLP33/ihvT0t7cSRiKbfhcVrZ5gNmcJvb0/GlZWNleE9eMKhTIQi6MgLW3EfpVqxFmLpQjZr6RcpZqQnJs77XhAwBiIjNxSqyeBWrKIgOS6ucWDn98kMhDYRG7ZbBo0/5CTmTnIcOtWe0qbSiRtsI4GSE1thvknXMMuL6jd1iSwsHCesVmzcyg5GKLffnO/x2LJ8PwYbJ9KLj25ZEBp4I7k0RRCQ9cPtNuL2YWFMx1G41GtRrNEV1Gx0Z6bOzgZZQoDiQDbYwy14XqdA4hlX69SDd6l0RzBQeFxwdt7VEZm5qRdlGRgiynZYbEU4H2qkWiIYmD6ymSvIMMPwnt2wD4mA6MHHp1BozkAOTk/PA7oSp0B+raJ/WnN3mUDQIBlzi7CnDnPtfP2kqLGjTz8wNc/YSv1VEUDOIZ1+YjEEZdNphrUkpcin7cepz6Yu/XYPCE06N3vLZbq2ulw4lzwqA6QSKLBaMwYrNdfV6Dp3XnjRu8O1665t3Y6jT+q1d/31Ouz+AJBSC5W1omMR5kviaQlHvGUg2I0XtE6HFqjXn9Lp9NdowBPgE7MJvlPnDV0WCgnhjw3YDYX6auqzlHnubt3q9WDYiIn7EymgMVmU2sCGEZjIQQETP+IqLvCwu+/JffKzBy+ICBg6RZiSrVaiCTg8vAYgbo1O66ycqcCHdFjqaktOty4EdPBYsnfrdOdiUbnMdrbewAQ2Vf/GQcm+o52u56yNAREWFYHMr7Ux2eSKDBwNg70eGqguLm9ioP0C2TPj8PJ9+SemJelvPyWWKdLhdatHWFVVZU+9+8npMhkrUm9C7DV2aS+JlM+DuRbeA/rveDgjQk4IPpXVsJILMeoxo13TePx4q5mZHQ/Z7FU+ubmfgmlpZvpdTRVl16rrr6AA9x49Nattzpcv65ogxr7UGnpso5mc5kPOUerPYf5lqOkiGSSiAn6C0azuQTL2x7L+xEolf2A1JuUyWwufHrqmwDpRlYevNsudtvWo2sSgDzsmZ79bFATFs/Kibyfpw6Xe3Y+KZOC3Wh8PpO+sNww0g5ek+iJP1RW3uOq1b+24fOfDWatln7d4809Q4ODBy7SVN3FOrAoYBHnHDuaYhGSMjI+nG0wkImbI4ulUslpbPALWu3hN8n9iouXz6ypSVFbLBk8HPXBQmE49dML5CBOj1DYHBu5QJCe/ua17OyxVL7EcaOjEnbqPQGuv/94EoWQGwypfhUVh3FQlVMsT4BP4svIcBHoUJUj0NGR5DqtVrT2HBGEh2+cXFw86eu7dz84x+fLrP7+oz8oKVlNQpjURlB8fhAp4xyTiTjLa8eiGjxNjqqqnYlkIior66tF1IIpYWcgWr5uVhXBUvszEEzCzgjg5la8zpvHC2glFMZSmpPF4mMZg8DDI4GwZ0+xOFggFrenJjDJM8MZGf2p5mvf/k5ERcW+Fg8eDFstEMTosN7GuvCe3V6D7ftRcn7+zK9DQ49ub9ny8JbY2PsbpdLXZqP8mk/KZDTmCdHyQG1UBvLypn9PBnJNzY45YjHnNFqW8xrNlgTSH0VFy2aTORG9/gwpMzL7OKfFkkysHJvP98dyKyipQyIrpH9o6SN+DHvsOnYkLJGangPvtInd5di/fMAHCeO2AoIcgv0fD+GRHffv3oVvdh6cfWHG6L6xMd98f+DIN4kvuobjeexMGDcudsQemTSkMCd768wKdHjl8qfBrNfRr9/otn10UECfteWVd4BJYqfYgWZjEdhrOxI9ccjPXzrfar2lio5e06K6+nIJvZaahIOkDoUCuqnVi9aLxdu3eHqOPVNaOvMKl9u4oro6jAqhoadutdlyvBWKjx74+0+2ofnGgZRCGImPzhEBs8hm02HDN0XmiEHWmLixqGj6twiGRB6vjVOnI1LjPnrzt5lcrkDu7798KXrsng5HjYQscTIY8pBtPpxXXr59TEbGlo4vv5zc12qtQnm0n4DSWygEO17bvbr66OtNm+5AnXkhFS0Ck+5EiSMwMCouP3/EEZVq2FCFImFNcfEpGYJDjAOWQYBGx3rtfLM5Ey3ORH1IyPJvs7I+S8LydeHzWzK02gCsYy5aiHFch8MiCQraNFStXiNGEAYi+JkaTR6y6lY08wMeNG9+95Xr16POEWmDkuiSzaZF9vTHerfE95/suX9/5FQmc2G5XN4TwXgDwXrBrNef8FEq+2ObytLRWliEQp9FpaW70g2G0xGRkRtbajQni1D+MQgpcLk+NpRhbxUUjF0tkbw8l8n0WIsDUiSRNI0XCl9PLSiYfNlszqgg8onMCtMrg6uJk7nYZquYhe2Vjx/5U23zzTffoCy2UntdWG0OKNFUQde4qN+jX25xc/eOo+9RT6GQB2DrrxZC2ZlXUBI1bGDCimD/TntLir8dV1QKfPLk0V+VH3WMS9ZzdOlyNA51rf3s2VePW23Aqu+fPpQZmH+PXnuGhTTqt7Ki6h4VxiFhHrP5LoLhJJgtpQikHCAeM2rbJgEB835GzXxQrd6B8sGETpJZi56yDvXYTRbL2ykQBKmRUWbodPeKZbJeDgRDlkAQlYWgv4X6dnZ09OHPeTwvG2EG0vjoSNrY7CAjSpOTfL5PNYlOEBZ2c2u3v6bmxlWJpIsTHa8CdFqysHOyeLzASyLRKyP9/RNT0BHFTmpXhJLmIgONLmEakajFabHYKxMdonXEGWIyZWipOmjd3RMuoxMpl8u7pqhUgzZWVJzQWSyFWAejFnWnLijoqwwGQ2XTaM4Y0BpcE4kamSSSDoVicdOLMtkbTuI7MJls7H0eljXmElqgMzggf8H72WSyziXYRli+1llstuo8lnk8fnbOZjOJEaSFUukrvyIA7Qg0CrQoYVCW8U9wONJidCIPoq9QRMJ5PJ4Kv299Ft8no/WRYP5ZaIGybLbKFBbLZ05ExNaJ2Hao5Q1+QmHEBYMhjefpOeKcSjVgH7KuzmzO0eK5WvxOj/7AdbtdwGEyORqRqF05Wo9slBRnWCzlFgeyAMo1Aykzkk0WtgHeoyyLw/G9LBCE3xEIvLwUip6nnlqcRJiSrCW4+iALesRF7d9yaFXCwDc/3QnpWJ+wgEdM7a0EuPcA2o+dfuLe6llxb/bI7vjjtqCbZNbQTfria9GpKEU1/b9nr9M90amz/HJp2I5iNXDIGKobHHVgdlCaedu4RgF91tBgdj6cXbIRPUs5cI6HIxiBtZjPD6V0Fj0bZqu9xonfl+P3LWcQjWa1lhI9udrTc8BqEqISCpsh01yndCjNCnR+xKtHc1suEjX7hjg5qItrzbqBui+fH3ZEoeh1hM8PwUHmhfnHocm9i3mlUr/UJBRG3WWzRXeJuadn8ZzEkqRKpe1TsXNpAyh9Cb/jn2EySRn1eE1jLIep3uJBOpE14QjIWWRxlt2uxetevoNy4A7tZHph2QgbiLCsUd8QeUBiwVyu32nM/zSCF1leQVkXkykdj0wySUEcxSL8v5hBlsjyG+O9g2hn3VyA9VH+6uHR51fMgzL5dQ4esjtpr6MCQfRR8otYxAfRai/jcQMIk+MgwHaIHU7qSiSkQBBRG6KVYbuYa+tE1wv7Yyq5N7bzqbrPELw6D4/ec8XiGMTKb5RUoj83U3kRHwb7aMpzl49Sk5yI7N8z8+HdtrG71u1Z8gFIUDfmFD0e/VAqIWfDj7Hz9hzrwxU0Sh3y3i+9ZGLQkphw/UVFz5MY5BwyAORu4Bz4/okPVV6dDhcUnep0/dqaBLKNXd31dTKDwBDBnBga9H6S5gkw09OvnHpTxvRsE3GKSEc+mm59fMoT2eHhLBh5jQxIxVut1mI8yimnjw7h1c1OmaiDnEtCd+Q1aXhaylipz8gkhMVSRGlXq7WEyoe+B4PSnHX3pD9zUtrSYlGTLgY6vltBDTDyObk/OqsPByHdXcza1w48p+Jhr5EBQ2LDZPKC1JmE2cgAJvnU3Y/UhZQHndfHyldXD/ozdW0ZSh7WnZSLlIXUjcz8kfNpjQ5UvqQcFktx7fXF1HvaYbbWtm0VlReRcvTsKD0QHk3NOx/2AV3mqoeam7wnZXrUphW1RxlVlroJm+cCGmoBTY4UZOoBL8dv2Xpw5bvU1gMkpMfl0U9nq0vh9S/H7R7RrcNeUpyb1ZGHunY/5vNaq+4XHFZ6yQdxCgip1z/IZ8ShIWTaNMQtpVu3Y34Wty4/4ljl+vm0OdO23edJ1A4IJnp9B5EjZHq9R8+9wxDMSwkz0+uFXY90uNILLPCvz6IE1DfTsuGtVk13bj+8qh94KwBu3wYo08CbM8ZtOj5rfD9PNzG37Yjp91qOnnlsy4NwXZ5oWsfW8Ynt32jdcauPEnIJuYuE9FMq5MFwXyXkx4XLdkVHJXQRRRyIP13cpKjz6Jk7ovqNz7KB2CO+5fxxL3X8chmZJSsvp0HdrceOUY0Cej+UGa6dhFzphRb4P4upCRv+npELCW1idus3zUn4uPewnS8NG7B7/9TPBpNz4hNnXUtZtSwChAERn+eXFEDr+IkL3+z/U6TircvujW5BINvAEAu9ItC4klhpfpkOBQQvDM7n8ODwhdJeF09sXgi/JYeBMR/CBnFTsn+cE9cybtYYm6WGm5z8/fAuXX4cGdIoYWXFUzLDlVzpDwBtRbSRIOSzohRk/+ULd9Lh9ZjGu+bvXNG8f6umN8jnHcb/62bK0pVNILQl2QYUICvbFwoKt024fH0B+Pjsez0+ald4o6BUbzbzHp/DglIHU3Qjvajtqbz0d+H2nV6QeScYTKhD/FVoK/wgZ/OWRgom807BhtmRbVrNGeEX0Hm11K3NdReYXekvA1qMLijZNJxsJvPsCUInVNboYHDb2BsKsZDRafy/rl1avDwGgiPpdZ9E6CrdcWQgQHMzfaAw+7MTt65/dkIsoXb5pEMoDNrDo2ZGnPT+ce6cRyuQomKhYtMSHxWHk1625lt/oaDZdVrws11gdqUXBzQBq0rmVqtNnx1zs9duBUbc8VZjvrt+ddnSJhASQ/3+CdQtiibAJEytkNbRPnqHlfUDC/SeduT7h89W1YKZDKT8UhTbYTC8XdMVGaU1TLadBV4SFljsro5ypb/I0A4q1vZsPBMwK6TUmlNG63Gzr15dtooGM5n5+KNnrwhzc17gsSISDiRgNltgwd6ln4/p3nHhlTs54CW1ubZXcaV/D9BOeB6YHaCk9p4Dbrvx/7qYnLSClhlc9t97kLA+mPNKqP0+Fu9dOmp0947Lb6Tn1EZZXB3kSg0Y5agHZg4y82/JSctjITiKlg0N8ewVWfyUW0Tp7kV7lk6oAzP5eTYGw/X0sys1IKDrgVkY+9m3v6WuWNuEYuYGAzObBjOTCcsOrBgx4vX2qx6B2UXNrvQ3AC0RPL5Ok4TpeCwWWVqtajtu9uHUFStRMzd53AFsCJmBzLx0//KRoxDMV9Oy6WX2LjC70t8F9L3Cksc+JD+L5ushg/fmrdl+Lem7OAh/iY5CNCSYbURmLJkw8o0OK11gdqUGBfTl+9mPf4rAchMKoF10yBcnW/U4ADfue0Ao+R0Te8OA2WKFRXuXjh7bveP3V1FmOF1gdqUGSpTnRbb/euzgcsGGoItrHHQ56bvENtAsvBJyCh/97MS/DeZSapJlITqAYxDM1wiYXZrZlRoa0E/+ZjbBF5vNguyiMlBKhBmrF0+JQVBXQFY+vZXuv+UAFlMvV/78/dDRPToucjmArvQfA/TzEgcdw/zScpBw2fmr5n7eAppHllOL/f8KqOs5gIu3Lxg9rEu7tS4wu9L/BNAksShQV4BcxM9d9t3YthDTuJLaTpf5F2YA7TZKZoyu08wuMLvS/wrQFC4R1DlFakp+rElC+REdWglpOX8M6jpmNltg0c4l48bVygwXmF3pfw7oOlDnl5SDG4+Tv3T2uPbQIkoNmfnPdhTrmBnToj1Lx6BmTrrmkhmu9E8CdJ38yC0uBy+Z+N7q+RPjIBblR/YT8qOOme12WL536bAxPTouu+kCsyv9EwFdx9S5RWUg5rGL1iyYGAPNwirJL00B2VmRHMjiVGhux6Jxwzq3W+NyAF3pHw3oOlAXlmrAjc/NXzwzsT20bnoPNNVa0OnJjwdWz9k2b0xij1eSXMzsSv/txHD94pIr/Z9naFdyJRegXcmV/gvp/wkwAIvptWerqQCaAAAAAElFTkSuQmCC" alt="" srcset="">
    </header>

    <footer>
        <hr>
            <table>
                <tbody>
                    <tr>
                        <td class="col-1"> &nbsp; </td>
                        <td class="col-2">51 1 628 0090</td>
                        <td class="col-2">ventas@rts-auto.com</td>
                        <td class="col-2">rtsautomation</td>
                        <td class="col-1"> &nbsp; </td>
                    </tr>
                    <tr>
                        <td class="col-1"> &nbsp; </td>
                        <td class="col-2"> Jr. Huaraz  1882 - Breña</td>
                        <td class="col-2">servicios@rts-auto.com</td>
                        <td class="col-2">www.rts-auto.com</td>
                        <td class="col-1"> &nbsp; </td>
                    </tr>
              </tbody>
            </table>
    </footer>

    <!-- Wrap the content of your PDF inside a main tag -->
    <div class="">
          <div>
            <p class="fecha">Lima, 31 de agosto de 2021</p>
          </div>
        <p>Señores.</p>
        <h3>NEXA RESOURCES EL PORVENIR S.A.C. </h3>
        <table border="0">
          <tbody>
            <tr>
              <td style="font-weight: bold; width: 200px;">Atención:</td>
              <td>
                Nombre Cliente
                <br>
                Cargo Cliente
              </td>
            </tr>
          </tbody>
        </table> <br>
        <table border="0">
          <tbody>
            <tr>
              <td style="font-weight: bold;  width: 200px;">Referencia:</td>
              <td>Licitación SOZN893 Paquete 02 - Automatización de Planta - El Porvenir</td>
            </tr>
          </tbody>
        </table>
        <br>
        <table border="0">
          <tbody>
            <tr>
              <td style="font-weight: bold;  width: 200px;">Ref. RTS:</td>
              <td>1-19-2-0060 Rev2</td>
            </tr>
          </tbody>
        </table> <br>

        <p>Estimado (a) Sr(ta). Solari,</p>
        <p>Thank you for your request and interest in VEGA products and solutions. Based upon the information
          provided, we are pleased to present the following offer. </p>

        <p>The total for this quotation, not including shipping and handling, is USD <span style="color: red">{{ $cotizacion['SeccionCotizacion']['GranTotal'] ?? '' }}</span>. The lead time for the
          equipment is eight (8) weeks after receipt of order. </p>

        <p>Please review this offer and contact us if you have any questions or concerns. If you would like to submit
          an order, please submit your purchase order to our orders received inbox at ordenes@rts-auto.com.</p> <br>

        <p>Regards,</p><br>

        <p>Fiorella Zacarias <br>
          Jefe de Ventas Internas</p>

          <p>@php print_r($cotizacion); @endphp</p>
          
      </div>

      <div style="page-break-after: always;"></div>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Cantidad</th>
                    <th>Descripcion</th>
                    <th>Precio unitario</th>
                    <th>Precio Total</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-bottom">
                    <td>1</td>
                    <td>1</td>
                    <td>
                        <table>
                            <tr>
                                <td>Descripcion</td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Marca</td>
                                <td> Adidas </td>
                            </tr>
                            <tr>
                                <td> Modelo</td>
                                <td> Predator </td>
                            </tr>
                            <tr>
                                <td> <b> Especificaciones </b></td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 1 </td>
                                <td> Especificaciones 1  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 2 </td>
                                <td> Especificaciones 2  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 3 </td>
                                <td> Especificaciones 3  </td>
                            </tr>

                        </table>
                    </td>
                    <td>200</td>
                    <td>300</td>
                </tr>
                
                <tr class="border-bottom">
                    <td>2</td>
                    <td>1</td>
                    <td>
                        <table>
                            <tr>
                                <td>Descripcion</td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Marca</td>
                                <td> Adidas </td>
                            </tr>
                            <tr>
                                <td> Modelo</td>
                                <td> Predator </td>
                            </tr>
                            <tr>
                                <td> <b> Especificaciones </b></td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 1 </td>
                                <td> Especificaciones 1  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 2 </td>
                                <td> Especificaciones 2  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 3 </td>
                                <td> Especificaciones 3  </td>
                            </tr>
                        </table>
                    </td>
                    <td>200</td>
                    <td>300</td>
                </tr>
                <tr class="border-bottom">
                    <td>3</td>
                    <td>1</td>
                    <td>
                        <table>
                            <tr>
                                <td>Descripcion</td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Marca</td>
                                <td> Adidas </td>
                            </tr>
                            <tr>
                                <td> Modelo</td>
                                <td> Predator </td>
                            </tr>
                            <tr>
                                <td> <b> Especificaciones </b></td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 1 </td>
                                <td> Especificaciones 1  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 2 </td>
                                <td> Especificaciones 2  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 3 </td>
                                <td> Especificaciones 3  </td>
                            </tr>

                        </table>
                    </td>
                    <td>200</td>
                    <td>300</td>
                </tr>
                <tr class="border-bottom">
                    <td>4</td>
                    <td>1</td>
                    <td>
                        <table>
                            <tr>
                                <td>Descripcion</td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Marca</td>
                                <td> Adidas </td>
                            </tr>
                            <tr>
                                <td> Modelo</td>
                                <td> Predator </td>
                            </tr>
                            <tr>
                                <td> <b> Especificaciones </b></td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 1 </td>
                                <td> Especificaciones 1  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 2 </td>
                                <td> Especificaciones 2  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 3 </td>
                                <td> Especificaciones 3  </td>
                            </tr>

                        </table>
                    </td>
                    <td>200</td>
                    <td>300</td>
                </tr>
                <tr class="border-bottom">
                    <td>5</td>
                    <td>1</td>
                    <td>
                        <table>
                            <tr>
                                <td>Descripcion</td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Marca</td>
                                <td> Adidas </td>
                            </tr>
                            <tr>
                                <td> Modelo</td>
                                <td> Predator </td>
                            </tr>
                            <tr>
                                <td> <b> Especificaciones </b></td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 1 </td>
                                <td> Especificaciones 1  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 2 </td>
                                <td> Especificaciones 2  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 3 </td>
                                <td> Especificaciones 3  </td>
                            </tr>

                        </table>
                    </td>
                    <td>200</td>
                    <td>300</td>
                </tr>
                <tr class="border-bottom">
                    <td>6</td>
                    <td>1</td>
                    <td>
                        <table>
                            <tr>
                                <td>Descripcion</td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Marca</td>
                                <td> Adidas </td>
                            </tr>
                            <tr>
                                <td> Modelo</td>
                                <td> Predator </td>
                            </tr>
                            <tr>
                                <td> <b> Especificaciones </b></td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 1 </td>
                                <td> Especificaciones 1  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 2 </td>
                                <td> Especificaciones 2  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 3 </td>
                                <td> Especificaciones 3  </td>
                            </tr>

                        </table>
                    </td>
                    <td>200</td>
                    <td>300</td>
                </tr>
                <tr class="border-bottom">
                    <td>7</td>
                    <td>1</td>
                    <td>
                        <table>
                            <tr>
                                <td>Descripcion</td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Marca</td>
                                <td> Adidas </td>
                            </tr>
                            <tr>
                                <td> Modelo</td>
                                <td> Predator </td>
                            </tr>
                            <tr>
                                <td> <b> Especificaciones </b></td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 1 </td>
                                <td> Especificaciones 1  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 2 </td>
                                <td> Especificaciones 2  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 3 </td>
                                <td> Especificaciones 3  </td>
                            </tr>

                        </table>
                    </td>
                    <td>200</td>
                    <td>300</td>
                </tr>
                <tr class="border-bottom">
                    <td>8</td>
                    <td>1</td>
                    <td>
                        <table>
                            <tr>
                                <td>Descripcion</td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Marca</td>
                                <td> Adidas </td>
                            </tr>
                            <tr>
                                <td> Modelo</td>
                                <td> Predator </td>
                            </tr>
                            <tr>
                                <td> <b> Especificaciones </b></td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 1 </td>
                                <td> Especificaciones 1  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 2 </td>
                                <td> Especificaciones 2  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 3 </td>
                                <td> Especificaciones 3  </td>
                            </tr>

                        </table>
                    </td>
                    <td>200</td>
                    <td>300</td>
                </tr>
                <tr class="border-bottom">
                    <td>9</td>
                    <td>1</td>
                    <td>
                        <table>
                            <tr>
                                <td>Descripcion</td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Marca</td>
                                <td> Adidas </td>
                            </tr>
                            <tr>
                                <td> Modelo</td>
                                <td> Predator </td>
                            </tr>
                            <tr>
                                <td> <b> Especificaciones </b></td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 1 </td>
                                <td> Especificaciones 1  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 2 </td>
                                <td> Especificaciones 2  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 3 </td>
                                <td> Especificaciones 3  </td>
                            </tr>

                        </table>
                    </td>
                    <td>200</td>
                    <td>300</td>
                </tr>
                <tr class="border-bottom">
                    <td>10</td>
                    <td>1</td>
                    <td>
                        <table>
                            <tr>
                                <td>Descripcion</td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Marca</td>
                                <td> Adidas </td>
                            </tr>
                            <tr>
                                <td> Modelo</td>
                                <td> Predator </td>
                            </tr>
                            <tr>
                                <td> <b> Especificaciones </b></td>
                                <td> &nbsp; </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 1 </td>
                                <td> Especificaciones 1  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 2 </td>
                                <td> Especificaciones 2  </td>
                            </tr>
                            <tr>
                                <td> Especificaciones 3 </td>
                                <td> Especificaciones 3  </td>
                            </tr>

                        </table>
                    </td>
                    <td>200</td>
                    <td>300</td>
                </tr>
                
            </tbody>
        </table>
        {{-- @php
            print_r($cotizacion);
        @endphp --}}
        <p>Content Page 1</p>
        <div style="page-break-after: always;"></div>
        <p>Content Page 2</p>
        <div style="page-break-after: always;"></div>
        <p>Content Page 3</p>
    </main>
</body>
</html>