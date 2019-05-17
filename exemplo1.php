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

//Busca Transferidos
$jan = busca(1, "Transferido", $ano); $fev = busca(2, "Transferido", $ano); $mar = busca(3, "Transferido", $ano); $abr = busca(4, "Transferido", $ano); $mai = busca(5, "Transferido", $ano); $jun = busca(6, "Transferido", $ano);
$jul = busca(7, "Transferido", $ano); $ago = busca(8, "Transferido", $ano); $set = busca(9, "Transferido", $ano); $out = busca(10, "Transferido", $ano); $nov = busca(11, "Transferido", $ano); $dez = busca(12, "Transferido", $ano); 
//Busca Óbitos
$jan1 = busca(1, "Óbito", $ano); $fev1 = busca(2, "Óbito", $ano); $mar1 = busca(3, "Óbito", $ano); $abr1 = busca(4, "Óbito", $ano); $mai1 = busca(5, "Óbito", $ano); $jun1 = busca(6, "Óbito", $ano);
$jul1 = busca(7, "Óbito", $ano); $ago1 = busca(8, "Óbito", $ano); $set1 = busca(9, "Óbito", $ano); $out1 = busca(10, "Óbito", $ano); $nov1 = busca(11, "Óbito", $ano); $dez1 = busca(12, "Óbito", $ano); 

$ydata=array($jan, $fev, $mar, $abr, $mai, $jun, $jul, $ago, $set, $out, $nov, $dez);
$y2data = array($jan1, $fev1, $mar1, $abr1, $mai1, $jun1, $jul1, $ago1, $set1, $out1, $nov1, $dez1);
 
// Create the graph and specify the scale for both Y-axis
$graph = new Graph(450,360);    
$graph->SetScale("textlin");
$graph->SetY2Scale("lin");
$graph->SetShadow();
 
// Adjust the margin
$graph->img->SetMargin(40,40,20,70);
$graph->xaxis->SetTickLabels($gDateLocale->GetShortMonth());
 
// Create the two linear plot
$lineplot=new LinePlot($ydata);
$lineplot2=new LinePlot($y2data);
 
// Add the plot to the graph
$graph->Add($lineplot);
$graph->AddY2($lineplot2);
$lineplot2->SetColor("black");
$lineplot2->SetWeight(2);
 
// Adjust the axis color
$graph->y2axis->SetColor("black");
$graph->yaxis->SetColor("blue");
 
$graph->title->Set("Demandas");
$graph->xaxis->title->Set($ano);
//$graph->yaxis->title->Set("Quantidade");
 
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
 
// Set the colors for the plots 
$lineplot->SetColor("blue");
$lineplot->SetWeight(2);
$lineplot2->SetColor("black");
$lineplot2->SetWeight(2);
 
// Set the legends for the plots
$lineplot->SetLegend("Transferidos");
$lineplot2->SetLegend("Óbitos");
 
// Adjust the legend position
$graph->legend->SetLayout(LEGEND_HOR);
$graph->legend->Pos(0.4,0.95,"center","bottom");
 
// Display the graph
$graph->Stroke();
?>