<?php
session_start();
ini_set("soap.wsdl_cache_enabled", 0);

$context = stream_context_create([
   'ssl' => [
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true ]
   ]);

$url = 'your-wsdl-url';
$stream = ['stream_context' => $context];
$client = new SoapClient($url, $stream);
$token = 'your-authentication-token';

$ramal=$_POST['ramal'];
$agente = $_POST['agente'];
$senhamd5 = $_POST['senha'];
$filachave = $_POST['filachave'];
$idunico = $_POST['idunico'];
$formato = $_POST['formato'];
$filas = $_POST['filas'];
$report_name = $_POST['report_name'];
$report_type = $_POST['report_type'];
$srcramal = $_POST['srcramal'];
$dstramal = $_POST['dstramal'];
$tipo = $_POST['tipo'];
$origem = $_POST['origem'];
$categoria = $_POST['categoria'];
$destino = $_POST['destino'];
$idura = $_POST['idura'];
$idpausa = $_POST['idpausa'];
$metodo = $_POST['metodo'];
$dataini = $_POST['dataini'];
$datafin = $_POST['datafin'];

class Funcoes{ 

    function agentLogin() {
        global $token;
        global $agente;
        global $ramal;
        global $senhamd5;
        global $filachave;
        global $client;
        $result = $client->agentLogin($token, $agente, $ramal, $senhamd5, $filachave);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

    function agentLogout() {
        global $token;
        global $agente;
        global $client;
        $result = $client->agentLogout($token, $agente);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

    function agentStatus() {
        global $token;
        global $agente;
        global $client;
        $result = $client->agentStatus($token, $agente);
        $var = $_SESSION['valores'] = "$result";
        header("refresh:0;url=index.php");
}

    function audioDownload() {
        global $token;
        global $idunico;
        global $formato;
        global $client;
        $result = $client->audioDownload($token, $idunico, $formato);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        $teste = utf8_decode($valores);
        header("refresh:0;url=index.php?&valores=$teste");
    }

    function ccenterAgents() {
        global $token;
        global $agente;
        global $filas;
        global $dataini;
        global $datafin;
        global $client;
        $result = $client->ccenterAgents($token, $agente, $filas, $dataini, $datafin);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");

    }

    function ccenterAttendForms () {
        global $token;
        global $agente;
        global $filas;
        global $dataini;
        global $datafin;
        global $client;
        $result = $client->ccenterAttendForms($token, $agente, $filas, $dataini, $datafin);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

    function ccenterCdr() {
        global $token;
        global $dataini;
        global $datafin;
        global $agente;
        global $filas;
        global $client;
        $result = $client->ccenterCdr($token, $dataini, $datafin, $agente, $filas);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

    function ccenterMetrics() {
        global $token;
        global $report_name;
        global $agente;
        global $filas;
        global $dataini;
        global $datafin;
        global $client;
        $result = $client->ccenterMetrics($token, $report_name, $agente, $filas, $dataini, $datafin);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

    function ccenterMetricsReports() {
        global $token;
        global $client;
        $result = $client->ccenterMetricsReports($token);
        $resposta = json_decode($result);
        $var = $_SESSION['valores'] = "$result";
        header("refresh:0;url=index.php");
    }

    function ccenterPauses() {
        global $token;
        global $report_type;
        global $agente;
        global $filas;
        global $dataini;
        global $datafin;
        global $client;
        $result = $client->ccenterPauses($token, $report_type, $agente, $filas, $dataini, $datafin);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

    function ccenterSchedules() {
        global $token;
        global $dataini;
        global $datafin;
        global $agente;
        global $client;
        $result = $client->ccenterSchedules($token, $dataini, $datafin, $agente);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

    function ccenterSessions() {
        global $token;
        global $report_type;
        global $agente;
        global $filas;
        global $dataini;
        global $datafin;
        global $client;
        $result = $client->ccenterSessions($token, $report_type, $agente, $filas, $dataini, $datafin);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

    function ccenterSurvey() {
        global $token;
        global $agente;
        global $filas;
        global $dataini;
        global $datafin;
        global $client;
        $result = $client->ccenterSurvey($token, $agente, $filas, $dataini, $datafin);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");

    }

    function cdrSearch() {
        global $token;
        global $dataini;
        global $datafin;
        global $origem;
        global $destino;
        global $idunico;
        global $client;
        $result = $client->cdrSearch($token, $dataini, $datafin, $origem, $destino, $idunico);
        $resposta = json_decode($result);
        $var = $_SESSION['valores'] = "$result";
        header("refresh:0;url=index.php");
    }


    function cdrTariff() {
        global $token;
        global $dataini;
        global $datafin;
        global $client;
        $result = $client->cdrTariff($token, $dataini, $datafin);
        // echo ($result);
        $resposta = json_decode($result);
        $var = $_SESSION['valores'] = "$result";
        header("refresh:0;url=index.php");
    }

    function cdrURA() {
        global $token;
        global $dataini;
        global $datafin;
        global $idura;
        global $idunico;
        global $client;
        $result = $client->cdrURA($token, $dataini, $datafin, $idura, $idunico);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

    function endPause() {
        global $token;
        global $agente;
        global $client;
        $result = $client->endPause($token, $agente);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

    function extenStatus() {
        global $token;
        global $tipo;
        global $ramal;
        global $client;
        $result = $client->extenStatus($token, $tipo, $ramal);
        $resposta = json_decode($result);
        $var = $_SESSION['valores'] = "$result";
        header("refresh:0;url=index.php");
        }

    function getAgent() {
        global $token;
        global $client;
        $result = $client->getAgent($token);
        $resposta = json_decode($result);
        $var = $_SESSION['valores'] = "$result";
        header("refresh:0;url=index.php");
    } 
    

    function getExtens() {
        global $token;
        global $ramal;
        global $client;
        $result = $client->getExtens($token, $ramal);
        $resposta = json_decode($result);
        $var = $_SESSION['valores'] = "$result";
        header("refresh:0;url=index.php");
    }

    function getPauses() {
        global $token;
        global $client;
        $result = $client->getPauses($token);
        $resposta = json_decode($result);
        $var = $_SESSION['valores'] = "$result";
        header("refresh:0;url=index.php");
    }
    
    function getQueue() {
        global $token;
        global $filas;
        global $client;
        $result = $client->getQueue($token, $filas);
        $resposta = json_decode($result);
        $var = $_SESSION['valores'] = "$result";
        header("refresh:0;url=index.php");
    }

    function hangupCall() {
        global $token;
        global $ramal;
        global $agente;
        global $client;
        $result = $client->hangupCall($token, $ramal, $agente);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

    function listTrunk() {
        global $token;
        global $client;
        $result = $client->listTrunk($token);
        $resposta = json_decode($result);
        $var = $_SESSION['valores'] = "$result";
        header("refresh:0;url=index.php");
    }

    function listURA() {
        global $token;
        global $idura;
        global $client;
        $result = $client->listURA($token, $idura);
        $resposta = json_decode($result);
        $var = $_SESSION['valores'] = "$result";
        header("refresh:0;url=index.php");
    }

    function monitExten() {
        global $token;
        global $srcramal;
        global $dstramal;
        global $agente;
        global $tipo;
        global $client;
        $result = $client->monitExten($token, $srcramal, $dstramal, $agente, $tipo);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

    function queueStatus() {
        global $token;
        global $filas;
        global $client;
        $result = $client->queueStatus($token, $filas);
        $resposta = json_decode($result);
        $var = $_SESSION['valores'] = "$result";
        header("refresh:0;url=index.php");
    }
    
    function startCall() {
        global $token;
        global $tipo;
        global $origem;
        global $destino;
        global $categoria;
        global $client;
        $result = $client->startCall($token, $tipo, $origem, $destino, $categoria);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

    function startCallura() {
        global $token;
        global $idura;
        global $destino;
        global $categoria;
        global $client;
        $result = $client->startCallura($token, $idura, $destino, $categoria);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

    function startPause() {
        global $token;
        global $agente;
        global $idpausa;
        global $client;
        $result = $client->startPause($token, $agente, $idpausa);
        $resposta = json_decode($result);
        $array = json_decode(json_encode($resposta), true);
        foreach($array as $retorno => $valores);
        header("refresh:0;url=index.php?&valores=$valores");
    }

}

if (isset($_POST["metodo"])) {
    $funcao = new Funcoes();  
    $funcao->$metodo(); 
}


?>

