     <div class="content_item">
        <h2>Postavljanje novog bloga</h2>
        <form class="form" method="post" action="publishblog.php" id="blogForm">
          <label>Naslov:</label><br><input type="text" name="tb_title"><br>
          <label>Kategorija : </label><select name="sel_category">
          								<?php 
          									$blogCat =  Category::getAll();
          										foreach ($blogCat as $value) {
												echo "<option value='{$value->category_id}'>".$value->name."</option>";
          									} 
          								?>
      								</select><br><br>	
          <label>Tekst bloga:</label><br><textarea rows="20" cols="90" name="ta_blog" form="blogForm"></textarea><br>	
          <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
          <input id="btn" type="submit" value="Postavi Blog" name="btn_submit">
        </form>

      </div><!--close content_item-->
        <br style="clear:both"/> 
      </div><!--close content-->    