<?php
/**
 * Created by PhpStorm.
 * User: birabira
 * Date: 15/04/17
 * Time: 16:16
 */

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {

    }
} 