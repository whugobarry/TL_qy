<?php 
	$data = exec("./update.sh");
	if($data){
    	echo 'ok';
    }else{
    	echo 'fail';
    }
?>