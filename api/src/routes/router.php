<?php 

$files = glob('api/routes/*.php' );
foreach ( $files as $file ){
    require_once( $file );
}

?>