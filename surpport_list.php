
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>App & Me</title>
</head>
<link rel="stylesheet" href="css/surpport_list.css">
<body>
	<header>
		<img src="img/appandme_web_logo.png" alt="app&me" onclick="location.href='main.html'">
		<span style="margin-left: 40%; color: #FF6384;" onclick="location.href='about.html'">ABOUT</span>
		<span style="margin-left: 1%;" onclick="location.href='members_8th.html'">부원소개</span>
		<span style="margin-left: 1%;" onclick="location.href='submit.php'">지원하기</span>
		<span style="margin-left: 1%;" onclick="location.href='qna.html'">Q&A</span>
	</header>
	<div class="title">
		<p style="font-weight: bold; font-size: 2.5em; margin-bottom: 1%;">지원현황</p>
		<hr>
		<table class="applicant_list">
			<tr>
				<td>
				<?php
  		include './db_conn.php';
   		$sql = "SELECT name, student_id, five, motive, phone FROM submit";
  		$result = mysqli_query($conn, $sql);
   		if (mysqli_num_rows($result) > 0) {
    	while($row = mysqli_fetch_assoc($result)) {
		?>
					<div class="applicant" style="width: 30%;">
						<span id="hakbun"><?php echo $row["student_id"];?></span>
						<span id="name"><?php echo $row["name"];?></span>
						<p id="phone"><?php echo $row["phone"];?></p>
						<p id="fiveme"><?php echo $row["five"];?> </p>
						<hr>
						<textarea id="because" disabled><?php echo $row["motive"];?></textarea>
					</div>	
					<?php
		}
   		}else{
    	echo "아직 지원자가 없습니다.";
   		}
   		mysqli_close($conn);
		?>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
