<head>

	<title>Yotta - Search results</title>
	<link rel="stylesheet" type="text/css" href="style1.css" />
		<script src="script1.js"></script>
	
<head>

<body>

	
	<div class="menu">
		<button onclick="rateit()" class="sort Rate">Ratings</button>
		<button onclick="populit()" class="sort Popul">Popularity</button>
		<button onclick="relevit()" class="sort Relev">Relevance</button>
		<a href="sub/choosesignup.html"><button class="sort sgn">Sign up</button></a>
		<a href="sub/chooselogin.html"><button class="sort lgn">Login</button></a>
		<button class="go" title="Search">🔍</button>
		<input class="sbox" id="sbox" type="text" name="type_search" onclick="emptyit()" value="Search here..">
	</div>
	
	<br>
	
	
		<?php
	
			$servername = "localhost";
			$username = "root";
			$password = "1234";
			$dbname = "codie";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			echo "<br><br>";
			
			//All fields start here
	
			if ($_POST['sub'] == 'Network system administration') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '1_________'";
				
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Network system administration
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Database administration') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '1_________'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Database administration
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
				
			} else if ($_POST['sub'] == 'Web administration') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '1_________'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Web administration
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Telecommunication administration') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '1_________'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Telecommunication administration
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Desktop administration') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '1_________'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Desktop administration
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Workforce tracking') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_1________'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Workforce tracking
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Fleet tracking') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_1________'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Fleet tracking
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Asset tracking') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_1________'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Asset tracking
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Data ingestion') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_1________'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Data ingestion
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Device management') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_1________'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Device management
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Cognitive centre of excellence') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '__1_______'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Cognitive centre of excellence
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Machine learning') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '__1_______'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Machine learning
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Natural language processing') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '__1_______'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Natural language processing
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Computer vision') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '__1_______'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Computer vision
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Robotic process automation') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '__1_______'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Robotic process automation
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Robotics and drones') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '__1_______'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Robotics and drones
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Custom web development') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '___1______'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Custom web development
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Web portal development') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '___1______'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Web portal development
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Mobile friendly website development') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '___1______'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Mobile friendly website development
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'E commerce solution') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '___1______'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>E commerce solution
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Web open source integration and customization') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '___1______'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Web open source integration and customization
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Native app development') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '____1_____'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Native app development
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Hybrid app development') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '____1_____'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Hybrid app development
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Web app development') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '____1_____'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Web app development
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Broadband') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_____1____'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Broadband
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Mobile internet') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_____1____'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Mobile internet
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Virtual private network') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_____1____'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Virtual private network
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Local area network') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_____1____'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Local area network
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Backup and recovery') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_____1____'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Backup and recovery
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Descriptive analysis') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '______1___'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Descriptive analysis
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Predictive analysis') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '______1___'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Predictive analysis
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Prescriptive analysis') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '______1___'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Prescriptive analysis
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Self serving knowledge based') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_______1__'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Self serving knowledge based
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Social media support') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_______1__'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Social media support
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Live chat support') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_______1__'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Live chat support
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Email support') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_______1__'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Email support
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Phone support') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_______1__'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Phone support
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Virtual identity graphic designing') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '________1_'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Virtual identity graphic designing
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Marketing and advertising') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '________1_'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Marketing and advertising
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'User interface') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '________1_'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>User interface
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Publication graphic designing') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '________1_'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Publication graphic designing
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Motion graphic designing') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '________1_'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Motion graphic designing
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Environmental graphic designing') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '________1_'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Environmental graphic designing
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Strategy consultancy') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_________1'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Strategy consultancy
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Management consultancy') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_________1'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Management consultancy
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Operations consultancy') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_________1'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Operations consultancy
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Financial advisory consultancy') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_________1'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Financial advisory consultancy
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Human resource consultancy') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_________1'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Human resource consultancy
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			} else if ($_POST['sub'] == 'Digital consultancy') {
				
				$sql = "SELECT * FROM company WHERE types LIKE '_________1'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						$currRating=$row["rate"]/$row["rateno"];
						$ratingrounded=round($currRating,1);
						echo "<div class=\"block\">
						
							<h1 class=\"name\">".$row["name"]."</h1>
							
							<h5 class=\"subtype\"><span class=\"rating\">".number_format($ratingrounded, 1, '.', '')."</span>"."<span class=\"stars\">";
								for($x=1;$x<$currRating;$x++){
									echo("★");
								}
								if(fmod($ratingrounded, 1) !== 0.00){
									echo("<span style=\"opacity:0.5\">★</span>");
								} else {
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								for($y=$x;$y<5;$y++){
									echo("<span style=\"opacity:0.5\">✩</span>");
								}
								echo "</span><br>Digital consultancy
							</h5>
							
							<img height=100px width=100px class=\"logo\" src=\"logos/".$row["logo"]."\">
							
							<p><br><strong>Contact Number:</strong> ".$row["cno"]."<br><br>"."<strong>Email:</strong> ".$row["email"]."<br><br>"."<strong>Address:</strong> ".$row["address"]."<br><br><strong>Detail:</strong><br><br>".$row["descr"]."</p>
							
						</div>";
					}
				} else {
					echo "0 results";
				}
				
				
			}
			
			mysqli_close($conn);
	?>

</body>