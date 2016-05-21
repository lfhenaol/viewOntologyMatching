
<head>
    <meta charset="UTF-8">
    <title>Ontology Matching</title>
    <script src="http://localhost:8089/materialize-css/js/materialize.min.js">
        <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        table.results.striped th, td {
            padding: 15px 15px;
        }

        .collection{
            border: 0px !important;
        }

        .collection .collection-item {
            background-color: #22A498;
        }

    </style>
    <script>
        $(document).ready(function(){
            $('select').material_select();

            var fila = 1;
//------FUNCION() AGREGAR FILA
            $(".inputAgregarFila").click(function(e){

                fila++;

                var nuevaFila = "<tr class='row'>";

                nuevaFila += "<td>";
                nuevaFila += "<input type='text' name='individual"+fila+"'>";
                nuevaFila += "</td>";

                nuevaFila += "<td>";
                nuevaFila += " <select id ='concepto"+fila+"'>";
                nuevaFila += "<option value='concepto1'>concepto1</option>";
                nuevaFila += "<option value='concepto2'>concepto2</option>";
                nuevaFila += "</select>";
                nuevaFila += "</td>";

                nuevaFila += "<td>";
                nuevaFila += " <select id ='objetivo"+fila+"'>";
                nuevaFila += "<option>objetivo1</option>";
                nuevaFila += "<option>objetivo2</option>";
                nuevaFila += "</select>";
                nuevaFila += "</td>";

                nuevaFila += "</tr>";


                //insertar nuevaFila en class table
                $("#table").append(nuevaFila);
                //alert(nuevaFila);
                $('select').material_select();
            });


//------FUNCION() ENVIAR DATOS
            $(".inputRegistrar").click(function(e){
//1.ver cuantos filas envian (cuales estan llenas completamente)
//2.crear vector de objetos de filas
//3.enviar vector hacia controlador

//alert("hola");
                var vectorIndividuals = [];

                for (var i = 0; i < fila + 1; i++) {

                    var individualURI = ($("input[name=individual" + i + "]").val());
                    var concepto = ($("select[name=concepto" + i + "]").val());
                    var objetivo = ($("select[name=objetivo" + i + "]").val());

                    item = {};//doc JSON

                    if (individualURI !== '' && concepto !== '' && objetivo !== '' ){

                        item["individualURI"] = individualURI;
                        item["concepto"] = concepto;
                        item["objetivo"] = objetivo;

                        vectorIndividuals.push(item);

                    }
                    //alert("entro");
                }

                //--Imprimir en consola vector de docs JSON
                console.log(vectorIndividuals);

                aInfo = JSON.stringify(vectorIndividuals);
                //alert(aInfo);

                //var identificacion = aInfo;
                //var cadenaFormulario = "&data=" + identificacion;

                $.ajax({
                    data: aInfo,
                    type: 'POST',
                    url : '/KB',
                    processData: false,
                    headers: {

                        "Content-Type": "aplication/json"
                    } ,

                    success: function(r){

                        //Una vez que se haya ejecutado de forma exitosa....
                        //return r;
                        //alert(r);
                        alert("SE REGISTRARON LOS INDIVIDUALS CORRECTAMENTE");
                    }
                });
            });
        });
    </script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col s12 m4 l2">&nbsp;</div>
        <div class="col s12 m4 l8" ng-app="collectInputData" ng-controller="collect">
            <h3 align="center">Ontology Matching</h3>
            <table id="table">
                <thead>
                <tr>
                    <th data-field="id">Individuals URI or Name</th>
                    <th data-field="name">Concept</th>
                    <th data-field="price">Objective</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <input type='text' name='individual0'>
                        </td>
                    <td>
                        <select id ='concepto0"'>
                            <option value='concepto1'>concepto1</option>
                            <option value='concepto2'>concepto2</option>
                            </select>
                        </td>
                    <td>
                        <select id ='objetivo0'>
                           <option>objetivo1</option>
                            <option>objetivo2</option>
                            </select>
                       </td>
                    </tr>
                </tr>
                </tbody>
            </table>


    <a class="btn-floating btn-large waves-effect waves-light red inputAgregarFila" type="button" value="agregar fila" data-reactid=".0.0.5" onclick="$('select').material_select();" >
        <i class="material-icons">add</i>
    </a>

    <br/><br/>
    <input class="btn inputRegistrar" type="submit" value="registrar flujos de bodega" data-reactid=".0.0.5">

</div>
    </div>
        <div class="col s12 m4 l2">&nbsp;</div>
        </div>
    </div>
</body>














