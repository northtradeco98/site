<?php


$result=mail("test@test.ru","form from site","from site was recieved form with these dates: name: $_POST[name] password: $_POST[password] sleep: $_POST[sleep]");
 
if ($result)  {
echo "<p>massage was sent successfuly!</p>";
}

else {
echo "<p>massege was NOT sent</p>";
}
?>