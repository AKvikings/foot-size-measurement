<?php
session_start();
echo"
<html>
<body>
	NAME <input type=text>
    ADDRESS <input type=text>
    PHONE NUMBER <input type=text><br>
</body>

</html>";
echo $_SESSION['exe'];
?>