<?php
session_start();
  if(!isset($_SESSION['usu_id']))
  {
    header("location: ../index.php");
    exit;
  }

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("class/tcpdf/tcpdf.php");
include_once("class/PHPJasperXML.inc.php");
include_once ("setting.php");

if(isset($_GET['btn-imprimir'])):
  $interna_id = $_GET['nid'];
endif;



$PHPJasperXML = new PHPJasperXML();
//$PHPJasperXML->debugsql=true;
$PHPJasperXML->arrayParameter=array("parameter1"=>$interna_id);
$PHPJasperXML->load_xml_file("fsocial.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file


?>
