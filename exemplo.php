<?php 
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');
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

$yano=array($jan, $fev, $mar, $abr, $mai, $jun, $jul, $ago, $set, $out, $nov, $dez);
$y2ano = array($jan1, $fev1, $mar1, $abr1, $mai1, $jun1, $jul1, $ago1, $set1, $out1, $nov1, $dez1);
 
// Create the graph and specify the scale for both Y-axis
$graph = new Graph(450,360);    
$graph->SetScale("textlin");
$graph->SetY2Scale("lin");
$graph->SetShadow();
 
// Adjust the margin
$graph->img->SetMargin(40,40,20,70);
 
// Create the two linear plot
$lineplot=new LinePlot($yano);
$lineplot2=new LinePlot($y2ano);
 
// Add the plot to the graph
$graph->Add($lineplot);
$graph->AddY2($lineplot2);
$lineplot2->SetColor("green");
$lineplot2->SetWeight(2);
 
// Adjust the axis color
$graph->y2axis->SetColor("green");
$graph->yaxis->SetColor("red");
 
$graph->title->Set("Demandas");
$graph->xaxis->title->Set("Meses");
//$graph->yaxis->title->Set("Quantidade");
 
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
 
// Set the colors for the plots 
$lineplot->SetColor("red");
$lineplot->SetWeight(2);
$lineplot2->SetColor("green");
$lineplot2->SetWeight(2);
 
// Set the legends for the plots
$lineplot->SetLegend("Internados");
$lineplot2->SetLegend("Altas");
 
// Adjust the legend position
$graph->legend->SetLayout(LEGEND_HOR);
$graph->legend->Pos(0.4,0.95,"center","bottom");
 
// Display the graph
$graph->Stroke();
?>