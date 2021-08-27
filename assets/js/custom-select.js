const actualBtn = document.getElementById('file-name');
const actualBtn2 = document.getElementById('file-name2');

const fileChosen = document.getElementById('file-chosen');
const fileChosen2 = document.getElementById('file-chosen2');

actualBtn.addEventListener('change', function(){
    fileChosen.textContent = this.files[0].name
})
actualBtn2.addEventListener('change', function(){
    fileChosen2.textContent = this.files[0].name
})