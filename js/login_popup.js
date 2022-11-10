const closeBtn = document.querySelector('.close_popup');
const overlayModal = document.querySelector('.overlay_popup');
const idErrorModal = document.querySelector('.popup_msg_id');

closeBtn.onclick = function(){
idErrorModal.style.display = 'none';
overlayModal.style.display='none';
}


 function displayErrorMsg(){
 idErrorModal.style.display = 'flex';
 overlayModal.style.display='flex';
 }


// displayErrorMsg();