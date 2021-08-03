<?php

class Student_model {
  private $table = 'student'; //database table that is being used
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllStudents()
  {
    $this->db->query("SELECT * FROM {$this->table}");
    return $this->db->resultSet();
  }

  public function getStudentById($id)
  {
    $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
    $this->db->bind('id', $id);
    return $this->db->resultSingle();
  }

  public function addNewStudent($data)
  {
    $query = "INSERT INTO {$this->table} VALUES (NULL, :name, :age, :sid)";
    $this->db->query($query);

    $this->db->bind('name', $data['name']);
    $this->db->bind('age', $data['age']);
    $this->db->bind('sid', $data['sid']);

    $this->db->execute();

    return $this->db->newRowCount();
  }

  public function deleteStudentById($id)
  {
    $query = "DELETE FROM {$this->table} WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->newRowCount();
  }

  public function editStudent($data)
  {
    $query = "UPDATE {$this->table} SET
                name = :name,
                age = :age,
                sid = :sid
              WHERE id = :id";
    $this->db->query($query);

    $this->db->bind('name', $data['name']);
    $this->db->bind('age', $data['age']);
    $this->db->bind('sid', $data['sid']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();

    return $this->db->newRowCount();
  }
}
