<div class="d-flex justify-content-center align-items-center">
  <div class="row w-50 d-flex flex-column align-items-center text-center shadow-lg bg-light py-5 px-5 m-5" style="border-radius: 2rem;">

    <div class="col-3 align-self-end">
      <a href="<?= BASEURL ?>/student" class="btn btn-secondary w-100">
        <span>Back</span>
        <i class="bi bi-arrow-return-left"></i>
      </a>
    </div>

    <div class="mt-3 mb-3">
      <h1 class="lead display-5">Student Detail</h1>
    </div>

    <div class="mb-4 d-flex align-items-center justify-content-center">
      <img src="<?= BASEURL ?>/img/default_user_img.png" class="rounded-circle" style="height: 15rem; width: 15rem;">
    </div>

    <div class="mb-3">
      <h2 class="lead fs-1">Name: <?= $data['student']["name"] ?></h2>
    </div>

    <div class="mb-3">
      <h2 class="lead fs-1">Age: <?= $data['student']["age"] ?></h2>
    </div>

    <div class="mb-3">
      <h2 class="lead fs-1">Student ID: <?= $data['student']["sid"] ?></h2>
    </div>

  </div>
</main>
