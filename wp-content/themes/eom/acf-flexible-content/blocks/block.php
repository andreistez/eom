<?php
/**
 * Blocks - ACF Flexible Content section layout.
 * Single block item layout.
 *
 * @see        Page with ACF Flexible Content template -> Flexible Content -> Blocks
 *
 * @package    WordPress
 * @subpackage eom
 */

 if (!isset($args['block']) || !$block = $args['block']) {
	 return;
 }
 
 $image = isset($block['image']) ? $block['image'] : '';
 $image_mobile = isset($block['image_mob']) ? $block['image_mob'] : '';
 $title = isset($block['title']) ? $block['title'] : '';
 $date = isset($block['date']) ? $block['date'] : '';
 $text = isset($block['text']) ? $block['text'] : '';
 $form_id = isset($block['form']) ? $block['form'] : '';
 $id_rand = 'modal-' . random_int(10000, 99999) . random_int(10000, 99999);
 $modal_content_type = isset($block['modal_select']) ? $block['modal_select'] : '';
 $iframe_url = isset($block['iframe_url']) ? $block['iframe_url'] : '';
 ?>
 
 <div class="block">
	 <div class="block-inner">
		 <?php if ($image) : ?>
			 <div class="block-img">
				 <?php get_template_part('components/image', null, [
					 'data' => crit_prepare_image_data($image, 'image-text', [
						 'mobile' => $image_mobile,
						 'mobile_size' => 'blocks-mobile'
					 ])
				 ]); ?>
			 </div>
		 <?php endif; ?>
 
		 <div class="block-info">
			 <?php if ($title) : ?>
				 <div class="block-title"><?php echo $title; ?></div>
			 <?php endif; ?>
 
			 <?php if ($date) : ?>
				 <div class="block-date"><?php echo $date; ?></div>
			 <?php endif; ?>
 
			 <?php if ($text) : ?>
				 <div class="block-text"><?php echo $text; ?></div>
			 <?php endif; ?>
 
			 <div class="button-wrapper">
				 <button class="button bg dark call-signup">
					 <?php _e('Sign Up', 'eom'); ?>
				 </button>
			 </div>
		 </div>
	 </div>
 
	 <?php
if ($modal_content_type === 'form' && $form_id) {
    ?>
    <div id="<?php echo $id_rand; ?>" class="modal__wrapper signup-modal">
        <div class="modal">
            <?php echo do_shortcode("[contact-form-7 id='$form_id']"); ?>
            <button class="close__button">
                <span></span>
            </button>
        </div>
    </div>
    <?php
} elseif ($modal_content_type === 'iframe' && $iframe_url) {
    ?>
    <div id="<?php echo $id_rand; ?>" class="modal__wrapper signup-modal">
        <div class="modal">
            <iframe src="<?php echo esc_url($iframe_url); ?>" width="100%" height="500" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
            <button class="close__button">
                <span></span>
            </button>
        </div>
    </div>
    <?php
}
?>

 </div>
 