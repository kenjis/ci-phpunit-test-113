<?php

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(["form_validation", "Mcrypt"]);
        $this->load->helper(["html"]);
    }

    public function testCode()
    {
        return "hello world";
    }
}
