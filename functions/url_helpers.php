<?php

if ( !function_exists( 'site_assets' ) ) {
   function site_assets( $url = '' ) {
      return ROOT_PROJECT."/assets/" . $url;
   }
}

if ( !function_exists( 'site_node_modules' ) ) {
   function site_node_modules( $url = '' ) {
      return ROOT_PROJECT."/node_modules/" . $url;
   }
}

if ( !function_exists( 'site_uploads' ) ) {
   function site_uploads( $url = '' ) {
      return ROOT_PROJECT."/uploads/" . $url;
   }
}

if ( !function_exists( 'site_admin_url' ) ) {
   function site_admin_url( $url = '' ) {
      return ROOT_PROJECT."/administrator/" . $url;
   }
}

if ( !function_exists( 'redirect_admin' ) ) {
   function redirect_admin( $url = '' ) {
      header( "Location: ./administrator/$url" );
   }
}