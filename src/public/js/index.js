const menuBtn = document.querySelector('.menu-btn');
menuBtn.addEventListener('click', function() {
  this.classList.toggle('active');
});

const $form = $('#form')
$('.btn-send').on('click', evt => {
  $form.submit()
  $form[0].reset()
  return false
})