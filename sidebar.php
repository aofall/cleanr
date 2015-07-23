<div id="footer" class="border">
            <div class="node">
				<h3>页面/Pages</h3>
				<ul>
				<li><a href="index.php/about.html">关于</a></li>
				<li><a href="index.php/friends.html">友情链接</a></li>
			</div>
			<div class="node">
				<h3>评论/Comments</h3>
				<ul>
					<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
            <?php while($comments->next()): ?>
                <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>:<?php $comments->excerpt(5, '…'); ?></li>
            <?php endwhile; ?>
				</ul>
			</div>
			<div class="node"> 	 	 	   
				<h3>归档/Archive</h3>
				<ul>
					<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
				</ul>
			</div>
			<div class="node last">
				<h3>友链/Links</h3>
				<ul>
				<!--请修改sidebar.php中从第23行开始
				这个主题没有底部连接，友链什么的需要自己修改文件或者新建一个页面来添加-->
				<li><a href="">Cyan</a></li>
				<li><a href="">DIYgod</a></li> 
				<li><a href="./index.php/friends.html">More..</a></li> 
				</ul>
			</div>
		</div><!-- /footer -->
