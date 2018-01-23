<?php
/* Add custom image sizes to theme */

add_action( 'after_setup_theme', 'image_sizes' );
function image_sizes() {
    // To enable only for posts:
    //add_theme_support( 'post-thumbnails', array( 'post' ) );
    // To enable only for posts and custom post types:
    //add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );
    // Register a new image size.
    // This means that WordPress will create a copy of the post image with the specified dimensions
    // when you upload a new image. Register as many as needed.
    // Adding custom image sizes (name, width, height, crop)
    add_image_size('1280x720', 1280, 720, true); //(cropped)
    /*add_image_size('1000x480', 1200, 490, true); //(cropped, case study on sector page)*/
    add_image_size('960x540', 960, 540, true); //(cropped)
    /*add_image_size('240x135', 240, 135, true); //(cropped)
    add_image_size('200x200', 200, 200, true); //(cropped)*/
    add_image_size('280x280', 280, 280, true); //(cropped)
    add_image_size('clients', 280, 280, false); //(cropped)
    /*add_image_size('220x327', 220, 327, true); //(cropped)*/
    add_image_size('400x400', 400, 400, true); //(cropped)
    add_image_size('280x230', 280, 230, false); //(cropped)
    /*add_image_size('300x175', 300, 175, true); //(cropped)
    add_image_size('480x340', 480, 270, true); //(cropped)
    add_image_size('75x50', 75, 50, true); //(cropped)*/
    //add_image_size('190x107', 190, 107, true); //(cropped)
    set_post_thumbnail_size( 80, 80, true ); // 50 pixels wide by 50 pixels tall, crop mode
}

add_action( 'wp_enqueue_scripts', 'child_load_google_fonts' );
/**
 * Enqueue Google Fonts using a function
 */
function child_load_google_fonts() {
    
    // Setup font arguments
  $query_args = array(
    'family' => 'Open+Sans:300,700,800' // Change this font to whatever font you'd like
  );
 
  // A safe way to register a CSS style file for later use
  wp_register_style( 'google-fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
  
  // A safe way to add/enqueue a CSS style file to a WordPress generated page
  wp_enqueue_style( 'google-fonts' );
}

// ACF add options page - so you can edit FOOTER info for every page

if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
        'page_title'    => 'Backline Company Info',
        'menu_title'    => 'Backline Company Info',
        'menu_slug'     => 'Backline Company Info',
        'capability'    => 'publish_posts',
        'redirect'      => false
    ));
}



// http://www.jordancrown.com/multi-column-gravity-forms/
function gform_column_splits( $content, $field, $value, $lead_id, $form_id ) {
    if( !IS_ADMIN ) { // only perform on the front end

        // target section breaks
        if( $field['type'] == 'section' ) {
            $form = RGFormsModel::get_form_meta( $form_id, true );

            // check for the presence of multi-column form classes
            $form_class = explode( ' ', $form['cssClass'] );
            $form_class_matches = array_intersect( $form_class, array( 'two-column', 'three-column' ) );

            // check for the presence of section break column classes
            $field_class = explode( ' ', $field['cssClass'] );
            $field_class_matches = array_intersect( $field_class, array('gform_column') );

            // if field is a column break in a multi-column form, perform the list split
            if( !empty( $form_class_matches ) && !empty( $field_class_matches ) ) { // make sure to target only multi-column forms

                // retrieve the form's field list classes for consistency
                $form = RGFormsModel::add_default_properties( $form );
                $description_class = rgar( $form, 'descriptionPlacement' ) == 'above' ? 'description_above' : 'description_below';

                // close current field's li and ul and begin a new list with the same form field list classes
                return '</li></ul><ul class="gform_fields '.$form['labelPlacement'].' '.$description_class.' '.$field['cssClass'].'"><li class="gfield gsection empty">';

            }
        }
    }

    return $content;
}
add_filter( 'gform_field_content', 'gform_column_splits', 10, 5 );



// Remove unwanted admin menu items

function edit_admin_menus() {
    global $menu;
    global $submenu;

    $menu[5][0] = 'News'; // Change Posts to Blaze Talk

    //remove_menu_page('edit.php'); // Remove the Posts Menu
    //remove_menu_page('tools.php'); // Remove the Tools Menu
    //remove_submenu_page('options-general.php','options-discussion.php'); // Remove the Discussion submenu
    //remove_submenu_page('themes.php','nav-menus.php'); // Remove Appearance, Menus submenu
    //remove_submenu_page('themes.php','widgets.php'); // Remove Appearance, widgets submenu
    //remove_submenu_page('themes.php','customize.php'); // Remove Appearance, Customize submenu
}
add_action( 'admin_menu', 'edit_admin_menus' );



/*

Cookies experiment

1. Set a cookie via an onclick function when user accepts that site uses cookies
2. Onclick also add class to hide the notice bar
3. what are we doing wit the cookie now that it's set? Not sure yet. Possibly something to do with driver applicants
(could display return visitors a special message "Thanks for coming back")

*/


/*function set_newuser_cookie() {
if (!isset($_COOKIE['sitename_newvisitor'])) {
setcookie('sitename_newvisitor', 1, time()+1209600, COOKIEPATH, COOKIE_DOMAIN, false);
}
}
add_action( 'init', 'set_newuser_cookie');*/


/* GRAVITY FORMS - TRIGGER MODAL ON FORM SUBMISSION, USING THE HOOKS PROVIDED */

/*add_action( 'gform_after_submission_1', 'set_post_content', 10, 2 );
function set_post_content( $entry, $form ) {
 
    //getting post
    $post = get_post( $entry['post_id'] );
 
    //changing post content
    $post->post_content = 'Blender Version:' . rgar( $entry, '7' ) . "<br/> <img src='" . rgar( $entry, '8' ) . "'> <br/> <br/> " . rgar( $entry, '13' ) . " <br/> <img src='" . rgar( $entry, '5' ) . "'>";
 
    //updating post
    wp_update_post( $post );
}*/
