     <div class="content_item">
        <h2>Postavljanje nove vesti</h2>
        <form class="form" method="post" action="publishnews.php" id="newsForm">
          <label>Naslov:</label><br><input type="text" name="tb_title"><br>
          <label>Podnaslov:</label><br><textarea rows="5" cols="90" name="ta_sub_title" form="newsForm"></textarea><br><br>
          <label>Kategorija : </label><select name="sel_category">
          								<?php 
          									$newsCat =  Category::getAll();
          										foreach ($newsCat as $value) {
												echo "<option value='{$value->category_id}'>".$value->name."</option>";
          									} 
          								?>
      								</select><br><br>	
          <label>Tekst vesti:</label><br><textarea rows="20" cols="90" name="ta_news" form="newsForm"></textarea><br>	
          <input id="btn" type="submit" value="Postavi vest" name="btn_submit">
        </form>

      </div><!--close content_item-->
        <br style="clear:both"/> 
      </div><!--close content-->    
