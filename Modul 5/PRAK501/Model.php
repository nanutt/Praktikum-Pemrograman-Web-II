<?php
include_once 'Koneksi.php';

class Model {
    private $conn;

    public function __construct() {
        $database = new Koneksi();
        $this->conn = $database->getConnection();
    }

    public function getAllMembers() {
        $query = "SELECT * FROM member";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMemberById($id_member) {
        $query = "SELECT * FROM member WHERE id_member = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id_member);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insertMember($data) {
        $query = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (:nama_member, :nomor_member, :alamat, :tgl_mendaftar, :tgl_terakhir_bayar)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nama_member", $data['nama_member']);
        $stmt->bindParam(":nomor_member", $data['nomor_member']);
        $stmt->bindParam(":alamat", $data['alamat']);
        $stmt->bindParam(":tgl_mendaftar", $data['tgl_mendaftar']);
        $stmt->bindParam(":tgl_terakhir_bayar", $data['tgl_terakhir_bayar']);
        return $stmt->execute();
    }

    public function updateMember($id_member, $data) {
        $query = "UPDATE member SET nama_member = :nama_member, nomor_member = :nomor_member, alamat = :alamat, tgl_mendaftar = :tgl_mendaftar, tgl_terakhir_bayar = :tgl_terakhir_bayar WHERE id_member = :id_member";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nama_member", $data['nama_member']);
        $stmt->bindParam(":nomor_member", $data['nomor_member']);
        $stmt->bindParam(":alamat", $data['alamat']);
        $stmt->bindParam(":tgl_mendaftar", $data['tgl_mendaftar']);
        $stmt->bindParam(":tgl_terakhir_bayar", $data['tgl_terakhir_bayar']);
        $stmt->bindParam(":id_member", $id_member);
        return $stmt->execute();
    }

    public function deleteMember($id_member) {
        $query = "DELETE FROM member WHERE id_member = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id_member);
        return $stmt->execute();
    }

    public function getAllBuku() {
        $query = "SELECT * FROM buku";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBukuById($id_buku) {
        $query = "SELECT * FROM buku WHERE id_buku = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id_buku);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insertBuku($data) {
        $query = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (:judul_buku, :penulis, :penerbit, :tahun_terbit)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":judul_buku", $data['judul_buku']);
        $stmt->bindParam(":penulis", $data['penulis']);
        $stmt->bindParam(":penerbit", $data['penerbit']);
        $stmt->bindParam(":tahun_terbit", $data['tahun_terbit']);
        return $stmt->execute();
    }

    public function updateBuku($id_buku, $data) {
        $query = "UPDATE buku SET judul_buku = :judul_buku, penulis = :penulis, penerbit = :penerbit, tahun_terbit = :tahun_terbit WHERE id_buku = :id_buku";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":judul_buku", $data['judul_buku']);
        $stmt->bindParam(":penulis", $data['penulis']);
        $stmt->bindParam(":penerbit", $data['penerbit']);
        $stmt->bindParam(":tahun_terbit", $data['tahun_terbit']);
        $stmt->bindParam(":id_buku", $id_buku);
        return $stmt->execute();
    }

    public function deleteBuku($id_buku) {
        $query = "DELETE FROM buku WHERE id_buku = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id_buku);
        return $stmt->execute();
    }

    public function getAllPeminjaman() {
        $query = "SELECT * FROM peminjaman";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPeminjamanById($id_peminjaman) {
        $query = "SELECT * FROM peminjaman WHERE id_peminjaman = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id_peminjaman);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insertPeminjaman($data) {
        $query = "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali) VALUES (:tgl_pinjam, :tgl_kembali)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":tgl_pinjam", $data['tgl_pinjam']);
        $stmt->bindParam(":tgl_kembali", $data['tgl_kembali']);
        return $stmt->execute();
    }

    public function updatePeminjaman($id_peminjaman, $data) {
        $query = "UPDATE peminjaman SET tgl_pinjam = :tgl_pinjam, tgl_kembali = :tgl_kembali WHERE id_peminjaman = :id_peminjaman";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":tgl_pinjam", $data['tgl_pinjam']);
        $stmt->bindParam(":tgl_kembali", $data['tgl_kembali']);
        $stmt->bindParam(":id_peminjaman", $id_peminjaman);
        return $stmt->execute();
    }

    public function deletePeminjaman($id_peminjaman) {
        $query = "DELETE FROM peminjaman WHERE id_peminjaman = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id_peminjaman);
        return $stmt->execute();
    }
}
?>
