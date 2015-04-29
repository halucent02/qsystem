<html>
	<head>
		
	</head>
	<body>
		<?php 
		foreach($pendingdata as $pending){
			echo "<ul>";
			echo "<li>".$pending['numberque']."</li>";
			echo "<li>".$pending['salutation']."</li>";
			echo "<li>".$pending['firstname']."</li>";
			echo "<li>".$pending['lastname']."</li>";
			echo "<li>".$pending['status']."</li>";
			echo "</ul>";
			
		}
		
		?>
	</body>
</html>