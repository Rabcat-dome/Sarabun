<?php

function get_pdf($myLink){
	echo "<a href='".base_url()."pdf/".$myLink."'><img border=0 src='".base_url()."/asset/image/pdf.png'></a>";
}

function get_linka($bId,$var){
	echo "<a href='bookinfo/".$bId."'>".$var."</a>";
}

function  submit(){
echo "";
}

?>