const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
const form = $('.form-add-book');
let selectImageInput = $('.select-cover-image-input');
let coverImage = $('.default-img');
selectImageInput.addEventListener('change', (e) => {
    let target = e.target;
    let reader = new FileReader();
    reader.readAsDataURL(target.files[0]);
    reader.onload = function(){
        let dataUrl = reader.result;
        coverImage.src = dataUrl;
    }
})
