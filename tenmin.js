const sections = document.querySelectorAll('.wrapper .main_content section');
const navLi = document.querySelectorAll(".wrapper .sidebar ul li");

window.addEventListener('scroll', () => {
  let current = '';
  //console.log(pageYOffset);
  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    //console.log(sectionTop);
    const sectionHeight = section.clientHeight;
    if (pageYOffset >= sectionTop) {
      current = section.getAttribute('id');
      
    }
  });
  //console.log(current);
  navLi.forEach((li) => {
    li.classList.remove("active");
    if (li.classList.contains(current)) {
      li.classList.add("active");
    }
  });
});

//pageYOffset tell how much you have scrolled
//offsetTop tells how far is your section from top

$(document).on('click','ul li',function(){
  $(this).addClass('active').siblings().removeClass('active')
})