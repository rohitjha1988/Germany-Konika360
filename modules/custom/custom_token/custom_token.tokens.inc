<?php
use Drupal\Core\Render\BubbleableMetadata;

/*
* implement hook_token_info()
*/
function custom_token_token_info(){
  $types['custom_token_type'] = array(
    'name' => t('Custom token type'),
    'description' => t('Define custom token type')
  );	
  $tokens['custom_token_name'] = array(
    'name' => t('Custom token name'),
    'description' => t('Define custom token name')
  );
	
  return array(
    'types' => $types,
    'tokens' => array(
      'custom_token_type' => $tokens
    )
  );	
}

/*
* implement hook_token()
*/
function custom_token_tokens($type, $tokens, array $data, array $options, BubbleableMetadata $bubbleable_metadata){
  global $base_url;
  $replacements = array();
  $curr_session = $_SESSION['assess']['sessionid'];
  
  if($type == 'custom_token_type') {
    foreach ($tokens as $name => $original) {
      switch ($name) {
        case 'custom_token_name':
        // $text = '<a href="'.$base_url.'/download-report?id='.$curr_session.'" target="_blank">'.$base_url.'/download-report?id='.$curr_session.'</a>';
        $text = $base_url.'/download-report?id='.$curr_session;
        $replacements[$original] = $text;
	break;
      }
    }
  }
  return $replacements;
}
?>