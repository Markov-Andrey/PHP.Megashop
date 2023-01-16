$( ".delete" ).on('click', function(e) {
  e.preventDefault();
  
  let id = $(this).attr('id');

  jsonData = {id: id}
  $.post( "del", jsonData )
      .done(function() {
        $("#"+id).parent().parent().remove();
      }
  );
});