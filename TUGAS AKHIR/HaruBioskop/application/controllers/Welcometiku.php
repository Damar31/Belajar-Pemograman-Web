<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcometiku extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
	public function index()
	{
        if($this->session->userdata('email')) {
            //ambil data lalu simpan di var data
            $data=$this->mymodel-> Get("film");
            $data= array('data' => $data);
            //var data diubah menjadi var tipe data
            $this->load->view('welcome_message');
            $this->load->view('hal_depan', $data);
        }else{
            redirect('welcometiku/masuk');
        }
        

    }

    public function jadwal()
	{
        $id_film=$_POST['id_film'];

		$data['film']=$this->mymodel->GetWhere('film', array('id_film' => $id_film));
        
        $judul = $data['film'][0]['judul'];

        $this->session->set_userdata('judul', $judul);
        $this->session->set_userdata('id_film', $id_film);

        $data['jadwal'] = $this->mymodel->Get('jadwal');
        
        $data = array('data' => $data);
        $this->load->view('hal_jadwal', $data);
    }
    public function jadwal2()
    {
        $id_cs2=$_POST['id_cs2'];

        $data['soon2']=$this->mymodel-> GetWhere('soon2', array('id_cs2' => $id_cs2));
        
        $judul = $data['soon2'][0]['judul'];

        $this->session->set_userdata('judul', $judul);
        $this->session->set_userdata('id_cs2', $id_cs2);

        $data['jadwal'] = $this->mymodel->Get('jadwal');
        
        $data = array('data' => $data);
        $this->load->view('hal_jadwal', $data);
    }
    public function pesankursi()
	{
        $tanggal_nonton= $_POST['tanggal_nonton'];

        $id_jadwal= $_POST['jadwal'];

        $this->session->set_userdata('tanggal_nonton', $tanggal_nonton);
        $this->session->set_userdata('id_jadwal', $id_jadwal);

        $data['jadwal'] = $this->mymodel->GetWhere('jadwal', array('id_jadwal' => $id_jadwal));
        
        $jadwal= $data['jadwal'][0]['jadwal'];
        $this->session->set_userdata('jadwal', $jadwal);

        $data['kursi'] = $this->mymodel->Get('kursi');

        $id_film= $this->session->userdata('id_film');

        $query_kursi_booked = $this->db->query('SELECT nokur FROM pesanan where id_film = "'.$id_film.'" and id_jadwal="'.$id_jadwal.'" and tanggal_nonton="'.$tanggal_nonton.'"');

        $data['kursi_booked'] = $query_kursi_booked->result_array();

        $data = array('data' => $data);
		$this->load->view('hal_pesankursi', $data);
    }
    public function pesanan()
	{
        if(!empty($_POST['pilihkursi'])){
            $kursi= $_POST['pilihkursi'];
            $this->session->set_userdata('kursi', $kursi);
            $data['kursi']= $kursi;
        }
        else{
            $data['kursi']=[];
        }
        $data = array('data' => $data);
		$this->load->view('hal_pesanan', $data);
    }
    function hapuskursi($no){
        //memasukan session (kursi) pada $listkursi
        $listkursi = $this->session->userdata('kursi');

        //Memghapus kursi
        unset($listkursi[$no]);
        ///memsaukan sisa kursi
        $data['kursi'] = array_values($listkursi);

        ////mengurutkan index
        $kursi = $data['kursi'];


        //set session dengan data kursi
        $this->session->set_userdata('kursi',$kursi);

        ///simpan semua data dalam variable array data
        $data= array('data'=>$data);
        $this->load->view('hal_pesanan',$data);
    }
    function edit(){
        $listkursi = $this->session->userdata('kursi');

        $kursi = array_values($listkursi);

        //masukan masing masing variable kedalam session nya
        $id_film = $this->session->userdata('id_film');
        $id_jadwal = $this->session->userdata('id_jadwal');
        $tanggal_nonton = $this->session->userdata('tanggal_nonton');

        ///ambil semua data film
        $data['film']=$this->mymodel->getWhere('film',array('id_film'=>$id_film));

        ///ambil semua data kursi
        $data['kursi']=$this->mymodel->get('kursi');


        ///ambil data kursi yg terpilih sebelumnya
        $data['kursi_checked'] = $kursi;


        ///ambil terbooking
        $query_kursi_booked = $this->db->query('SELECT nokur FROM pesanan where id_film="'.$id_film.'" and id_jadwal="'.$id_jadwal.'" and tanggal_nonton="'.$tanggal_nonton.'"');

        $data['kursi_booked'] = $query_kursi_booked->result_array();

        $data=array('data'=>$data);
        $this->load->view('edit',$data);
    }
    function data_diri()
    {

        $nik=isset($_POST['nik']);
        $nama=isset($_POST['nama']);
        $kelas=isset($_POST['kelas']);
        if($nik && $nama && $kelas ==true){
            $nik = $_POST['nik'];
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];

            $data_identitas = array(
                'nik'=>$nik,
                'nama'=>$nama,
                'kelas'=>$kelas
            );

            $this->session->set_userdata('identitas',$data_identitas);

            $this->mymodel->insert('identitas',$data_identitas);
            redirect('welcometiku/cetaktiket');
            
        }
        else
        {
            $this->load->view('hal_datadiri');
        }
        
    }
    public function cetaktiket()
	{
        $listkursi = $this->session->userdata('kursi');
        $data['kursi']=array_values($listkursi);

        //hitung isi data kursi
        $jum_kursi = count($data['kursi']);
        $j=0;

        //insert data kursi ke database
        foreach($data['kursi'] as $k){
            $data_insert = array(
                'id_film'=>$this->session->userdata('id_film'),
                'tanggal_nonton'=>$this->session->userdata('tanggal_nonton'),
                'id_jadwal'=>$this->session->userdata('id_jadwal'),
                'nokur'=>$k
            );

            $this->mymodel->insert('pesanan',$data_insert);

        }

        ///simpan semua data kedalam array
        $data = array('data'=>$data);
        $this->load->view('hal_cetaktiket',$data);
    }
    public function rev()
	{
		$this->load->view('rev');
    }
    public function hal_coomingsoon()
    {
        $data=$this->mymodel-> Get ("soon");
        $data= array('data' => $data);
        $this->load->view('hal_coomingsoon', $data);
    }
    public function hal_release()
    {
        $data=$this->mymodel-> Get ("soon2");
        $data= array('data' => $data);
        $this->load->view('hal_release', $data);
    }
    public function registration()
    {
        if($this->session->userdata('email')) {
            redirect('welcometiku');
        }

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'WPU User Registration';
            $this->load->view('header', $data);
            $this->load->view('registration');

        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            ];
        

            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. </div>');
            redirect('welcometiku/masuk');
        }
    }
public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            // if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    // $data = [
                    //     'email' => $user['email'],
                    //     'role_id' => $user['role_id']
                    // ];
                    // $this->session->set_userdata($data);

                    $this->session->set_userdata('email', $email);
                    if ($user['email'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('welcometiku');
                    }
                    

                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('welcometiku/masuk');
                }
            // } else {
            //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
            //     redirect('welcometiku/masuk');
            // }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('welcometiku/masuk');
        }
    }
    public function masuk()
    {
        // if ($this->session->userdata('email')) {
        //     redirect('user');
        // }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('header', $data);
            $this->load->view('login');
           
        } else {
            // validasinya success
            $this->login();
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('welcometiku/masuk');
    }
    
}
