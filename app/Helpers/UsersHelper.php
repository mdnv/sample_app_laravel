<?php

if ( !function_exists('gravatar_for') )
{
  # Returns the Gravatar for the given user.
  function gravatar_for($user, $options = [ "size" => 50 ]){
    $size = $options["size"];
    // https://phptoruby.com/tag/hexdigest/
    $gravatar_id  = md5(strtolower($user->email));
    $gravatar_url = "https://secure.gravatar.com/avatar/$gravatar_id?s=$size";
    return html_entity_decode('<img alt="'.$user->name.'" class="gravatar" src="'.$gravatar_url.'" />');
  }
}
