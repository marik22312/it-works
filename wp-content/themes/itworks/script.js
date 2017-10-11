(function($) {

$(document).ready(function() {
  $('#fullpage').fullpage({
    // paddingTop: '10vh'
  });
  console.log('All loaded up!!');

  $('#mobile-ham').on('click', function(){
    $('#header-menu').slideToggle(500);
  });

});

})(jQuery)
