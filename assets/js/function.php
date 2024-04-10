<script>
	function mobile() { 
		if( navigator.userAgent.match(/Android/i)
		|| navigator.userAgent.match(/webOS/i)
		|| navigator.userAgent.match(/iPhone/i)
		|| navigator.userAgent.match(/iPad/i)
		|| navigator.userAgent.match(/iPod/i)
		|| navigator.userAgent.match(/BlackBerry/i)
		|| navigator.userAgent.match(/Windows Phone/i)
		){
			return true;
		}
		else {
			return false;
		}
	}
	function mesaj(yazi, tur) {
		$('#results').fadeIn(100);
		$('#alert').html('<a onclick="mesajkapa();" class="close" aria-label="close">&times;</a>'+yazi);
		$('#alert').removeClass();
		$('#alert').addClass("alert "+tur);
		$('#alert').fadeIn(400);
		setTimeout(function() {
			$('#results').fadeOut(400); 
			$('#alert').fadeOut(400);
		}, 5000);
	}
	function mesajkapa() {
		$('#results').fadeOut(400); 
		$('#alert').fadeOut(400); 
	}
	
	function formGetir() {
		$(".sidebar").css("right", "0px");
	};
	
	function formCikar() {
		$(".sidebar").css("right", "-110%");
	}
	function adimbir() {
		$("#firstStep").css("display", "inline");
		$("#secondStep").css("display", "none");
	}
	function adimiki() {
		$('#cname').trigger('input');
		$('#breed').trigger('input');
		$('#age').trigger('input');
		$('#weight').trigger('input');
		if ($("#cname").val() == "") {
			$("#cname").focus();
			return false;
		}
		if ($("#breed").val() == "") {
			$("#breed").focus();
			return false;
		}
		if ($("#age").val() == "") {
			$("#age").focus();
			return false;
		}
		if ($("#weight").val() == "") {
			$("#weight").focus();
			return false;
		}
		$("#firstStep").css("display", "none");
		$("#secondStep").css("display", "inline");
		$(".help-block.with-errors").html('');
		$(".form-block").removeClass("has-error");
		$(".form-block").removeClass("has-danger");
	}
	function adimuc() {
		$("#secondStep").css("display", "none");
		$("#completedStep").css("display", "inline");
	}
	function formBitti() {
		$(".sidebar").css("right", "-110%");
		$("#firstStep").css("display", "inline");
		$("#secondStep").css("display", "none");
		$("#completedStep").css("display", "none");
	};
	bar = document.getElementById("bar");
	daire = document.getElementById("daire");
	slider = document.getElementById("slider");
	sliderbar = document.getElementById("sliderbar");
	isDown = false;

	bar.addEventListener('touchstart', function(event){
		var touch = event.touches[0];
		xPos = touch.pageX;
		yPos = touch.pageY;
		isDown = true;
		rotate(xPos,yPos);
	}, true);
	bar.addEventListener('touchend', function(event){
		isDown = false;
		rotate(xPos,yPos);
	}, true);

	bar.addEventListener('touchmove', function(event){
		if (isDown) {
			var touch = event.touches[0];
			xPos = touch.pageX;
			yPos = touch.pageY;
			rotate(xPos,yPos);
		}
	}, true);

	bar.addEventListener('mousedown', function(event) {
		xPos = event.clientX;
		yPos = event.clientY;
		isDown = true;
		rotate(xPos,yPos);
	}, true);

	document.addEventListener('mouseup', function(event) {
		if (isDown) {
			xPos = event.clientX;
			yPos = event.clientY;
			isDown = false;
			rotate(xPos,yPos);
		}
	}, true);

	document.addEventListener('mousemove', function(event) {
		event.preventDefault();
		if (isDown) {
			xPos = event.clientX;
			yPos = event.clientY;
			rotate(xPos,yPos);
		}
	}, true);

	function rotate(x, y) {
		en = $("body").width();
		if (en<575) {
			fark = slider.offsetLeft + sliderbar.offsetLeft;
			noktaBoy = $("#nokta").height()/2;
			fark = fark+noktaBoy;
			tPos = x-fark;
			if (tPos < -30) {
				tPos = -30;
			} else if (tPos > 200) {
				tPos = 200;
			}
			console.log(tPos);
			aci = (tPos-100)/153;
			aci = aci*180/Math.PI;
			aci = Math.round((aci+43.0883)*10)/10;
			if (!isDown) {
				if (aci<=22) {
					aci = -5.5;
				} else if (aci>22 && aci<=60) {
					aci = 37;
				} else if (aci>60) {
					aci = 80.5;
				}
			}
			if (aci<=22) {
				carousel(0);
			} else if (aci>22 && aci<=60) {
				carousel(1);
			} else if (aci>60) {
				carousel(2);
			}
		} else if (en<991) {
			fark = slider.offsetLeft + sliderbar.offsetLeft;
			noktaBoy = $("#nokta").height()/2;
			fark = fark+noktaBoy;
			tPos = x-fark;
			if (tPos < -20) {
				tPos = -20;
			} else if (tPos > 360) {
				tPos = 360;
			}
			
			aci = (tPos-175)/246;
			aci = aci*180/Math.PI;
			aci = Math.round((aci+43.0883)*10)/10;
			if (!isDown) {
				if (aci<=21) {
					aci = -2;
				} else if (aci>21 && aci<=64) {
					aci = 41.7;
				} else if (aci>64) {
					aci = 86;
				}
			}
			if (aci<=21) {
				carousel(0);
			} else if (aci>21 && aci<=64) {
				carousel(1);
			} else if (aci>64) {
				carousel(2);
			}
		} else {
			fark = slider.offsetTop + sliderbar.offsetTop;
			noktaBoy = $("#nokta").height()/2;
			fark = fark+noktaBoy;
			tPos = y-fark;
			if (tPos < -20) {
				tPos = -20;
			} else if (tPos > 360) {
				tPos = 360;
			}
			
			aci = (tPos-175)/246;
			aci = aci*180/Math.PI;
			aci = Math.round((aci+43.0883)*10)/10;
			if (!isDown) {
				if (aci<=21) {
					aci = -2;
				} else if (aci>21 && aci<=64) {
					aci = 41.7;
				} else if (aci>64) {
					aci = 86;
				}
			}
			if (aci<=21.9) {
				carousel(0);
			} else if (aci>21 && aci<=64) {
				carousel(1);
			} else if (aci>64) {
				carousel(2);
			}
		}
		$("#daire").css({
					'-webkit-transform': 'rotate('+aci+'deg)',
					'-moz-transform': 'rotate('+aci+'deg)',
					'-ms-transform': 'rotate('+aci+'deg)',
					'-o-transform': 'rotate('+aci+'deg)',
					'transform': 'rotate('+aci+'deg)'
		});
	}
	function carousel(kim) {
		$(".carousel .item").removeClass("show");
		$(".carousel .item"+kim).addClass("show");
	}

	function formGonder() {
		if (!document.getElementById('agree').checked) {
			formSonuc(20);
			return false; 
		}
		if ($("#yname").val() == "") {
			$("#yname").focus();
			return false;
		}
		if ($("#surname").val() == "") {
			$("#surname").focus();
			return false;
		}
		if ($("#email").val() == "") {
			$("#email").focus();
			return false;
		}
		if (!mailKontrol($("#email").val())) {
			$("#email").focus();
			return false;
		}
		if ($("#phone").val() == "") {
			$("#phone").focus();
			return false;
		}
		if ($("#address").val() == "") {
			$("#address").focus();
			return false;
		}
		datalar = "dosya=formgonder&"+$('#userInfoForm').serialize();
		jQuery.ajax({type: 'POST', url: url+"phpfonk/mysqlajax.php", data:datalar,
			error:function(e) {
				mesaj("<strong>Error!</strong> Something went wrong. Try again.", "alert-danger");
			},
			success: function(veri) {
				var veri = $.parseJSON(veri);
				if (veri[0] == 0) {
					formSonuc(0);
				} else if (veri[0] == 1) {
					formSonuc(1);
				}
			}
		});
	}

	function mailKontrol(mail) {	
		var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (regex.test(mail)==true) {
			return 1;
		} else {
			return 0;
		}	
	}
	
</script>