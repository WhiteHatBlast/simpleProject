<html>
<head><title>test ajax profssional</title>
<script>
function saveResult(sMessage)
{
var divStatus = document.getElementById("divStatus");
divStatus.innerHTML = "registration success" + sMessage;

}

</script>
</head>
<body>
<frameset rows="100%,0" frameborder="0">
<frame name="displayFrame" src="entry.htm" noresize="noresize" />
<frame name="hiddenFrame" src="about:blank" noresize="noresize" />
</frameset>

<form action="process_register.php" method="POST" target="hiddenFrame">
Username :<input type="text" name="username" value=""/><br/>
Password :<input type="password" name="password" value=""/><br/>
<input type="submit" name="register_now" value="Register"/>

</form>
<div id="divStatus"></div>
</body>

</html>