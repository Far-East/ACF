
<?php if (have_rows('repeater_field_name')): ?>
	<div class="row fw-flexbox">
		<?php while (have_rows('repeater_field_name')): the_row();
			
			// vars
			$image = get_sub_field('image');
			$url = $image['url'];
			$alt = $image['alt'];
			$size = 'clients-img';
			$thumb = $image['sizes'][ $size ];
			
			$content = get_sub_field('content');
			
			?>

			<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
		
		<?php endwhile; ?>
	</div>
<?php endif; ?>
              
              
