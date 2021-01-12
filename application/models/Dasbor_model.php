<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasbor_model extends CI_model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
}
