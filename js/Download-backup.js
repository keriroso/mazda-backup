(function($){
  $(function(){
      var valor
      $('select.selected-backup').on('change',function(){
         valor = $(this).val();
      });          
      $('.donwload-backup').click(function(){
      $("#iDownload").attr('src', 'exportar.php?hid_categoria='+ valor );
      });
      
	}); // end of document ready
})(jQuery); // end of jQuery name space
  