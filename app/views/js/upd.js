let id //общая переменная для обеих функций
let obj

//функция автозаполнения полей из данных таблицы которые нужно изменять
$( ".update" ).on('click', function(e) {
  e.preventDefault();

  id = $(this).attr('id');
  obj = $(this).parent().parent()

  set = (a) => {
    let result = $(obj).children("." + a).text()
    $("#" + a + "Upd").val(result)
  }

  set("name")
  set("price")
});


//данные для отправки в контроллер
$( "#form2" ).submit(function( e ) {
  e.preventDefault();

  let name = ( $("#nameUpd").val() )
  let price = ( $("#priceUpd").val() )

  jsonData = {name: name, price: price, id: id}
  $.post( "upd", jsonData )
      .done(function() {
          $(obj).children(".name").text(name)
          $(obj).children(".price").text(price)
      }
  );
});
