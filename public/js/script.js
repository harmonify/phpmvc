(function () {
  const BASEURL = 'http://localhost/php-learning/MVC/public';

  document.querySelector('#show-modal-add').addEventListener('click', () => {
    document.querySelector('#formModalLabel').innerText = 'Add New Student';
    document.querySelector('.modal form').action = `${BASEURL}/student/add`;
    document.querySelector('#name').value = "";
    document.querySelector('#age').value = "";
    document.querySelector('#sid').value = "";
  })

  document.querySelectorAll('.show-modal-edit').forEach(el => {
    el.addEventListener('click', async () => {
      try {
        document.querySelector('#formModalLabel').innerText = 'Edit Student Info';
        document.querySelector('.modal form').action = `${BASEURL}/student/edit`

        let id = el.getAttribute('data-id');
        let data = await makeRequest('POST', `${BASEURL}/student/getStudentData/${id}`);
        data = JSON.parse(data);

        document.querySelector('#id').value = data['id'];
        document.querySelector('#name').value = data['name'];
        document.querySelector('#age').value = data['age'];
        document.querySelector('#sid').value = data['sid'];
      } catch (err) {
        alert(err);
      }

    });
  })

  function makeRequest(method, url) {
    return new Promise(function (resolve, reject) {
      let xhr = new XMLHttpRequest();
      xhr.open(method, url);
      xhr.onload = function () {
        if (this.status >= 200 && this.status < 300) {
          resolve(xhr.response);
        } else {
          reject({
            status: this.status,
            statusText: xhr.statusText
          });
        }
      };
      xhr.onerror = function () {
        reject({
          status: this.status,
          statusText: xhr.statusText
        });
      };
      xhr.send();
    });
  }

})();
