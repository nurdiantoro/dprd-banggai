<?php
class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Model_login');
  }

  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      redirect('admin');
    }
    $data['title'] = "Login Website DPRD Kabupateng Banggai Laut";
    $this->load->view('backend/header', $data);
    $this->load->view('backend/login');
    $this->load->view('backend/footer');
  }
  function auth()
  {
    $email    = $this->input->post('email', TRUE);
    $password = md5($this->input->post('password', TRUE));
    $validate = $this->Model_login->validate($email, $password);
    if ($validate->num_rows() > 0) {
      $data  = $validate->row_array();
      $name  = $data['user_name'];
      $email = $data['user_email'];
      $level = $data['user_level'];
      $sesdata = array(
        'username'  => $name,
        'email'     => $email,
        'level'     => $level,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($sesdata);
      redirect('admin');
    } else {
      echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
      redirect('login');
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect('login');
  }
}
