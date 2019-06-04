<?php
$file=$_POST['configdata'];
//print ("About to show this configuration file:" . $file);
$str = filter_var($file, FILTER_SANITIZE_STRING);
echo htmlspecialchars("About to show this configuration file:" . $str);
//echo "<p></p>";
$results = system("type $str");

//print "data is " . $results;
$newstr = filter_var($results, FILTER_SANITIZE_STRING);
echo htmlspecialchars("data is " . $newstr);
?>