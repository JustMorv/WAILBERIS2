// ------------------------------AOS.JS--------------------------------//
  AOS.init();

  



  $(".login-btn").click(function (event) {
    event.preventDefault();
    $(`input`).removeClass("error_border")
  
    let login = $('input[name="login"]').val();
    let password = $('input[name="password"]').val();
  
  
    $.ajax({
      url:"/includes/authorizationFunc.php",
      type:"post",
      dataType:"json",
      data:{
        login:login,
        password : password
      },
      success(data){
        console.log(data)
        if(data.status){
          document.location.href = "/profile.php";
        }else{
          if(data.type === 1){
            data.fields.forEach(field => {
              $(`input[name="${field}"]`).addClass("error_border")
            });
          }
          $('.msg').removeClass("msgNone").text(data.message )
  
        }
      },
    });
  });
  
  
  // получение авы 
  let avatar = false
  
  $('input[name="regAvatar"]').change((e)=>{
    avatar = e.target.files[0]
    console.log(avatar)
  })
  
  
  // -----------------------------Регистрация
  
  $(".register-btn").click(function (event) {
    event.preventDefault();
    $(`input`).removeClass("error_border")
  
    let regFullName = $('input[name="regFullName"]').val();
    let regLoggin = $('input[name="regLoggin"]').val();
    let regEmaill = $('input[name="regEmaill"]').val();
    let regPassword = $('input[name="regPassword"]').val();
    let regPasswordAccept = $('input[name="regPasswordAccept"]').val();
  
    let formData = new FormData()
      formData.append("regFullName",regFullName)
      formData.append("regLoggin",regLoggin)
      formData.append("regEmaill",regEmaill)
      formData.append("regPassword",regPassword)
      formData.append("regPasswordAccept",regPasswordAccept)
      formData.append("regAvatar",avatar)
  
  
  
  
  
    $.ajax({
      url:"/includes/resistered.php",
      type:"post",
      dataType:"json",
      processData: false,
      contentType:false,
      cache: false,
      data:formData,
      success(data){
        console.log(data)
        if(data.status){
          document.location.href = "/authorization.php";
        }else{
          if(data.type === 1){
            data.fields.forEach(field => {
              $(`input[name="${field}"]`).addClass("error_border")
            });
          }
          $('.msg').removeClass("msgNone").text(data.message )
  
        }
      },
    });
  });
//   //

  // jquery
  function initJSON(){
    // $.getJSON("../db/db.json",productFunc)
    $.post(
      "admin/core.php",
      {
        "action": "loadGoods",
      },
      productFunc
    )
    
  }

  let cart = {};
  function productFunc(data){
    data = JSON.parse(data)
    let out = "";
    for(k in data){
      out +=`
      <div class="product__cart">
          <div class="product_container">
              <div class="product_img">
                  <img src="${data[k].img}1.png" alt="">
              </div>
              <div class="product_name">
                  <p>${data[k].title}</p>
              </div>
              <div class="product_price">
                  <p>${data[k].price}</p>
              </div>
              <div class="product_btns">
                  <buttton class="product_carts" data-id="${data[k].id}">В корзину</buttton>
                  <buttton class="product_show">Осмотр</buttton>
              </div>
          </div>
      </div>
      `;
    }
    $(".product-hits").html(out)
    $(".product_carts").on("click", addToCart)

  }

  function addToCart(){

    let id = $(this).attr("data-id")
    let count = 0
    for(k in cart){
      count++
      $(".prod-num").html(count)

    }

  }


  initJSON()



//   // --------------------Authorization





//   // fetch("../db/db.json")
//   // .then((response)=> console.log(response))



      
//     // linksCardCLICK

// //     const navigationLink = document.querySelectorAll(".navigation_item")
// //     const productsCardContainer = document.querySelector(".cardrender")

// //     const getCard = async () => {
// //         const result = await fetch("db/db.json")
// //         if (!result.ok) {
// //             throw "it doesn't work" + result.status
// //         }
// //         return await result.json()
// //     }

//   //   const cteareCard = (optionCArd) => {
//   //       const card = document.createElement("div")
//   //       card.className = "productsCard"
//   //       card.innerHTML = `
//   //   <div class="product__container">
//   //       <div class="container__card_product">
//   //           <h2 class="product__name">${optionCArd.title}</h2>
//   //           <a class="product__buy js-modal-open" href="#modal-1">купить</a>
//   //           <a href="#modal-2" class="product__info js-modal-open">Подробно</a>
//   //           <div class="product__circle"></div>
//   //           <div class="product__Price0nlyModal" style="display: none;">${optionCArd.price}</div>
//   //           <img class="product__img" src="${optionCArd.img}" alt="">
//   //       </div>
//   // </div>`
// //         return card

// //     }

// //     const renderCartClick = (data) => {
// //         productsCardContainer.textContent = ""
// //         const cards = data.map(cteareCard)
// //         productsCardContainer.append(...cards)

// //         document.body.classList.add("show-goods")
// //         cardt3D()

// //     }


// //     // getCard().then(renderCartClick)


// //     // filter
// //     const filterCards = (field, value) => {
// //         getCard()
// //             .then((data) => {
// //                 const filteredCard = data.filter((card) => {
// //                     return card[field] === value
// //                 })
// //                 return filteredCard
// //             })
// //             .then(renderCartClick)
// //     }

// //     // вывод по клику етих, как их там... карточек! 

// //     navigationLink.forEach((item) => {
// //         productsCardContainer.style.animation = ""
// //         item.addEventListener("click", (event) => {
// //             event.preventDefault()
// //             const field = item.dataset.field
// //             const value = item.textContent
// //             filterCards(field, value)
// //             productsCardContainer.style.animation = "fade 1.5s"

// //         })
// //     })


  
