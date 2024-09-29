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

function displayDate(){
  const formElm = document.getElementById("reservation");
  const date_display = document.getElementById("date_confirm");
  date_display.innerHTML = formElm.date.value;
}

function displayTime(){
  const formElm = document.getElementById("reservation");
  const time_display = document.getElementById("time_confirm");
  if (formElm.time.value>0) {
    time_display.innerHTML = formElm.time.options[formElm.time.selectedIndex].text;
  } else {
    time_display.innerHTML = "";
  }
}

function displayNumber(){
  const formElm = document.getElementById("reservation");
  const number_display = document.getElementById("number_confirm");
  if (formElm.number.value>0) {
    number_display.innerHTML = formElm.number.options[formElm.number.selectedIndex].text;
  } else {
    number_display.innerHTML = "";
  }
}