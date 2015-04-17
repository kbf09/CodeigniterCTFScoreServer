<?php
/**
 * Created by PhpStorm.
 * User: birabira
 * Date: 15/04/17
 * Time: 16:19
 */

class Problem extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Problem_model');
    }


} 