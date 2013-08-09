<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Untitled Document
	</title>
</head>
<body>

<?php

/*
		Output an array of sentences

		START
			Declare String sentences[] = "There once was a turkey named Bob.",
				"Happy trucks drive through sad woods."
		
			sentences.push("The chicken started crossing the road, but didn't make it.")
			sentences.push("Roger did it.")
		
			for i = 0 to sentences.length
				Output sentences[i]
			end for
		
		END
*/

$sentences = array("There once was a turkey named Bob.",
	"Happy trucks drive through sad woods.");

array_push($sentences, "The chicken started crossing the road, but didn't make it.");
$sentences[] = "Roger did it.";

for($i = 0; $i < count($sentences);++$i)
{
	echo $sentences[$i]."<br />";
}
?>

</body>
</html>