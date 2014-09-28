<?php
/*
 * This work is hereby released into the Public Domain.
 * To view a copy of the public domain dedication,
 * visit http://creativecommons.org/licenses/publicdomain/ or send a letter to
 * Creative Commons, 559 Nathan Abbott Way, Stanford, California 94305, USA.
 *
 */

require_once "../LinePlot.class.php";

$graph = new Graph(640, 400);

// Set title
$graph->title->set('ss3文泉驛正黑體');
//$graph->title->setFont(new Tuffy(12));
// 選定 wt003.ttf 作為中文字型
$graph->title->setFont(new wqy_zenhei(12));
$graph->title->setColor(new DarkRed);

$plot = new LinePlot(array(5, 3, 4, 7, 6, 5, 8, 4, 7));

// Change plot size and position
$plot->setSize(0.76, 1);
$plot->setCenter(0.38, 0.5);

$plot->setPadding(30, 15, 38, 25);
$plot->setColor(new Orange());
$plot->setFillColor(new LightOrange(80));

// Change grid style
$plot->grid->setType(Line::DASHED);

// Add customized  marks
$plot->mark->setType(Mark::STAR);
$plot->mark->setFill(new MidRed);
$plot->mark->setSize(6);

// Change legend
$plot->legend->setPosition(1, 0.5);
$plot->legend->setAlign(Legend::LEFT);
$plot->legend->shadow->smooth(TRUE);

// 設定中文對應的字型
//$plot->legend->setTextFont(new Tuffy(10));
$plot->legend->setTextFont(new wqy_zenhei(10));

$plot->legend->add($plot, 'line來自文泉驛正黑體', Legend::MARK);

$graph->add($plot);
$graph->draw();
?>