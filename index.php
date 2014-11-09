<?php
require_once "bootstrap.php";
require_once "Entity/Rank.php";
require_once "Entity/RankStyle.php";

$rankStyle = new RankStyle();
$rankStyle->data = 10;

$rank = new Rank;
$rank->rankStyle = $rankStyle;

$rankStyle->rank = $rank;

//this will create both entities in DB, here is an explanation:
//http://doctrine-orm.readthedocs.org/en/latest/reference/working-with-associations.html#transitive-persistence-cascade-operations
//in 2 words: cascade at least on creating new entities works only from owner to children, in our case - rankStyle is the owner

$entityManager->persist($rankStyle);
$entityManager->flush();

/**
this code will fail:
$entityManager->persist($rank);
$entityManager->flush();
 */
