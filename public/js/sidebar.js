$(document).ready(function(){
    $(".sidebar-dropdown > a").click(function() {
        if (
          $(this)
            .parent()
            .hasClass("active")
        ) {
          $(".sidebar-dropdown").removeClass("active");
          $(this)
            .parent()
            .removeClass("active");
          $(this)
          .next(".sidebar-submenu")
          .removeClass('active');
        } else {
          // $(".sidebar-dropdown").addClass("active");
          $(this)
          .next(".sidebar-submenu")
          .addClass('active');
          $(this)
            .parent()
            .addClass("active");
        }
      });
      
      $("#close-sidebar").click(function() {
        $(".page-wrapper").removeClass("toggled");
      });
      $("#show-sidebar").click(function() {
        $(".page-wrapper").addClass("toggled");
      });
});

$(document).ready(function(){
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#avatar_img_member').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]);
    }
  }

  $('.avatar_member input').on('change', function(){
      readURL(this);
  });
})