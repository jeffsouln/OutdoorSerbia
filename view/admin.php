      <div class="content_item">
        <h2>Dobrodošli na admin stranu.</h2>
        <div>
        	<form class="form" method="post" action="add_cat.php">
         	 <label>Naziv nove kategorije:</label><br><input type="text" name="tb_new_cat"><br>
         	 <input id="btn" type="submit" value="Dodaj" name="btn_submit">
        	</form>
        </div>
      </div><!--close content_item-->
        <br style="clear:both"/> 
      </div><!--close content-->    


      <div class="sidebar_container">  
      <?php foreach ($data1 as $news) { ?>      
        <div class="sidebar">
          <div class="sidebar_item">
            <h2><a href="/article/main/<?php echo $news->category[0] ?>/<?php echo $news->news_id ?>"><?php echo $news->title ?></a></h2>
      <h4><?php echo $news->time ?></h4>
            <p><?php echo $news->content ?></p>
          <a href="/article/main/<?php echo $news->category[0] ?>/<?php echo $news->news_id ?>">Read more</a>
           </div><!--close sidebar_item--> 
         </div><!--close sidebar-->       
      <?php } ?>
      </div><!--close sidebar_container-->
	