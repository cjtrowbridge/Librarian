function LibrarianQuery( Q ){
  $.post( "./", { query: Q })
  .done(function( data ) {
    return data;
  });
}
