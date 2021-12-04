<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
  public function index() {
    return view('vw_login');
  }

  public function process() {
    $users = new UsersModel();
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');
    $dataUser = $users->where(['username' => $username])->first();
    if ($dataUser) {
      // kalo dataUser ada, kita cek password
      if (password_verify($password, $dataUser->password)) {
        session()->set([
          // jika password sama,  generate session
          'username' => $dataUser->username,
          'name' => $dataUser->name,
          'logged_in' => TRUE
        ]);
        return redirect()->to(base_url('admin/news'));
      } else {
        // jika password beda, akan muncul error username dan password tidak sesuai
        session()->setFlashdata('error', 'Username & Password Salah');
        return redirect()->back();
      }
    } else {
      // kalo dataUser tidak ada, tampilkan notif username & password tidak sesuai
      session()->setFlashdata('error', 'Username & Password Salah');
      return redirect()->back();
    }
  }

  function logout() {
    session()->destroy();
    return redirect()->to('/login');
  }
}