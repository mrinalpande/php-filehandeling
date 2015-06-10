<?php	
  $file= fopen("story.txt", "r") ; 
  echo fread($file,filesize("story.txt"));			
  fclose($file);
  if(isset($_POST['submit']))
  {
      add();	
 }
	  function add()
	  {
		  $file=fopen("story.txt","a");
		   $comment=$_POST["comment"];  
		   fwrite($file,$comment);
			fclose($file);
		 
	  }
?>
<html>
<body>
 <br>
 <br>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">	
     Name: <input type="text" name="name"><br>
	 <br>
     E-mail: <input type="text" name="email">	<br>
	<br>
	 Website: <input type="text" name="website"><br>	
	<br>
	Add something: <textarea name="comment" rows="5" cols="40"></textarea><br>
	<br>
	<input type="submit" name="submit">
   </form>
   
   </body>
</html>
