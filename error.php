<?php
  $HttpStatus = $_SERVER["REDIRECT_STATUS"] ;
  if($HttpStatus==200) {print "Document has been processed.";}
  if($HttpStatus==206) {print "Partial Content.";}
  if($HttpStatus==302) {print "Found.";}
  if($HttpStatus==400) {print "Bad HTTP request ";}
  if($HttpStatus==401) {print "Unauthorized - Invalid password";}
  if($HttpStatus==403) {print "Forbidden Area";}
  if($HttpStatus==500) {print "Internal Server Error";}
  if($HttpStatus==418) {print "I'm a teapot!";}
  if($HttpStatus==404) {print "Page not found";}
  if($HttpStatus==503) {print "Service unavailable";}
  if($HttpStatus==408) {print "Request Timeout";}
  if($HttpStatus==414) {print "Request-URI Too Long";}
  if($HttpStatus==502) {print "Bad Gateway";}
  if($HttpStatus==415) {print "Unsupported Media Type";}
  if($HttpStatus==504) {print "Gateway Timeout";}
  if($HttpStatus==509) {print "Bandwidth Limit Exceeded";}
  if($HttpStatus==507) {print "Insufficient Storage";}
  if($HttpStatus==413) {print "Request Entity Too Large";}

?>
