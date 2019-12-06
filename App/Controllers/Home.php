<?php

namespace App\Controllers;

/**
 * Home controller
 * 
 * PHP version 7.3.11
 */

class Home extends \Core\Controller {

  /**
   * before filter
   * 
   * @return void
   */
  protected function before() {
    echo "(before) ";
    // return false;
  }

  /**
   * after filter
   * 
   * @return void
   */
  protected function after() {
    echo " (after)";
  }

  /**
   * show the index page
   * 
   * @return void
   */
  public function indexAction() {
    echo "Hello from the index action in the Home controller!";
  }
}

?>