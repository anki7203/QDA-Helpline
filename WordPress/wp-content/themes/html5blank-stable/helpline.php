<?php
$conn = new mysqli('localhost', '******', '******', '******');

if(isset($_GET['video'])){
	$video = $_GET['video'];
	if(strpos($video, 'provalis') !== false){
		$vidPage = file_get_contents($video);
		$pageParts = explode('<object class="fs-flash-video" data="', $vidPage);
		$pageParts = explode('"', $pageParts[1]);
		$vidSrc = $pageParts[0];
		echo '<object class="flash-player" data="'.$vidSrc.'"></object>';
	}
	if(strpos($video, 'youtube') !== false){
		$vidId = explode('v=', $video)[1];
		echo '<iframe class="yt-frame" src="https://www.youtube.com/embed/'.$vidId.'"></iframe>';
	}
}

if(isset($_GET['recordQuiz'])){
	$infoArr = explode('|', $_GET['recordQuiz']);
	$user = $infoArr[0];
	$quiz = $infoArr[1];
	$score = $infoArr[2];
	$total = $infoArr[3];


	$result = $conn->query("SELECT quiz FROM quizzes WHERE user=$user AND quiz=$quiz");
	if($result->num_rows != 0){
		$conn->query("UPDATE quizzes SET user=$user, quiz=$quiz, score=$score, total=$total WHERE user=$user AND quiz=$quiz");
	}else{
		$conn->query("INSERT INTO quizzes (user, quiz, score, total)VALUES ($user, $quiz, $score, $total)");
	}
}

if(isset($_GET['getQuiz'])){
	$infoArr = explode('|', $_GET['getQuiz']);
	$user = $infoArr[0];
	$quiz = $infoArr[1];

	$result = $conn->query("SELECT * FROM quizzes WHERE user=$user AND quiz=$quiz");

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	$percent = ($row["score"]/$row["total"])*100;
	        echo "Previous Score was ".$row["score"]." of ".$row["total"]." points, (".$percent."%)";
	    }
	}
}

$conn->close();
?>