<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_admin_test
 *
 * @author user
 */
class C_admin_test extends TestCase {
    //put your code here
    public function setUp()
    {
        $this->resetInstance();
    }
    public function test_index_masuk_web_admin_tanpa_login(){
        $this->request('GET','admin');
        $this->assertRedirect('admin/login');
    }
//    public function test_index_gagal_login(){
//        $_SESSION['username'] = 'admin@admin.com';
//        
//    }
}
