<?php

class About extends Controller {
  //default method
  public function index(
    string $name = "Wendy",
    string $job = "Developer",
    int $age = 19,
  )
  {
    $data['name'] = $name;
    $data['job'] = ucwords($job);
    $data['age'] = $age;
    $data['title'] = 'About Page';

    $this->view('templates/header', $data['title']);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

  public function page()
  {
    $data['title'] = 'Random About Page';

    $this->view('templates/header', $data['title']);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
