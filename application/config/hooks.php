<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
$hook['post_controller'][] = array(
  'class' => 'maintenance',
  'function' => 'maintenance',
  'filename' => 'maintenance.php',
  'filepath' => 'hooks',
  'params' => array()
);
?>