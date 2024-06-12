<?php
namespace App\Models;
use CodeIgniter\Model;
class Login_Models extends Model{
    public function get_data($username, $email, $password){
        return $this->db->table('user')
        ->where(array('username' => $username, 'email' => $email, 'password' => $password))
        ->get()->getRowArray();
    }
    // protected $table = 'user';
    // protected $allowedFields = ['username','email','password'];
}