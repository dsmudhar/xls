<form action="upload_process.php" method="post" enctype="multipart/form-data">
	<input type="text" name="title" /><br/>
	<select name="orig_lang"><br/>
		  <option value="en" selected>English</option>
		  <option value="pa">Punjabi</option>
		  <option value="hi">Hindi</option>
		  <option value="ta">Tamil</option>
	</select>
	<input type="file"  name="videoFile" id="videoFile" /><br/>
	<button type="submit">Upload</button>
</form>