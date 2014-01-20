<?php theme_include('header'); ?>

			<section id="article-<?php echo article_id(); ?>">
				<div class="page-header">
					<h1><?php echo article_title(); ?></h1>
				</div>
	
				<article>
					<?php echo article_markdown(); ?>
				</article>

				<section class="footnote">
					<!-- Unfortunately, CSS means everything's got to be inline. -->
					<p class="text-muted">This article is my <?php echo numeral(total_articles()); ?> oldest. It is <?php echo count_words(article_markdown()); ?> words long<?php if(comments_open()): ?>, and it’s got <?php echo total_comments() . pluralise(total_comments(), ' comment'); ?> for now.<?php endif; ?> <?php echo article_custom_field('attribution'); ?></p>
				</section>
			</section>
	
			<?php if (comments_open()) : ?>
				<section class="comments">
					<?php if (has_comments()) : ?>
					<ul class="commentlist">
						<?php $i = 0; while(comments()): $i++; ?>
						<li class="comment" id="comment-<?php echo comment_id(); ?>">
							<div class="wrap">
								<h2><?php echo comment_name(); ?></h2>
								<time><?php echo relative_time(comment_time()); ?></time>
		
								<div class="content">
									<?php echo comment_text(); ?>
								</div>
		
								<span class="counter"><?php echo $i; ?></span>
							</div>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>

					<form class="form-horizontal" role="form" method="post" action="<?php echo comment_form_url(); ?>#comment">
					
						<?php echo comment_form_notifications(); ?>
		
						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-3">
								<?php echo comment_form_input_name('class="form-control"'); ?>
							</div>
						</div>						

						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email (not published)</label>
							<div class="col-sm-3">
								<?php echo comment_form_input_email('class="form-control"'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="text" class="col-sm-2 control-label">Comments</label>
							<div class="col-sm-6">
								<?php echo comment_form_input_text('class="form-control" rows="5"'); ?>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-6">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</form>

				</section>
			<?php endif; ?>
	
<?php theme_include('footer'); ?>