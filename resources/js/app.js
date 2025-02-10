import './bootstrap';
import '../css/app.css';
import.meta.glob([
    '../images/**'
]);

document.addEventListener('DOMContentLoaded', function () {
const mobileMenuButton = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuOpenIcon = document.getElementById('menu-open-icon');
  const menuCloseIcon = document.getElementById('menu-close-icon');

  // Add click event listener to toggle mobile menu visibility
  mobileMenuButton.addEventListener('click', function () {
    // Toggle the 'hidden' class to show/hide the menu
    // mobileMenu.classList.toggle('hidden');
    // Toggle the icon between open and close
    menuOpenIcon.classList.toggle('hidden');
    menuCloseIcon.classList.toggle('hidden');

    // Update the aria-expanded attribute for accessibility
    // const isExpanded = mobileMenu.classList.contains('hidden') ? 'false' : 'true';
    // mobileMenuButton.setAttribute('aria-expanded', isExpanded);
  });
});

// ClassicEditor.create(document.querySelector('#content'))
//             .catch(error => {
//                 console.error(error);
//             });

// var quill = new Quill('#editor-container', {
//   theme: 'snow',
//   modules: {
//       toolbar: [
//           [{ 'header': '1'}, { 'header': '2' }, { 'font': [] }],
//           [{ 'list': 'ordered'}, { 'list': 'bullet' }],
//           ['bold', 'italic', 'underline'],
//           [{ 'align': [] }],
//           ['link', 'image']
//       ]
//   }
// });

// // Capture the content when the form is submitted
// document.getElementById('create-post').onclick = function() {
//   var content = quill.root.innerHTML
//   document.getElementById('content').value = content;
// };

window.addEventListener("updated", (event)=>{
  let data = event.detail;
  const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
      }
    });
    Toast.fire({
      icon: data.icon,
      title: data.text
    });

})
window.addEventListener("message", (event)=>{
  let data = event.detail;
  const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
      }
    });
    Toast.fire({
      icon: data.icon,
      title: data.text
    });

})
window.addEventListener("login", (event)=>{
  let data = event.detail;
  const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
      }
    });
    Toast.fire({
      icon: data.icon,
      title: data.text
    });

})
window.addEventListener("register", (event)=>{
  let data = event.detail;
  const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
      }
    });
    Toast.fire({
      icon: data.icon,
      title: data.text
    });

})
window.addEventListener("not-delete", (event)=>{
  let data = event.detail;
  const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
      }
    });
    Toast.fire({
      icon: data.icon,
      title: data.text
    });

})
