<?php theme_include('header'); ?>

			<div class="page-header">
				<h1>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>
			</div>

			<?php if (has_search_results()) : ?>
				<ul class="list-unstyled">
					<?php while (search_results()) : ?>
					<li>
						<article>
							<h2>
								<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
									<span class="glyphicon glyphicon-chevron-right" style="font-size:smaller"></span>
									<?php echo article_title(); ?>
								</a>
							</h2>
						</article>
					</li>
					<?php endwhile; ?>
				</ul>

				<?php if (has_pagination()) : ?>
					<nav>
						<ul class="pager">
							<li class="previous"><?php echo search_prev(); ?></li>
							<li class="next"><?php echo search_next(); ?></li>
						</ul>
					</nav>
				<?php endif; ?>

			<?php else: ?>
				<p>Unfortunately, there are no results for &ldquo;<?php echo search_term(); ?>&rdquo;.</p>
			<?php endif; ?>

<?php theme_include('footer'); ?>