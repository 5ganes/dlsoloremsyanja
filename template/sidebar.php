<div id="sidebar-left" class="sidebar cf">
	<div id="widgets-wrap-sidebar-left">
		<div id="text-2" class="widget-sidebar frontier-widget widget_text">
			<?php
		    $officer=$groups->getById(OFFICER); $officer=$conn->fetchArray($officer);
		    ?>
		    <h4 class="widget-title"><?=$officer['name'];?></h4>
		    <div class="textwidget">
		    	<a href="<?=$officer['urlname']; ?>"><img src="<?=CMS_GROUPS_DIR.$officer['image'];?>"></a>
		        <?=$officer['shortcontents'];?>
		    </div>
		    <a style="font-weight: bold;font-size: 15px;float: right;" href="<?=$officer['urlname']; ?>">read more...</a>
		</div>
		<div id="text-3" class="widget-sidebar frontier-widget widget_text">
			<h4 class="widget-title">उपयोगी लिङ्क्स</h4>
			<div class="textwidget">
				<?php
				$links=$groups->getByParentId(LINKS);
				while($linksGet=$conn->fetchArray($links)){?>
					<a href="<?=$linksGet['contents'];?>" title="<?=$linksGet['name']?>" target="_blank">
						<?=$linksGet['name']?>
					</a><br>
				<?php }?>
			</div>
		</div>
		<div id="notice_board_widget-2" class="widget-sidebar frontier-widget widget_notice_board_widget">
			<h4 class="widget-title">सूचना </h4>
			<div class="msnb_notice scroll-up">
				<ul class="notice-list">
					<?php
					$news=$groups->getByParentId(NEWS);
					while($newsGet=$conn->fetchArray($news)){?>
						<li>
							<a href="<?=$newsGet['urlname'];?>"><?=$newsGet['name'];?></a>
						</li>
					<?php }?>
				</ul>
			</div>
		</div>		
	</div>
</div>
<div class="dynamic">