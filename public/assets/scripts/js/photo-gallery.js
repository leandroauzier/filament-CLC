$(document).ready(function(){        
	$('li img').on('click',function(){
		var src = $(this).attr('src');
		var img = '<img src="' + src + '" class="img-responsive"/>';
		
		//start of new code new code
		var index = $(this).parent('li').index();   
		
		var html = '';
		html += img;                
		html += '<div id="controle" style="height:25px;clear:both;display:block;margin-top: 20px; margin-bottom: 20px">';
		html += '<a class="controls previous btn btn-default" href="' + (index) + '"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>';
		html += '<a class="controls next btn btn-default" href="'+ (index+2) + '"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>';
		html += '</div>';
		
		$('#myModal').modal();
		$('#myModal').on('shown.bs.modal', function(){
			$('#myModal .modal-body').html(html);
			//new code
			$('a.controls').trigger('click');
		})
		$('#myModal').on('hidden.bs.modal', function(){
			$('#myModal .modal-body').html('');
		});
		
		
		
		
   });	
})
        
         
$(document).on('click', 'a.controls', function(){
	var index = $(this).attr('href');
	var src = $('ul.row li:nth-child('+ index +') img').attr('src');             
	
	$('.modal-body img').attr('src', src);
	
	var newPrevIndex = parseInt(index) - 1; 
	var newNextIndex = parseInt(newPrevIndex) + 2; 
	
	if($(this).hasClass('previous')){               
		$(this).attr('href', newPrevIndex); 
		$('a.next').attr('href', newNextIndex);
	}else{
		$(this).attr('href', newNextIndex); 
		$('a.previous').attr('href', newPrevIndex);
	}
	
	var total = $('ul.row li').length + 1; 
	//hide next button
	if(total === newNextIndex){
		$('a.next').hide();
	}else{
		$('a.next').show()
	}            
	//hide previous button
	if(newPrevIndex === 0){
		$('a.previous').hide();
	}else{
		$('a.previous').show()
	}
	
	
	return false;
});