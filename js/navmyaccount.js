

// toggleMenu.addEventListener('onmouseover',function(){
//     myMenu.classList.toggle('active_mymenu');
// });
const toggleMenu = document.querySelector("#hover_nav");
const myMenu = document.querySelector('#my_account_menu');

function toggleMyMenu(){
    document.getElementById('my_account_menu').classList.toggle('active_mymenu');
};

const toggleList = document.querySelector(".edit_member");
const editList = document.querySelector('#edit_member_details');

function editMember(){
    document.querySelector('#edit_member_details').classList.toggle('active_mymenu');
}