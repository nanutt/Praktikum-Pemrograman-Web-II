<?php
namespace App\Controllers;
use \App\Models\Buku_Models;
use CodeIgniter\Exceptions\PageNotFoundException;
class Buku_crud extends BaseController{
    public function index(){
        $buku = new Buku_Models();
        $data['bukuwhere'] = $buku->findAll();
        echo view('AdminListBuku', $data);
    }
    public function preview($id){
        $buku = new Buku_Models();
        $data['buku'] = $buku->where('id', $id)->first();
        if (!$data['buku']) {
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('admin_preview_buku', $data);
    }
    public function create(){
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required',
            'penulis' => 'required', 
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        if ($isDataValid) {
            $buku = new Buku_Models();
            $buku->insert([
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "penerbit" => $this->request->getPost('penerbit'),
                "tahun_terbit" => $this->request->getPost('tahun_terbit')
            ]);
            return redirect('admin/buku');
        }
        echo view('AddBuku', ['validation' => $validation]);
    }
    public function edit($id){
        $buku = new Buku_Models();
        $data['buku'] = $buku->where('id', $id)->first();
        if (!$data['buku']) {
            throw PageNotFoundException::forPageNotFound();
        }
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required',
            'penulis' => 'required', 
            'penerbit' => 'required', 
            'tahun_terbit' => 'required|integer'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        if ($isDataValid) {
            $buku->update($id, [
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "penerbit" => $this->request->getPost('penerbit'),
                "tahun_terbit" => $this->request->getPost('tahun_terbit')
            ]);
            return redirect('admin/buku');
        }
        $data['validation'] = $validation;
        echo view('Edit_Buku', $data);
    }
    public function delete($id){
        $buku = new Buku_Models();
        $buku->delete($id);
        return redirect('admin/buku');
    }
}