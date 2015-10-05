<?php foreach ($data2 as $blog){ ?>
		<div class="content_item">
		  <h1><a href='article/blog/<?php echo $blog->category[0] ?>/<?php echo $blog->blog_id ?>'><?php echo $blog->title ?></a></h1>
      <?php foreach ($blog->category as $value) {
        echo "<div class='category'><a href='main/blog/{$value}'><h4>{$value}</h4></a></div>";
      } ?>
      <h4><?php echo $blog->time ?></h4>
		  <div class="content_text_left">
          <div class=" block-ellipsis">
              <p><?php echo $blog->content ?></p>
          </div>
          <a id="readmore" href='article/blog/<?php echo $blog->category[0] ?>/<?php echo $blog->blog_id ?>'>Pročitaj ceo članak</a>
      </div>
    </div><!--close content_item-->
    <div class="content_image_right">
		  <a href='article/blog/<?php echo $blog->category[0] ?>/<?php echo $blog->blog_id ?>'><img style=" border: 10px solid #1D1D1D;" alt="image" src="images/stairwell.jpg" /></a>
		</div><!--close content_image-->
		<br style="clear:both"/>  		   	
	<?php } ?>
      </div><!--close content-->   

      <div class="sidebar_container">  
      <?php foreach ($data1 as $news) { ?>		  
		    <div class="sidebar">
          <div class="sidebar_item">
            <h2><a href="article/main/<?php echo $news->category[0] ?>/<?php echo $news->news_id ?>"><?php echo $news->title ?></a></h2>
			<h4><?php echo $news->time ?></h4>
            <p><?php echo $news->content ?></p>
		      <a href="/article/main/<?php echo $news->category[0] ?>/<?php echo $news->news_id ?>">Read more</a>
           </div><!--close sidebar_item--> 
         </div><!--close sidebar-->     	
      <?php } ?>
      </div><!--close sidebar_container-->