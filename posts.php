<?php theme_include('header'); ?>

			<section>
			
				<?php if (has_posts()) : ?>
					<?php posts(); ?>
					<ul class="list-unstyled">
						<li>
							<article class="wrap">
								<h1>
									<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
								</h1>

								<div class="content">
									<?php echo article_markdown(); ?>
								</div>

								<footer class="text-muted">
									Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>
								</footer>
							</article>
						</li>
						<?php while (posts()) : ?>
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
								<li class="previous"><?php echo posts_prev(); ?></li>
								<li class="next"><?php echo posts_next(); ?></li>
							</ul>
						</nav>
					<?php endif; ?>

				<?php else : ?>
					<p>Looks like you have some writing to do!</p>
				<?php endif; ?>

			</section>

<?php theme_include('footer'); ?>