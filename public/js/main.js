let toggleMenuBtn = document.getElementById('toggleMenu'); 
let nav = document.querySelector('nav');
let bars = document.querySelector('#toggleMenu i');
toggleMenuBtn.addEventListener('click',toggleMenuFun);

function toggleMenuFun() {
  if (nav.classList.contains('close_nav'))
  {
    nav.classList.add('open_nav');
    nav.classList.remove('close_nav');

    bars.classList.add('rotate');
    bars.classList.remove('unrotate');

    if(getCookie('menu_opend') == "")
    {
      setCookie('menu_opend', true, 180);
    }
  }
  else
  {
    nav.classList.add('close_nav');
    nav.classList.remove('open_nav');

    bars.classList.add('unrotate');
    bars.classList.remove('rotate');
    deleteCookie('menu_opend');
  }
}

if(getCookie('menu_opend'))
{
  toggleMenuFun();
}
deleteCookie('menu_opend');