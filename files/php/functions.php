<?php 
#
# Функции
#

function get_uri_paths(){
  # Get the URI paths
  $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $uri_paths = explode("/",$request_uri);
  $uri = array();
  
  foreach($uri_paths as $key=>$value){
    $value = trim($value);
    if(!empty($value) && strlen($value)>=1){
      $uri[$key-1] = $value;
    }
  }
  
  if(count($uri)>=1)
    return $uri;
  
  return false;
}


function display_the_page(){
  global $uri;
  $locations = array('page','category','product','order','cart','faq','contact','search');
  
  if(!in_array($uri[0], $locations)){
    require_once(CLASS_PATH.'/location_index.php');
  }else{
    require_once(CLASS_PATH.'/location_'.$uri[0].'.php');
  }

}
?>
