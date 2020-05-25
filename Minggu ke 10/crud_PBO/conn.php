<?php
class conn	
{
    public function __construct()
    {
		$engi = "mysql";
		$host = "localhost";
		$dbse = "crud_pdo";
		$user = "root";
		$pass = "";
        try {
        $this->koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host, $user, $pass);
    
        $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
       
	}
	public function add_data($nama, $alamat, $logo)
    {
        $simpan = $this->koneksi->prepare("INSERT INTO sekolah(`nama`,`alamat`,`logo`) VALUES('".$nama."','".$alamat."','".$logo."')");
        $simpan->execute();
    }
	public function tampil_data()
	{
        $addonq = '';
        if(get("q")!=""){ $addonq = " WHERE nama LIKE'%".get('q')."%'"; }
        $hasil = $this->koneksi->prepare("SELECT * FROM sekolah".$addonq." ORDER BY id DESC");
        $hasil->execute();
        $data = $hasil->fetchAll();
        return $data;
	}
    public function delete()
    {
        $id = get('id');
        $hapus = $this->koneksi->prepare("DELETE FROM sekolah WHERE `id` ='".$id."'");
        $hapus->execute();
    }
    public function update($nama,$alamat,$update_logo,$id)
    {
        $simpan = $this->koneksi->prepare("UPDATE sekolah SET `nama`='".$nama."', `alamat`='".$alamat."' ".$update_logo." WHERE `id` ='".$id."'");
        $simpan->execute(); 
    }
    public function edit()
    {
        $hasil = $this->koneksi->prepare("SELECT * FROM sekolah WHERE `id` ='".get('id')."'");
        $hasil->execute();
        $data = $hasil->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function PDF()
    {
        $hasil = $this->koneksi->prepare("SELECT * FROM sekolah WHERE id ='".get('id')."'");
        $hasil->execute();
        $data = $hasil->fetch(PDO::FETCH_OBJ);
        return $data;
    }
    public function Download()
    {
        $hasil = $this->koneksi->prepare("SELECT * FROM sekolah WHERE id ='".get('id')."'");
        $hasil->execute();
        $data = $hasil->fetch(PDO::FETCH_OBJ);
        return $data;
    }
    public function Login()
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];        
        $query = $this->koneksi->prepare("SELECT * FROM login WHERE username = :user AND password = :pass");
        $query->bindValue(':user', $user);
        $query->bindValue(':pass', $pass);
        $query->execute();
        $cek = $query->rowCount();
        if($cek > 0) {
            $data = $query->fetch();
            $_SESSION['id'] = $data['id'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['Nama'] = $data['Nama'];
            echo "<script>alert('Selamat. Login berhasil :)'); </script>";
            if($data['Hak'] == 1)
            {
                    header("Location: index.php");
            }
            else{
                    header("Location: index.php");
            }
        }else {
            echo "<script>alert('Login gagal. Ulangi lagi!');</script>";
        }        
    }
    public function get_by_id($id){
        $query = $this->koneksi->prepare("SELECT * FROM sekolah where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }    
}
?>
