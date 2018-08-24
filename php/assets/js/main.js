/*
	Visualize by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license
*/

$(function() {

	$('#fullname').click(function(){
	    var name = $(this).text();
	    $(this).html('');
	    $('<input></input>')
	        .attr({
	            'type': 'text',
	            'name': 'fname',
	            'id': 'txt_fullname',
	            'size': '30',
	            'value': name
	        })
	        .appendTo('#fullname');
	    $('#txt_fullname').focus();
	});

	$(document).on('blur','#txt_fullname', function(){
	    var name = $(this).val();
	    $.ajax({
	      type: 'post',
	      url: 'change-name.xhr?name=' + name,
	      success: function(){
	        $('#fullname').text(name);
	      }
	    });
	});




	// Vars.
		var	$window = $(window),
			$body = $('body'),
			$wrapper = $('#wrapper');

	// Breakpoints.
		skel.breakpoints({
			xlarge:	'(max-width: 1680px)',
			large:	'(max-width: 1280px)',
			medium:	'(max-width: 980px)',
			small:	'(max-width: 736px)',
			xsmall:	'(max-width: 480px)'
		});

	// Disable animations/transitions until everything's loaded.
		$body.addClass('is-loading');

		$window.on('load', function() {
			$body.removeClass('is-loading');
		});

	// Poptrox.
		$window.on('load', function() {

			$('.thumbnails').poptrox({
				onPopupClose: function() { $body.removeClass('is-covered'); },
				onPopupOpen: function() { $body.addClass('is-covered'); },
				baseZIndex: 10001,
				useBodyOverflow: false,
				usePopupEasyClose: true,
				overlayColor: '#000000',
				overlayOpacity: 0.75,
				popupLoaderText: '',
				fadeSpeed: 500,
				usePopupDefaultStyling: false,
				windowMargin: (skel.breakpoint('small').active ? 5 : 50)
			});

		});

});
