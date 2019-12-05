<?php

namespace App\Controllers;

/**
 * Posts controller
 * 
 * PHP version 7.3.11
 */

class Posts {
  /**
   * show the index page
   * 
   * @return void
   */
  public function index() {
    echo "Hello from the index action in the Posts controller!";
  }

  /**
   * show the add new page
   * 
   * @return void
   */
  public function addNew() {
    echo "Hello from the addNew action in the Posts controller!";
  }
}

?>