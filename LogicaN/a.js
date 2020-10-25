$( ".checkbox" ).on("click", function() {
    if( $( "body" ).hasClass( "dark" )) {
      $( "body" ).removeClass( "dark" );
      $( ".checkbox" ).text( "OFF" );
    } else {
      $( "body" ).addClass( "dark" );
      $( ".checkbox" ).text( "ON" );
    }
});