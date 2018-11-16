<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Telebras</title>
    <link rel="shortcut icon" href="http://www.telebras.com.br/inst/wp-content/themes/telb2011/images/logo_telebras2.png">
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <script type="text/javascript" >
    /* Dados dos estados e cidades*/
    
        window.onload = function() {
            var estados = document.getElementById('estado');
            var cidades = document.getElementById('cidade');
            var gw = document.getElementById('gw');
            var nome = document.getElementById('nome');
           
        
            new dgCidadesEstados({
                estado: estados,
                cidade: cidades,
                gw: gw,
                nome: nome,
                estadoVal: '<%=Request("estado") %>',
                cidadeVal: '<%=Request("cidade") %>',
                gwVal: '<%=Request("gw") %>',
                nomeVal: '<%=Request("nome") %>'
                
            });

        };
      /* FIM  Dados dos estados e cidades*/
    
    </script>
<style>

    .header {
    padding: 20px;
    text-align: center;
    }
    .column {
        float: left;
        width: 50%;
        padding: 15px;
    }

    /* Clear floats after the columns */
    .site:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width:600px) {
        .column {
            width: 100%;
        }
    }

</style>


</head>
<body>
    <div class = "header">    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="//rawgit.com/robertocr/cidades-estados-js/master/cidades-estados-1.4-utf8.js"></script>
        
        <a href="http://telebras.com.br/"><img src="images/logo_oficial.png" class="rounded mx-auto d-block" style="background: transparent;" alt="Responsive image" width="274px"> </a>
        <br/>
        <div class="text-center"> 
            <h3>Consulta de BEAM Telebras </h3>
        </div> 
    </div>

<!-- Select do html --> 
<div class = "container">
    <div class="site">
        <div class="column">        
            <div  class ="row justify-content-around">
                <div clas = "col-md-auto">
                    <center>Gateway</center> 
                    <select class="custom-select" id= "gw" nome = "gw" >  
                        <option value="">Selecione o Gateway</option>
                        <option value="Brasilia">Brasília</option>
                        <option value="Campo Grande">Campo Grande</option>
                        <option value="Florianopolis">Florianópolis</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                    </select>
                </div>
                <div clas = "col-md-auto">
                    <center > BEAMS</center>
                        <select class="custom-select" id = "nome" name = "beam">
                                <option value = "">Selecione o BEAM </option>
                                <option value = "1">BEAM 01 </option>
                                <option value = "2">BEAM 02 </option>
                                <option value = "3">BEAM 03 </option>
                                <option value = "4">BEAM 04 </option>
                                <option value = "5">BEAM 05 </option>
                                <option value = "6">BEAM 06 </option>
                                <option value = "7">BEAM 07 </option>
                                <option value = "8">BEAM 08 </option>
                                <option value = "9">BEAM 09 </option>
                                <option value = "10">BEAM 10 </option>
                                <option value = "11">BEAM 11 </option>
                                <option value = "12">BEAM 12 </option>
                                <option value = "13">BEAM 13 </option>
                                <option value = "14">BEAM 14 </option>
                                <option value = "15">BEAM 15 </option>
                                <option value = "16">BEAM 16 </option>
                                <option value = "17">BEAM 17 </option>
                                <option value = "18">BEAM 18 </option>
                                <option value = "19">BEAM 19 </option>
                                <option value = "20">BEAM 20 </option>
                                <option value = "21">BEAM 21 </option>
                                <option value = "22">BEAM 22 </option>
                                <option value = "23">BEAM 23 </option>
                                <option value = "24">BEAM 24 </option>
                                <option value = "25">BEAM 25 </option>
                                <option value = "26">BEAM 26 </option>
                                <option value = "27">BEAM 27 </option>
                                <option value = "28">BEAM 28 </option>
                                <option value = "29">BEAM 29 </option>
                                <option value = "30">BEAM 30 </option>
                                <option value = "31">BEAM 31 </option>
                                <option value = "32">BEAM 32 </option>
                                <option value = "33">BEAM 33 </option>
                                <option value = "34">BEAM 34 </option>
                                <option value = "35">BEAM 35 </option>
                                <option value = "36">BEAM 36 </option>
                                <option value = "37">BEAM 37 </option>
                                <option value = "38">BEAM 38 </option>
                                <option value = "39">BEAM 39 </option>
                                <option value = "40">BEAM 40 </option>
                                <option value = "41">BEAM 41 </option>
                                <option value = "42">BEAM 42 </option>
                                <option value = "43">BEAM 43 </option>
                                <option value = "44">BEAM 44 </option>
                                <option value = "45">BEAM 45 </option>
                                <option value = "46">BEAM 46 </option>
                                <option value = "47">BEAM 47 </option>
                                <option value = "48">BEAM 48 </option>
                                <option value = "49">BEAM 49 </option>
                                <option value = "50">BEAM 50 </option>
                                <option value = "51">BEAM 51 </option>
                                <option value = "52">BEAM 52 </option>
                                <option value = "53">BEAM 53 </option>
                                <option value = "54">BEAM 54 </option>
                                <option value = "55">BEAM 55 </option>
                                <option value = "56">BEAM 56 </option>
                                <option value = "57">BEAM 57 </option>
                                <option value = "58">BEAM 58 </option>
                                <option value = "59">BEAM 59 </option>
                                <option value = "60">BEAM 60 </option>
                                <option value = "61">BEAM 61 </option>
                                <option value = "62">BEAM 62 </option>
                                <option value = "63">BEAM 63 </option>
                                <option value = "64">BEAM 64 </option>
                                <option value = "65">BEAM 65 </option>
                                <option value = "66">BEAM 66 </option>
                                <option value = "67">BEAM 67 </option>

                        </select>
                </div>
            </div>
            <br/>  
            <div  class ="row justify-content-around">
                <div clas = "col-md-auto"> 
                    <center>Estado</center>
                        <select class="custom-select" id="estado" name = "estado" >
                            <option value="">Selecione o Estado</option>   
                        </select>
                </div>     
                <div clas = "co-md-auto"> 
                    <center >Cidade</center>
                        <select class="custom-select" id="cidade" nome = "cidade" >  
                            <option value="">Selecione a Cidade</option>
                        </select>
                </div>
            </div>
            <br/>
            <div  class ="row">
                <div class = "col-md-6 offset-md-5">
                    <input id ="botao" class="btn btn-default" type="button" value="Consultar" name = "botao" onclick ="Botao()" >
                </div>
            </div>
        </div>
        <div class="column">
            <center>
                <!-- Saida dos Resultados -->
                <p id = "demo"></p>
            </center>
    </div>
