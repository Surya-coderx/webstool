const wrap = document.querySelector('.wrap');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click', ()=> { 
    wrap.classList.add('active');
});

loginLink.addEventListener('click',()=> { 
    wrap.classList.remove('active');
});

