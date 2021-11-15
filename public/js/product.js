const buttonShow = document.getElementById('buttonAdd');
const content = document.querySelector('.content__item')
const form = document.querySelector('.form')
const formData = document.getElementById('formData')

buttonShow.addEventListener('click',() => {
    content.style.display = 'none';
    form.style.display = 'block';
})
formData.addEventListener('submit', async (e) => {
    e.preventDefault();
    let res = await fetch('/products/postProduct',{
        method:'POST',
        body: new FormData(formData)
    })
    let result = await res.json();
    console.log(result);
})