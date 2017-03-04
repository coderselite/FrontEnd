
  $(function() {
	
	$('#home-page-link').click(function(e) {
		$("#home-page").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$("#register-form").fadeOut(100);
		$("#suggestions-page").fadeOut(100);
		$("#contactUs-page").fadeOut(100);
    $("#projects-page").fadeOut(100);
    $("#aboutUs-page").fadeOut(100);
    $("#suggestion-form").fadeOut(100);
    $("#feedbackAuth-page").fadeOut(100);
    $("#suggestionAuth-form").fadeOut(100);
    $("#projectsAuth-page").fadeOut(100);
    $("#forgot-password-page").fadeOut(100);
    $('#home-page').removeClass('hidden');
		$(this).addClass('active');
		e.preventDefault();
	});
  $('#aboutUs-page-link').click(function(e) {
		$("#aboutUs-page").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$("#register-form").fadeOut(100);
		$("#suggestions-page").fadeOut(100);
		$("#contactUs-page").fadeOut(100);
    $("#projects-page").fadeOut(100);
    $("#home-page").fadeOut(100);
    $("#suggestion-form").fadeOut(100);
    $("#feedbackAuth-page").fadeOut(100);
    $("#suggestionAuth-form").fadeOut(100);
    $("#projectsAuth-page").fadeOut(100);
    $("#forgot-password-page").fadeOut(100);
    $('#aboutUs-page').removeClass('hidden');
		$(this).addClass('active');
		e.preventDefault();
	});
  $('#contactUs-page-link').click(function(e) {
		$("#contactUs-page").delay(100).fadeIn(100);
		$("#login-form").fadeOut(100);
		$("#register-form").fadeOut(100);
		$("#suggestions-page").fadeOut(100);
    $("#projects-page").fadeOut(100);
    $("#suggestion-form").fadeOut(100);
    $("#home-page").fadeOut(100);
    $("#aboutUs-page").fadeOut(100);
    $("#feedbackAuth-page").fadeOut(100);
    $("#suggestionAuth-form").fadeOut(100);
    $("#projectsAuth-page").fadeOut(100);
    $("#forgot-password-page").fadeOut(100);
		$('#contactUs-page').removeClass('hidden');
		$(this).addClass('active');
		e.preventDefault();
	});
  $('#projects-page-link').click(function(e) {
		$("#projects-page").delay(100).fadeIn(100);
		$("#login-form").fadeOut(100);
		$("#register-form").fadeOut(100);
		$("#suggestions-page").fadeOut(100);
    $("#contactUs-page").fadeOut(100);
    $("#home-page").fadeOut(100);
    $("#aboutUs-page").fadeOut(100);
    $("#suggestion-form").fadeOut(100);
    $("#feedbackAuth-page").fadeOut(100);
    $("#suggestionAuth-form").fadeOut(100);
    $("#projectsAuth-page").fadeOut(100);
    $("#forgot-password-page").fadeOut(100);
		$('#projects-page').removeClass('hidden');
		$(this).addClass('active');
		e.preventDefault();
	});
  $('#suggestions-page-link').click(function(e) {
		$("#suggestions-page").delay(100).fadeIn(100);
		$("#login-form").fadeOut(100);
		$("#register-form").fadeOut(100);
    $("#projects-page").fadeOut(100);
    $("#contactUs-page").fadeOut(100);
    $("#home-page").fadeOut(100);
    $("#aboutUs-page").fadeOut(100);
    $("#suggestion-form").fadeOut(100);
    $("#feedbackAuth-page").fadeOut(100);
    $("#suggestionAuth-form").fadeOut(100);
    $("#projectsAuth-page").fadeOut(100);
    $("#forgot-password-page").fadeOut(100);
		$('#suggestions-page').removeClass('hidden');
		$(this).addClass('active');
		e.preventDefault();
	});
  $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$("#suggestions-page").fadeOut(100);
		$("#contactUs-page").fadeOut(100);
    $("#projects-page").fadeOut(100);
    $("#home-page").fadeOut(100);
    $("#aboutUs-page").fadeOut(100);
    $("#suggestion-form").fadeOut(100);
    $("#feedbackAuth-page").fadeOut(100);
    $("#suggestionAuth-form").fadeOut(100);
    $("#projectsAuth-page").fadeOut(100);
    $("#forgot-password-page").fadeOut(100);
		$('#login-form').removeClass('hidden');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$("#suggestions-page").fadeOut(100);
		$("#contactUs-page").fadeOut(100);
    $("#projects-page").fadeOut(100);
    $("#home-page").fadeOut(100);
    $("#aboutUs-page").fadeOut(100);
    $("#feedbackAuth-page").fadeOut(100);
    $("#suggestion-form").fadeOut(100);
    $("#suggestionAuth-form").fadeOut(100);
    $("#projectsAuth-page").fadeOut(100);
    $("#forgot-password-page").fadeOut(100);
		$('#register-form').removeClass('hidden');
		$(this).addClass('active');
		e.preventDefault();
	});	  
  $('#suggestionsAuth-page-link').click(function(e) {
		$("#suggestionAuth-form").delay(100).fadeIn(100);
    $("#contactUs-page").fadeOut(100);
    $("#home-page").fadeOut(100);
    $("#aboutUs-page").fadeOut(100);
    $("#projects-page").fadeOut(100);
    $("#login-form").fadeOut(100);
		$("#register-form").fadeOut(100);
    $("#feedbackAuth-page").fadeOut(100);
    $("#projectsAuth-page").fadeOut(100);
    $("#forgot-password-page").fadeOut(100);
		$('#suggestionAuth-form').removeClass('hidden');
		$(this).addClass('active');
		e.preventDefault();
	});
  $('#projectsAuth-page-link').click(function(e) {
		$("#projectsAuth-page").delay(100).fadeIn(100);
		$("#login-form").fadeOut(100);
		$("#register-form").fadeOut(100);
		$("#suggestions-page").fadeOut(100);
    $("#contactUs-page").fadeOut(100);
    $("#home-page").fadeOut(100);
    $("#aboutUs-page").fadeOut(100);
    $("#suggestion-form").fadeOut(100);
    $("#suggestionAuth-form").fadeOut(100);
    $("#feedbackAuth-page").fadeOut(100);
    $("#forgot-password-page").fadeOut(100);
		$('#projectsAuth-page').removeClass('hidden');
		$(this).addClass('active');
		e.preventDefault();
	});
  $('#feedbackAuth-page-link').click(function(e) {
	$("#feedbackAuth-page").delay(100).fadeIn(100);
	$("#login-form").fadeOut(100);
	$("#register-form").fadeOut(100);
	$("#suggestions-page").fadeOut(100);
    $("#contactUs-page").fadeOut(100);
    $("#home-page").fadeOut(100);
    $("#aboutUs-page").fadeOut(100);
    $("#suggestion-form").fadeOut(100);
    $("#suggestionAuth-form").fadeOut(100);
    $("#projectsAuth-page").fadeOut(100);
    $("#forgot-password-page").fadeOut(100);
	$('#feedbackAuth-page').removeClass('hidden');
	$(this).addClass('active');
	e.preventDefault();
	});
  $('#forgot-password-page-link').click(function(e) {
	$("#forgot-password-page").delay(100).fadeIn(100);
	$("#login-form").fadeOut(100);
	$("#register-form").fadeOut(100);
	$("#suggestions-page").fadeOut(100);
    $("#contactUs-page").fadeOut(100);
    $("#home-page").fadeOut(100);
    $("#aboutUs-page").fadeOut(100);
    $("#suggestion-form").fadeOut(100);
    $("#suggestionAuth-form").fadeOut(100);
    $("#projectsAuth-page").fadeOut(100);
    $("#feedbackAuth-page").fadeOut(100);
	$('#forgot-password-page').removeClass('hidden');
	$(this).addClass('active');
	e.preventDefault();
	});
	
	  
  $('#userPassword').on('keyup', function () {
    if ($(this).val() == $('#userOldPassword').val()) {
        $('#message1').html('Enter new password').css('color', 'red');
		document.getElementById("confirmPassword").disabled = true;
		document.getElementById("submit").disabled = true;
    } else{
		$('#message1').html('').css('color', 'red');
		document.getElementById("confirmPassword").disabled = false;
		document.getElementById("submit").disabled = false;
	}
  });
  
  $('#confirmPassword').on('keyup', function () {
    if ($(this).val() == $('#userPassword').val()) {
        $('#message').html('matching').css('color', 'green');
		document.getElementById("submit").disabled = false;
    } else {
		$('#message').html('not matching').css('color', 'red');
		document.getElementById("submit").disabled = true;
	}
  });
  
});
