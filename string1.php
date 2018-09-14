<?php
echo 'this is a simple string';
echo 'You can also have embedded newlines in
strings this way as it is
okay to do';
// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"<br>';
// Outputs: You deleted C:\*\*?
echo 'You deleted C:\\*.*?';
// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?<br>';
// Outputs: This will not expand: \n a newline
echo nl2br("sThis will not expand: \n a newline<br>");
// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either';
?>