var btns = document.querySelectorAll('#btn');
var closeBtn1 = document.querySelector('.fa-x');
var closeBtn2 = document.querySelector('.fa-bars');
var sideBar = document.querySelector('.sidebar');


//TOGGLE CLOSE BUTTON
btns.forEach(btn => {
    btn.onclick = function() {
      sideBar.classList.toggle('active');
      closeBtn1.classList.toggle('hide');
      closeBtn2.classList.toggle('hide');
      sideBar.style.transition = 'all ease 0.5s';
  }
  });


//SEARCH INPUT
$("#search").on("keyup", function() {
    value = $(this).val().toLowerCase();
    var value = $(this).val().toLowerCase();
    $(".table tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});