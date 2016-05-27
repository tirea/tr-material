<?php
	$tab_name = "events";
	ob_start();
	include('../header.php');
        if($navi == 1) {
        //Website in Na'vi
?>
		
					<h1>Ayftxozä aZusa'u</h1>
					
					
					
					
					<br>
					<br>
<?php
        } else {
        //Website in English
?>		
					<h1>Upcoming Events</h1>




					<br>
					<br>	
<?php
	}	
	include('../footer.php');
	ob_flush();
?>	
		
	
