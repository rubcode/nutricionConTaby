/***********EFECTOS********************/
$(document).ready(function(){
	 $(".button-collapse").sideNav();
	 $('.modal').modal();

	 var muestrapopup = setInterval(function(){
	 	$('#poppup').modal('open');
	 	clearInterval(muestrapopup);
	 },3000);

	 cargarrecetario();

	 $(".right").click(function(){
	 	derecha();
	 });
	 $(".left").click(function(){
	 	izquierda();
	 });


});

//Cambiar color de la nav
$(window).scroll(function(){
	if($("nav").offset().top >80)
	{
		$(".mynav").addClass("purple");
		$(".textnav").addClass("white-text");
		$(".translucido").attr("src","img/logo/logo_solid.png");
		$(".translucido").removeClass("logoheader");
		$(".translucido").addClass("logoheadermin");
	}
	else
	{
		$(".mynav").removeClass("purple");
		$(".textnav").removeClass("white-text");
		$(".translucido").attr("src","img/logo/logo.png");
		$(".translucido").removeClass("logoheadermin");
		$(".translucido").addClass("logoheader");

	}


});


//Slider

var carrusel = setInterval(function(){
	var slider = $('.myslider');

	$(".myslider .myslides:last").insertBefore(".myslider .myslides:first");
	slider.css("margin-left","-100%");

},12000);

function derecha()
{
	clearInterval(carrusel);
	var slider = $('.myslider');

	$(".myslider .myslides:last").insertBefore(".myslider .myslides:first");
	slider.css("margin-left","-100%");
}
function izquierda()
{
	clearInterval(carrusel);
	var slider = $('.myslider');

	$(".myslider .myslides:last").insertBefore(".myslider .myslides:first");
	slider.css("margin-left","-200%");
}
 

 //Que aparezcan con scrool
new WOW().init();

function cargarrecetario()
{
	if($("#flipbook").length >0 )
	{
		$("#flipbook").turn({
			/*width:1450,
			height:600,*/
			elevation: 50,
			autoCenter: true,
			gradients: true,

		});
	}
	if($("#flipbookmobil").length >0 ) {
		$("#flipbookmobil").turn({
			/*width:1450,
			height:600,*/
			elevation: 50,
			autoCenter: true,
			gradients: true,

		});
	}
}
