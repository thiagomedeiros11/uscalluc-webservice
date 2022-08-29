<?php

require_once('union.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Integrador | USCall</title>
    <script src='jquery-2.1.4.min.js'></script>
    <script src='javascript.js'></script>
    <link rel='stylesheet' href='stylesheet.css'>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>

<body>
    <nav class="navigator">
        <div>
            <img id="logo.png" src="logo.png" width="60">
    </nav><br>

    <table>
        <th>
            <div id="navegador">
                <h1>Integrador | USCall</h1>
            </div>

            <div>
                Selecione a função:
            </div><br>
            <select id='select' name='select'>
                <option value=''>Funções USCall</options>
                <option value='agentLogin'>agentLogin</options>
                <option value='agentLogout'>agentLogout</options>
                <option value='agentStatus'>agentStatus</options>
                <option value='audioDownload'>audioDownload</options>
                <option value='ccenterAgents'>ccenterAgents</options>
                <option value='ccenterAttendForms'>ccenterAttendForms</options>
                <option value='ccenterCdr'>ccenterCdr</options>
                <option value='ccenterMetrics'>ccenterMetrics</options>
                <option value='ccenterMetricsReports'>ccenterMetricsReports</options>
                <option value='ccenterPauses'>ccenterPauses</options>
                <option value='ccenterSchedules'>ccenterSchedules</options>
                <option value='ccenterSessions'>ccenterSessions</options>
                <option value='ccenterSurvey'>ccenterSurvey</options>
                <option value='cdrSearch'>cdrSearch</options>
                <option value='cdrTariff'>cdrTariff</options>
                <option value='cdrURA'>cdrURA</options>
                <option value='endPause'>endPause</options>
                <option value='extenStatus'>extenStatus</options>
                <option value='getAgent'>getAgent</options>
                <option value='getExtens'>getExtens</options>
                <option value='getPauses'>getPauses</options>
                <option value='getQueue'>getQueue</options>
                <option value='hangupCall'>hangupCall</options>
                <option value='listTrunk'>listTrunk</options>
                <option value='listURA'>listURA</options>
                <option value='monitExten'>monitExten</options>
                <option value='queueStatus'>queueStatus</options>
                <option value='startCall'>startCall</options>
                <option value='startCallura'>StartCallura</options>
                <option value='startPause'>startPause</options>

            </select><br> </br>



            <?php 
if (isset($_GET["valores"])) {
    echo ' <form method="get" action="index.php">
    <input type="submit" value="Voltar">
    </form><br></br>';

}
$a = $_GET['valores'];
echo ucwords($a);
?>

            <?php
session_start();
if (isset($_SESSION["valores"])) {
    echo ' <input type="button" value="Voltar" onClick="window.location.reload()"><br></br>';
}
$var = $_SESSION['valores'];
$resposta = json_decode($var, true);
foreach($resposta as $retorno => $valores)
        {
        foreach($valores as $info => $infos)
        {
            echo "<br>";
        foreach($infos as $index => $resultado)
        {
          echo ucfirst("$index: $resultado<br>"); 
        foreach($resultado as $a => $b)
        {
           echo ucfirst("$a: $b<br>"); 

        }
    }
}
        }

session_destroy();

?>

            <!-- todas as divs com as funções e descrição de cada função -->
            <div id='pai'>

                <!-- função agentLogin -->
                <div id='agentLogin' class="form-container"><br></br>
                    <form method="post" id="ramal" action="union.php">
                        <span class="input-label">Agente: <input type="text" name="agente"><br></br>
                            <span class="input-label">Ramal: <input type="text" name="ramal"><br></br>
                                <span class="input-label">Senha MD5: <input type="text" name="senha"><br></br>
                                    <span class="input-label">Fila Chave: <input type="text" name="filachave"><br></br>
                                    </span>
                                    <select name="metodo" class="invisible">
                                        <option value="agentLogin">agentLogin</options>
                                    </select>
                                    <input type="submit" value="Executar"><br>
                    </form><br>
                </div>
                <div id='agentLogin'>
                    <table>
                        <tr>
                            <th>
                                <h3>Descrição</h3>
                                <b>Esta função é utilizada para efetuar um login de agente no sistema.</b><br></br>
                        </tr>
                        <tr>
                            <th>
                                <h3>Parâmetros</h3>
                                <b>Agente:</b> Número do agente criado no sistema<br></br>
                                <b>Ramal:</b> Número do ramal que o agente irá utilizar para login<br></br>
                                <b>Senhamd5:</b> Senha do agente no formato md5<br></br>
                                <b>Filachave:</b> Fila chave que o agente será associado, a fila deve ser do tipo Call
                                Center, caso não informado será utilizado a fila chave configurada no sistema.<br></br>
                            </th>
                        </tr>
                        <th>
                            <h3>Parâmetros obrigatórios</h3>
                            <b></b> Token, agente, ramal, senhamd5<br></br>
                        </th>
                    </table>
                </div>

                <!-- função agentLogout -->
                <div id='agentLogout' class="form-container"><br></br>
                    <form method="post" id="ramal" action="union.php">
                        <span class="input-label">Agente: <input type="text" name="agente"><br></br>
                            <span class="input-label">Ramal: <input type="text" name="ramal"><br></br>
                                <span class="input-label">Senha MD5: <input type="text" name="senha"><br></br>
                                    <span class="input-label">Fila Chave: <input type="text" name="filachave"><br></br>
                                    </span>
                                    <select name="metodo" class="invisible">
                                        <option value="agentLogout">agentLogout</options>
                                    </select>
                                    <input type="submit" value="Executar"><br>
                    </form><br>
                </div>
                <div id='agentLogout'>
                    <table>
                        <tr>
                            <th>
                                <h3>Descrição</h3>
                                <b>Esta função é utilizada para efetuar um logout de agente no sistema.</b><br></br>
                        </tr>
                        <tr>
                            <th>
                                <h3>Parâmetros</h3>
                                <b>Agente:</b> Número do agente criado no sistema<br></br>
                                <b>Ramal:</b> Número do ramal que o agente irá utilizar para login<br></br>
                                <b>Senhamd5:</b> Senha do agente no formato md5<br></br>
                                <b>Filachave:</b> Fila chave que o agente será associado, a fila deve ser do tipo Call
                                Center, caso não informado será utilizado a fila chave configurada no sistema.<br></br>
                            </th>
                        </tr>
                        <th>
                            <h3>Parâmetros obrigatórios</h3>
                            <b></b> Token, agente, ramal, senhamd5<br></br>
                        </th>
                    </table>
                </div>

                <!-- Função agentStatus -->
                <div id='agentStatus' class="form-container"><br></br>
                    <form method="post" id="ramal" name="form" action="union.php">
                        <span class="input-label">Agente: <input type="text" name="agente"><br></br>
                        </span><br></br>
                        <select name="metodo" class="invisible">
                            <option value="agentStatus">agentStatus</options><br>
                        </select>
                        <input type="submit" value="Executar"><br>
                    </form><br>
                </div>
                <div id='agentStatus'>
                    <table>
                        <tr>
                            <th>
                                <h3>Descrição</h3>
                                <b>Esta função é utilizada para consultar o status dos agentes. Abaixo descrição dos
                                    parâmetros:</b><br></br>
                        </tr>
                        <tr>
                            <th>
                                <h3>Parâmetros</h3>
                                <b>agente:</b> Número do agente para consulta, caso não informado serão retornados todos
                                agentes criados no sitema<br></br>
                            </th>
                        </tr>
                        <th>
                            <h3>Parâmetros obrigatórios</h3>
                            <b></b> Token<br></br>
                            <tr>
                                <th>
                                    <h3>Campos de retorno</h3>
                                    <b> num:</b> Número do agente<br>
                                    <b>status:</b> Status atual do agente, status disponíveis: em pausa, ocupado,
                                    tocando, ocioso, ramal inoperante, desconhecido, erro login, nao logado<br>
                                    <b>pausa:</b> Pausa atual do agente<br>
                                    <b>campanha:</b> Campanha atual do agente<br>
                                    <b>ramal:</b> Ramal em que o agente está logado<br>
                                    <b>numero:</b> Número da ligação atual do agente<br>
                                    <b>tempo:</b> Tempo de ligação atual do agente<br>
                                    <b>filas:</b> Filas que este agente está logado<br>
                                    <b>recebidas:</b> Total de ligações recebidas do dia deste agente<br>
                                    <b>efetuadas:</b> Total de ligações efetuadas do dia deste agente<br>
                                    <b>atendfila:</b> Fila atendida da ligação atual do agente (Ligações efetuadas será
                                    retornado como Ativo)<br>
                                    <b>idcall:</b> Fila atendida da ligação atual do agente<br>
                                    <b>ddr:</b> Número do DDR da ligação atual do agente<br>
                                    <b>idura:</b> Numeração discada pela origem na URA de atendimento (se habilitado),
                                    normalmente usado para solicitar CPF/CPNJ da origem para identificação.
                                </th>
                    </table>
                </div>

                <!-- Função audioDownload -->
                <div id='audioDownload' class="form-container"><br></br>
                    <form method="post" id="ramal" name="form" action="union.php">
                        <span class="input-label">Id Único: <input type="text" name="idunico"><br></br>
                            <span class="input-label">Formato: <span class="input-label"><select name="formato">
                                        <option value="mp3">mp3</options>
                                        <option value="ogg">ogg</options>
                                        <option value="wav">wav</options>
                                </span>
                                </select>
                                <select name="metodo" class="invisible">
                                    <option value="audioDownload">audioDownload</options>
                                </select><br></br>
                                <input type="submit" value="Executar"><br>
                    </form><br>
                </div>
                <div id='audioDownload'>
                    <table>
                        <tr>
                            <th>
                                <h3>Descrição</h3>
                                <b>Esta função é utilizada para efetuar busca de gravação de uma ligação no PBX. O áudio
                                    é retornado codificado em base64 no campo arquivo_base_64.<br></br></b>
                        </tr>
                        <tr>
                            <th>
                                <h3>Parâmetros</h3>
                                <b>idunico:</b> ID único da ligação, utilize a função cdrSearch para buscar o id da
                                ligação. Ou utilize o idcti gerado pela função startCall.<br>
                                formato:</b> Formato do arquivo de áudio para retorno, caso não informado será retornado
                                o formato padrão: WAV (16 bits, 8000Hz). Os formatos disponíveis são: mp3, ogg e
                                wav.<br></br>
                            </th>
                        </tr>
                        <th>
                            <h3>Parâmetros obrigatórios</h3>
                            <b>Token, idunico<br></br>
                        </th>
                        <tr>
                            <th>
                                <h3>Campos de retorno:</h3>
                                <b>nomeaudio:</b> Nome do arquivo de áudio no PBX<br>
                                <b>data:</b> Data e horário da ligação.<br>
                                <b>tipo:</b> Tipo da ligação, consulte a função cdrSearch para detalhes dos tipos.<br>
                                <b>status:</b> Status da ligação, consulte a função cdrSearch para detalhes dos
                                status.<br>
                                <b>origem:</b> Número que originou a ligação.<br>
                                <b>destino:</b> Número de destino da ligação.<br>
                                <b>arquivo_base_64:</b> Arquivo binário do áudio, codificado no formato base64
                            </th>
                    </table>
                </div>

                <!-- Função ccenterAgentes -->
                <div id='ccenterAgents' class="form-container"><br></br>
                    <form method="post" id="ramal" name="form" action="union.php">
                        <span class="input-label">Agentes: <input type="text" name="agente"><br></br>
                            <span class="input-label">Filas: <input type="text" name="filas"><br></br>
                                <span class="input-label">Data Inicio: <input type="text" name="dataini"
                                        placeholder="YYYY-MM-DD HH:I:S"><br></br>
                                    <span class="input-label">Data Final: <input type="text" name="datafin"
                                            placeholder="YYYY-MM-DD HH:I:S"><br></br>
                                    </span>
                                    <select name="metodo" class="invisible">
                                        <option value="ccenterAgents">ccenterAgents</options>
                                    </select>
                                    <input type="submit" value="Executar"><br>
                    </form><br>
                </div>

                <div id='ccenterAgents'>
                    <table>
                        <tr>
                            <th>
                                <h3>Descrição</h3>
                                <b>Esta função é utilizada para consultar as informações de produtividade dos agentes do
                                    contact center. <br></br></b>
                        </tr>

                        <tr>
                            <th>
                                <h3> Parâmetros </h3>
                                <b>agentes:</b> Numeração dos agentes para processamento do relatório, deve ser enviado
                                no formato JSON. Ex: [600,611,605]. Consulte a função getAgent para consultar a
                                numeração dos agentes cadastrados.<br>
                                <b>filas:</b> Numeração/identificação das filas para processamento do relatório, deve
                                ser enviado no formato JSON. Ex: ["Ativo",900,901,910]. Consulte a função getQueue para
                                consultar a numeração das filas cadastradas.<br>
                                <b>dataini:</b> Data e horário inicial do filtro para a busca. Formato deve ser
                                YYYY-MM-DD HH:i:s. Caso NULO, será efetuado o filtro da data atual da busca, com o
                                horário: 00:00:00.<br>
                                <b>datafin:</b> Data e horário final do filtro para a busca. Formato deve ser YYYY-MM-DD
                                HH:i:s. Caso NULO, será efetuado o filtro da data atual da busca, com o horário:
                                23:59:59.<br></br>
                            </th>
                        </tr>

                        <th>
                            <h3>Parâmetros obrigatórios</h3>
                            <b>Token, agentes, filas</b><br></br>
                        </th>

                        <tr>
                            <th>
                                <h3>Campos de retorno:</h3>
                                <b>agente:</b>Identificação do agente.<br>
                                <b>sessao:</b> Tempo total de sessão em segundos.<br>
                                <b>perc_sessao:</b> Percentual de tempo de sessão, em relação ao total de sessões dos
                                agentes.<br>
                                <b>ocupado:</b> Tempo total de atendimento em segundos.<br>
                                <b>perc_ocupad:</b> Percentual de tempo em atendimento, em relação ao tempo de
                                sessão.<br>
                                <b>ocioso:</b> Tempo total de inatividade em segundos, em relação ao tempo de
                                sessão.<br>
                                <b>perc_ocioso:</b> Percentual de tempo de inatividade em segundos, em relação ao tempo
                                de sessão.<br>
                                <b>pausas:</b> Tempo total de pausas efetuadas pelo agente em segundos.<br>
                                <b>pausas_sys:</b> Tempo total de pausas efetuadas pelo sistema em segundos.<br>
                                <b>perc_pausa:</b> Percentual de tempo de pausas, em relação ao tempo de sessão.<br>
                                <b>tma:</b> Tempo médio de atendimento em segundos (recebida e efetuadas) .<br>
                                <b>inbound_tma:</b> Tempo médio de atendimento em segundos, de ligações recebidas em
                                filas.<br>
                                <b>inbound_atend:</b> Total de ligações atendidas em fila.<br>
                                <b>inbound_natend:</b> Total de tentantivas de contato em fila canceladas pelo
                                agente.<br>
                                <b>outbound_total:</b>Total de ligações efetuadas.<br>
                                <b>outbound_tma:</b> Tempo médio de atendimento em segundos de ligações efetuadas.<br>
                                <b>outbound_atend:</b> Total de ligações atendidas efetuadas.<br>
                                <b>outbound_natend:</b> Total de ligações não atendidas efetuadas.
                            </th>
                        </tr>
                    </table>

                </div>

                <!-- Função ccenterAttendForms -->
                <div id='ccenterAttendForms' class="form-container"><br></br>
                    <form method="post" id="ramal" name="form" action="union.php">
                        <span class="input-label">Agentes: <input type="text" name="agente"><br></br>
                            <span class="input-label">Filas: <input type="text" name="filas"><br></br>
                                <span class="input-label">Data Inicio: <input type="text" name="dataini"
                                        placeholder="YYYY-MM-DD HH:I:S"><br></br>
                                    <span class="input-label">Data Final: <input type="text" name="datafin"
                                            placeholder="YYYY-MM-DD HH:I:S"><br></br>
                                    </span>
                                    <select name="metodo" class="invisible">
                                        <option value="ccenterAttendForms">ccenterAttendForms</options>
                                    </select>
                                    <input type="submit" value="Executar"><br>
                    </form><br>
                </div>

                <div id='ccenterAttendForms'>
                    <table>

                        <tr>
                            <th>
                                <h3>Descrição</h3>
                                <b>Esta função é utilizada para consultar os registros de contatos detalhados, com
                                    formulários de atendimentos e qualificações do contact center.<br></br></b>
                            </th>
                        </tr>

                        <tr>
                            <th>
                                <h3>Parâmetros</h3>
                                <b>agentes:</b> Numeração dos agentes para processamento do relatório, deve ser enviado
                                no formato JSON. Ex: [600,611,605]. Consulte a função getAgent para consultar a
                                numeração dos agentes cadastrados.<br>
                                <b>filas:</b> Numeração/identificação das filas para processamento do relatório, deve
                                ser enviado no formato JSON. Ex: ["Ativo",900,901,910]. Consulte a função getQueue para
                                consultar a numeração das filas cadastradas.<br>
                                <b>dataini:</b> Data e horário inicial do filtro para a busca. Formato deve ser
                                YYYY-MM-DD HH:i:s. Caso NULO, será efetuado o filtro da data atual da busca, com o
                                horário: 00:00:00.<br>
                                <b>datafin:</b> Data e horário final do filtro para a busca. Formato deve ser YYYY-MM-DD
                                HH:i:s. Caso NULO, será efetuado o filtro da data atual da busca, com o horário:
                                23:59:59.<br></br>
                            </th>
                        </tr>

                        <tr>
                            <th>
                                <h3>Parâmetros obrigatórios</h3>
                                <b>Token, agentes ou filas</b><br></br>
                            </th>
                        </tr>

                        <tr>
                            <th>
                                <h3>Campos de retorno</h3>
                                <b>nome:</b> Nome de identificação do contato.<br>
                                <b>datatime:</b> Data e horário do atendimento.<br>
                                <b>agente:</b> Identificação do agente.<br>
                                <b>callerid:</b> Número de identificação do contato.<br>
                                <b>class:</b> Identificação da qualificação do atendimento.<br>
                                <b>uniqueid:</b> Identificação única do atendimento.<br>
                                <b>campanha:</b> Identificação da campanha do atendimento.<br>
                                <b>status:</b> Status do atendimento.<br>
                                <b>obs:</b> Observações do atendimento.<br>
                                <b>operacao:</b> Identificação da operação deste atendimento, poder ser uma URA ou
                                fila.<br>
                                <b>midia:</b> Canal de mídia do atendimento<br>
                                <b>campextra1:</b> Campo extra para preenchimento.<br>
                                <b>campextra2:</b> Campo extra para preenchimento.<br>
                                <b>campextra3:</b> Campo extra para preenchimento.<br>
                                <b>campextra4:</b> Campo extra para preenchimento.<br>
                                <b>campextra5:</b> Campo extra para preenchimento.<br>
                                <b>campextra6:</b> Campo extra para preenchimento.<br>
                                <b>campextra7:</b> Campo extra para preenchimento.<br>
                                <b>campextra8:</b> Campo extra para preenchimento.<br>
                                <b>campextra9:</b> Campo extra para preenchimento.
                            </th>
                        </tr>
                    </table>
                </div>

                <!-- Função ccenterCdr -->
                <div id='ccenterCdr' class="form-container"><br></br>
                    <form method="post" id="ramal" name="form" action="union.php">
                        <span class="input-label">Data Inicio: <input type="text" name="dataini"
                                placeholder="YYYY-MM-DD HH:I:S"><br></br>
                            <span class="input-label">Data Final: <input type="text" name="datafin"
                                    placeholder="YYYY-MM-DD HH:I:S"><br></br>
                                <span class="input-label">Agentes: <input type="text" name="agente"><br></br>
                                    <span class="input-label">Filas: <input type="text" name="filas"><br></br>
                                    </span>
                                    <select name="metodo" class="invisible">
                                        <option value="ccenterCdr">ccenterCdr</options>
                                    </select>
                                    <input type="submit" value="Executar"><br>
                    </form><br>
                </div>

                <div id="ccenterCdr">
                    <table>

                        <tr>
                            <th>
                                <h3>Descrição</h3>
                                <b>Esta função é utilizada para consultar as informações detalhadas de contatos
                                    recebidos e efetuados no contact center.<br></br></b>
                                <b>agentes:</b> Numeração dos agentes para processamento do relatório, deve ser enviado
                                no formato JSON. Ex: [600,611,605]. Consulte a função getAgent para consultar a
                                numeração dos agentes cadastrados.<br>
                                <b>filas:</b> Numeração/identificação das filas para processamento do relatório, deve
                                ser enviado no formato JSON. Ex: ["Ativo",900,901,910]. Consulte a função getQueue para
                                consultar a numeração das filas cadastradas.<br>
                                <b>dataini:</b> Data e horário inicial do filtro para a busca. Formato deve ser
                                YYYY-MM-DD HH:i:s. Caso NULO, será efetuado o filtro da data atual da busca, com o
                                horário: 00:00:00.<br>
                                <b>datafin:</b> Data e horário final do filtro para a busca. Formato deve ser YYYY-MM-DD
                                HH:i:s. Caso NULO, será efetuado o filtro da data atual da busca, com o horário:
                                23:59:59.<br></br>
                            </th>
                        </tr>

                        <tr>
                            <th>
                                <h3>Parâmetros</h3>
                                <b>Token, agentes, filas</b><br></br>
                            </th>
                        </tr>

                        <tr>
                            <th>
                                <h3>Campos de retorno</h3>
                                <b>datahora:</b> Data e horário da ligação.<br>
                                <b>fila:</b>Identificação da fila da ligação.<br>
                                <b>agente:</b> Identificação do agente da ligação.<br>
                                <b>numero:</b> Número de identificação do contato da ligação<br>
                                <b>status:</b>Status da ligação (atendido ou não atendido).<br>
                                <b>espera:</b>Tempo de espera até atendimento ou finalização da ligação.<br>
                                <b>atendimento:</b>Tempo de atendimento da ligação.<br>
                                <b>gravacao:</b>Arquivo de áudio da ligação.<br>
                                <b>bilheteunico:</b>Identificação única da ligação.
                        </tr>
        </th>
    </table>
    </div>

    <!-- Função ccenterMetrics -->
    <div id='ccenterMetrics' class="form-container"><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class="input-label">Report Name: <input type="text" name="report_name"><br></br>
                <span class="input-label">Agentes: <input type="text" name="agente"><br></br>
                    <span class="input-label">Filas: <input type="text" name="filas"><br></br>
                        <span class="input-label">Data Inicial: <input type="text" name="dataini"
                                placeholder="YYYY-MM-DD HH:I:S"><br></br>
                            <span class="input-label">Data Final: <input type="text" name="datafin"
                                    placeholder="YYYY-MM-DD HH:I:S"><br></br>
                            </span>
                            <select name="metodo" class="invisible">
                                <option value="ccenterMetrics">ccenterMetrics</options>
                            </select>
                            <input type="submit" value="Executar"><br>
        </form><br>
    </div>

    <div id="ccenterMetrics">
        <table>
            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para consultar as métricas e estatísticas do contact center.<br></br></b>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>report_name: </b>Nome do relatório para definição do tipo de informação que será retornada.
                    Consulte a função ccenterMetricsReports para visualizar os relatórios disponíveis.<br>
                    <b>agentes:</b> Numeração dos agentes para processamento do relatório, deve ser enviado no formato
                    JSON. Ex: [600,611,605]. Consulte a função getAgent para consultar a numeração dos agentes
                    cadastrados.<br>
                    <b>filas: </b>Numeração/identificação das filas para processamento do relatório, deve ser enviado no
                    formato JSON. Ex: ["Ativo",900,901,910]. Consulte a função getQueue para consultar a numeração das
                    filas cadastradas.<br>
                    <b>dataini:</b> Data e horário inicial do filtro para a busca. Formato deve ser YYYY-MM-DD HH:i:s.
                    Caso NULO, será efetuado o filtro da data atual da busca, com o horário: 00:00:00.<br>
                    <b>datafin: </b>Data e horário final do filtro para a busca. Formato deve ser YYYY-MM-DD HH:i:s.
                    Caso NULO, será efetuado o filtro da data atual da busca, com o horário: 23:59:59.<br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b> Token, report_name, agentes, filas</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno</h3>
                    <b>Os campos de retorno podem variar de acordo com o tipo de relatório gerado.</b><br>
                    <b>Será retornado um JSON com informações sintéticas do período consultado.</b>
                </th>
            </tr>
        </table>
    </div>

    <!-- Função ccenterMetricsReports -->
    <div id='ccenterMetricsReports' class="form-container"><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <select name="metodo" class="invisible">
                <option value="ccenterMetricsReports">ccenterMetricsReports</options>
            </select>
            <input type="submit" value="Executar">
        </form><br>
    </div>

    <div id="ccenterMetricsReports">
        <table>

            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para consultar os tipos de relatórios disponíveis para uso na função
                        ccenterMetrics:</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b>Token</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno</h3>
                    Será retornado um JSON com a associação do nome do relatório (necessário para uso na função
                    ccenterMetrics), juntamente com a descrição.
                </th>
            </tr>
        </table>
    </div>

    <div id='ccenterPauses' class="form-container"><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class="input-label">Report Type: <input type="text" name="report_type"><br></br>
                <span class="input-label">Agentes: <input type="text" name="agente"><br></br>
                    <span class="input-label">Filas: <input type="text" name="filas"><br></br>
                        <span class="input-label">Data Inicial: <input type="text" name="dataini"
                                placeholder="YYYY-MM-DD HH:I:S"><br></br>
                            <span class="input-label">Data Final: <input type="text" name="datafin"
                                    placeholder="YYYY-MM-DD HH:I:S"><br></br>
                            </span>
                            <select name="metodo" class="invisible">
                                <option value="ccenterPauses">ccenterPauses</options>
                            </select>
                            <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id="ccenterPauses">
        <table>

            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para consultar as informações de pausas efetuadas dos agentes do contact
                        center.</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>report_type:</b> Tipo de relatório que será gerado. 0 para sintético, 1 para analítico.<br>
                    <b>agentes:</b> Numeração dos agentes para processamento do relatório, deve ser enviado no formato
                    JSON. Ex: [600,611,605]. Consulte a função getAgent para consultar a numeração dos agentes
                    cadastrados.<br>
                    <b>filas:</b> Numeração/identificação das filas para processamento do relatório, deve ser enviado no
                    formato JSON. Ex: ["Ativo",900,901,910]. Consulte a função getQueue para consultar a numeração das
                    filas cadastradas.<br>
                    <b>dataini:</b> Data e horário inicial do filtro para a busca. Formato deve ser YYYY-MM-DD HH:i:s.
                    Caso NULO, será efetuado o filtro da data atual da busca, com o horário: 00:00:00.<br>
                    <b>datafin:</b> Data e horário final do filtro para a busca. Formato deve ser YYYY-MM-DD HH:i:s.
                    Caso NULO, será efetuado o filtro da data atual da busca, com o horário: 23:59:59.<br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3> Parâmetros obrigatórios</h3>
                    <b> Token, report_type, agentes, filas</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno:</h3>
                    Será retornado um JSON com informações do período consultado, com a relação de identificação do
                    agente e pausas.<br></br>
                    <h4>Sintético</h4>
                    <b>tempo:</b> Tempo total em segundos da pausa relacionada.</br>
                    <b>estouro:</b> Tempo total excedido em segundos da pausa relacionada.</br>
                    <b>total:</b> Quantidade total em segundos da pausa relacionada.<br></br>
                    <h4>Analítico</h4>
                    <b>inicio:</b> Data e horário do início da pausa.</br>
                    <b>retorno:</b> Data e horário do encerramento da pausa.</br>
                    <b>agente:</b> Identificação do agente.</br>
                    <b>pausa:</b> Identificação da pausa.</br>
                    <b>tempo</b>: Tempo em segundos da pausa.</br>
                    <b>limite:</b> Tempo em segundos máximo permitido para esta pausa.</br>
                    <b>estouro:</b> Tempo em segundos excedido nesta pausa.</br>
        </table>
    </div>

    <!-- Função ccenterSchedules -->
    <div id='ccenterSchedules' class="form-container"><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class="input-label">Data Inicial: <input type="text" name="dataini"
                    placeholder="YYYY-MM-DD HH:I:S"><br></br>
                <span class="input-label">Data Final: <input type="text" name="datafin"
                        placeholder="YYYY-MM-DD HH:I:S"><br></br>
                    <span class="input-label">Agente: <input type="text" name="agente"><br></br>
                    </span>
                    <select name="metodo" class="invisible">
                        <option value="ccenterSchedules">ccenterSchedules</options>
                    </select>
                    <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id="ccenterSchedules">
        <table>

            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para consultar agendamentos dos agentes do contact center.</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>dataini:</b> Data e horário inicial do filtro para a busca. Formato deve ser YYYY-MM-DD HH:i:s.
                    Caso NULO, será efetuado o filtro da data atual da busca, com o horário: 00:00:00.<br>
                    <b>datafin:</b> Data e horário final do filtro para a busca. Formato deve ser YYYY-MM-DD HH:i:s.
                    Caso NULO, será efetuado o filtro da data atual da busca, com o horário: 23:59:59.<br>
                    <b>agentes:</b> Numeração dos agentes para processamento do relatório, deve ser enviado no formato
                    JSON. Ex: [600,611,605]. Consulte a função getAgent para consultar a numeração dos agentes
                    cadastrados.<br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b>Token</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno</h3>
                    <b>id:</b>Identificação única do agendamento.<br>
                    <b>nome:</b>Nome de identificação do agendamento<br>
                    <b>retorno:</b>Data e horário para retorno do agendamento.<br>
                    <b>agente:</b> Identificação do agente do agendamento.<br>
                    <b>tipo:</b> Tipo do agendamento, pode ser LEMBRETE ou RETORNO.<br>
                    <b>numeros:</b>Números de contatos de voz para retorno do agendamento.<br>
                    <b>obs:</b>Observações para este agendamento.
                </th>
            </tr>

        </table>
    </div>

    <!-- Função ccenterSessions -->
    <div id='ccenterSessions' class="form-container"><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class="input-label">Report Type: <input type="text" name="report_type"><br></br>
                <span class="input-label">Agentes: <input type="text" name="agente"><br></br>
                    <span class="input-label">Filas: <input type="text" name="filas"><br></br>
                        <span class="input-label">Data Inicial: <input type="text" name="dataini"
                                placeholder="YYYY-MM-DD HH:I:S"><br></br>
                            <span class="input-label">Data Final: <input type="text" name="datafin"
                                    placeholder="YYYY-MM-DD HH:I:S"><br></br>
                            </span>
                            <select name="metodo" class="invisible">
                                <option value="ccenterSessions">ccenterSessions</options>
                            </select>
                            <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id="ccenterSessions">
        <table>

            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para consultar as informações de login/logout dos agentes do contact
                        center. Abaixo descrição dos parâmetros:</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>report_type:</b> Tipo de relatório que será gerado. 0 para sintético, 1 para analítico.<br>
                    <b>agentes:</b> Numeração dos agentes para processamento do relatório, deve ser enviado no formato
                    JSON. Ex: [600,611,605]. Consulte a função getAgent para consultar a numeração dos agentes
                    cadastrados.<br>
                    <b>filas:</b> Numeração/identificação das filas para processamento do relatório, deve ser enviado no
                    formato JSON. Ex: ["Ativo",900,901,910]. Consulte a função getQueue para consultar a numeração das
                    filas cadastradas.<br>
                    <b>dataini:</b> Data e horário inicial do filtro para a busca. Formato deve ser YYYY-MM-DD HH:i:s.
                    Caso NULO, será efetuado o filtro da data atual da busca, com o horário: 00:00:00.<br>
                    <b>datafin:</b> Data e horário final do filtro para a busca. Formato deve ser YYYY-MM-DD HH:i:s.
                    Caso NULO, será efetuado o filtro da data atual da busca, com o horário: 23:59:59.<br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios:</h3>
                    <b>Token, report_type, agentes, filas</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno:</h3>
                    Será retornado um JSON com informações do período consultado, com a relação de identificação do
                    agente e data/total dos eventos.<br></br>

                    <h4>Sintético</h4>
                    <b>qtd_ses:</b> Quantidade totoal de sessões na data relacionada<br>
                    <b>tempo_ses:</b> Tempo total de sessões em segundos na data relacionada<br>
                    <b>login_ses:</b> Horário do primeiro login na data relacionada<br>
                    <b>logout_ses:</b> Horário do último logout na data relacionada<br></br>

                    <h4>Analítico</h4>
                    <b>datahora:</b> Data e horário do registro<br>
                    <b>agente:</b> Identificação do agente<br>
                    <b>fila:</b> Identificação da fila(s)<br>
                    <b>evento:</b> Evento deste registro (login ou logout)<br>
                    <b>tempo:</b> Duração da sessão em segundos (evento logout)
                </th>
            </tr>
        </table>
    </div>

    <!-- Função ccenterSurvey -->
    <div id='ccenterSurvey' class="form-container"><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class="input-label">Agentes: <input type="text" name="agente"><br></br>
                <span class="input-label">Filas: <input type="text" name="filas"><br></br>
                    <span class="input-label">Data Inicial: <input type="text" name="dataini"
                            placeholder="YYYY-MM-DD HH:I:S"><br></br>
                        <span class="input-label">Data Final: <input type="text" name="datafin"
                                placeholder="YYYY-MM-DD HH:I:S"><br></br>
                        </span>
                        <select name="metodo" class="invisible">
                            <option value="ccenterSurvey">ccenterSurvey</options>
                        </select>
                        <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id="ccenterSurvey">
        <table>

            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para consultar as informações detalhadas de avaliações de pesquisas do
                        contact center. Abaixo descrição dos parâmetros:</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>dataini:</b> Data e horário inicial do filtro para a busca. Formato deve ser YYYY-MM-DD HH:i:s.
                    Caso NULO, será efetuado o filtro da data atual da busca, com o horário: 00:00:00.<br>
                    <b>datafin:</b> Data e horário final do filtro para a busca. Formato deve ser YYYY-MM-DD HH:i:s.
                    Caso NULO, será efetuado o filtro da data atual da busca, com o horário: 23:59:59.<br>
                    <b>agentes:</b> Numeração dos agentes para processamento do relatório, deve ser enviado no formato
                    JSON. Ex: [600,611,605]. Consulte a função getAgent para consultar a numeração dos agentes
                    cadastrados.<br>
                    <b>filas:</b> Numeração/identificação das filas para processamento do relatório, deve ser enviado no
                    formato JSON. Ex: ["Ativo",900,901,910]. Consulte a função getQueue para consultar a numeração das
                    filas cadastradas.<br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3> Token</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno</h3>
                    <b>call_id:</b>Identificação única da avaliação.<br>
                    <b>call_date:</b>Data e horário do início pesquisa<br>
                    <b>customer:</b>Identificação do avaliador da pesquisa.<br>
                    <b>call_dst:</b> Identificação do destino (fila) em que a pesquisa se iniciou.<br>
                    <b>attendant:</b> Identificação do atendente que será avaliado.<br>
                    <b>pesquisa:</b>Identificação da pesquisa.<br>
                    <b>pesquisa_status:</b>Status da pesquisa, pode ser INCOMPLETA, COMPLETA ou NÃO AVALIADO.<br>
                    <b>avaliacoes:</b>JSON com informações das perguntas de avaliações da pesquisa.<br>
                    <b>avaliacoes.avaliacao:</b>Identificação da avaliação.<br>
                    <b>avaliacoes.nota:</b>Nota inserida pelo avaliador.<br>
                    <b>avaliacoes.descricao:</b>Descrição da nota para esta avaliação.<br>
                </th>
            </tr>
        </table>
    </div>

    <!-- Função cdrSearch -->
    <div id='cdrSearch' class="form-container"><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class="input-label">Data Inicial: <input type="text" name="dataini"
                    placeholder="YYYY-MM-DD HH:I:S"><br></br>
                <span class="input-label">Data Final: <input type="text" name="datafin"
                        placeholder="YYYY-MM-DD HH:I:S"><br></br>
                    <span class="input-label">Origem: <input type="text" name="origem"><br></br>
                        <span class="input-label">Destino: <input type="text" name="destino"><br></br>
                            <span class="input-label">Id ùnico: <input type="text" name="idunico"><br></br>
                                <select name="metodo" class="invisible">
                                    <option value="cdrSearch">cdrSearch</options>
                                </select>
                                <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id="cdrSearch">
        <table>

            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para efetuar uma busca dos registros de ligações do PBX. </b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>dataini:</b> Data e horário inicial do filtro para a busca. Formato deve ser YYYY-MM-DD HH:i:s.
                    Caso NULO, será efetuado o filtro da data atual da busca, com o horário: 00:00:00.<br>
                    <b>datafin:</b> Data e horário final do filtro para a busca. Formato deve ser YYYY-MM-DD HH:i:s.
                    Caso NULO, será efetuado o filtro da data atual da busca, com o horário: 23:59:59.<br>
                    <b>origem:</b> Número de origem do filtro para a busca (que originou a ligação). Pode ser NULO.<br>
                    <b>destino:</b> Número de destino do filtro para a busca (que recebeu a ligação). Pode ser NULO.<br>
                    <b>idunico:</b> ID do sistema ou cti para buscar um registro em específico.<br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b>Token</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno</h3>
                    <b>bilheteunico:</b> ID único da ligação (usado para buscar gravações).<br>
                    <b>Audio:</b>Nome do arquivo de gravação.<br>
                    <b>datahora:</b> Data e horário do ligação.<br>
                    <b>tipo: </b>Tipo da ligação, podem ser: Recebida, Efetuada, Interna , Discador e Click to call.<br>
                    <b>DDR:</b> Número DDR que a ligação foi recebida.<br>
                    <b>origem:</b> Número que originou a ligação.<br>
                    <b>destino:</b> Número de destino da ligação.<br>
                    <b>tronco: </b>Tronco/Operadora de entrada ou saída da ligação.<br>
                    <b>espera: </b>Tempo de espera até ser atendida a ligação, formato HH:i:s.<br>
                    <b>duracao:</b> Tempo total da ligação, formato HH:i:s.<br>
                    <b>status:</b> Status da ligação podem ser: COMPLETADA, NÃO ATENDIDA, TRANSFERENCIA, OCUPADO,
                    ABANDONO, MSG.OPERADORA, CHAMANDO, ATENDIDO, TELEFONE INDISPONIVEL, FILA VAZIA<br>
                    <b>idcti:</b> ID gerado pelo integrador para buscas.<br>
                </th>
            </tr>
        </table>
    </div>

    <!-- Função cdrTariff -->
    <div id='cdrTariff' class="form-container"><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class="input-label">Data Inicial: <input type="text" name="dataini"
                    placeholder="YYYY-MM-DD HH:I:S"><br></br>
                <span class="input-label">Data Final: <input type="text" name="datafin"
                        placeholder="YYYY-MM-DD HH:I:S"><br></br>
                    <select name="metodo" class="invisible">
                        <option value="cdrTariff">cdrTariff</options>
                    </select>
                    <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id="cdrTariff">
        <table>

            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para listar os registros de ligações de saída, para uso com
                        tarifadores.</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>Dataini:</b> Data e horário inicial para filtro por data, formato para envio de data e horário:
                    YYY-mm-dd HH:II:SS, caso não informado será usado data do dia da consulta, às 00:00hs.<br>
                    <b>Datafin:</b> Data e horário final para filtro por data, formato para envio de data e horário:
                    YYY-mm-dd HH:II:SS, caso não informado será usado data do dia da consulta, às 23:59hs.<br><br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b> Token</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno:</h3>
                    <b>datahorario:</b> Data e horário da ligação<br>
                    <b>ramalnum:</b> Número do ramal que efetuou a ligação.<br>
                    <b>ramalnome:</b> Nome do ramal que efetuou a ligação.<br>
                    <b>ramalcanal: </b>Canal utilizado pelo ramal para efetuar a ligação.<br>
                    <b>numero: </b>Número discado pelo ramal.<br>
                    <b>tronconome:</b> Nome do tronco por onde foi efetuada a ligação.<br>
                    <b>troncocanal: </b>Canal utilizado do tronco por onde foi efetuada a ligação.<br>
                    <b>statuscall: </b>Status da ligação.<br>
                    <b>durtotal: </b>Duração total da ligação em segundos.<br>
                    <b>durcall: </b>Duração da ligação em segundos, considerando somente o tempo após atendimento.<br>
                    <b>idcall: </b>ID único da ligação.<br>
                </th>
            </tr>

        </table>
    </div>

    <!-- Função cdrURA -->
    <div id='cdrURA' class="form-container"><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class="input-label">Data Inicial: <input type="text" name="dataini"
                    placeholder="YYYY-MM-DD HH:I:S"><br></br>
                <span class="input-label">Data Final: <input type="text" name="datafin"
                        placeholder="YYYY-MM-DD HH:I:S"><br></br>
                    <span class="input-label">Id URA: <input type="text" name="idura"><br></br>
                        <span class="input-label">Id ùnico: <input type="text" name="idunico"><br></br>
                            <select name="metodo" class="invisible">
                                <option value="cdrURA">cdrURA</options>
                            </select>
                            <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id="cdrURA">
        <table>

            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para consultar os registro de ligações que entraram nas URA's de
                        atendimento dinâmicas. Abaixo descrição dos parâmetros:</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>dataini:</b> Data e horário inicial do filtro para a busca. Formato deve ser YYYY-MM-DD HH:i:s.
                    Caso NULO, será efetuado o filtro da data atual da busca, com o horário: 00:00:00.<br>
                    <b>datafin:</b> Data e horário final do filtro para a busca. Formato deve ser YYYY-MM-DD HH:i:s.
                    Caso NULO, será efetuado o filtro da data atual da busca, com o horário: 23:59:59.<br>
                    <b>idura:</b> ID único da URA de atendimento para busca.<br>
                    <b>idunico:</b> ID do sistema ou cti para buscar um registro em específico.<br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios:</h3>
                    <b>Token</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno</h3>
                    <b>datahora: </b>Data e horário do último registro.<br>
                    <b>ura: </b>Identificação da URA de atendimento dinâmica.<br>
                    <b>bilheteunico:</b> ID único da ligação (usado para buscar gravações).<br>
                    <b>ddr: </b>Número DDR que a ligação foi recebida.<br>
                    <b>origem: </b>Identificação da origem que iniciou a URA de atendimento.<br>
                    <b>destino: </b>Identificação do destino que foi direcionado este evento, com baso nas configurações
                    de URA<br>
                    <b>tronco: </b>Identificação do tronco/operadora em que iniciou a ligação.<br>
                    <b>duracao: </b>Duração deste evento<br>
                    <b>fluxo: </b>Identificação do fluxo deste evento<br>
                    <b>palavra_origem: </b>Palavra/dígito informado pela origem solicitado pela URA de atendimento.<br>
                    <b>palavra_dest: </b>Palavra/dígito que coincide nas palavras configuradas da URA de atendimento<br>
                    <b>evento: </b>Identificação do envento detalhado deste registro antes de sair da URA de
                    atendimento.<br>
                    <b>status: </b>Status do último registro antes de sair da URA de atendimento<br>
                    <b>eventos: </b>Lista detalhada em JSON de todos os registros da ligação, enquanto a mesma estava na
                    URA de atendimento.<br>
                    <b>idcti: </b>ID gerado pelo integrador
                </th>
            </tr>
        </table>
    </div>

    <!-- Função endPause -->
    <div id='endPause' class='form-container'><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class='input-label'>Agente: <input type="text" name="agente"><br></br>
            </span>
            <select name="metodo" class='invisible'>
                <option value="endPause">endPause</options>
            </select>
            <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id='endPause'>
        <table>
            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para des-pausar um agente no sistema. Abaixo descrição dos
                        parâmetros:</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>agente: </b>Número do agente logado no sistema<br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b>Token, agente</b>
                </th>
            </tr>
        </table>
    </div>

    <!-- Função extenStatus -->
    <div id='extenStatus' class='form-container'><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class='input-label'>Tipo: <select name="tipo">
                    <option value="callcenter">Callcenter</options>
                    <option value="pbx">Pbx</options>
                    <option value="all">Todos</options>
                </select><br></br>
                <span class='input-label'>Ramal: <input type="text" name="ramal"><br></br>
                </span>
                <select name="metodo" class='invisible'>
                    <option value="extenStatus">extenStatus</options>
                </select>
                <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id='extenStatus'>
        <table>
            <tr>
                <th>
                    <h3>Descrição></h3>
                    <b>Esta função é utilizada para visualizar o status dos ramais do sistema.</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>tipo:</b> Tipo do(s) ramal(s) para visualização, os tipos disponíveis são: callcenter, pbx,
                    all(todos). Caso não informado serão visualizados todos os tipos de ramais. ramal: Número do ramal
                    para visualizar, caso não informado serão visualizados todos ramais.<br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b>Token</b>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno</h3>
                    <b>ramal:</b> Número do ramal<br>
                    <b>status: </b>Status do ramal, os status disponíveis são: disponivel, indisponivel, ocupado,
                    tocando, discando<br>
                    <b>sigame:</b> Número de desvio do ramal<br>
                    <b>ip:</b> Endereço IPv4 do dispositivo autenticado neste ramal<br>
                    <b>numero:</b> Número da ligação atual do ramal<br>
                    <b>tempo: </b>Tempo de ligação atual do ramal
                </th>
            </tr>
        </table>
    </div>

    <!-- Função getAgent -->
    <div id='getAgent' class='form-container'><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <select name="metodo" class='invisible'>
                <option value="getAgent">getAgent</options>
            </select>
            <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id='getAgent'>
        <table>
            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para listar os agentes de call center cadastrados na
                        empresa.</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>São retornados os dados</h3>
                    <b>Número do agente, Nome do agente, Senha MD5 e Fila Chave.</b>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b>Token </b>
                </th>
            </tr>

        </table>
    </div>

    <!-- Função getExtens -->
    <div id='getExtens' class='form-container'><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class='input-label'>Ramal: <input type="text" name="ramal"><br></br>
                <select name="metodo" class='invisible'>
                    <option value="getExtens">getExtens</options>
                </select>
                <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id='getExtens'>
        <table>
            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para listar os ramais cadastrados no sistema.</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>ramal:</b> Número do ramal para listar, caso não informado serão listados todos ramais.<br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b>Token</b>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno</h3><br>
                    <b>num:</b> Número do ramal<br>
                    <b>tipo:</b> Tipo do ramal, tipos disponíveis: callcenter e pbx<br>
                    <b>nome:</b> Nome do ramal
                </th>
            </tr>
        </table>
    </div>

    <!-- Função getPauses -->
    <div id='getPauses' class='form-container'><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <select name="metodo" class='invisible'>
                <option value="getPauses">getPauses</options>
            </select>
            <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id='getPauses'>
        <table>
            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para consultar as pausa cadastradas no sistema.</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b>Token</b>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno</h3>
                    <b>id: </b>ID único da pausa<br>
                    <b>pause: </b>Nome da pausa<br>
                    <b>tempo: </b>Tempo máximo em segundos que um agente pode permanecer na pausa ( 0 para
                    ilimitado)<br>
                    <b>filas: </b>Fila permitidas para utilizar esta pausa, agentes não logados nestas filas não poderão
                    utilizar a pausa (ALL para todas filas)
                </th>
            </tr>
        </table>
    </div>

    <!-- Função getQueue -->
    <div id='getQueue' class='form-container'><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class='input-label'>Fila: <input type="text" name="filas"><br></br>
            </span>
            <select name="metodo" class='invisible'>
                <option value="getQueue">getQueue</options>
            </select>
            <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id='getQueue'>
        <table>
            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para listar as filas cadastradas no sistema. </b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>fila:</b> Número da fila para listar, caso não informado serão listadas todas as filas.
                    Parâmetros obrigatórios: Token<br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno</h3>
                    <b>fila: </b>Número da fila<br>
                    <b>tipo: </b>Tipo da fila, os tipos disponíveis são: callcenter e pbx<br>
                    <b>nome: </b>Nome da fila
                </th>
            </tr>
        </table>
    </div>

    <!-- Função hangupCall -->
    <div id='hangupCall' class='form-container'><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class='input-label'>Agente: <input type="text" name="agente"><br></br>
                <span class='input-label'>Ramal: <input type="text" name="ramal"><br></br>
                </span>
                <select name="metodo" class='invisible'>
                    <option value="hangupCall">hangupCall</options>
                </select>
                <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id='hangupCall'>
        <table>
            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para desconectar uma ligação em curso de um ramal e/ou
                        agente.</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>ramal:</b> Número do ramal ou agente que a ligação será desconectada<br>
                    <b>agente:</b> Informar se o valor no parâmetro ramal é um agente, use o valor yes para agente. Caso
                    não informado será considerado um ramal.<br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3> Token, ramal
                </th>
            </tr>
        </table>
    </div>

    <!-- Função listTrunk -->
    <div id='listTrunk' class='form-container'><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <select name="metodo" class='invisible'>
                <option value="listTrunk">listTrunk</options>
            </select>
            <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id='listTrunk'>
        <table>
            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para listar os troncos criados no PBX.</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b>Token</b>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno</h3>
                    <b>nome:</b> Nome do tronco<br>
                    <b>tipo:</b> Tipo do tronco.<br>
                    <b>Canal:</b> Canal usado para discagem pelo tronco.
                </th>
            </tr>
        </table>
    </div>

    <!-- Função listURA -->
    <div id='listURA' class='form-container'><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class='input-label'>ID URA: <input type="text" name="idura"><br></br>
            </span>
            <select name="metodo">
                <option value="listURA">listURA</options>
            </select>
            <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id='listURA'>
        <table>
            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para listar as URAS dinâmicas (com sintetizado de voz) criados no
                        PBX.</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>idura:</b> ID único da URA para consulta.<br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b>Token</b>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno</h3>
                    <b>id: </b>ID único da URA<br>
                    <b>nome:</b> Nome da URA.<br>
                    <b>descricao: </b>Descrição da URA.<br>
                    <b>fluxos: </b>Fluxos de atendimento da URA, retorno em json de acordo com a quantidade de fluxos
                    cadastrados. Abaixo descrição dos campos do fluxo:<br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno fluxo</h3>
                    <b>fluxo:</b> Número único do fluxo.<br>
                    <b>descricao:</b> Descrição do fluxo.<br>
                    <b>audio:</b> Áudio iniciado no fluxo de atendimento, pode ser do tipo texto (text), ou arquivo
                    (file). Exemplo de retorno: tipo:texto/arquivo. Para áudio do tipo texto, é possível informar
                    variáveis dinâmicas para uso com a funcção startCallura, caso o texto esteja formatado para isto,
                    como {CTI_INFO1},{CTI_INFO2} e etc.<br>
                    <b>timeout:</b> Tempo limite que será aguardado o dígito ou áudio.<br>
                    <b>repetir:</b> Quantidade de repetição para tentativas inválidas (não encontradas).<br>
                    <b>destino_invalido:</b> Destino para entradas inválidas, pode ser um fluxo ou uma entrada no
                    PBX.<br>
                    <b>tipo_fluxo:</b> Tipo do fluxo, poder ser voz ou digito.<br>
                    <b>palavras:</b> Palavras/dígitos cadastrados para direcionar de acordo com as entradas informadas
                    pela origem, retorno em json de acordo com a quantidade de palavras cadastradas. Abaixo descrição
                    dos campos das palavras:<br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno palavras</h3>
                    <b>palavra:</b> Palavra ou dígito cadastrado, para mais de uma palavra é utlizado o caractere ','
                    (vírgula). O caractere '*' (asterisco), representa um armazenamento de informação somente.<br>
                    <b>destino:</b> Destino para palavras/dígitos que coincidem com as palavras cadastradas, pode ser um
                    fluxo ou uma entrada no PBX.
                </th>
            </tr>
        </table>
    </div>

    <!-- Função monitExten -->
    <div id='monitExten' class='form-container'><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class='input-label'>Ramal Origem: <input type="text" name="srcramal"><br></br>
                <span class='input-label'>Ramal Destino: <select name="dstramal">
                        <option value="agente">agente</options>
                        <option value="ramal">ramal</options>
                    </select><br></br>
                    <span class='input-label'>Agente: <input type="text" name="agente"><br></br>
                        <span class='input-label'>Tipo: <select name="tipo">
                        </span>
                        <option value="escuta">escuta</options>
                        <option value="monitor">monitor</options>
                        <option value="conf">conf</options>
                            </select><br></br>
                            <select name="metodo" class='invisible'>
                                <option value="monitExten">monitExten</options>
                            </select>
                            <input type="submit" value="Executar">
        </form><br></br>
    </div>
    <div id='monitExten'>
        <table>

            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para monitorar uma ligação em curso de um ramal e/ou agente.
                    </b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>srcramal:</b> Número do ramal que iniciará a monitoria<br>
                    <b>dstramal:</b> Número do ramal/agente que será monitorado<br>
                    <b>agente:</b> Informar se o valor no parâmetro dstramal é um agente. Use o valor yes para agente,
                    caso não informado será considerado um ramal.<br>
                    <b>tipo: </b>Tipo da monitoria, os tipos disponíveis são: escuta (monitoria silênciosa), monitor
                    (Monitoria em que o ramal monitorado consegue ouvir o áudio do ramal que iniciou a monitoria), conf
                    (Monitoria em que todos os canais escutam o áudio). Caso nenhum tipo seja informado será usado a
                    monitoria escuta.
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    Token, srcramal, dstramal
                </th>
            </tr>
        </table>
    </div>

    <!-- Função queueStatus -->
    <div id='queueStatus' class='form-container'><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class='input-label'>Filas: <input type="text" name="filas"><br></br>
                <select name="metodo" class='invisible'>
                    <option value="queueStatus">queueStatus</options>
                </select>
                <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id='queueStatus'>
        <table>
            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para listar as ligações em espera nas filas e seus status. </b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>fila:</b> Número da fila para listar, caso não informado serão listadas todas as filas.
                    Parâmetros obrigatórios: Token<br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Campos de retorno</h3>
                    <b>fila:</b> Número da fila<br>
                    <b>status: </b>Status da fila, os status disponíveis são: ok (fila vazia) e busy(ligações em espera
                    na fila)<br>
                    <b>espera:</b> Quantidade de ligações em espera na fila<br>
                    <b>numeros:</b> Lista de números em espera na fila (numero: identificação do número em espera,
                    tempo: tempo que o número está em espera na fila)
                </th>
            </tr>
        </table>
    </div>

    <!-- Função startCall -->
    <div id='startCall' class='form-container'><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class='input-label'>Tipo: <select name="tipo">
                    <option value="outbound">outbound</options>
                    <option value="clicktocall">clicktocall</options>
                </select><br></br>
                <span class='input-label'>Origem: <input type="text" name="origem"><br></br>
                    <span class='input-label'>Destino: <input type="text" name="destino"><br></br>
                        <span class='input-label'>Categoria: <input type="text" name="categoria"><br></br>
                        </span>
                        <select name="metodo" class='invisible'>
                            <option value="startCall">startCall</options>
                        </select>
                        <input type="submit" value="Executar">
        </form><br></br>
    </div>
    <div id='startCall'>
        <table>
            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para efetuar uma ligação pelo USCall. Existem duas forma de discagem,
                        outbound ou clicktocall que deve ser informado no parâmetro 'tipo'.</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>outbound:</b> É utilizado para efetuar uma ligação ativa por um ramal, no parâmetro origem deve
                    ser informado o número do ramal, e no parâmetro destino o número que será discado.<br>
                    <b>clicktocall:</b> É utilizado para efetuar uma discagem para um número e direcionar para um DDR
                    configurado no USCall. No parâmetro origem deve ser informado o número que será discado, e no
                    parâmetro destino o número de DDR que irá receber a ligação.<br>
                    <b>idcti:</b> ID gerado pelo integrador para buscas (opcional).<br>
                    <b>detect_mach:</b> Habilita opção para detectar atendimento eletrônico na chamada para
                    desconectá-la antes de direcionar para o ramal. Defina como 1 para habilitar e 0 para desabilitar
                    (ou vazio).<br>
                    <b>Para todos os tipos é necessário informar o parâmetro de categoria, que é utilizado para informar
                        a regra de discagem que será utilizada da empresa. O formato do número de discagem deve estar de
                        acordo com as regras cadastradas na categoria informada.</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b>Token, Tipo(outbound ou clicktocall), origem, destino, categoria</b>
                </th>
            </tr>
        </table>
    </div>

    <!-- Função startCallura -->
    <div id='startCallura' class='form-container'><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class='input-label'>ID URA: <input type="text" name="idura"><br></br>
                <span class='input-label'>Origem: <input type="text" name="origem"><br></br>
                    <span class='input-label'>Destino: <input type="text" name="destino"><br></br>
                        <span class='input-label'>Categoria: <input type="text" name="categoria"><br></br>
                        </span>
                        <select name="metodo" class='invisible'>
                            <option value="startCallura">startCallura</options>
                        </select>
                        <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id='startCallura'>
        <table>
            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para efetuar uma ligação pelo USCall. Existem duas forma de discagem,
                        outbound ou clicktocall que deve ser informado no parâmetro 'tipo'.</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>outbound:</b> É utilizado para efetuar uma ligação ativa por um ramal, no parâmetro origem deve
                    ser informado o número do ramal, e no parâmetro destino o número que será discado.<br>
                    <b>clicktocall:</b> É utilizado para efetuar uma discagem para um número e direcionar para um DDR
                    configurado no USCall. No parâmetro origem deve ser informado o número que será discado, e no
                    parâmetro destino o número de DDR que irá receber a ligação.<br>
                    <b>idcti:</b> ID gerado pelo integrador para buscas (opcional).<br>
                    <b>detect_mach:</b> Habilita opção para detectar atendimento eletrônico na chamada para
                    desconectá-la antes de direcionar para o ramal. Defina como 1 para habilitar e 0 para desabilitar
                    (ou vazio).<br>
                    <b>Para todos os tipos é necessário informar o parâmetro de categoria, que é utilizado para informar
                        a regra de discagem que será utilizada da empresa. O formato do número de discagem deve estar de
                        acordo com as regras cadastradas na categoria informada.</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b>Token, Tipo(outbound ou clicktocall), origem, destino, categoria</b>
                </th>
            </tr>
        </table>
    </div>

    <!-- Função startPause -->
    <div id='startPause' class='form-container'><br></br>
        <form method="post" id="ramal" name="form" action="union.php">
            <span class='input-label'>Agente: <input type="text" name="agente"><br></br>
                <span class='input-label'>ID Pausa: <input type="text" name="idpausa"><br></br>
                </span>
                <select name="metodo" class='invisible'>
                    <option value="startPause">startPause</options>
                </select>
                <input type="submit" value="Executar">
        </form><br></br>
    </div>

    <div id='startPause'>
        <table>
            <tr>
                <th>
                    <h3>Descrição</h3>
                    <b>Esta função é utilizada para pausar um agente no sistema. Abaixo descrição dos
                        parâmetros:</b><br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros</h3>
                    <b>agente:</b> Número do agente logado no sistema<br>
                    <b>idpausa:</b> ID da pausa que será efetuada no agente. Utilize a função getPauses para consultar o
                    id da pausa<br></br>
                </th>
            </tr>

            <tr>
                <th>
                    <h3>Parâmetros obrigatórios</h3>
                    <b>Token, agente, idpausa</b>
                </th>
            </tr>
    </div>

    </div>

</body>

</html>