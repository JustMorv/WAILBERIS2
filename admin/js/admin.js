function init() {
    $.post(
        "core.php",
        {
            "action" : "init"
        },
        showGoods
    );
}

function showGoods(data) {
    data = JSON.parse(data);
    console.log(data);
    var out='<select>';
    out +='<option data-id="0">Новый товар</option>';
    for (var id in data) {      
        out +=`<option data-id="${id}">${data[id].title}</option>`;
    }
    out +='</select>';
    $('.product').html(out);
    $('.product select').on("change",selectGoods);
}
function selectGoods(){
    let id  = $('.product select option:selected').attr("data-id")
    console.log(id)
    $.post(
        "core.php",
        {
            "action" : "selectOneGoods",
            "gid": id,
        },
        function(data){
            data = JSON.parse(data)
            $("#gtitle").val(data.title)
            $("#gprice").val(data.price)
            $("#gdesk").val(data.desk)
            $("#gimg").val(data.img)
            $("#gid").val(data.id)

        }
    )
}
function saveToDb(){
    let id = $("#gid").val()
    console.log(id)
    if (id != ""){
        $.post(
            "core.php",
            {
                "action":"updateGoods",
                "id": id,
                "gtitle": $("#gtitle").val(),
                "gprice": $("#gprice").val(),
                "gdesk": $("#gdesk").val(),
                "gimg": $("#gimg").val(),

            },
            function(data){
                if(data == 1){
                    alert("запись добавлена в базу   ")
                    init()
                }else{
                    console.log(data)
                }
            }
        )
    }else{
        $.post(
            "core.php",
            {
                "action":"newGoods",
                "id": 0,
                "gtitle": $("#gtitle").val(),
                "gprice": $("#gprice").val(),
                "gdesk": $("#gdesk").val(),
                "gimg": $("#gimg").val(),

            },
            function(data){
                if(data == 1){
                    alert("запись добавлена в базу   ")
                    init()
                }else{
                    console.log(data)
                }
            }
        )
    }
}

$(document).ready(function () {
   init();
   $(".add-to-db").on("click",saveToDb)

});