
let productCard = [
    {id: 001,img:"img/cart_img/021.png", title:"Wi-Fi роутер MikroTik hAP mini", brend:"Бренд", price: "10 000₸"},
    {id: 001,img:"img/cart_img/002.png", title:"Wi-Fi Mesh роутер Tenda NOVA MW6 (3-pack) ", brend:"Бренд", price: "8 000₸"},
    {id: 001,img:"img/cart_img/003.png", title:"Спутниковый смартфон Thuraya X5-Touch", brend:"Бренд", price: " 50 000₸"},
    {id: 001,img:"img/cart_img/004.png", title:"Роутер Teltonika RUTX11", brend:"Бренд", price: " 139 900 ₸"},
    {id: 001,img:"img/cart_img/005.png", title:"Радиомост Ubiquiti Nanobeam M5-16", brend:"Бренд", price: "30 900 ₸"},
    {id: 001,img:"img/cart_img/006.png", title:"Точка доступа MikroTik LHG LTE6 kit RBLHGR &", brend:"Бренд", price: "74 910 ₸"},
    {id: 001,img:"img/cart_img/007.png", title:"4G Wi-Fi роутер Huawei B593PL и 4G LTE антенна Ruba 14 dBi", brend:"Бренд", price: "3 910 ₸"},
    {id: 001,img:"img/cart_img/001.png", title:"Wi-Fi роутер MikroTik hAP mini", brend:"Бренд", price: "7 910 ₸"}, 
]
let productsCard__Modem = [
    {id: 001,img:"img/cart_img/008.png", title:"Модем Zyxel Keenetic Plus DSL", brend:"Бренд", price: "3 000₸"},
    {id: 001,img:"img/cart_img/009.png", title:"Wi-Fi модем Tenda V300", brend:"Бренд", price: "5 000₸"},
    {id: 001,img:"img/cart_img/010.png", title:"Wi-Fi модем TP-Link TD-W8960N(RU)", brend:"Бренд", price: "9 000₸"},
    {id: 001,img:"img/cart_img/011.png", title:"Wi-Fi модем ASUS DSL-N10 B1 DSL-N10", brend:"Бренд", price: "8 000₸"},
]
let productsCard__Router = [
    {id: 001,img:"img/cart_img/012.png", title:"Wi-Fi роутер Tenda F300", brend:"Бренд", price: "6 000₸"},
    {id: 001,img:"img/cart_img/013.png", title:"Wi-Fi роутер TP-Link TL-WR840N V4", brend:"Бренд", price: "4 000₸"},
    {id: 001,img:"img/cart_img/014.png", title:"Wi-Fi роутер Tenda AC5", brend:"Бренд", price: "2 000₸"},
    {id: 001,img:"img/cart_img/015.png", title:"Wi-Fi роутер TP-Link Archer C20(RU)", brend:"Бренд", price: "7 000₸"},
]


const addRenderCard = (prod)=>`
<div class="product__container">
    <h2 class="product__name">${prod.title}</h2>
    <a class="product__buy js-modal-open" href="#modal-1">купить</a>
    <a href="#modal-2" class="product__info js-modal-open">Подробно</a>
    <div class="product__circle"></div>
    <div class="product__Price0nlyModal" style="display: none;">${prod.price}</div>
    <img class="product__img" src="${prod.img}" alt="">
</div>
`
const cardRender = (arrayCard, selector) =>{			
	let htmlRED = arrayCard.map(prod => addRenderCard(prod)).join('')
	document.querySelector(selector).innerHTML = htmlRED
}

const cardt3D = ()=>{
    VanillaTilt.init(document.querySelectorAll(".product__container"), {
		max: 25,
		speed: 500
	});
}

cardRender(productCard,'.productsCard')
cardRender(productsCard__Modem,'.productsCard__modem')
cardRender(productsCard__Router,'.productsCard__router')     


cardt3D()