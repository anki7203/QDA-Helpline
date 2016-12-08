(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

// remove warnings after 10 seconds
setTimeout(function(){ $('.warning').not('.good').addClass('show'); }, 1000);
setTimeout(function(){ $('.warning').not('.good').removeClass('show'); }, 11000);
if($('.warning').length){ $('.quiz-btn').remove(); }


//nav hover effects
$('.nav').hover( function(){toggleNav(); }, function(){toggleNav();} );
function toggleNav(){ $('.nav, .container').toggleClass('on'); }

//Show sign-in modal
$('.signin-btn').on('click',function(e){
	e.stopPropagation();
	$('.wp-social-login-widget').addClass('show');
});
$(document).on('click', function(e) {
	$('.wp-social-login-widget').removeClass('show');
});

//set active nav parent
$('.menu > li').each(function(i){
	var curUrl = window.location.href;
	if(curUrl.indexOf('/one/') !== -1){ $('.one').addClass('on'); }
	if(curUrl.indexOf('/two/') !== -1){ $('.two').addClass('on'); }
	if(curUrl.indexOf('/three/') !== -1){ $('.three').addClass('on'); }
	if(curUrl.indexOf('/four/') !== -1){ $('.four').addClass('on'); }
	if(curUrl.indexOf('/five/') !== -1){ $('.five').addClass('on'); }
	if(curUrl.indexOf('/six/') !== -1){ $('.six').addClass('on'); }
	if(curUrl.indexOf('/seven/') !== -1){ $('.seven').addClass('on'); }
	if(curUrl.indexOf('/eight/') !== -1){ $('.eight').addClass('on'); }
});


//record quiz
$('.wpProQuiz_button').on('click',function(){
	if($(this).val() == 'Finish quiz'){
		var userID = $('article').data('user');
		var quizID = $('article').data('quiz');
		$.ajax({
			url: "http://www.andrewkiproff.com/qda/wp-content/themes/html5blank-stable/helpline.php?getQuiz="+userID+'|'+quizID, 
			success: function(result){
				var score = $('.wpProQuiz_correct_answer').text();
				var total = $('.wpProQuiz_correct_answer').next('span').text();
				var percent = (score/total)*100;
				var output = '<span>You have reached '+score+' of '+total+' points, ('+percent+'%)</span><br><span>'+result+'</span>';
	        	$('.wpProQuiz_points').empty().append(output);
	    	}
	    });
		setTimeout(function(){ $('.warning').addClass('show'); }, 1000);
		setTimeout(function(){ 
			$('.warning').removeClass('show');
			var userID = $('article').data('user');
			var quizID = $('article').data('quiz');
			var score = $('.wpProQuiz_correct_answer').text();
			var total = $('.wpProQuiz_correct_answer').next('span').text();
			var redirect =  $('article').data('url');
			console.log(userID+'|'+quizID+'|'+score+'|'+total);
			console.log(redirect);
			$.ajax({ url: "http://www.andrewkiproff.com/qda/wp-content/themes/html5blank-stable/helpline.php?recordQuiz="+userID+'|'+quizID+'|'+score+'|'+total }); 
			window.location.href = redirect;
		}, 8000); 
	}
});

//start/finish lesson, go to pre-quiz
$('.start, .finish').on('click',function(){
	if($('#survey').length){
		var redirect = $('#survey').data('url');
		var surveyID = $('#survey').data('id');
		window.location.href = "http://www.andrewkiproff.com/qda/survey/?id="+surveyID+"&url="+redirect;
	}

	if($('#quiz').length){
		if($('#quiz').data('id') == 0){ window.location.href = $('#quiz').data('url'); return; }
		var redirect = $('#quiz').data('url');
		var quizID = $('#quiz').data('id');
		window.location.href = "http://www.andrewkiproff.com/qda/quiz/?id="+quizID+"&url="+redirect;
	}
});

//replace video
if($('#video').length){
	var src = $('#video').data('url');
	$.ajax({
		url: "http://www.andrewkiproff.com/qda/wp-content/themes/html5blank-stable/helpline.php?video="+src, 
		success: function(result){
        	$('#video').empty().append(result);
    	}
    });
}



$(window).on('resize',function(){
	clearTimeout(resizeTimer);
	var resizeTimer = setTimeout(function(){
		setMainHeight();
	}, 100);
});



		
	});
	
})(jQuery, this);
