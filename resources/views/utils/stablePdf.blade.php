<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        /* Set margin - padding doc page */
        @page { margin: 20px; padding: 0; }
        /* Text classes */
        p, h1, h2, h3, div { color: rgb(30, 30, 30); margin: 0; padding: 0; }
        /* td { border: 1px solid } */
        .doc-text-sm { font-size: 12px;color: rgb(90, 90, 90); }
        .doc-text { font-size: 15px; }
        .doc-h1 { font-size: 32px; }
        .doc-h2 { font-size: 24px; }
        .doc-h3 { font-size: 20px; }
        .doc-info-box { border: 1px solid rgb(217, 217, 217); padding: 4px 8px; border-radius: 8px}
    </style>
</head>
<body>
    {{-- HEADER --}}
    <header>
        <table id="doc-header" style="width: 100%">
            <tr>
                {{-- DATE --}}
                <td>
                    <p class="doc-text-sm">{{ date('d/m/Y') }}</p>
                </td>
                <td>
                    {{-- ADVICE --}}
                    <p class="doc-text-sm" style="text-align: right">Esta formula se creó gracias a PAO, software óptico administrativo, visite isersolutions.com</p>
                </td>
            </tr>
        </table>
    </header>
    {{-- NAV --}}
    <div style="margin-top: 8px">
        <table>
            {{-- LOGO --}}
            <tr>
                <td rowspan="2">
                    <img width="100" src="https://i.pinimg.com/236x/8a/33/86/8a33868eb7147fa29d97fde05d70bd5c.jpg" alt="">
                </td>
                <td>
                    <h1 class="doc-h1" style="line-height: auto;">Formula óptica</h1>
                </td>
            </tr>
            {{-- CONTENT --}}
            <tr>
                <td>
                    <p style="text-transform: uppercase; line-height: 0;">codigo <b>
                        {{ $record->codigo }}
                    </b></p>
                </td>
            </tr>
        </table>
    </div>
    {{-- PACIENT --}}
    <div>
        <table style="width: 100%">
            <tr>
                <td style="padding-bottom: 4px">Nombre completo del paciente</td>
                <td style="padding-bottom: 4px">Tipo documento</td>
                <td style="padding-bottom: 4px">Número de documento</td>
            </tr>
            <tr>
                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text" style="text-transform: uppercase">{{ $record->cliente->nombre_completo }}</p>
                    </div>
                </td>
                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text" style="text-transform: uppercase">{{ $record->cliente->tipo_doc }}</p>
                    </div>
                </td>
                <td>
                    <div class="doc-info-box">
                        <p class="doc-text" style="text-transform: uppercase">{{ $record->cliente->no_doc }}</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    {{-- DOCTOR --}}
    <div style="margin-top: 18px">
        <table style="width: 100%">
            <tr>
                <td style="padding-bottom: 4px">Nombre completo del especialista</td>
                <td style="padding-bottom: 4px">Tipo documento</td>
                <td style="padding-bottom: 4px">Número de documento</td>
            </tr>
            <tr>
                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text" style="text-transform: uppercase">{{ $record->doctor->nombre_completo }}</p>
                    </div>
                </td>
                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text" style="text-transform: uppercase">{{ $record->doctor->tipo_doc }}</p>
                    </div>
                </td>
                <td>
                    <div class="doc-info-box">
                        <p class="doc-text" style="text-transform: uppercase">{{ $record->doctor->no_doc }}</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    {{-- LENSES --}}
    {{-- LEFT EYE --}}
    <div style="margin-top: 18px">
        <table style="width: 100%">
            <tr>
                <td rowspan="2" style="font-weight: bold; width: 16%">Ojo izquierdo</td>
                <td style="padding-bottom: 4px">Esfera</td>
                <td style="padding-bottom: 4px">Cilindro</td>

                <td style="padding-bottom: 4px">Eje</td>
                <td style="padding-bottom: 4px">A.V</td>

                <td style="padding-bottom: 4px">A.D.D</td>
                <td style="padding-bottom: 4px">D.P</td>
            </tr>
            <tr>

                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text">{{ $record->ojo_izquierdo_esfera }}</p>
                    </div>
                </td>

                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text">{{ $record->ojo_izquierdo_cilindro }}</p>
                    </div>
                </td>

                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text">{{ $record->ojo_izquierdo_eje }}</p>
                    </div>
                </td>

                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text">{{ $record->ojo_izquierdo_av }}</p>
                    </div>
                </td>

                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text">{{ $record->ojo_izquierdo_add }}</p>
                    </div>
                </td>

                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text">{{ $record->ojo_izquierdo_dp }}</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    {{-- RIGHT EYE --}}
    <div style="margin-top: 18px">
        <table style="width: 100%">
            <tr>
                <td rowspan="2" style="font-weight: bold; width: 16%">Ojo derecho</td>
                <td style="padding-bottom: 4px">Esfera</td>
                <td style="padding-bottom: 4px">Cilindro</td>

                <td style="padding-bottom: 4px">Eje</td>
                <td style="padding-bottom: 4px">A.V</td>

                <td style="padding-bottom: 4px">A.D.D</td>
                <td style="padding-bottom: 4px">D.P</td>
            </tr>
            <tr>

                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text">{{ $record->ojo_derecho_esfera }}</p>
                    </div>
                </td>

                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text">{{ $record->ojo_derecho_cilindro }}</p>
                    </div>
                </td>

                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text">{{ $record->ojo_derecho_eje }}</p>
                    </div>
                </td>

                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text">{{ $record->ojo_derecho_av }}</p>
                    </div>
                </td>

                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text">{{ $record->ojo_derecho_add }}</p>
                    </div>
                </td>

                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text">{{ $record->ojo_derecho_dp }}</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    {{-- MONTURA --}}
    <div style="margin-top: 18px">
        <table style="width: 100%">
            <tr>
                <td style="padding-bottom: 4px">Tipo de lente</td>
                <td style="padding-bottom: 4px">Valor lente</td>
                <td style="padding-bottom: 4px">Montura</td>
                <td style="padding-bottom: 4px">Valor montura</td>
            </tr>
            <tr>
                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text" style="text-transform: uppercase">{{ $record->tipo_lente }}</p>
                    </div>
                </td>
                <td style="padding-right: 4px">
                    <div class="doc-info-box">
                        <p class="doc-text" style="text-transform: uppercase">${{ $record->valor_lente }}</p>
                    </div>
                </td>
                <td>
                    <div class="doc-info-box">
                        <p class="doc-text" style="text-transform: uppercase">{{ $record->montura->nombre }}</p>
                    </div>
                </td>
                <td>
                    <div class="doc-info-box">
                        <p class="doc-text" style="text-transform: uppercase">${{ $record->montura->precio }}</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    {{-- OBSERVACIONES --}}
    <div style="margin-top: 18px">
        <table style="width: 100%">
            <tr>
                <td style="padding-bottom: 4px; font-weight: bold" class="doc-h2">Observaciones</td>
            </tr>
            <tr>
                <td>
                    <p class="doc-text" style="text-transform: uppercase">{{ $record->notas_adicionales }}</p>
                </td>
            </tr>
        </table>
    </div>

    {{-- FIRMA --}}
    <div style="margin-top: 200px">
        <table style="width: 40%">
            <tr>
                <td style="font-weight: bold; border: none; border-bottom: 1.5px solid black"></td>
            </tr>
            <tr>
                <td>
                    <p class="doc-text" style="text-align: center; font-weight: bold">Firma del especialista</p>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
