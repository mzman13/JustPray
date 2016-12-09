<?php
	function open(){
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'justpray';
		$conn = new mysqli($host, $user, $pass, $db) or trigger_error('UNABLE TO CONNECT '.$conn->connect_error);

		return $conn;
	}

	function displayOldest(){
		$db = open();

		$sql = "SELECT prayer FROM prayers";
		$result = $db->query($sql);
		if($result){
			while($row = $result->fetch_row()){
				echo "<div><img src='/CS-1550-Project-1/img/fish2.jpg'>";
		    foreach($row as $cell){
		    	echo "$cell<br><br>";
		    }
		    echo "<div class='saveButtonDiv'><button class='saveButton'>SAVE</button></div></div>";
			}
		}
		else{
			trigger_error('query error'.$db->error);
			echo $db->error;
		}
		$db->close();
	}

	function displayNewest(){
		$db = open();

		$sql = "SELECT prayer FROM prayers ORDER BY time DESC";
		$result = $db->query($sql);
		if($result){
			while($row = $result->fetch_row()){
				echo "<div><img src='/CS-1550-Project-1/img/fish2.jpg'>";
		    foreach($row as $cell){
		    	echo "$cell<br><br>";
		    }
		    echo "<div class='saveButtonDiv'><button class='saveButton'>SAVE</button></div></div>";
			}
		}
		else{
			trigger_error('query error'.$db->error);
			echo $db->error;
		}
		$db->close();
	}
	
	if(isset($_POST['method'])){
		if($_POST["method"] == "displayOldest"){
			displayOldest();
		}
		else if($_POST["method"] == "displayNewest"){
			displayNewest();
		}
	}

?>
