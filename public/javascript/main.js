let menu =document.querySelector('#menu-icon');
let navbar =document.querySelector('.navbar-edit');
let bar =document.querySelector('.fa-bars');

// document.addEventListener('mousemove', function (e) {
//   const box = document.getElementById('move-it');
//   const moveX = (e.clientX - window.innerWidth / 2) / 25;
//   const moveY = (e.clientY - window.innerHeight / 2) / 25;

//   box.style.transform = `translate(${moveX}px, ${moveY}px)`;
 
// });
menu.onclick=()=>{
    if(bar.classList.contains("fa-bars")){
    bar.classList.replace("fa-bars","fa-x");
    }
     else{
     bar.classList.replace("fa-x","fa-bars");
    }
    navbar.classList.toggle('show');
    console.log(22);

}

 document.addEventListener('DOMContentLoaded', function () {
      const addForm = document.getElementById('addCourseForm');
      const tableBody = document.getElementById('coursesTableBody');
      const coursesCountEl = document.getElementById('coursesCount');
      const formError = document.getElementById('formError');

      // initial counter = current rows count
      let courseCounter = tableBody.querySelectorAll('tr').length;
      coursesCountEl.textContent = courseCounter;

      // Bootstrap form validation helper
      const enableBootstrapValidation = (form) => {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      };
      enableBootstrapValidation(addForm);

      // Add course
      addForm.addEventListener('submit', function (e) {
        e.preventDefault();

        // simple validation
        const name = document.getElementById('courseName').value.trim();
        const category = document.getElementById('courseCategory').value;
        const price = document.getElementById('coursePrice').value.trim();
        const status = document.getElementById('courseStatus').value;

        if (!name) {
          formError.textContent = 'Please enter a course name.';
          formError.classList.remove('d-none');
          return;
        } else {
          formError.classList.add('d-none');
        }

        courseCounter++;
        const tr = document.createElement('tr');

        // safe text (escape)
        function escapeHtml(text) {
          const d = document.createElement('div');
          d.textContent = text;
          return d.innerHTML;
        }

        tr.innerHTML = `
          <td>${courseCounter}</td>
          <td>${escapeHtml(name)}</td>
          <td>${escapeHtml(category)}</td>
          <td>$${escapeHtml(price || '0')}</td>
          <td><span class="badge ${status === 'Active' ? 'bg-success' : status === 'Draft' ? 'bg-secondary' : 'bg-dark'}">${escapeHtml(status)}</span></td>
          <td>
            <button class="btn btn-sm btn-warning btn-edit">Edit</button>
            <button class="btn btn-sm btn-danger btn-delete">Delete</button>
          </td>
        `;
        tableBody.appendChild(tr);

        // update courses count
        coursesCountEl.textContent = tableBody.querySelectorAll('tr').length;

        // reset form
        addForm.reset();
        addForm.classList.remove('was-validated');

        // hide modal
        const modalEl = document.getElementById('addCourseModal');
        const modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
        modal.hide();
      });

      // delegate delete action and re-number rows
      tableBody.addEventListener('click', function (e) {
        if (e.target.classList.contains('btn-delete')) {
          const tr = e.target.closest('tr');
          if (!tr) return;
          tr.remove();
          // renumber rows
          const rows = tableBody.querySelectorAll('tr');
          rows.forEach((r, i) => r.querySelector('td').textContent = i + 1);
          coursesCountEl.textContent = rows.length;
          courseCounter = rows.length;
        }
      });

      // Optional: you can add edit functionality here later.
    });