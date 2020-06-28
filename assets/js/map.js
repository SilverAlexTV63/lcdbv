$description = $(".description-map");

  $('.enabled-map').hover(function() {

    $(this).attr("class", "enabled-map heyo-map");
    $description.addClass('active');
    $description.html($(this).attr('id'));
  }, function() {
    $description.removeClass('active');
  });

$(document).on('mousemove', function(e){

  $description.css({
    left:  e.pageX -600,
    top:   e.pageY -500
  });

});
