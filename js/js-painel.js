$(function(){

    var textoLink = "Dashboard";
    // adiciona classe active nos botoes do menu
    $('.menu-painel li').click(function(){
        $('.menu-painel li').removeClass('active');
        var textoLink = $('>a', this).text();
        localStorage.setItem('clickMenuSidebar', textoLink);

    });

    if(localStorage.clickMenuSidebar != "Dashboard"){
    $('.menu-painel li').removeClass('active');
    $('.menu-painel li a:contains("'+ localStorage.clickMenuSidebar +'")').parent().addClass('active');
    }
    if(localStorage.clickMenuSidebar == "Sair" || localStorage.clickMenuSidebar == "Dashboard"){
        $('.menu-painel li').removeClass('active');
        localStorage.setItem('clickMenuSidebar', 'Dashboard');
        $('.menu-painel li a:contains("'+ localStorage.clickMenuSidebar +'")').parent().addClass('active');
    }

     // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });

});