<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User controller
 */
class User extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('UserModel','userModel');
  }

  public function index()
  {
    $data['countries'] = $this->userModel->getCountries();
    $this->load->view("signup",$data);
  }

  public function login()
  {
    $this->load->view("login");
  }

  public function doRegister()
  {
    $fname = $this->input->post("first_name");
    $lname = $this->input->post("last_name");
    $email = $this->input->post("email");
    $gender = $this->input->post("gender");
    $hobby = implode(",",$this->input->post("hobby"));
    $country = $this->input->post("country_id");
    $pass = $this->input->post("password");
    $cpass = $this->input->post("cp");

    if ($this->form_validation->run('add_users_rules')) {
      if ($pass == $cpass) {
        $postUser = array(
          'first_name' => $fname,
          'last_name' => $lname,
          'email' => $email,
          'gender' => $gender,
          'hobby' => $hobby,
          'country_id' => $country,
          'password' => $pass,
        );

        if ($this->userModel->create_user($postUser)) {
          return redirect('User/login');
        } else {
          $this->session->set_flashdata('error','!Something is weong please try again...');
          return redirect('User/index');
        }
      } else {
        $this->session->set_flashdata('error','!Password & Confirm Password must be same...');
        return redirect('User/index');
      }
    }
    else {
      return redirect('User/index');
    }
  }

  public function doLogin()
  {
    $email = $this->input->post("email");
    $pass = $this->input->post("password");

    $user_id = $this->userModel->is_authenticate($email,$pass);
    if ($user_id) {
      $this->session->set_userdata('uid',$email);
      return redirect('User/success');
    } else {
      $this->session->set_flashdata('error','!User credentials are incorrect...');
      return redirect('User/login');
    }
  }

  public function success()
  {
    $data['users'] = $this->userModel->getUsers();
    $this->load->view("success",$data);
  }

  public function logout()
  {
    $this->session->unset_userdata('uid');
    $this->load->view('login');
  }
}



?>
