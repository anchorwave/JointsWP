<?php 

if ( !function_exists('print_pre') ) {
  /**
   * print_x()
   * Simple wrapper of print_r for readability
   * 
   */
  function print_pre( $var ){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
  }
}
/**
 * Ancor Whave Helpers!
 * @author jameelbokhari
 * @link https://gist.github.com/jbokhari
****/
function custom_excerpt($content, $numwords, $append = "…"){
  $content = strip_shortcodes($content);
  $content = strip_tags($content);
  $excerpt_length = $numwords;
  $words = explode(' ', $content, $excerpt_length + 1);
  $lngth = count($words);
  if( $lngth > $excerpt_length ) :
      array_pop($words);
      $words[$excerpt_length - 1] = preg_replace('/\W+$/', "", $words[($excerpt_length - 1)] );
      $content = implode(' ', $words) . $append;
  endif;
  return $content;
}

/**
 * Super Grid
 * @param $small size of small columns, accepts comma separated list
 **/
function get_super_grid( $small = false, $medium = false, $large = false, $group = "default", $addclass = array() ){

	// caching/tracking variables
	static $count = array();
	static $columns = array();
	// static $class = array();

	if ( !isset( $count[$group] ) ){

		//start count for this group
		$count[$group] = 0;

	}
	$classes[] = "columns";
	if ($small){
		$classes[] = "small-{$small}";
	}

	if ($medium){
		$classes[] = "medium-{$medium}";
	}

	if ($large){
		$classes[] = "large-{$large}";
	}

	$count[$group]++;

	return implode(" ", $classes);

}
function super_grid( $small = null, $medium = null, $large = null, $group = "default", $classes = array() ){
    echo get_super_grid($small, $medium, $large, $group, $classes);
}

/**
 * Simple function that is `true` every `$times` iterations, to be used inside loops. Use `$name` to set a unique instance. Use offset to offset the true instance.
 * @param int $times 
 * @param (optional) str $name 
 * @param (optional) int $offset 
 * @return bool
 */
function true_every($times, $group = "default", $offset = 0){
  static $count = array();
  if (!isset($count[$group])) $count[$group] = 0;
  $times = intval($times);
  $iteration = $count[$group] % $times;
  $compare = $times - $offset - 1;
  if ($compare  == $iteration)
    $return = true;
  else
    $return = false;
  $count[$group]++; 
  return $return;
}
/**
 * Echos strings inside first array argument in order each time function is called, then repeats after last element. For use inside loops
 * @param array $classes - An array of strings to iterate through and echo
 * @param string $uniqueInstance, default "default" - unique string for each instance (if function is used on the same page twice)
 * EG: <div class="general-class <?php cycle_classes(array("first-block", "", "", "", "fifth-block"), "unique name for this instance"); ?>">
 **/
function cycle_classes( array $classes, $uniqueInstance = "default" ){
  static $n = array(); 
  $count = count($classes);
  $i = $n[$uniqueInstance] % $count;
  echo $classes[$i];
  $n[$uniqueInstance]++;
}

/**
 * get_background_data_html()
 * returns html to be used on an element to store background urls
 * The html is for data attributes to be accessed by javascript
 * @param $img an image OBJECT returned from get_field() [advanced custom fields]
 * @return $html, string containing html -- background_data_html() is same but echos
 */
function background_data_html($img = null){
  echo get_background_data_html($img);
}
function get_background_data_html($img = null){
  $html = '';
  if (isset($img['url'])){
    $html .= " data-fullbgurl='{$img['url']}'";
  }
  if ( isset($img['sizes'] ) ){
    if ( isset( $img['sizes']['large'] ) ){
      $html .= " data-largebgurl='{$img['sizes']['large']}'";
    }
    if ( isset( $img['sizes']['medium'] ) ){
      $html .= " data-mediumbgurl='{$img['sizes']['medium']}'";
    }
    if ( isset( $img['sizes']['thumbnail'] ) ){
      $html .= " data-thumbnailbgurl='{$img['sizes']['thumbnail']}'";
    }
  }
  $html .= " ";
  return $html;
}

function phone_number_link( $phonenumber = "" ){
  if ($phonenumber){
    $phonenumber = str_replace( array(' ', '-', '(', ')', '.'),  '', $phonenumber );
  } else {
    $phonenumber = "";
  }
  return $phonenumber;
}


/**
 * Shortcut to echo featured image source
 * @return void
 */
function the_featured_image($post_id = null, $size = "full") {
  echo get_featured_image($post_id, $size);
}
function get_featured_image($post_id = null, $size = "full") {
    if ($post_id = null) {
       $post_id = get_the_id();
    }
    if ( $src = get_featured_image_src($post_id, $size) ){
        return "<img src='" . $src . "' alt='' />";
    }
    return '';
}
function get_featured_image_src($post_id = null, $size = "full") {
  if ($post_id === null){
    global $post;
    $post_id = $post->ID;
  }
  $thumb_id = get_post_thumbnail_id( $post_id );
  $src = wp_get_attachment_image_src( $thumb_id, $size );
  return $src[0];
}