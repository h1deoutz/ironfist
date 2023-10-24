
const btns=[
    {
        id: 1,
        name: 'Whey Protein'
    },
    {
        id: 2,
        name: 'Creatinas'
    },
    {
        id: 3,
        name: 'Pré Treinos'
    },
    {
        id: 4,
        name: 'Hipercalóricos'
    },
    {
        id: 4,
        name: 'Glutaminas'
    },
]

const filters = [...new Set (btns.map((btn)=>
    {return btn}))]

    document.getElementById('btns').innerHTML=filters.map((btn)=>{
        var {name, id} = btn;
        return(
            "<button class 'fil-p' onclick='filterItems("+(id)+`)'>${name}</button>`
        )
    }).join('');

const formOpenBtn = document.querySelector("#login-buttom"),
iconClose = document.querySelector(".icon-close"),
loginLink = document.querySelector("#login-link"),
registerLink = document.querySelector("#form-register"),
wrapper = document.querySelector(".wrapper");


formOpenBtn.addEventListener("click", () => wrapper.classList.add("show"));
iconClose.addEventListener("click", () => wrapper.classList.remove("show"));
registerLink.addEventListener("click", () => wrapper.classList.add("active"));
loginLink.addEventListener("click", () => wrapper.classList.remove("active"));

let openShopping = document.querySelector('.shopping-cart');
let closeShopping = document.querySelector('.cart-icon-close');
let body = document.querySelector ('.body');
let total = document.querySelector ('#total');
let count = document.querySelector ('#count'); 

openShopping.addEventListener("click", () => body.classList.add("active"));
closeShopping.addEventListener('click', () =>{ body.classList.remove ('active');


})

let openCheckout = document.querySelector('.checkout');
let closeCheckout = document.querySelector('.back');

openCheckout.addEventListener("click", () => body.classList.add ('show'));
closeCheckout.addEventListener("click", () => body.classList.remove ('show'));
closeShopping.addEventListener("click", () => { body.classList.remove ('show');

})

let openCreditard = document.querySelector('#credit-card');

openCheckout.addEventListener("click", () => body.classList.add ('show'));
openCreditard.addEventListener("click", () => { body.classList.add ('pay1');


})

const product = [ 
    {
        "id":1,
        "name": "Whey protein",
        "price": 50,
        "image": "img-svg/whey1.jpeg",
        "category":"whey protein",
        "link": "paginas/produto1.html"
    },
    {
        "id":1,
        "name": "Whey protein",
        "price": 80,
        "image": "img-svg/whey2.jpg",
        "category":"whey protein",
        "link": "paginas/produto1.html"
    },
    {
        "id":1,
        "name": "Whey protein",
        "price": 100,
        "image": "img-svg/whey3.jpeg",
        "category":"whey protein",
        "link": "paginas/produto1.html"
    },
    {
        "id":1,
        "name": "Whey protein",
        "price": 170,
        "image": "img-svg/whey4.png",
        "category":"whey protein",
        "link": "paginas/produto1.html"
    },
    {
        "id":2,
        "name": "Creatina",
        "price": 40,
        "image": "img-svg/creatina1.webp",
        "category":"creatina",
        "link": "paginas/produto1.html"
    },
    {
        "id":2,
        "name": "Creatina",
        "price": 180,
        "image": "img-svg/creatina2.webp",
        "category":"creatina",
        "link": "paginas/produto1.html"
    },
    {
        "id":2,
        "name": "Creatina",
        "price": 90,
        "image": "img-svg/creatina3.jpg",
        "category":"creatina",
        "link": "paginas/produto1.html"
    },
    {
        "id":3,
        "name": "Pre Treino",
        "price": 130,
        "image": "img-svg/pre1.jpeg",
        "category":"pre treino",
        "link": "paginas/produto1.html"
    },
    {
        "id":3,
        "name": "Pre Treino",
        "price": 130,
        "image": "img-svg/pre2.webp",
        "category":"pre treino",
        "link": "paginas/produto1.html"
    },
    {
        "id":3,
        "name": "Pre Treino",
        "price": 130,
        "image": "img-svg/pre3.jpg",
        "category":"pre treino",
        "link": "paginas/produto1.html"
    },
    {
        "id":1,
        "name": "Whey Protein",
        "price": 130,
        "image": "img-svg/whey6.jpeg",
        "category":"whey protein",
        "link": "paginas/produto1.html"
    },
    {
        "id":4,
        "name": "Termogênico",
        "price": 130,
        "image": "img-svg/termo1.jpeg",
        "category":"termogenico",
        "link": "paginas/produto1.html"
    },
    {
        "id":4,
        "name": "Termogênico",
        "price": 130,
        "image": "img-svg/termo2.jpeg",
        "category": "termogenico",
        "link": "paginas/produto1.html"
    },
    {
        "id":5,
        "name": "Glutamina",
        "price": 130,
        "image": "img-svg/glutamina3.jpeg",
        "category": "glutamina",
        "link": "paginas/produto1.html"
    },
    {
        "id":1,
        "name": "Whey Protein",
        "price": 130,
        "image": "img-svg/whey5.jpeg",
        "category": "whey protein",
        "link": "paginas/produto1.html"
    },
    {
        "id":1,
        "name": "Whey Protein",
        "price": 130,
        "image": "img-svg/whey7.jpeg",
        "category": "whey protein",
        "link": "paginas/produto1.html"
    },
];

const  categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;

const filterItems = (a)=>{
    const flterCategories = categories.filter(item);
    function item(value){
        if(value.id==a){
            return(
                value.id
            )
        }
    }
    displayItem(flterCategories)
}
const displayItem =(items) => {
document.getElementById('root').innerHTML = items.map((item)=> 
{
    var {name, price, image, link} = item;
    return(
        `<div class='box'>
            <a href="${link}">
            <div class='img-box'>
                <img class='images' src=${image}></img>
                </div></a>
            <div class='bottom'>
        <p>${name}</p>
        <h2 class="item-price">$${price}.00</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Comprar</button>"+
        `</div>
        </div>`
         )
}).join('');
}
displayItem(categories);
 

var cart = [];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}

function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(a){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = `<span><ion-icon class="shopping-cart-icon-empty" name="cart-outline"></ion-icon></span>
        <h4>Seu carrinho está vazio</h4>`;
        document.getElementById("total").innerHTML ="$ "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, name, price, link} = items;
            total=total=price
            document.getElementById("total").innerHTML = "$ "+total+".00";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12p;'>${name}</p>
                <h2 style='font-size:12px;'>$ ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );    
        }).join(''); 
    }

}

const input = document.querySelector('#cpf')

input.addEventListener('keypress',() => {
    let inputlength = input.value.length

    if (inputlength === 3 || inputlength === 7) {
        input.value += '.'
    }else if (inputlength === 11) {
        input.value += '-'
    }
})

const input2 = document.querySelector('#data')

input2.addEventListener('keypress',() => {
    let input2length = input2.value.length

    if (input2length === 2 || input2length === 5) {
        input2.value += '/'

}
})

const input3 = document.querySelector('#cep')

input3.addEventListener('keypress',() => {
    let input3length = input3.value.length

    if (input3length === 5) {
        input3.value += '-'

}
})


