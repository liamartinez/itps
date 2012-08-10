<?php 
// rotate images randomly but w/o dups on same page - format: 
// <img src='rotate.php?i=0'> - rotate image #0 - use 'i=1' 
// for second, etc 
// (c) 2004 David Pankhurst - use freely, but please leave in my credit 
$images=array( // list of files to rotate - add as needed 
 "wintershow2011_07.jpg", 
 "wintershow2011_09.jpg", 
 "wintershow2011_11.jpg", 
 "wintershow2011_15.jpg" ); 
$total=count($images); 
$secondsFixed=10; // seconds to keep list the same 
$seedValue=(int)(time()/$secondsFixed); 
srand($seedValue); 
for ($i=0;$i<$total;++$i) // shuffle list 'randomly' 
{ 
 $r=rand(0,$total-1); 
 $temp =$images[$i]; 
 $images[$i]=$images[$r]; 
 $images[$r]=$temp; 
} 
$index=(int)($_GET['i']); // image index passed in 
$i=$index%$total; // make sure index always in bounds 
$file=$images[$i]; 
header("Location: $file"); // and pass file reference back 
?>