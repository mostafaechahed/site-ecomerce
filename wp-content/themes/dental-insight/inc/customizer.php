<?php
/**
 * Dental Insight: Customizer
 *
 * @subpackage Dental Insight
 * @since 1.0
 */

function dental_insight_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/assets/css/customizer.css');

 	$wp_customize->add_section('dental_insight_pro', array(
        'title'    => __('UPGRADE DENTAL PREMIUM', 'dental-insight'),
        'priority' => 1,
    ));

    $wp_customize->add_setting('dental_insight_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Dental_Insight_Pro_Control($wp_customize, 'dental_insight_pro', array(
        'label'    => __('DENTAL PREMIUM', 'dental-insight'),
        'section'  => 'dental_insight_pro',
        'settings' => 'dental_insight_pro',
        'priority' => 1,
    )));

	// Top Header
    $wp_customize->add_section('dental_insight_top',array(
        'title' => __('Contact info', 'dental-insight'),
        'description' => __( 'Add contact info in the below feilds', 'dental-insight' ),
        'priority' => 1
    ) );
    
    $wp_customize->add_setting('dental_insight_find_us',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('dental_insight_find_us',array(
		'label' => esc_html__('Add Text','dental-insight'),
		'section' => 'dental_insight_top',
		'setting' => 'dental_insight_find_us',
		'type'    => 'text'
	));

	$wp_customize->add_setting('dental_insight_find_us_url',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('dental_insight_find_us_url',array(
		'label' => esc_html__('Add URL','dental-insight'),
		'section' => 'dental_insight_top',
		'setting' => 'dental_insight_find_us_url',
		'type'    => 'url'
	));

    $wp_customize->add_setting('dental_insight_feedback',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('dental_insight_feedback',array(
		'label' => esc_html__('Add Text 1','dental-insight'),
		'section' => 'dental_insight_top',
		'setting' => 'dental_insight_feedback',
		'type'    => 'text'
	));

	$wp_customize->add_setting('dental_insight_feedback_url',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('dental_insight_feedback_url',array(
		'label' => esc_html__('Add URL 1','dental-insight'),
		'section' => 'dental_insight_top',
		'setting' => 'dental_insight_feedback_url',
		'type'    => 'url'
	));

	$wp_customize->add_setting('dental_insight_email',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_email'
	)); 
	$wp_customize->add_control('dental_insight_email',array(
		'label' => esc_html__('Add Email Address','dental-insight'),
		'section' => 'dental_insight_top',
		'setting' => 'dental_insight_email',
		'type'    => 'text'
	));

	$wp_customize->add_setting('dental_insight_call_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('dental_insight_call_text',array(
		'label' => esc_html__('Add Text','dental-insight'),
		'section' => 'dental_insight_top',
		'setting' => 'dental_insight_call_text',
		'type'    => 'text'
	));
    
	$wp_customize->add_setting('dental_insight_call',array(
		'default' => '',
		'sanitize_callback' => 'dental_insight_sanitize_phone_number'
	)); 
	$wp_customize->add_control('dental_insight_call',array(
		'label' => esc_html__('Add Phone Number','dental-insight'),
		'section' => 'dental_insight_top',
		'setting' => 'dental_insight_call',
		'type'    => 'text'
	));	

	$wp_customize->add_setting('dental_insight_timing_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('dental_insight_timing_text',array(
		'label' => esc_html__('Add Text','dental-insight'),
		'section' => 'dental_insight_top',
		'setting' => 'dental_insight_timing_text',
		'type'    => 'text'
	));
    
	$wp_customize->add_setting('dental_insight_timing',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('dental_insight_timing',array(
		'label' => esc_html__('Add Timing','dental-insight'),
		'section' => 'dental_insight_top',
		'setting' => 'dental_insight_timing',
		'type'    => 'text'
	));

	$wp_customize->add_setting('dental_insight_address_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('dental_insight_address_text',array(
		'label' => esc_html__('Add Text','dental-insight'),
		'section' => 'dental_insight_top',
		'setting' => 'dental_insight_address_text',
		'type'    => 'text'
	));
    
	$wp_customize->add_setting('dental_insight_address',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('dental_insight_address',array(
		'label' => esc_html__('Add Address','dental-insight'),
		'section' => 'dental_insight_top',
		'setting' => 'dental_insight_address',
		'type'    => 'text'
	));

	// Social Media
    $wp_customize->add_section('dental_insight_urls',array(
        'title' => __('Social Media', 'dental-insight'),
        'description' => __( 'Add social media links in the below feilds', 'dental-insight' ),
        'priority' => 2
    ) );
    
	$wp_customize->add_setting('dental_insight_facebook',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('dental_insight_facebook',array(
		'label' => esc_html__('Facebook URL','dental-insight'),
		'section' => 'dental_insight_urls',
		'setting' => 'dental_insight_facebook',
		'type'    => 'url'
	));

	$wp_customize->add_setting('dental_insight_twitter',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('dental_insight_twitter',array(
		'label' => esc_html__('Twitter URL','dental-insight'),
		'section' => 'dental_insight_urls',
		'setting' => 'dental_insight_twitter',
		'type'    => 'url'
	));

	$wp_customize->add_setting('dental_insight_youtube',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('dental_insight_youtube',array(
		'label' => esc_html__('Youtube URL','dental-insight'),
		'section' => 'dental_insight_urls',
		'setting' => 'dental_insight_youtube',
		'type'    => 'url'
	));

	$wp_customize->add_setting('dental_insight_instagram',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('dental_insight_instagram',array(
		'label' => esc_html__('Instagram URL','dental-insight'),
		'section' => 'dental_insight_urls',
		'setting' => 'dental_insight_instagram',
		'type'    => 'url'
	));

    //Slider
	$wp_customize->add_section( 'dental_insight_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'dental-insight' ),
    	'description' => __( 'Image Dimension ( 1400 x 650 ) px', 'dental-insight' ),
		'priority'   => 3,
	) );

	$wp_customize->add_setting('dental_insight_slider_arrows',array(
       'default' => false,
       'sanitize_callback'	=> 'dental_insight_sanitize_checkbox'
    ));
    $wp_customize->add_control('dental_insight_slider_arrows',array(
       'type' => 'checkbox',
       'label' => __('Check to show slider','dental-insight'),
       'section' => 'dental_insight_slider_section',
    ));

	$args = array('numberposts' => -1); 
	$post_list = get_posts($args);
	$i = 0;	
	$pst_sls[]= __('Select','dental-insight');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID]=$p_post->post_title;
	}
	for ( $i = 1; $i <= 4; $i++ ) {
		$wp_customize->add_setting('dental_insight_post_setting'.$i,array(
			'sanitize_callback' => 'dental_insight_sanitize_select',
		));
		$wp_customize->add_control('dental_insight_post_setting'.$i,array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post','dental-insight'),
			'section' => 'dental_insight_slider_section',
		));
	}
	wp_reset_postdata();

	// Services Section
	$wp_customize->add_section( 'dental_insight_service_box_section' , array(
    	'title'      => __( 'Services Settings', 'dental-insight' ),
		'priority'   => 4,
	) );

	$wp_customize->add_setting('dental_insight_services_section_title',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('dental_insight_services_section_title',array(
		'label' => esc_html__('Section Title','dental-insight'),
		'section' => 'dental_insight_service_box_section',
		'setting' => 'dental_insight_services_section_title',
		'type'    => 'text'
	));	

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
	if($i==0){
	  $default = $category->slug;
	  $i++;
	}
	$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('dental_insight_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'dental_insight_sanitize_select',
	));
	$wp_customize->add_control('dental_insight_category_setting',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => esc_html__('Select Category to display Post','dental-insight'),
		'section' => 'dental_insight_service_box_section',
	));
    
	//Footer
    $wp_customize->add_section( 'dental_insight_footer_copyright', array(
    	'title'      => esc_html__( 'Footer Text', 'dental-insight' ),
    	'priority' => 5
	) );

    $wp_customize->add_setting('dental_insight_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('dental_insight_footer_text',array(
		'label'	=> esc_html__('Copyright Text','dental-insight'),
		'section'	=> 'dental_insight_footer_copyright',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'dental_insight_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'dental_insight_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'dental_insight_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'dental_insight_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'dental-insight' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'dental-insight' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'dental_insight_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'dental_insight_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'dental_insight_customize_register' );

function dental_insight_customize_partial_blogname() {
	bloginfo( 'name' );
}
function dental_insight_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
function dental_insight_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}
function dental_insight_is_view_with_layout_option() {
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

define('DENTAL_INSIGHT_PRO_LINK',__('https://www.ovationthemes.com/wordpress/dental-clinic-wordpress-theme/','dental-insight'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Dental_Insight_Pro_Control')):
    class Dental_Insight_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md-2 col-sm-6 upsell-btn">
                <a href="<?php echo esc_url( DENTAL_INSIGHT_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE DENTAL PREMIUM','dental-insight');?> </a>
	        </div>
            <div class="col-md-4 col-sm-6">
                <img class="dental_insight_img_responsive " src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">

            </div>
	        <div class="col-md-3 col-sm-6">
	            <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('DENTAL PREMIUM - Features', 'dental-insight'); ?></h3>
                <ul style="padding-top:10px">
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'dental-insight');?> </li>
                    <li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'dental-insight');?> </li>
                   	<li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'dental-insight');?> </li>
                   	<li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'dental-insight');?> </li>
                   	<li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'dental-insight');?> </li>
                   	<li class="upsell-dental_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'dental-insight');?> </li>                    
                </ul>
        	</div>
		    <div class="col-md-2 col-sm-6 upsell-btn upsell-btn-bottom">
	            <a href="<?php echo esc_url( DENTAL_INSIGHT_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE DENTAL PREMIUM','dental-insight');?> </a>
		    </div>
			<p><?php printf(__('Please review us if you love our product on %1$sWordPress.org%2$s. </br></br>  Thank You', 'dental-insight'), '<a target="blank" href="https://wordpress.org/support/theme/dental-insight/reviews/">', '</a>');
            ?></p>
        </label>
    <?php } }
endif;