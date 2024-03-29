<?php

namespace App\Controllers;

/**
 * Posts controller
 * 
 * PHP version 7.3.11
 */

class Posts extends \Core\Controller {
  /**
   * show the index page
   * 
   * @return void
   */
  public function indexAction() {
    echo "Hello from the index action in the Posts controller!";
    echo '<p>Query string parameters: <pre>' . htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
  }

  /**
   * show the add new page
   * 
   * @return void
   */
  public function addNewAction() {
    echo "Hello from the addNew action in the Posts controller!";
  }

  /**
   * show the edit page
   * 
   * @return void
   */
  public function editAction() {
    echo "Hello from the edit action in the Posts controller!";
    echo '<p>Route parameters: <pre>' . htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
  }
}

?>