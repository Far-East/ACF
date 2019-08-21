
<?php if (have_rows('clients_repeat')): ?>
	<div class="row fw-flexbox">
		<?php while (have_rows('clients_repeat')): the_row();
			
			// vars
			$image = get_sub_field('clients_img');
			$url = $image['url'];
			$alt = $image['alt'];
			$size = 'clients-img';
			$thumb = $image['sizes'][$size];
			
			$content = get_sub_field('content');
			
			?>

			<a href="<?php echo $url; ?>" data-fancybox="clients_lightbox"
					data-caption="<?php echo $alt; ?>">
				<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"/>
			</a>
		<?php endwhile; ?>
	</div>
<?php endif; ?>