</div>
</div>

<!-- Operação -->
    <script>
    function Botao()
    { 
        document.getElementById("demo").innerHTML="";
        
    

        /* Pegando infor =mações da Pagina */
            var form = document.getElementById('formulario');
            var nome = document.getElementById('nome');
            var estado = document.getElementById('estado');
            var cidade = document.getElementById('cidade');
            var gw = document.getElementById("gw");
            var btn = document.getElementById("botao");

        /* Transformando em valor*/
            var value_Nome = nome.value;
            var value_Estado = estado.value;
            var value_Cidade = cidade.value;
            var value_Gw = gw.value;
    

        /*Inserção do banco de dados */
            var text =[
                    {
                        "nome": 1,
                        "estado": "PE",
                        "cidade": "",
                        "GW": "Rio de Janeiro",
                        "data": "14/11/2018"
                    },
                    {
                        "nome": 2,
                        "estado": "MA",
                        "cidade": "Maranhão (São Luís)",
                        "GW": "Campo Grande",
                        "data": "15/11/2018"
                    },
                    {
                        "nome": 3,
                        "estado": "CE",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "16/11/2018"
                    },
                    {
                        "nome": 4,
                        "estado": "RN",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "17/11/2018"
                    },
                    {
                        "nome": 5,
                        "estado": "MA",
                        "cidade": "Maranhão (Santa Inés)",
                        "GW": "Campo Grande",
                        "data": "18/11/2018"
                    },
                    {
                        "nome": 6,
                        "estado": "PI",
                        "cidade": "Piauí (Teresina)",
                        "GW": "Rio de Janeiro",
                        "data": "19/11/2018"
                    },
                    {
                        "nome": 7,
                        "estado": "CE",
                        "cidade": "Ceará (Juazeiro do Norte)",
                        "GW": "Campo Grande",
                        "data": "20/11/2018"
                    },
                    {
                        "nome": 8,
                        "estado": "PE",
                        "cidade": "Pernambuco (Recife)",
                        "GW": "Rio de Janeiro",
                        "data": "21/11/2018"
                    },
                    {
                        "nome": 9,
                        "estado": "PI",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "22/11/2018"
                    },
                    {
                        "nome": 10,
                        "estado": "PE",
                        "cidade": "Pernambuco e Bahia (Petrolina)",
                        "GW": "Rio de Janeiro",
                        "data": "23/11/2018"
                    },
                    {
                        "nome": 11,
                        "estado": "SE",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "24/11/2018"
                    },
                    {
                        "nome": 12,
                        "estado": "MA",
                        "cidade": "",
                        "GW": "Campo Grande",
                        "data": "25/11/2018"
                    },
                    {
                        "nome": 13,
                        "estado": "BA",
                        "cidade": "",
                        "GW": "Rio de Janeiro",
                        "data": "26/11/2018"
                    },
                    {
                        "nome": 14,
                        "estado": "BA",
                        "cidade": "",
                        "GW": "Campo Grande",
                        "data": "27/11/2018"
                    },
                    {
                        "nome": 15,
                        "estado": "BA",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "28/11/2018"
                    },
                    {
                        "nome": 16,
                        "estado": "BA",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "29/11/2018"
                    },
                    {
                        "nome": 17,
                        "estado": "BA",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "30/11/2018"
                    },
                    {
                        "nome": 18,
                        "estado": "BA",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "01/12/2018"
                    },
                    {
                        "nome": 19,
                        "estado": "GO",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "02/12/2018"
                    },
                    {
                        "nome": 20,
                        "estado": "GO",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "03/12/2018"
                    },
                    {
                        "nome": 21,
                        "estado": "MG",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "04/12/2018"
                    },
                    {
                        "nome": 22,
                        "estado": "BA",
                        "cidade": "",
                        "GW": "Campo Grande",
                        "data": "05/12/2018"
                    },
                    {
                        "nome": 23,
                        "estado": "ES",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "06/12/2018"
                    },
                    {
                        "nome": 24,
                        "estado": "DF",
                        "cidade": "DF e Goiás (Goiânia)",
                        "GW": "Rio de Janeiro",
                        "data": "07/12/2018"
                    },
                    {
                        "nome": 25,
                        "estado": "MG",
                        "cidade": "",
                        "GW": "Rio de Janeiro",
                        "data": "08/12/2018"
                    },
                    {
                        "nome": 26,
                        "estado": "MG",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "09/12/2018"
                    },
                    {
                        "nome": 27,
                        "estado": "ES",
                        "cidade": "",
                        "GW": "Campo Grande",
                        "data": "10/12/2018"
                    },
                    {
                        "nome": 28,
                        "estado": "MT",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "11/12/2018"
                    },
                    {
                        "nome": 29,
                        "estado": "GO",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "12/12/2018"
                    },
                    {
                        "nome": 30,
                        "estado": "MG",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "13/12/2018"
                    },
                    {
                        "nome": 31,
                        "estado": "MG",
                        "cidade": "Minas Gerais (Belo Horizonte)",
                        "GW": "Rio de Janeiro",
                        "data": "14/12/2018"
                    },
                    {
                        "nome": 32,
                        "estado": "RJ",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "15/12/2018"
                    },
                    {
                        "nome": 33,
                        "estado": "MS",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "16/12/2018"
                    },
                    {
                        "nome": 34,
                        "estado": "SP",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "17/12/2018"
                    },
                    {
                        "nome": 35,
                        "estado": "SP",
                        "cidade": "São Paulo (SJC até SJRP)",
                        "GW": "Campo Grande",
                        "data": "18/12/2018"
                    },
                    {
                        "nome": 36,
                        "estado": "RJ",
                        "cidade": "Rio de Janeiro (Rio de Janeiro)",
                        "GW": "Campo Grande",
                        "data": "19/12/2018"
                    },
                    {
                        "nome": 37,
                        "estado": "SP",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "20/12/2018"
                    },
                    {
                        "nome": 38,
                        "estado": "MS",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "21/12/2018"
                    },
                    {
                        "nome": 39,
                        "estado": "MS",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "22/12/2018"
                    },
                    {
                        "nome": 40,
                        "estado": "PR",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "23/12/2018"
                    },
                    {
                        "nome": 41,
                        "estado": "SP",
                        "cidade": "São Paulo (Capital e litoral)",
                        "GW": "Campo Grande",
                        "data": "24/12/2018"
                    },
                    {
                        "nome": 42,
                        "estado": "SP",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "25/12/2018"
                    },
                    {
                        "nome": 43,
                        "estado": "PR",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "26/12/2018"
                    },
                    {
                        "nome": 44,
                        "estado": "SC",
                        "cidade": "",
                        "GW": "Rio de Janeiro",
                        "data": "27/12/2018"
                    },
                    {
                        "nome": 45,
                        "estado": "RS",
                        "cidade": "RS e SC (Foz do Iguaçu)",
                        "GW": "Rio de Janeiro",
                        "data": "28/12/2018"
                    },
                    {
                        "nome": 46,
                        "estado": "RS",
                        "cidade": "",
                        "GW": "Rio de Janeiro",
                        "data": "29/12/2018"
                    },
                    {
                        "nome": 47,
                        "estado": "SC",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "30/12/2018"
                    },
                    {
                        "nome": 48,
                        "estado": "SC",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "31/12/2018"
                    },
                    {
                        "nome": 49,
                        "estado": "AP",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "01/01/2019"
                    },
                    {
                        "nome": 50,
                        "estado": "PA",
                        "cidade": "Pará (Belém)",
                        "GW": "Rio de Janeiro",
                        "data": "02/01/2019"
                    },
                    {
                        "nome": 51,
                        "estado": "RO",
                        "cidade": "Roraima",
                        "GW": "Rio de Janeiro",
                        "data": "03/01/2019"
                    },
                    {
                        "nome": 52,
                        "estado": "PA",
                        "cidade": "",
                        "GW": "Rio de Janeiro",
                        "data": "04/01/2019"
                    },
                    {
                        "nome": 53,
                        "estado": "PA",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "05/01/2019"
                    },
                    {
                        "nome": 54,
                        "estado": "PA",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "06/01/2019"
                    },
                    {
                        "nome": 55,
                        "estado": "AM",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "07/01/2019"
                    },
                    {
                        "nome": 56,
                        "estado": "AM",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "08/01/2019"
                    },
                    {
                        "nome": 57,
                        "estado": "AM",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "09/01/2019"
                    },
                    {
                        "nome": 58,
                        "estado": "PA",
                        "cidade": "",
                        "GW": "Campo Grande",
                        "data": "10/01/2019"
                    },
                    {
                        "nome": 59,
                        "estado": "TO",
                        "cidade": "",
                        "GW": "Campo Grande",
                        "data": "11/01/2019"
                    },
                    {
                        "nome": 60,
                        "estado": "AM",
                        "cidade": "",
                        "GW": "Rio de Janeiro",
                        "data": "12/01/2019"
                    },
                    {
                        "nome": 61,
                        "estado": "AM",
                        "cidade": "",
                        "GW": "Campo Grande",
                        "data": "13/01/2019"
                    },
                    {
                        "nome": 62,
                        "estado": "MT",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "14/01/2019"
                    },
                    {
                        "nome": 63,
                        "estado": "MT",
                        "cidade": "Mato Grosso (Barra do Garça)",
                        "GW": "Campo Grande",
                        "data": "15/01/2019"
                    },
                    {
                        "nome": 64,
                        "estado": "AC",
                        "cidade": "",
                        "GW": "Rio de Janeiro",
                        "data": "16/01/2019"
                    },
                    {
                        "nome": 65,
                        "estado": "AC",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "17/01/2019"
                    },
                    {
                        "nome": 66,
                        "estado": "RO",
                        "cidade": "",
                        "GW": "Brasilia",
                        "data": "18/01/2019"
                    },
                    {
                        "nome": 67,
                        "estado": "MT",
                        "cidade": "",
                        "GW": "Florianopolis",
                        "data": "19/01/2019"
                    }
                    ];


        /* Pesquisa */
            for (var i =0 ; i<text.length; i++)
            {
                // Pesquisa de apenas o BEAM 
                if (text[i].nome == value_Nome)
                {
                    nome_resultado =  ("BEAM " +text[i].nome +" "+ "na cidade" +" " + text[i].cidade +" "+ "será ativação no dia"+" "+ text[i].data);
                    document.getElementById("demo").innerHTML += nome_resultado + '<br>';
                }
                // Pesquisa com Estado e cidade 
                if (text[i].estado == value_Estado)
                {
                    if (!value_Cidade)
                    {
                        estado_resultado =  ("BEAM " +text[i].nome +" "+ "na cidade" +" " + text[i].cidade +" "+ "será ativação no dia"+" "+ text[i].data);
                        document.getElementById("demo").innerHTML += (estado_resultado+ '<br>'); 
                    }
                    if (text[i].cidade == value_Cidade)
                    {
                        cidade_resultado=  ("BEAM " +text[i].nome +" "+ "na cidade" +" " + text[i].cidade +" "+ "será ativação no dia"+" "+ text[i].data);
                        document.getElementById("demo").innerHTML += cidade_resultado + '<br>';
                    }
                }
                // Pesquisa por Gw
                if (text[i].GW == value_Gw)
                {
                    cidade_resultado= ("BEAM " +text[i].nome +" "+ "na cidade" +" " + text[i].cidade +" "+ "será ativação no dia"+" "+ text[i].data);
                    document.getElementById("demo").innerHTML += cidade_resultado + '<br>';
                }   
            }
  
        /* Limpar informações do select */
            $("#gw").val("");
            $("#estado").val("");
            $("#cidade").val("");
            $("#nome").val("");
    }
    </script>




    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>