<?php

if ( !function_exists('full_title') )
{
  function full_title($page_title = ''){
    $base_title = "Laravel Tutorial Sample App";
    if (empty($page_title))
        return $base_title;
    else
        return $page_title . " | " . $base_title;
  }
}
