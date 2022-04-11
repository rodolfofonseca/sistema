<?php
date_default_timezone_set('America/Sao_Paulo');
/**
 * Método responsável por traduzir o dia em que estamos de forma que retorna ao usuário o dia em
 * formato brazileiro
 * @return Domingo
 */
function dia_semana()
{
    $dia = (string)date('D');
    if ($dia == "Sat") {
        return "Sábado";
    }
    if ($dia == "Sun") {
        return "Domingo";
    }
    if ($dia == "Mon") {
        return "Segunda";
    }
    if ($dia == "Tue") {
        return "Terça";
    }
    if ($dia == "Wed") {
        return "Quarta";
    }
    if ($dia == "Thu") {
        return "Quinta";
    }
    if ($dia == "Fri") {
        return "Sexta";
    }
}
/**
 * Método responsável por pegar a data em inglês e traduzir ela para português.
 * @return Setembro
 */
function mes_ano()
{
    $mes = (int)date('m');
    if ($mes == 1) {
        return "Janeiro";
    }
    if ($mes == 2) {
        return "Fevereiro";
    }
    if ($mes == 3) {
        return "Março";
    }
    if ($mes == 4) {
        return "Abril";
    }
    if ($mes == 5) {
        return "Maio";
    }
    if ($mes == 6) {
        return "Junho";
    }
    if ($mes == 7) {
        return "Julho";
    }
    if ($mes == 8) {
        return "Agosto";
    }
    if ($mes == 9) {
        return "Setembro";
    }
    if ($mes == 10) {
        return "Outubro";
    }
    if ($mes == 11) {
        return "Novembro";
    }
    if ($mes == 12) {
        return "Dezembro";
    }

}
/**
 * Método responsável por retornar o dia em que estamos;
 * @return 12
 */
function dia(){
    return date('d');
}
/**
 * Método que retorna o ano completo
 * @return 2022
 */
function ano_completo(){
    return date('Y');
}
/**
 * Retorna o ano com 2 digitos
 * @return 22
 */
function ano(){
    return date('y');
}
/**
 * Retorna o mês do ano com 2 números.
 * @return 12
 */
function mes(){
    return date('m');
}
?>