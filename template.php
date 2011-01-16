<?php


/**
* Changed breadcrumb separator
*/
function crp_breadcrumb($breadcrumb) {

  if (!empty($breadcrumb)) {

  	$counter = 0;
  	foreach ($breadcrumb as $id => $crumb) {
  		$length_value = 70 - $counter;
  		$counter += strlen(strip_tags($crumb));
  		if ($counter > 70) {
  			if ($done) {
  				unset($breadcrumb[$id]);
  			}else{
  				$temporary_breadcrumb = strip_tags($crumb);
  				unset($breadcrumb[$id]);
  				$breadcrumb[] = truncate_utf8($temporary_breadcrumb, $length_value, true, true);
  				$done = true;
  			}
  		}
  	}
    return '<div class="breadcrumb">'. implode(" &raquo; ", $breadcrumb) .'</div>';
  }
}

function crp_theme($existing, $type, $theme, $path) {
  return array(
    'user_register' => array(
        'arguments' => array('form' => NULL),
        'template' => 'user-register'
    ),
   'profile__node_form' => array(
        'arguments' => array('form' => NULL),
        'template' => 'node--profile-edit'
    )
  );
}




?>
