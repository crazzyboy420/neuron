<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'neuron_work_meta',
  'title'     => 'work Options',
  'post_type' => 'work',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'work_meta_section_1',
      'fields' => array(

        array(
          'id'    => 'sub_title',
          'type'  => 'text',
          'title' => 'Sub title',
          'desc' => 'Type work Sub title/category',
        ),
          array(
          'id'    => 'link_text',
          'type'  => 'text',
          'title' => 'link text',
          'default' => 'Visite Website',
        ),
          array(
          'id'    => 'link',
          'type'  => 'text',
          'title' => 'Link',
        ),
           array(
          'id'    => 'big_preview',
          'type'  => 'image',
          'title' => 'protfolio image',
          'desc' => 'Upoad protfolio image',
        ),
          array(
          'id'    => 'informations',
          'type'  => 'group',
          'title' => 'work information',
          'button_title' => 'add new',
          'accordion_title' => 'Add new information',
          'fields' =>array(
              array(
                'id'    => 'title',
                'type'  => 'text',
                'title' => 'information title',
              ),
               array(
                'id'    => 'value',
                'type'  => 'text',
                'title' => 'information value',
              )
          ),
        ),



      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
