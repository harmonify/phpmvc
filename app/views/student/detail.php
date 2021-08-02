<div class="container mt-4 text-center">
  <div class="row">
    <table class="table table-striped caption-top">
      <caption>Student Detail</caption>
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Age</th>
          <th scope="col">Student ID</th>
        </tr>
      </thead>
      <tbody>
        <?php $student = $data['student']; ?>
        <tr>
          <td><?= $student['name'] ?></td>
          <td><?= $student['age'] ?></td>
          <td><?= $student['sid'] ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="row d-flex justify-content-end">
    <div class="col-2">
      <a href="<?= BASEURL ?>/student" class="btn btn-danger w-100">
        <span>Back</span>
        <i class="bi bi-arrow-return-left"></i>
      </a>
    </div>
  </div>
</div>
