function equiposAdd(x){
	var valid;	
	valid = validateEquipos(x);
	if(valid) {
		jQuery.ajax({
		url: "../php/updateEquipos.php",
        data:'id='+$("#id").val()+'&name='+$("#name").val()+'&description='+$("#description").val()+'&telephone='+$("#telephone").val()+'&email='+$("#email").val(),
        type: "POST",
		success:function(data){
		//$("#prices-status").html(data);
		},
		error:function (){}
		});
	}
}

function eventosAdd(x){
	var valid;	
	valid = validateEventos(x);
	if(valid) {
		jQuery.ajax({
		url: "../php/updateEventos.php",
        data:'id='+$("#id").val()+'&eventname='+$("#eventname").val()+'&description='+$("#description").val()+'&contactname='+$("#contactname").val()+'&phone='+$("#phone").val()+'&contactemail='+$("#contactemail").val()+'&location='+$("#location").val()+'&date='+$("#date").val(),
        type: "POST",
		success:function(data){
		//$("#prices-status").html(data);
		},
		error:function (){}
		});
	}
}

function proyectosAdd(x){
	var valid;	
	valid = validateProyectos(x);
	if(valid) {
		jQuery.ajax({
		url: "../php/updateProyectos.php",
        data:'id='+$("#id").val()+'&projectname='+$("#projectname").val()+'&description='+$("#description").val()+'&purpose='+$("#purpose").val()+'&values='+$("#values").val()+'&methods='+$("#methods").val()+'&associations='+$("#associations").val()+'&research='+$("#research").val(),
        type: "POST",
		success:function(data){
		//$("#prices-status").html(data);
		},
		error:function (){}
		});
	}
}

function videosAdd(x){
		var valid;	
	valid = validateVideos(x);
	if(valid) {
		jQuery.ajax({
		url: "../php/updateVideos.php",
        data:'id='+$("#id").val()+'&name='+$("#name").val()+'&description='+$("#description").val()+'&vedio='+$("#video").val()+'&URLname='+$("#URLname").val(),
        type: "POST",
		success:function(data){
		//$("#prices-status").html(data);
		},
		error:function (){}
		});
	}
}

function validateEquipos(x) {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
if(x=="0"){
	if(!$("#id").val()) {
		$("#id-info").html("(required)");
		$("#id").css('background-color','#FFFFDF');
		valid = false;
	}
}
	if(!$("#name").val()) {
		$("#name-info").html("(required)");
		$("#name").css('background-color','#FFFFDF');
		valid = false;
	}
		
	
	if(!$("#description").val()) {
		$("#description-info").html("(required)");
		$("#description").css('background-color','#FFFFDF');
		valid = false;
	}
	
	if(!$("#telephone").val()) {
		$("#telephone-info").html("(required)");
		$("#telephone").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#email").val()) {
		$("#email-info").html("(required)");
		$("#email").css('background-color','#FFFFDF');
		valid = false;
	}
	return valid;
}

function validateEventos(x) {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
if(x=="0"){
	if(!$("#id").val()) {
		$("#id-info").html("(required)");
		$("#id").css('background-color','#FFFFDF');
		valid = false;
	}
}
	if(!$("#eventname").val()) {
		$("#eventname-info").html("(required)");
		$("#eventname").css('background-color','#FFFFDF');
		valid = false;
	}
		
	
	if(!$("#description").val()) {
		$("#description-info").html("(required)");
		$("#description").css('background-color','#FFFFDF');
		valid = false;
	}
	
	if(!$("#contactname").val()) {
		$("#contactname-info").html("(required)");
		$("#contactname").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#phone").val()) {
		$("#phone-info").html("(required)");
		$("#phone").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#contactemail").val()) {
		$("#contactemail-info").html("(required)");
		$("#contactemail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#location").val()) {
		$("#location-info").html("(required)");
		$("#location").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#date").val()) {
		$("#date-info").html("(required)");
		$("#date").css('background-color','#FFFFDF');
		valid = false;
	}
	return valid;
}

function validateProyectos(x) {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
if(x=="0"){
	if(!$("#id").val()) {
		$("#id-info").html("(required)");
		$("#id").css('background-color','#FFFFDF');
		valid = false;
	}
}
	if(!$("#projectname").val()) {
		$("#projectname-info").html("(required)");
		$("#projectname").css('background-color','#FFFFDF');
		valid = false;
	}
		
	
	if(!$("#description").val()) {
		$("#description-info").html("(required)");
		$("#description").css('background-color','#FFFFDF');
		valid = false;
	}
	
	if(!$("#purpose").val()) {
		$("#purpose-info").html("(required)");
		$("#purpose").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#values").val()) {
		$("#values-info").html("(required)");
		$("#values").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#methods").val()) {
		$("#methods-info").html("(required)");
		$("#methods").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#associations").val()) {
		$("#associations-info").html("(required)");
		$("#associations").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#research").val()) {
		$("#research-info").html("(required)");
		$("#research").css('background-color','#FFFFDF');
		valid = false;
	}
	return valid;
}

function validateVideos(x) {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
if(x=="0"){
	if(!$("#id").val()) {
		$("#id-info").html("(required)");
		$("#id").css('background-color','#FFFFDF');
		valid = false;
	}
}
	if(!$("#video").val()) {
		$("#video-info").html("(required)");
		$("#video").css('background-color','#FFFFDF');
		valid = false;
	}
		
	
	if(!$("#description").val()) {
		$("#description-info").html("(required)");
		$("#description").css('background-color','#FFFFDF');
		valid = false;
	}
	
	if(!$("#URLname").val()) {
		$("#URLname-info").html("(required)");
		$("#URLname").css('background-color','#FFFFDF');
		valid = false;
	}
	
	return valid;
}
