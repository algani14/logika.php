<?php
echo "This is a simple string <br>";

echo "You an also have embedded newlines in string this way as it is okay to do <br>";

//output Arnold once said "I'll Be Back";
echo 'Arnold once said "I\'ll be Back"<br>';

//output: You deleted C:\*.*
echo 'You Deleted C:\*.*? <br>';

//output: You deleted C:\*.*
echo 'You Deleted C:\\*.*?<br>';

//output: This will not expand: \n a newline
echo nl2br("This will not expand: \n a newline <br>");

//output: Variable do not $expand $either
echo "Variable do not $expand $either";
?>