<?php


//s3 puth 
 function aws($image){
 	$url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
 	$aws_image = $url.$image;
    return $aws_image;
  }















?>