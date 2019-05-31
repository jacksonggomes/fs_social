<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
//quire_once ('jpgraph/jpgraph_line.php');
require_once ('jpgraph/jpgraph_bar.php');
include_once 'includes/functions.php';

function busca($mes, $status, $ano){
	$temp;
	$p = buscaMes($mes, $status, $ano);
	foreach ($p as $key) {
		$temp = $key[0];	
	}
	return $temp;
}

//ano atual
$ano = date("Y");

$jan = busca(1, "Internado", $ano); $fev = busca(2, "Internado", $ano); $mar = busca(3, "Internado", $ano); $abr = busca(4, "Internado", $ano); $mai = busca(5, "Internado", $ano); $jun = busca(6, "Internado", $ano);
$jul = busca(7, "Internado", $ano); $ago = busca(8, "Internado", $ano); $set = busca(9, "Internado", $ano); $out = busca(10, "Internado", $ano); $nov = busca(11, "Internado", $ano); $dez = busca(12, "Internado", $ano); 
//Busca Altas
$jan1 = busca(1, "Alta", $ano); $fev1 = busca(2, "Alta", $ano); $mar1 = busca(3, "Alta", $ano); $abr1 = busca(4, "Alta", $ano); $mai1 = busca(5, "Alta", $ano); $jun1 = busca(6, "Alta", $ano);
$jul1 = busca(7, "Alta", $ano); $ago1 = busca(8, "Alta", $ano); $set1 = busca(9, "Alta", $ano); $out1 = busca(10, "Alta", $ano); $nov1 = busca(11, "Alta", $ano); $dez1 = busca(12, "Alta", $ano); 

//Busca Transferidos
$jan2 = busca(1, "Transferido", $ano); $fev2 = busca(2, "Transferido", $ano); $mar2 = busca(3, "Transferido", $ano); $abr2 = busca(4, "Transferido", $ano); $mai2 = busca(5, "Transferido", $ano); $jun2 = busca(6, "Transferido", $ano); $jul2 = busca(7, "Transferido", $ano); $ago2 = busca(8, "Transferido", $ano); $set2 = busca(9, "Transferido", $ano); $out2 = busca(10, "Transferido", $ano); $nov2 = busca(11, "Transferido", $ano); $dez2 = busca(12, "Transferido", $ano); 
//Busca Óbitos
$jan3 = busca(1, "Óbito", $ano); $fev3 = busca(2, "Óbito", $ano); $mar3 = busca(3, "Óbito", $ano); $abr3 = busca(4, "Óbito", $ano); $mai3 = busca(5, "Óbito", $ano); $jun3 = busca(6, "Óbito", $ano); $jul3 = busca(7, "Óbito", $ano); $ago3 = busca(8, "Óbito", $ano); $set3 = busca(9, "Óbito", $ano); $out3 = busca(10, "Óbito", $ano); $nov3 = busca(11, "Óbito", $ano); $dez3 = busca(12, "Óbito", $ano); 

$ydata=array($jan, $fev, $mar, $abr, $mai, $jun, $jul, $ago, $set, $out, $nov, $dez);
$y2data = array($jan1, $fev1, $mar1, $abr1, $mai1, $jun1, $jul1, $ago1, $set1, $out1, $nov1, $dez1);

$datay1 = array($jan, $fev, $mar, $abr, $mai, $jun, $jul, $ago, $set, $out, $nov, $dez);
$datay2 = array($jan1, $fev1, $mar1, $abr1, $mai1, $jun1, $jul1, $ago1, $set1, $out1, $nov1, $dez1);
$datay3 = array($jan2, $fev2, $mar2, $abr2, $mai2, $jun2, $jul2, $ago2, $set2, $out2, $nov2, $dez2);
$datay4= array($jan3, $fev3, $mar3, $abr3, $mai3, $jun3, $jul3, $ago3, $set3, $out3, $nov3, $dez3);

$graph = new Graph(1000,360,'auto');   
$graph->graph_theme = null; 
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->img->SetMargin(40,30,40,70);
$graph->xaxis->SetTickLabels($gDateLocale->GetShortMonth());
 
$graph->xaxis->title->Set($ano);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
 
$graph->title->Set('Demandas HUGV');
$graph->title->SetFont(FF_FONT1,FS_BOLD);
 
// Create the bar plots
$bplot1 = new BarPlot($datay1);
$bplot1->SetFillColor("red");
$bplot2 = new BarPlot($datay2);
$bplot2->SetFillColor("darkgreen");
$bplot3 = new BarPlot($datay3);
$bplot3->SetFillColor("lightblue");
$bplot4 = new BarPlot($datay4);
$bplot4->SetFillColor("darkgray");

// Set the legends for the plots
$bplot1->SetLegend("Internados");
$bplot2->SetLegend("Altas");
$bplot3->SetLegend("Transferidos");
$bplot4->SetLegend("Óbitos");

$bplot1->SetShadow();
$bplot2->SetShadow();
$bplot3->SetShadow();
$bplot4->SetShadow();
 
// Adjust the legend position
$graph->legend->SetLayout(LEGEND_HOR);
$graph->legend->Pos(0.4,0.95,"center","bottom");
 
 
$gbarplot = new GroupBarPlot(array($bplot1,$bplot2,$bplot3,$bplot4));
$gbarplot->SetWidth(5);
$graph->Add($gbarplot);
 
$graph->Stroke();
?>