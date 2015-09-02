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
function get_awt_super_grid( $small = false, $medium = false, $large = false, $group = "default", $addclass = array() ){

	// caching/tracking variables
	static $count = array();
	static $columns = array();
	static $class = array();

	if ( !isset( $count[$group] ) ){

		//start count for this group
		$count[$group] = 0;
  
  		//cache all columns in this group
		$columns[$group] = array(
			"s" => explode(',', $small),
			"m" => explode(',', $medium),
			"l" => explode(',', $large)
		);

		//trim all column numbers for this group
		array_walk_recursive( $columns[$group], function(&$a, $i){$a = trim($a);} );

		if ( !is_array($addclass) ){
			$class[$group] = explode(' ', $addclass);
		}

	}
	
	$classes = array_merge( array( "columns" ), $class[$group] );

	if ($small){
		$index = $count[$group] % count( $columns[$group]['s'] );
		$classes[] = "small-{$columns[$group]['s'][$index]}";
	}

	if ($medium){
		$index = $count[$group] % count( $columns[$group]['m'] );
		$classes[] = "medium-{$columns[$group]['m'][$index]}";
	}

	if ($large){
		$index = $count[$group] % count( $columns[$group]['l'] );
		$classes[] = "large-{$columns[$group]['l'][$index]}";
	}

	$count[$group]++;

	return implode(" ", $classes);

}
function awt_super_grid( $small = null, $medium = null, $large = null, $group = "default", $classes = array() ){
    echo get_awt_super_grid($small, $medium, $large, $group, $classes);
}

/**
 * Simple function that is `true` every `$times` iterations, to be used inside loops. Use `$name` to set a unique instance. Use offset to offset the true instance.
 * @param int $times 
 * @param (optional) str $name 
 * @param (optional) int $offset 
 * @return bool
 */
function awt_true_every($times, $group = "default", $offset = 0){
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
function awt_cycle_classes( array $classes, $uniqueInstance = "default" ){
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
function awt_background_data_html($img = null){
  echo awt_get_background_data_html($img);
}
function awt_get_background_data_html($img = null){
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
