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
    public function test_index_masuk_web_login_berhasil(){
        $_SESSION['username'] = 'admin@admin.com';
        $result = $this->request('GET','admin');
        $this->assertContains('<title>Dashboard Admin - SiSchedule</title>', $result);
    }
      
    public function test_tabel_matkul_tanpa_login(){
        $this->request('GET','admin/tabel/matakuliah');
        $this->assertRedirect('admin/login');
    }
    public function test_create_matkul_tampil_bener(){
        $_SESSION['username'] = 'admin@admin.com';
      $result = $this->request('GET','admin/tabel/matakuliah/create');
        $this->assertContains('<title>Buat record mata kuliah', $result);
    }
    public function test_tabel_kelas_tanpa_login(){
        $this->request('GET','admin/tabel/kelas');
        $this->assertRedirect('admin/login');
    }
    public function test_tabel_dosen_tanpa_login(){
        $this->request('GET','admin/tabel/dosen');
        $this->assertRedirect('admin/login');
    }
    public function test_page_tabelMatkul_masuk_web_login_berhasil(){
        $_SESSION['username'] = 'admin@admin.com';
        $result = $this->request('GET','admin/tabel/matakuliah');
        $this->assertContains('<title>Mata Kuliah - SiSchedule</title>', $result);
    }
     
    public function test_page_tabelDosen_masuk_web_login_berhasil(){
        $_SESSION['username'] = 'admin@admin.com';
        $result = $this->request('GET','admin/tabel/dosen');
        $this->assertContains('<title>Dosen - SiSchedule</title>', $result);
    }
    public function test_page_tabelKelas_masuk_web_login_berhasil(){
        $_SESSION['username'] = 'admin@admin.com';
        $result = $this->request('GET','admin/tabel/kelas');
        $this->assertContains('<title>Kelas - SiSchedule</title>', $result);
    }
    
    public function test_page_login_admin(){
       $result =  $this->request('GET','admin/login');
        $this->assertContains('<title>Halaman login',$result);
    }
    
    public function test_percobaan_login_berhasil(){
        $this->request('POST','admin/login',[
            'username' => 'admin@admin.com',
            'password' => 'test'
        ]);
        $this->assertRedirect('admin');
        $this->assertTrue(isset($_SESSION['username']));
    }
    public function test_percobaan_login_gagal(){
        $result = $this->request('POST','admin/login',[
            'username' => 'salah',
            'password' => 'salah'
        ]);
        $this->assertContains('Username/Password salah', $result);
    }
    public function test_page_admin_login_ketika_sudah_login(){
        $_SESSION['username'] = 'admin@admin.com';
        $this->request('GET','admin/login');
        $this->assertRedirect('admin');
    }
}
