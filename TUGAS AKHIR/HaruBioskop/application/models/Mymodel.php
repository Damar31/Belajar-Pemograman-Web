<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_model{

	public function Get($table){
        $res = $this->db->get($table);
        return $res->result_array();
    }
    public function GetWhere($table, $data){
        $res = $this->db->get_where($table, $data);
        return $res->result_array();
    }
    public function Insert($table, $data){
        $res = $this->db->insert($table, $data);
        return $res;
    }
    public function Update($table, $data, $where){
        $res = $this->db->update($table, $data, $where);
        return $res;
    }
    public function Delete($table, $where){
        $res = $this->db->delete($table, $where);
        return $res;
    }


    public function getAllFilm()
    {
        $query = $this->db->get('film');
        return $query->result_array();
    }

    public function getFilmById($id)
    {
        $this->db->get('film');
        $this->db->where('id_film', $id);
        return $this->db->single();
    }

    public function tambahDataFilm($data)
    {
  //       $data = array(
		//    'judul' => $data['judul'],
		//    'sinopsis' => 'My Name' ,
		//    'keterangan' => 'My date',
		//    'data_rilis' => 'My date',
		//    'foto' => 'My date',

		// );

        $this->db->insert('film', $data);
        return $this->db->rowCount();
    }

    public function hapusDataFilm($id)
    {
		$this->db->where('id_film', $id);
		$this->db->delete('film');

        return $this->db->rowCount();
    }


    public function ubahDataFilm($data)
    {
		$this->db->where('id_film', $id);
		$this->db->update('film', $data);
        return $this->db->rowCount();
    }


    public function cariDataFilm()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM film WHERE judul LIKE :judul";
        $this->db->query($query);
        $this->db->bind('judul', "%$judul%");
        return $this->db->resultSet();
    }

}

?>

