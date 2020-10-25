const checkbox=
document.getElementsById('checkbox');

checkbox.addEventListener('change',()=>{
    document.body.classList.toggle('dark');
})