<?php
namespace App;

/* phpcore fake meta class */

class meta
{
    public function __construct(){
    }

    public function check_connection(){
        $data = [];
        $data['status'] = true;
        $data['message'] = 'Licensing server is online';
        return $data;
    }

    public function activate_license(){
        $data = [];
        $data['status'] = true;
        $data['message'] = 'Your license is activated';
        return $data;
    }

    public function verify_license(){
        $data = [];
        $data['status'] = true;
        $data['message'] = 'Your license is active';
        return $data;
    }

    public function deactivate_license(){
        $data = [];
        $data['status'] = true;
        $data['message'] = 'Your license is deactivated';
        return $data;
    }

}