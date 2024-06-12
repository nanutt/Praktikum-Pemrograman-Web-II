<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Login_Models;
class User_Login extends Controller{
    public function index(){
        helper(['form']);
        echo view('UserViews');
    }
    public function auth(){
        $session = session();
        $model = new Login_Models();
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $data = $model->get_data($username, $email, $password);
        if (empty($username) || empty($email) || empty($password)) {
            $session->setFlashdata('msg', 'Harap lengkapi semua kolom');
            return redirect()->to('/Login');
        }
        if ($data) {
            $ses_data = [
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => $data['password'],
                'logged_in' => TRUE
            ];
            $session->set($ses_data);
            return redirect()->to('/admin/buku/new');
        } else {
            $session->setFlashdata('msg', 'Username, Email, atau Password Salah');
            return redirect()->to('/Login');
        }        
    }
    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/Login');
    }
}
?>