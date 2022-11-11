

// toggleMenu.addEventListener('onmouseover',function(){
//     myMenu.classList.toggle('active_mymenu');
// });
const toggleMenu = document.querySelector("#hover_nav");
const myMenu = document.querySelector('#my_account_menu');

function toggleMyMenu(){
    document.getElementById('my_account_menu').classList.toggle('active_mymenu');
}