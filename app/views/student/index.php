<div class="container mt-4 text-center">
  <!-- Flasher -->
  <div class="row">
    <div class="col-md-8">
      <?php Flasher::flash() ?>
    </div>
  </div>
  <!-- Button to trigger modal -->
  <div class="row mb-3">
    <div class="col-3">
      <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#formModal">
        <i class="bi bi-plus mr-2"></i>
        <span>Add New Student</span>
      </button>
    </div>
  </div>
  <!-- Table of Students -->
  <div class="row mb-3">
    <div class="col-8">
      <table class="table table-striped caption-top">
        <caption>List of students</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach($data['students'] as $student) : ?>
          <tr>
            <th scope="row"><?= $i++ ?></th>
            <td><?= $student['name'] ?></td>
            <td class="text-white">
              <a href="<?= BASEURL ?>/student/detail/<?= $student["id"] ?>"
                class="badge bg-dark text-reset text-decoration-none">Detail</a>
              <a href="<?= BASEURL ?>/student/edit/<?= $student["id"] ?>"
                class="badge bg-success text-reset text-decoration-none" data-bs-toggle="modal" data-bs-target="#formModal">Edit</a>
              <a href="<?= BASEURL ?>/student/delete/<?= $student["id"] ?>"
                class="badge bg-danger text-reset text-decoration-none" data-bs-toggle="modal"
                data-bs-target="#deleteModal" onclick="passData('<?= $student['name'] ?>')">Delete</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Add Form Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Add New Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= BASEURL ?>/student/add" method="POST">
        <div class="modal-body">
          <div class="row mb-3">
            <label for="name" class="col-3 col-form-label">Name</label>
            <div class="col-9">
              <input type="text" class="form-control" name="name" id="name">
            </div>
          </div>
          <div class="row mb-3">
            <label for="age" class="col-3 col-form-label">Age</label>
            <div class="col-9">
              <input type="number" class="form-control" name="age" id="age">
            </div>
          </div>
          <div class="row mb-3">
            <label for="sid" class="col-3 col-form-label">Student ID</label>
            <div class="col-9">
              <input type="number" class="form-control" name="sid" id="sid">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure to delete the student with the name <span id="student-name"></span> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>

<script defer>
  function passData(data) {
    document.querySelector('#student-name').innerText = data;
  }
</script>
