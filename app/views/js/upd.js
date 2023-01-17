$( ".update" ).on('click', function(e) {
  e.preventDefault();

  //функция автозаполнения полей которые нужно изменять
  set = (a) => {
    let obj = $(this).parent().parent()
    let result = $(obj).children("." + a).text()
    $("#" + a + "Upd").val(result)
  }
  set("name")
  set("price")
});

/*
$( "#form2" ).submit(function( e ) {
  e.preventDefault();
  let id = $(this)
  console.log(id)
  /*
  jsonData = {name: name, price: price}
  $.post( "upd", jsonData )
      .done(function() {
          
      }
  );
});
*/