$("[id^='put_is_read_']").click(function(){

	var tabId = $(this).attr('id').split('_');
	var id = tabId[3];
    //Recuperation de la liste des commentaires
    $.ajax({
       url : 'AjaxCommentaire/put/'+id, // La ressource ciblée
       type : 'GET', // Le type de la requête HTTP.
       data : 'is_read=1', // On fait passer nos variables, exactement comme en GET.
    	success : function(isRead){
           $('#put_is_read_'+id).html('<i class="fas fa-check" style="color:green;"></i>' );
       }
    });   
});

$('a#btnYes').click(function(){

  var id = $modal.find('#modal-commentaire-id').val();
    $.ajax({
       url : 'commentaire/signaler/'+id, // La ressource ciblée
       type : 'GET', // Le type de la requête HTTP
      success : function(signal){
          $("#signal_button_"+id).css("display", "none");
       }
    });   
});

