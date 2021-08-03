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
      Flasher::setFlash(true, 'added a new student', 'success');
      header('Location: '.BASEURL.'/student');
      exit;
    } else {
      Flasher::setFlash(false, 'add a new student', 'danger');
      header('Location: '.BASEURL.'/student');
      exit;
    }
  }

  public function delete($id)
  {
    if ($this->model('Student_model')->deleteStudentById($id) > 0) {
      Flasher::setFlash(true, 'deleted a student', 'warning');
      header('Location: '.BASEURL.'/student');
      exit;
    } else {
      Flasher::setFlash(false, 'delete a student', 'danger');
      header('Location: '.BASEURL.'/student');
      exit;
    }
  }

  public function getStudentData($id)
  {
    echo json_encode($this->model('Student_model')->getStudentById($id));
  }

  public function edit()
  {
    if ($this->model('Student_model')->editStudent($_POST) > 0) {
      Flasher::setFlash(true, 'edited a student', 'success');
      header('Location: '.BASEURL.'/student');
      exit;
    } else {
      Flasher::setFlash(false, 'edit a student', 'danger');
      header('Location: '.BASEURL.'/student');
      exit;
    }
  }

  public function search()
  {
    $data['title'] = "Table of Students";
    $data['students'] = $this->model('Student_model')->searchStudentsByKeyword();

    $this->view('templates/header', $data['title']);
    $this->view('student/index', $data);
    $this->view('templates/footer');
  }
}
