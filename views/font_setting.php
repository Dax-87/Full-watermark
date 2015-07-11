<?php
global $font_setting_meta_fields, $post;
    // Use nonce for verification
    
    // Begin the field table and loop
    echo '<table class="form-table">';
    foreach ($font_setting_meta_fields as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['name'], true);
		$meta_size = json_decode(get_post_meta($post->ID, 'img_sizes', true));
		$img_sizes=array('thumbnail','medium','large','full');
        //echo $meta;
        // begin a table row with
        echo '<tr><th><label for="' . $field['name'] . '">' . __($field['label'], 'mnbaa_watermark') . '</label></th><td>';
        switch ($field['type']) {
			
			
			case 'checkbox':
				foreach($img_sizes as $img_size){
					if(!isset($meta_size)){
						echo '<input type="checkbox" value="'.$img_size.'" name="'.$field['name'].'" id="'.$field['name'].'" checked="checked" />
							<label for="'.$img_size.'">'.$img_size.'</label>';
					}
					elseif(isset($meta_size)&&in_array($img_size,$meta_size)){
						echo '<input type="checkbox" value="'.$img_size.'" name="'.$field['name'].'" id="'.$field['name'].'" checked="checked" />
							<label for="'.$img_size.'">'.$img_size.'</label>';
					}else{
						echo '<input type="checkbox" value="'.$img_size.'" name="'.$field['name'].'" id="'.$field['name'].'" />
							<label for="'.$img_size.'">'.$img_size.'</label>';
					}
				}
			break;
            
            
        }//end switch
        
        
    }// end foreach
	
    echo '</table>';
    // end table
?>