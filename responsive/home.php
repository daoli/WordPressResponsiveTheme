<?php
/**
 * Home Page
 *
 * Note: You can overwrite home.php as well as any other Template in Child Theme.
 * Create the same file (name) include in /responsive-child-theme/ and you're all set to go!
 * @see            http://codex.wordpress.org/Child_Themes
 *
 * @file           home.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/home.php
 * @link           http://codex.wordpress.org/Template_Hierarchy
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

        <div id="featured" class="grid col-940">
                    
            <?php $options = get_option('responsive_theme_options');
			// First let's check if headline was set
			    if ($options['home_subheadline']) {
                    echo '<h2 class="featured-subtitle">'; 
				    echo $options['home_subheadline'];
				    echo '</h2>'; 
			// If not display dummy headline for preview purposes
			      } else { 
			        echo '<h2 class="featured-subtitle">';
				    echo __('Your H2 subheadline here','responsive');
				    echo '</h2>';
				  }
			?>
            
            <?php $options = get_option('responsive_theme_options');
			// First let's check if content is in place
			    if ($options['home_content_area']) {
				    echo $options['home_content_area'];
			// If not let's show dummy content for demo purposes
			      } else { 
			        echo '<p>';
				    echo __('Your title, subtitle and this very content is editable from Theme Option. 
					      Call to Action button and its destination link as well. Image on your right 
						  can be an image or even YouTube video if you like.','responsive');
				    echo '</p>';
				  }
			?>
            
            <?php $options = get_option('responsive_theme_options'); ?>
		    <?php if ($options['cta_button'] == 0): ?>     
            <div class="call-to-action">

            <?php $options = get_option('responsive_theme_options');
			// First let's check if headline was set
			    if (!empty($options['cta_url']) && $options['cta_text']) {
					echo '<a href="'.$options['cta_url'].'" class="blue button">'; 
					echo $options['cta_text'];
				    echo '</a>';
			// If not display dummy headline for preview purposes
			      } else { 
					echo '<a href="#nogo" class="blue button">'; 
					echo __('Call to Action','responsive');
				    echo '</a>';
				  }
			?>  
            
            </div><!-- end of .call-to-action -->
            <?php endif; ?>
        
        </div><!-- end of #featured -->
<?php get_footer(); ?>