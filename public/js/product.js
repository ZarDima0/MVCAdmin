const buttonShow = document.getElementById('buttonAdd');
const content = document.querySelector('.content__item')
const form = document.querySelector('.form')
const formData = document.getElementById('formData')
const formClose = document.getElementById('formClose');
formClose.addEventListener('click',() => {
    content.style.display = 'block';
    form.style.display = 'none';
})
buttonShow.addEventListener('click',() => {
    content.style.display = 'none';
    form.style.display = 'flex';
})
formData.addEventListener('submit', async (e) => {
    let resultTitle = document.querySelector('.form__result');
    e.preventDefault();
    let res = await fetch('/products/postProduct',{
        method:'POST',
        body: new FormData(formData)
    })
    let result = await res.json();
    formData.reset();
    resultTitle.innerHTML = `Товар под id ${result.id} добавлен`;
})