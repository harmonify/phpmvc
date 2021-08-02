<?php

class Student extends Controller {
  public function index()
  {
    $data['title'] = "Table of Students";
    $data['students'] = $this->model('Student_model')->getAllStudents();

    $this->view('templates/header', $data['title']);
    $this->view('student/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id)
  {
    $data['title'] = "Student Detail";
    $data['student'] = $this->model('Student_model')->getStudentById($id);

    $this->view('templates/header', $data['title']);
    $this->view("student/detail", $data);
    $this->view('templates/footer');
  }

  public function add()
  {
    if ($this->model('Student_model')->addNewStudent($_POST) > 0) {
      header('Location: '.BASEURL.'/student');
      exit;
    }
  }
}