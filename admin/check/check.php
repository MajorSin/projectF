<?php
include("../../connection.php");

$week_start = "16-11-2020";
$week_end = "25-11-2020";

$sth = $dbh->prepare("SELECT * from sollicitaties WHERE SolliCheck='False' AND DATE(datum, '%d-%m-%Y') BETWEEN '".$week_start."' AND '".$week_end."'");
$sth->execute();

$result = $sth->fetchAll();
?>