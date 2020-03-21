// JavaScript Document
function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
	var val=4;
	var val1=4;
	var val2=4;
	var val3=3;
	var val4=3;
	var val5=2;	
	var val6=2;
	var val7=2;
//	function init(){
//		go1();
//		go2();
//		go3();
//		go4();
//		go5();
//		go6();
//		go7();
//		go8();
//	}
	function go1(){
		val=val+1;
		mainForm.elements["gerbul"].value=val;
		$.get('gerbul.php?val='+val, function(data) {
		  $('#gerbul').html(data);
		});
		}
		
	function go2(){
		val1=val1+1;
		mainForm.elements["sadan"].value=val1;
		$.get('sadanturul.php?val='+val1, function(data) {
		  $('#sadanturul').html(data);
		});
		}
	function go3(){
		val2=val2+1;
		mainForm.elements["bolovsrol"].value=val2;
		$.get('bolovsrol.php?val='+val2, function(data) {
		  $('#bolovsrol').html(data);
		});
		}
	function go4(){
		val3=val3+1;
		mainForm.elements["hel"].value=val3;
		$.get('hel.php?val='+val3, function(data) {
		  $('#hel').html(data);
		});
		}
	function go5(){
		val4=val4+1;
		mainForm.elements["sturshlaga"].value=val4;
		$.get('sturshlaga.php?val='+val4, function(data) {
		  $('#sturshlaga').html(data);
		});
		}
	function go6(){
		val5=val5+1;
		mainForm.elements["salbantushaal"].value=val5;
		$.get('salbantushaal.php?val='+val5, function(data) {
		  $('#salbantushaal').html(data);
		});
		}
	function go7(){
		val6=val6+1;
		mainForm.elements["shagnal"].value=val6;
		$.get('shagnal.php?val='+val6, function(data) {
		  $('#shagnal').html(data);
		});
		}
	function go8(){
		val7=val7+1;
		mainForm.elements["turshlaga"].value=val7;
		$.get('turshlaga.php?val='+val7, function(data) {
		  $('#turshlaga').html(data);
		});
		}
 jQuery(function(){
                jQuery("#reg").validate({
                    expression: "if (!isNaN(VAL) && VAL && VAL > 9999999) return true; else return false;",
                    message: "<div class='alert'>8-н оронтой тоо оруулна уу!!!</div>"
                });
				jQuery("#urag").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "<div class='alert'>Хоосон байна!!!</div>"
                });
				jQuery("#ovog").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "<div class='alert'>Хоосон байна!!!</div>"
                });
				jQuery("#name").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "<div class='alert'>Хоосон байна!!!</div>"
                });
				jQuery("#huis").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "<div class='alert'>Сонгоогүй байна!!!</div>"
                });
				jQuery("#am").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "<div class='alert'>Сонгоогүй байна!!!</div>"
                });
				jQuery("#birthyear").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "<div class='alert'>Он сонгоогүй байна!!!</div>"
                });
				jQuery("#birthmonth").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "<div class='alert'>Сар сонгоогүй байна!!!</div>"
                });
				jQuery("#birthday").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "<div class='alert'>Өдөр сонгоогүй байна!!!</div>"
                });
				jQuery("#ugsaa").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "<div class='alert'>Хоосон байна!!!</div>"
                });
				jQuery("#garal").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "<div class='alert'>Хоосон байна!!!</div>"
                });
				jQuery("#address").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "<div class='alert'>Хоосон байна!!!</div>"
                });
				jQuery("#human_ner").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "<div class='alert'>Хоосон байна!!!</div>"
                });
                jQuery("#mail").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "<div class='alert'>Мэйл хаяг оруулна уу!!!</div>"
				});
				jQuery("#utas").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "<div class='alert'>Хоосон байна!!!</div>"
                });
				jQuery("#human_utas").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "<div class='alert'>Хоосон байна!!!</div>"
                });
            });