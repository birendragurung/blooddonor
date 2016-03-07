<?php
/**
 * Created by PhpStorm.
 * User: casper
 * Date: 3/7/2016
 * Time: 12:51 PM
 */

class Migrate extends CI_Controller {

    public function __construct ()
    {
        parent::__construct();
    }

    public function index()
    {
        // load migration librarys
        $this->load->library('migration');

        if ( ! $this->migration->current())
        {
            echo 'Error' . $this->migration->error_string();
        } else {
            echo 'Migrations ran successfully!';
        }
    }

    public function change_version()
    {
        $version = $this->uri->segment(3);
        if ($this->migration->version($version)){
            echo 'Migration version : v ' . $version;
        }
        var_dump(base_url());
    }

}