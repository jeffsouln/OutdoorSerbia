<?php foreach ($data1 as $news){ ?>
		<div class="content_item">
		  <h1><a href='article/main/<?php echo $news->category[0] ?>/<?php echo $news->news_id ?>'><?php echo $news->title ?></a></h1>
      <?php foreach ($news->category as $value) {
        echo "<div class='category'><a href='main/main/{$value}'><h4>{$value}</h4></a></div>";
      } ?>
		  <div class="content_text_left">
          <p><?php echo $news->subtitle ?></p><a href='article/main/<?php echo $news->category[0] ?>/<?php echo $news->news_id ?>'>Pročitaj ceo članak</a>
      	</div>
        </div><!--close content_item-->
        <div class="content_image_right">
		  <a href='article/main/<?php echo $news->category[0] ?>/<?php echo $news->news_id ?>'><img style=" border: 10px solid #1D1D1D;" alt="image" src="images/stairwell.jpg" /></a>
		</div><!--close content_image-->
		<br style="clear:both"/>  		   	
	<?php } ?>
      </div><!--close content-->   

      <div class="sidebar_container">  
      <?php foreach ($data2 as $blog) { ?>		  
		    <div class="sidebar">
          <div class="sidebar_item">
            <h2><a href="article/blog/<?php echo $blog->category[0] ?>/<?php echo $blog->blog_id ?>"><?php echo $blog->title ?></a></h2>
			<h4><?php echo $blog->time ?></h4>
            <p><?php echo $blog->content ?></p>
		      <a href="article/blog/<?php echo $blog->category[0] ?>/<?php echo $blog->blog_id ?>">Pročitaj ceo članak</a>
           </div><!--close sidebar_item--> 
         </div><!--close sidebar-->     	
      <?php } ?>
      </div><!--close sidebar_container-->
