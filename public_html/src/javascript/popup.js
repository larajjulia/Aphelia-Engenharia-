const deletebtn = document.getElementById('delete');
const popup = document.getElementById('popup');
const confirmbtn = document.getElementById('confirmbtn')
const cancelbtn = document.getElementById('cancelbtn')

deletebtn.onclick = () => {
    popup.style.display = 'flex';
};

cancelbtn.onclick = () => {
    popup.style.display = 'none';
};

confirmbtn.onclick = () => {
    popup.style.display = 'none';
    alert('Item excluído com sucesso!');
};