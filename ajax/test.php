<?php
include("process_test.php");
?>

<script>
document.write("<?php echo $message."<br/>".$bone; ?>");
</script>


<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="submit" name="send_value" value="send request"/>

</form>


