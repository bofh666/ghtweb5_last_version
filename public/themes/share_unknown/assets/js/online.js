 
$(document).ready(function(){
	
	var max_online = 1001;
  
	$('.server_block').each(function(i, el){
		if( $(el).attr('data-online') > max_online )
			$(el).attr('data-online', max_online);

		if($(el).attr('data-online')/max_online*100 > 50) { //yellow line
			$(el).find('.loaded').addClass('medium');
		}
		if($(el).attr('data-online')/max_online*100 > 75) {  //red line
			$(el).find('.loaded').addClass('high');
		}
		$(el).find('.loaded').width($(el).attr('data-online')/max_online*100+'%');
		$(el).find('.lcurrent span').html(Math.round($(el).attr('data-online')/max_online*100));
	});
});