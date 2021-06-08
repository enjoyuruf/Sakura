<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Akina
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php /* if(akina_option('patternimg') || !get_post_thumbnail_id(get_the_ID())) { */?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<p class="entry-census"><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" itemprop="url" rel="author"><?php the_author(); ?></a>&nbsp;&nbsp;<?php echo poi_time_since(strtotime($post->post_date_gmt)); ?>&nbsp;&nbsp;<?php echo get_post_views(get_the_ID()).' '. _n('View','Views',get_post_views(get_the_ID()),'sakura')/*次阅读*/?> </p>
		<hr>
	</header><!-- .entry-header -->
	<?php //} ?>
	<!--<div class="toc-entry-content"><!-- 套嵌目录使用（主要为了支援评论）-->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ondemand' ),
				'after'  => '</div>',
			) );
		?>
		<!--<div class="oshimai"></div>-->
		<!--<h2 style="opacity:0;max-height:0;margin:0">Comments</h2>--><!-- 评论跳转标记 -->
	</div><!-- .entry-content -->
	<?php the_reward(); ?>
	<footer class="post-footer" style="height:auto;">


		<div class="reprint" id="reprint-statement">
			
				<div class="reprint__author">
					<span class="reprint-meta" style="font-weight: bold;">
						<i class="fa fa-user" style="width:15px"></i>文章作者:
					</span>
					<span class="reprint-info">
					<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" itemprop="url" rel="author"><?php the_author(); ?></a>
					</span>
				</div>
				<div class="reprint__type">
					<span class="reprint-meta" style="font-weight: bold;">
						<i class="fa fa-link" style="width:15px"></i>文章链接:
					</span>
					<span class="reprint-info">
						<a href="<?php echo $PageURL=explode("?",home_url(add_query_arg(array())))[0];  ?>"><?php echo $PageURL ?></a>
					</span>
				</div>
				<div class="reprint__notice">
					<span class="reprint-meta" style="font-weight: bold;">
						<i class="fa fa-copyright" style="width:15px"></i>版权声明:
					</span>
					<span class="reprint-info">
						本博客所有文章除特別声明外，均采用
						<a href="https://creativecommons.org/licenses/by/4.0/deed.zh" rel="external nofollow noreferrer" target="_blank">CC BY 4.0</a>
						许可协议。转载请注明来源
						<a href="https://buzhimaple.com/" target="_blank">buzhimaple</a>
						!
					</span>
				</div>
			
		</div>
		<div class="post-tags">
			<?php if ( has_tag() ) { echo '<i class="iconfont icon-tags"></i> '; the_tags('', ' ', ' ');}?>
		</div>
		<?php get_template_part('layouts/sharelike'); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
