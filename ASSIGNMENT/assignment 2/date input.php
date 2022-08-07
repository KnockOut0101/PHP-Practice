<?php
$n= date('d-m-Y', strtotime($_POST['date1']));
$m= date('d-m-Y', strtotime($_POST['date2']));
$l= $m->l($n);
echo "age is $l";
?>