<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\M_lelang;


class Home extends BaseController
{

    public function dashboard()
    {
        $model = new M_lelang();
        
        // Fetch the data from the 'gejala' table, ordered by 'id_gejala'
        $data['gejala'] = $model->tampil2('gejala', 'id_gejala');
      
        
        // Load the views and pass the data to 'dashboard' view
        echo view('header');
        echo view('menu');
        echo view('dashboard', $data);  // Make sure to pass the $data array here
        echo view('footer');
    }
    


    public function dashboard_L()
    {
        
            echo view('header');
            echo view('menu_L');
            echo view('dashboard_L');
            echo view('footer');

    }
	public function aksi_login() {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $recaptchaResponse = $this->request->getPost('g-recaptcha-response');
        $backupCaptcha = $this->request->getPost('backup_captcha');
    
        // Check if the server is online
       
        $model = new M_lelang();
            $where = array(
                'user' => $username,
                'password' => $password
            );
        
            $cek = $model->getWhere('user', $where);
        if ($cek > 0) {
                    session()->set('user', $cek->username);
                    session()->set('id_user', $cek->id_user);
                    session()->set('Level', $cek->Level);
            
                    return redirect()->to('dashboard_L');
                } else {
                    return redirect()->to('login');
                }
    }
    public function delete($id)
  {
  $model =new M_lelang();
    $where= array('id_gejala'=>$id);
    $model->hapus('gejala',$where);
    return redirect()->to('Gejala');
    }
    public function Tambah()
    {
         $model= new M_lelang();
   
            echo view('header');
            echo view('menu');
              echo view('Tambah');
            echo view('footer');
    }
    public function Gejala()
    {
        $model = new M_lelang();
        
        // Fetch the data from the 'gejala' table, ordered by 'id_gejala'
        $data['gejala'] = $model->tampil('gejala', 'id_gejala');
      
        
        // Load the views and pass the data to 'dashboard' view
        echo view('header');
        echo view('menu_L');
        echo view('Gejala', $data);  // Make sure to pass the $data array here
        echo view('footer');
    }

    
	public function logout() {
        $user_id = session()->get('id_user');

            // Log the logout activity
            $model = new M_lelang();        

        session()->destroy();
        return redirect()->to('http://localhost:8080/home');
    }
    
    public function aksi_Tambah()
{
    $model = new M_lelang(); // Instantiate the model

    // Retrieve data from the POST request
    $a = $this->request->getPost('namaG');
    $b = $this->request->getPost('namaM');
    $c = $this->request->getPost('namaS');

    // Get the count of current entries in the 'gejala' table
    $count = $model->getMenuCount(); 

    // Increment the count to get the new sequence number
    $sequence = $count + 1;

    // Format the sequence number into the desired code format
    $nomor = sprintf('G%02d', $sequence);

    // Prepare data for insertion
    $isi = array(
        'Kode' => $nomor,
        'NamaG' => $a,
        'Masalah' => $b,
        'Solusi' => $c
    );

    // Perform the insert operation
    $model->tambah('gejala', $isi);

    // Redirect to the Gejala page
    return redirect()->to('Gejala');
}

    public function login()
	{
		echo view ('header');
		echo view('login');
		
		
	}
}