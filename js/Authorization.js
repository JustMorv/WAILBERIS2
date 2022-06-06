



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