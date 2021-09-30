

<form action="" method="post">
	<input type="hidden" name="blog[id]" value="<?=$blog['id'] ?? ''?>">
    <label for="blogheading">Heading</label><br>
     <textarea id="blogheading" name="blog[blogheading]" rows="3" cols="40"><?=$blog['blogheading'] ?? ''?></textarea><br>
    <label for="blogtext">Type your blog here:</label><br>
    <textarea id="blogtext" name="blog[blogtext]" rows="3" cols="40"><?=$blog['blogtext'] ?? ''?></textarea>
    <input type="submit" value="Save">
</form>