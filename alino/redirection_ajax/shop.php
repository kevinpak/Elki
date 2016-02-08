<?php include('../databases/session_start.php'); ?>
<?php 
if((!empty($_POST['id_p'])) || (!empty($_POST['table_p']))){
	$id_p = $_POST['id_p'];
	$table_p = $_POST['table_p'];
	
	if ($id_p) {
		if ($table_p) {
			unset($_SESSION[$table_p][$id_p]);
			echo "success";
			exit();
		}else{
			echo "nonon nono";
			exit();
		}
	}
}

//Opperation plus moin quatite prodoct
if((!empty($_POST['id_op'])) || (!empty($_POST['opper'])) || (!empty($_POST['tablep']))){
	$id_op = $_POST['id_op'];
	$opper = $_POST['opper'];
	$tablep = $_POST['tablep'];

	if($opper=='plus'){
		$_SESSION[$tablep][$id_op]++;
		echo "success";
		exit();
	}
	if($opper=='moin'){

		if($_SESSION[$tablep][$id_op] > 1){
			$_SESSION[$tablep][$id_op]--;
			echo "success";
			exit();
		}else{
			unset($_SESSION[$tablep][$id_op]);
			echo "success";
			exit();
		}
		
	}
}



if((!empty($_POST['id_pq'])) || (!empty($_POST['table_pq'])) || (!empty($_POST['qt'])) ){
	$id_pq = $_POST['id_pq'];
	$table_pq = $_POST['table_pq'];
	$qt = $_POST['qt'];
	
	if ($id_pq) {
		if ($table_pq) {
			if ($qt == 0){
				unset($_SESSION[$table_pq][$id_pq]);
			echo "success";
			exit();
			}else{
				$_SESSION[$table_pq][$id_pq]=$qt;
				echo "success";
				exit();
			}
		}
	}
}

?>