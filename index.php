<?php
/*
Plugin Name: N Backend Text Link Widget Plugin
Description: N Backend Text Link Widget Plugin allows to add widget text with link
Version: 1.1
Author: Niraj Gupta
Author URI:
*/

class ntextlinkwidget_plugin extends WP_Widget
{
	// constructor
    function ntextlinkwidget_plugin() 
	{
        parent::WP_Widget(false, $name = __('N Text Link Widget', 'wp_widget_plugin') );
    }

	// widget form creation
	function form($instance)
	{
		// Check values
		if( $instance)
		{
			 $text1 = esc_attr($instance['text1']);
			 $text2 = esc_attr($instance['text2']);
			 $text3 = esc_attr($instance['text3']);
			 $text4 = esc_attr($instance['text4']);
			 $text5 = esc_attr($instance['text5']);			 
			 $link1 = esc_attr($instance['link1']);
			 $link2 = esc_attr($instance['link2']);
			 $link3 = esc_attr($instance['link3']);
			 $link4 = esc_attr($instance['link4']);
			 $link5 = esc_attr($instance['link5']);			 
		} 
		else
		{
			$text1 = '';
			$text2 = '';
			$text3 = '';
			$text4 = '';
			$text5 = '';
			$link1 = '';
			$link2 = '';
			$link3 = '';
			$link4 = '';
			$link5 = '';
		}	?>

		<p>
		<label for="<?php echo $this->get_field_id('text1'); ?>"><?php _e('Text 1', 'wp_widget_plugin'); ?></label>
		<input class="textwidefat" id="<?php echo $this->get_field_id('text1'); ?>" name="<?php echo $this->get_field_name('text1'); ?>" type="text" value="<?php echo $text1; ?>" />
		</p>

		<p>
		<label for="<?php echo $this->get_field_id('link1'); ?>"><?php _e('Link 1', 'wp_widget_plugin'); ?></label>
		<input class="linkwidefat" id="<?php echo $this->get_field_id('link1'); ?>" name="<?php echo $this->get_field_name('link1'); ?>" type="text" value="<?php echo $link1; ?>" />
		</p>

		<p>
		<label for="<?php echo $this->get_field_id('text2'); ?>"><?php _e('Text 2', 'wp_widget_plugin'); ?></label>
		<input class="textwidefat" id="<?php echo $this->get_field_id('text2'); ?>" name="<?php echo $this->get_field_name('text2'); ?>" type="text" value="<?php echo $text2; ?>" />
		</p>

		<p>
		<label for="<?php echo $this->get_field_id('link2'); ?>"><?php _e('Link 2', 'wp_widget_plugin'); ?></label>
		<input class="linkwidefat" id="<?php echo $this->get_field_id('link2'); ?>" name="<?php echo $this->get_field_name('link2'); ?>" type="text" value="<?php echo $link2; ?>" />
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id('text3'); ?>"><?php _e('Text 3', 'wp_widget_plugin'); ?></label>
		<input class="textwidefat" id="<?php echo $this->get_field_id('text3'); ?>" name="<?php echo $this->get_field_name('text3'); ?>" type="text" value="<?php echo $text3; ?>" />
		</p>

		<p>
		<label for="<?php echo $this->get_field_id('link3'); ?>"><?php _e('Link 3', 'wp_widget_plugin'); ?></label>
		<input class="linkwidefat" id="<?php echo $this->get_field_id('link3'); ?>" name="<?php echo $this->get_field_name('link3'); ?>" type="text" value="<?php echo $link3; ?>" />
		</p>

		<p>
		<label for="<?php echo $this->get_field_id('text4'); ?>"><?php _e('Text 4', 'wp_widget_plugin'); ?></label>
		<input class="textwidefat" id="<?php echo $this->get_field_id('text4'); ?>" name="<?php echo $this->get_field_name('text4'); ?>" type="text" value="<?php echo $text4; ?>" />
		</p>

		<p>
		<label for="<?php echo $this->get_field_id('link4'); ?>"><?php _e('Link 4', 'wp_widget_plugin'); ?></label>
		<input class="linkwidefat" id="<?php echo $this->get_field_id('link4'); ?>" name="<?php echo $this->get_field_name('link4'); ?>" type="text" value="<?php echo $link4; ?>" />
		</p>

		<p>
		<label for="<?php echo $this->get_field_id('text5'); ?>"><?php _e('Text 5', 'wp_widget_plugin'); ?></label>
		<input class="textwidefat" id="<?php echo $this->get_field_id('text5'); ?>" name="<?php echo $this->get_field_name('text5'); ?>" type="text" value="<?php echo $text5; ?>" />
		</p>

		<p>
		<label for="<?php echo $this->get_field_id('link5'); ?>"><?php _e('Link 5', 'wp_widget_plugin'); ?></label>
		<input class="linkwidefat" id="<?php echo $this->get_field_id('link5'); ?>" name="<?php echo $this->get_field_name('link5'); ?>" type="text" value="<?php echo $link5; ?>" />
		</p>		
		<?php
	} 
	
	
	// update widget
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		// Fields
		$instance['text1'] = strip_tags($new_instance['text1']);
		$instance['text2'] = strip_tags($new_instance['text2']);
		$instance['text3'] = strip_tags($new_instance['text3']);
		$instance['text4'] = strip_tags($new_instance['text4']);
		$instance['text5'] = strip_tags($new_instance['text5']);		
		$instance['link1'] = strip_tags($new_instance['link1']);
		$instance['link2'] = strip_tags($new_instance['link2']);
		$instance['link3'] = strip_tags($new_instance['link3']);
		$instance['link4'] = strip_tags($new_instance['link4']);
		$instance['link5'] = strip_tags($new_instance['link5']);		
		return $instance;
	}

	// display widget
	function widget($args, $instance)
	{
		extract( $args );
		// these are the widget options

		$text1 = $instance['text1'];
		$text2 = $instance['text2'];
		$text3 = $instance['text3'];
		$text4 = $instance['text4'];
		$text5 = $instance['text5'];
		
		$link1 = $instance['link1'];
		$link2 = $instance['link2'];
		$link3 = $instance['link3'];
		$link4 = $instance['link4'];
		$link5 = $instance['link5'];		
		
		echo $before_widget;

		echo '<div class="widget-text wp_widget_plugin_box">';

		if($text1)
		{
			echo '<p class="wp_widget_plugin_text"><a href="'.$link1.'" target="_blank">'.$text1.'</a></p>';
		}
		if($text2)
		{
			echo '<p class="wp_widget_plugin_text"><a href="'.$link2.'" target="_blank">'.$text2.'</a></p>';
		}
		if($text3)
		{
			echo '<p class="wp_widget_plugin_text"><a href="'.$link3.'" target="_blank">'.$text3.'</a></p>';
		}
		if($text4)
		{
			echo '<p class="wp_widget_plugin_text"><a href="'.$link4.'" target="_blank">'.$text4.'</a></p>';
		}
		if($text5)
		{
			echo '<p class="wp_widget_plugin_text"><a href="'.$link5.'" target="_blank">'.$text5.'</a></p>';
		}		
		echo '</div>';
		echo $after_widget;
	}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("ntextlinkwidget_plugin");'));