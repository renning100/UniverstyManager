$(document).ready(function() {
    var menuFlag = false;
    $("#btn-hamburger").click(function() {
        menuFlag = !menuFlag;
        if (menuFlag) {
            $("#navbarSupportedContent").fadeIn(500);
            $(".menu-close-state").removeClass("mobile-nav").hide();
            $(".menu-open-state").css({display: 'flex'});
            $("<span class='navbar-logo-icon'></span>").insertAfter(".navbar-toggler");
        } else {
            $("#navbarSupportedContent").hide();
            $(".menu-close-state").addClass("mobile-nav");
            $(".menu-open-state").hide();
            $(".navbar-logo-icon").remove();
        };
    })
    $(".accordion-btn").click(function() {
        if ($(this).hasClass("opened")) {
            $(".accordion-btn").removeClass("opened");
        } else {
            $(".accordion-btn").removeClass("opened");
            $(this).addClass("opened");
        }
    })
    $(window).resize(function() {
        var windowHeight = $(window).height(); // New height
        var windowWidth = $(window).width(); // New width
        if (windowWidth > 992) {
            if (menuFlag) {
                $("#btn-hamburger").click();
            }
        }
      });
})
document.addEventListener("DOMContentLoaded", function(){
    document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
      
      element.addEventListener('click', function (e) {
  
        let nextEl = element.nextElementSibling;
        let parentEl  = element.parentElement;	
  
          if(nextEl) {
              e.preventDefault();	
              let mycollapse = new bootstrap.Collapse(nextEl);
              
              if(nextEl.classList.contains('show')){
                mycollapse.hide();
              } else {
                  mycollapse.show();
                  // find other submenus with class=show
                  var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                  // if it exists, then close all of them
                  if(opened_submenu){
                    new bootstrap.Collapse(opened_submenu);
                  }
              }
          }
      }); // addEventListener
    }) // forEach
  }); 
  // DOMContentLoaded  end