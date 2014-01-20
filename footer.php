
			
		</div><!--/.container -->
	</div><!--/#wrap -->

	<div id="footer" style="margin-top:100px">
		<div class="container text-center">

			<ul class="list-inline" role="navigation">
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li><a href="<?php echo rss_url(); ?>">RSS</a></li>
				<li><a href="<?php echo base_url('admin'); ?>">Admin</a></li>
			</ul>

			<p class="text-muted" style="font-size:smaller">
				&copy;<?php echo date('Y'); ?> <?php echo site_meta('copyright-owner', site_name()); ?>
			</p>

			<?php if (site_meta('extra-footer-text')) : ?>
				<p class="text-muted" style="font-size:smaller">
					<?php echo site_meta('extra-footer-text'); ?>
				</p>
			<?php endif; ?>
			
		</div>
	</div>

	<script>var base = '<?php echo theme_url(); ?>';</script>
	<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
	<script src="<?php echo theme_url('/vendor/jquery/jquery-1.10.2.min.js'); ?>"></script>
	<script src="<?php echo theme_url('/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

	<?php if (customised()) : ?>
		<script><?php echo article_js(); ?></script>
	<?php endif; ?>

</body>
</html>