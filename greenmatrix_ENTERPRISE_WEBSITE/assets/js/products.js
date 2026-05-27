
fetch('../config/get_products.php')
.then(res=>res.json())
.then(data=>{
let container=document.getElementById('productList');
data.forEach(p=>{
let div=document.createElement('div');
div.className='card';
div.innerHTML=`<h3>${p.name}</h3><p>${p.description}</p>`;
container.appendChild(div);
});
});
