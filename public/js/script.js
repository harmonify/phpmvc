(function () {
  document.querySelector('#show-modal-add').addEventListener('click', () => {
    document.querySelector('#formModalLabel').innerText = 'Add New Student';
  })

  document.querySelectorAll('.show-modal-edit').forEach(el => {
    el.addEventListener('click', () => {
      document.querySelector('#formModalLabel').innerText = 'Edit Student Info';
    });
  })

  document.querySelectorAll('.show-modal-delete').forEach(el => {
    let studentName = el.getAttribute('data-student-name');
    el.addEventListener('click', () => {
      document.querySelector('#student-name').innerText = studentName;
    });
  })

})();