function LibrarianQuery( Q, callback ){
  $.post( "./", { query: Q })
  .done(function( data ) {
    callback( data );
  });
}
