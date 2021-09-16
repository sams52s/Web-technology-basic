<?php include 'Logged.php';  ?>

<?php session_start();
echo "Logged in as &nbsp".$_SESSION['uname']."<br>"."<br>" ?>

<fieldset>
	<legend>Write Your Post</legend>
     <textarea  placeholder="Write here..." name="textarea" rows="15" cols="50"> </textarea> </br><hr>
     <input type="submit" name="Post" value="Post">
     <input type="reset" name="Reset" value="Reset">

</fieldset>

<?php include'footer.php' ?>