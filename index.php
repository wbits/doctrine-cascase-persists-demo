<?php
require_once "bootstrap.php";
require_once "Entity/Rank.php";
require_once "Entity/RankStyle.php";

$rankStyle = new RankStyle();
$rankStyle->data = 10;

$rank = new Rank;
$rank->rankStyle = $rankStyle;

$rankStyle->rank = $rank;

$entityManager->persist($rankStyle);

$entityManager->flush();
