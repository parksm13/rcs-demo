$(document).ready(function() {
    // all custom jQuery will go here

    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $('ul li a').on("click", function(){
        $(".nav").find(".active").removeClass("active");
        $(this).parent().addClass("active");
     });

     $('#store a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
      });

      // store the currently selected tab in the hash value
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
        var id = $(e.target).attr("href").substr(1);
        console.log(id);
        //window.location.hash = id;
    });
});