<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Neuron Theme Option',
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'neuon_theme <small>by Rasel Ahmed</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'header_top',
  'title'       => 'Header Option',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'enable_header_top',
      'type'    => 'switcher',
      'title'   => 'If You want to use header top area, turn on this',
      'default' => true,
    ),
    array(
      'id'      => 'heder_links',
      'type'    => 'group',
      'title'   => 'Left Header Links',
      'button_title' => 'add new',
      'accordion_title' => 'Add new link',
      'dependency'=> array('enable_header_top', '==', 'true'),
      'fields'  => array(
      array(
      'id'      => 'left_header_icon',
      'type'    => 'icon',
      'title'   => 'Icon',
      ),
     array(
      'id'      => 'left_header_text',
      'type'    => 'text',
      'title'   => 'Link Text',
      ),
     array(
       'id'      => 'link',
       'type'    => 'text',
       'title'   => 'Link',
      ),
     array(
       'id'      => 'link_target',
       'type'    => 'select',
       'title'   => 'Link terget',
       'options'   => array(
           '_self'  => 'Open in same tap',
           '_blank' => 'Open in new tap',
       )
      )
          
    ),
  ),
  ), // end: fields
);

//Social Link & Icon
$options[]      = array(
  'name'        => 'social_icon',
  'title'       => 'Social Icon',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

     array(
      'id'      => 'social_links',
      'type'    => 'group',
      'title'   => 'Social Links',
      'button_title' => 'add new',
      'accordion_title' => 'Add new link',
      'fields'  => array(
      array(
      'id'      => 'icon',
      'type'    => 'icon',
      'title'   => 'Icon',
      ),
     array(
       'id'      => 'link',
       'type'    => 'text',
       'title'   => 'Link',
      ),
     array(
       'id'      => 'link_target',
       'type'    => 'select',
       'title'   => 'Link terget',
       'options'   => array(
           '_self'  => 'Open in same tap',
           '_blank' => 'Open in new tap',
        )
      ),
     ), // end: fields
   ),
 ),
);



$options[]      = array(
  'name'        => 'global',
  'title'       => 'Global Option',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'logos',
      'type'    => 'gallery',
      'title'   => 'Conmpany logos',
    ),
  ), // end: fields
);

$options[]      = array(
  'name'        => 'homepage',
  'title'       => 'Home',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'enabling_promo_content',
      'type'    => 'switcher',
      'title'   => 'Enable promo content?',
      'default' => true,
    ),
    array(
      'id'      => 'promo_title',
      'type'    => 'text',
      'title'   => 'Promo Area Title',
      'default' => 'Welcome to the Neuron Finance',
      'desc'    => 'Type promo area title',
      'dependency'=> array('enabling_promo_content', '==', 'true'),
    ),
      array(
      'id'      => 'promo_content',
      'type'    => 'text',
      'title'   => 'Promo Area content',
      'desc'    => 'Type promo area content',
      'default' => 'Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.',
      'dependency'=> array('enabling_promo_content', '==', 'true'),
    ),

  ), // end: fields
);

$options[]      = array(
  'name'        => 'services',
  'title'       => 'Services',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
     array(
      'id'      => 'enabling_services_content',
      'type'    => 'switcher',
      'title'   => 'Enable services content?',
      'default' => true,
    ),
    array(
      'id'      => 'services_title',
      'type'    => 'text',
      'title'   => 'Services Area Title',
      'default' => 'We Provide Huge Range of Services',
      'desc'    => 'Type service area title',
      'dependency'=> array('enabling_services_content', '==', 'true'),
    ),
       array(
      'id'      => 'services_content',
      'type'    => 'text',
      'title'   => 'Services Area content',
      'default' => 'Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.',
      'desc'    => 'Type service area content',
      'dependency'=> array('enabling_services_content', '==', 'true'),
    ),

  ), // end: fields
);

$options[]      = array(
  'name'        => 'home_content',
  'title'       => 'Home Content',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

    // begin: a field
     array(
      'id'      => 'enabling_homepage_content',
      'type'    => 'switcher',
      'title'   => 'Enable homepage content?',
      'default' => true,
    ),
      
    array(
      'id'      => 'home_content_title',
      'type'    => 'text',
      'title'   => 'home Area Title',
      'default' => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
      'dependency'=> array('enabling_homepage_content', '==', 'true'),
    ),
    array(
      'id'      => 'home_content_text',
      'type'    => 'textarea',
      'title'   => 'Home content text',
      'dependency'=> array('enabling_homepage_content', '==', 'true'),
      
     
    ),
    array(
      'id'      => 'home_content_img',
      'type'    => 'image',
      'title'   => 'Home content Image',
      'dependency'=> array('enabling_homepage_content', '==', 'true'),
     
    ),

  ), // end: fields
);

//About Area
$options[]      = array(
  'name'        => 'about',
  'title'       => 'about Content',
  'icon'        => 'fas fa-address-card',

  // begin: fields
  'fields'      => array(

    // begin: a field
     array(
      'id'      => 'enabling_about_content',
      'type'    => 'switcher',
      'title'   => 'Enable About content?',
      'default' => true,
    ),
    array(
      'id'      => 'enabling_about_area_promo',
      'type'    => 'switcher',
      'title'   => 'Enable About services content?',
      'default' => true,
    ),
      
    array(
      'id'      => 'about_title',
      'type'    => 'text',
      'title'   => 'About Area Title',
      'default' => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
      'dependency'=> array('enabling_about_content', '==', 'true'),
    ),
    array(
      'id'      => 'about_content_text',
      'type'    => 'textarea',
      'title'   => 'About content text',
      'dependency'=> array('enabling_about_content', '==', 'true'),
     
    ),
    array(
      'id'      => 'about_content_img',
      'type'    => 'image',
      'title'   => 'About content Image',
      'dependency'=> array('enabling_about_content', '==', 'true'),
     
    ),

  ), // end: fields
);

//About page
$options[]      = array(
  'name'        => 'about_faqs',
  'title'       => 'about page',
  'icon'        => 'fas fa-address-card',

  // begin: fields
  'fields'      => array(

    // begin: a field
     array(
      'id'      => 'faqs',
      'type'    => 'group',
      'title'   => 'Faqs',
      'button_title' => 'add new',
      'accordion_title' => 'Add new Faq',
      'fields'  => array(
      array(
      'id'      => 'faqs_title',
      'type'    => 'text',
      'title'   => 'Faqs Title',
      ),
     array(
      'id'      => 'faqs_content',
      'type'    => 'textarea',
      'title'   => 'Faqs Content',
      ),
          
    ),
  ),

),


);


CSFramework::instance( $settings, $options );
