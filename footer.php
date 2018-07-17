		<div id="fh5co-footer">
			<div class="row">
				<div class="col-md-6">
					<?php if(is_active_sidebar("left-sidebar")){
						dynamic_sidebar("left-sidebar");
					}?>
				</div>
				<div class="col-md-6 fh5co-copyright">
					<?php if(is_active_sidebar("right-sidebar")){
						dynamic_sidebar("right-sidebar");
					}?>
				</div>
			</div>
		</div>
		
	</div>
	<?php wp_footer(); ?>
	</body>
</html>