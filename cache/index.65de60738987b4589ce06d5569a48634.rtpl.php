<?php if(!class_exists('raintpl')){exit;}?><?php if( $pass == 1234 ){ ?>
<h1>Bonjour <?php echo $name;?></h1>
<?php }elseif( $pass == 123456 ){ ?>
<h1>Bonjour <?php echo $name;?> DAOU</h1>
<?php } ?>

<?php $counter1=-1; if( !is_null($array) && is_array($array) && sizeof($array) ) foreach( $array as $key1 => $value1 ){ $counter1++; ?>
	<?php echo $key1;?> - <?php echo $value1;?>
	<br>
<?php } ?>