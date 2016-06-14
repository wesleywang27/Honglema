//滑出隐藏提示框
function slideHint(){
//	alert(0);
	$(".box_Ssm").animate({"margin-top":"0"},500);
	setTimeout(function(){
		$(".box_Ssm").animate({"margin-top":"-23px"},500);
	},2000);	
}


var TOEIEL = 0;//全局变量，为0则代表选择toefl，为1则代表选择ielts
var GREGMA = 0;//全局变量，为0则代表选择gre，为1则代表选择gmat

$(function(){

/*---------------------下一步 页面滑动到下一页--------------------------*/

	$("#majorButton").click(function(){
		var major = document.getElementById("major");
		var school = document.getElementById("school");
		if(major.value == ''){
			document.getElementById('majorHint').innerHTML = '请务必填写你的专业';
			slideHint();
		}else if(school.value == ''){
			document.getElementById('majorHint').innerHTML = '请务必填写你的学校类型';
			slideHint();
		}else{
			$(this).parent().parent().parent().animate({
				"margin-left":"-100%"
			},300)	
		}
	})
	$("#examButton").click(function(){
//		var toeiel = document.getElementById("toeiel");
//		var gregma = document.getElementById("gregma");
//		var gpa = document.getElementById("gpa");
//		if(toeiel.value == ''){
//			document.getElementById('examHint').innerHTML = '请务必填写你的Toefl/ielts成绩';
//			slideHint();
//		}else if(gregma.value == ''){
//			document.getElementById('examHint').innerHTML = '请务必填写你的';
//			slideHint();
//		}else if(gpa.value == ''){
//			document.getElementById('examHint').innerHTML = '请务必填写你的';
//			slideHint();
//		}else{
//			$(this).parent().parent().parent().animate({
//				"margin-left":"-100%"
//			},500)	
//		}
		$(this).parent().parent().parent().animate({
			"margin-left":"-100%"
		},300)
	})
	$("#researchButton").click(function(){
		$(this).parent().parent().parent().animate({
			"margin-left":"-100%"
		},300)
	})
	$("#workButton").click(function(){
		$(this).parent().parent().parent().animate({
			"margin-left":"-100%"
		},300)
	})
	$("#internshipButton").click(function(){
		$(this).parent().parent().parent().animate({
			"margin-left":"-100%"
		},300)
	})
	$("#otherButton").click(function(){
		$(this).parent().parent().parent().animate({
			"margin-left":"-100%"
		},300)
	})
	$("#infoButton").click(function(){
		$(this).parent().parent().parent().animate({
			"margin-left":"-100%"
		},300)
	})
	
/*---------------------上一步 页面滑动到上一页--------------------------*/	

	$(".return_Com").click(function(){
		$(this).parents(".page").prev().animate({
			"margin-left":0
		},300)
	})
	
/*------------------------------性别按钮的样式切换---------------------------*/
	$(".boy_Ssp").click(function(){
		$(this).addClass("on").siblings().removeClass("on")
		if($(".boy_Ssp").hasClass("on")){
			$("#boyImgHidden").css("display","block").siblings("#boyImgShow").css("display","none");
			$("#girlImgHidden").css("display","none").siblings("#girlImgShow").css("display","block");
		}else{
			$("#boyImgHidden").css("display","none").siblings("#boyImgShow").css("display","block");
			$("#girlImgHidden").css("display","block").siblings("#girlImgShow").css("display","none");
		}
		$("#sex").val("男");
		
	})
	$(".girl_Ssp").click(function(){
		$(this).addClass("on").siblings().removeClass("on")
		if($(".girl_Ssp").hasClass("on")){
			$("#girlImgHidden").css("display","block").siblings("#girlImgShow").css("display","none");
			$("#boyImgHidden").css("display","none").siblings("#boyImgShow").css("display","block");
		}else{
			$("#girlImgHidden").css("display","none").siblings("#girlImgShow").css("display","block");
			$("#boyImgHidden").css("display","block").siblings("#boyImgShow").css("display","none");
		}
		$("#sex").val("女");
	})
	
	
	
	
/*--------------------------- 点击发送验证按钮变色 -------------------------*/


	$(".send_Reg").click(function(){
		$(this).css("background","#33D1C2").css("color","#FFFFFF")
	})


/*-------------------------TOEFL/IELTS的切换按钮------------------------*/
	$("#toeflBox").click(function(){
		$(this).addClass("on").siblings().removeClass("on");
		$("#toeflCont").css("display","block").siblings("#ieltsCont").css("display","none");
		TOEIEL = 0;
	})
	$("#ieltsBox").click(function(){
		$(this).addClass("on").siblings().removeClass("on");
		$("#ieltsCont").css("display","block").siblings("#toeflCont").css("display","none");
		TOEIEL = 1;
	})

	$("#greBox").click(function(){
		$(this).addClass("on").siblings().removeClass("on");
		$("#greCont").css("display","block").siblings("#gmatCont").css("display","none");
		GREGMA = 0;
	})
	$("#gmatBox").click(function(){
		$(this).addClass("on").siblings().removeClass("on");
		$("#gmatCont").css("display","block").siblings("#greCont").css("display","none");
		GREGMA = 1;
	})

//显示输入成绩的弹出框
	$(".toefl").click(function(){
		$(".mask_Exa").css("display","block")
	})
	$(".cancel_Exa").click(function(){
		$(".mask_Exa").css("display","none")
	})
	$(".complete_Exa").click(function(){
		$(".mask_Exa").css("display","none")
	})
	
	
	$(".gre").click(function(){
		$(".mask1_Exa").css("display","block")
	})
	$(".cancel_Exa").click(function(){
		$(".mask1_Exa").css("display","none")
	})
	$(".complete_Exa").click(function(){
		$(".mask1_Exa").css("display","none")
	})
	
	$(".gpa").click(function(){
		$(".mask2_Exa").css("display","block")
	})
	$(".cancel_Exa").click(function(){
		$(".mask2_Exa").css("display","none")
	})
	$(".complete_Exa").click(function(){
		$(".mask2_Exa").css("display","none")
	})


//Pda:显示输入姓名的弹出框
	$(".name").click(function(){
		$(".mask3_Exa").css("display","block")
	})
	$(".cancel_Exa").click(function(){
		$(".mask3_Exa").css("display","none")
	})
	$(".complete_Exa").click(function(){
		$(".mask3_Exa").css("display","none")
	})





/*	$(".mask_Exa>div").click(function(){
		$(this).css("display","none")
	})*/
	
	//点击input框内容消失
//	$("#inputID").click(function(){
//		document.getElementById("inputID").value = "";
//		$("#inputID").css("color","#000000");
//	})
	
	$("#checkVerification").click(function(){
		document.getElementById("checkVerification").value = "";
		$("#checkVerification").css("color","#000000");
	})
	
})


	//限定toefl的input范围在0-120之间
	function rangeToefl1(id){
		var node = document.getElementById(id);
		$(node).keyup(function(){
			if($(node).val().length==3){
				var value2 = $(node).val();
				var value3 = value2.substring(1,2);
				var value4 = value2.substring(2,3);
				value2 = value2.substring(0,1);
				if(value2>1){
					$(node).val(value2 + value3);
				}else if(value2==1 && value3>2){
					$(node).val(value2 + value3);
				}else if(value2==1 && value3==2 && value4>0){
					$(node).val(value2 + value3);
				}
			}else if($(node).val().length>3){
				var value2 = $(node).val();
				value2 = value2.substring(0,3);
				$(node).val(value2);
			}
		});	
	}
	
	//限定toefl口语的input范围在0-30之间
	function rangeToefl2(id){
		var node = document.getElementById(id);
		$(node).keyup(function(){
			if($(node).val().length==2){
				var value2 = $(node).val();
				var value3 = value2.substring(1,2);
				value2 = value2.substring(0,1);
				if(value2==3 && value3>0){
					$(node).val(value2);
				}else if(value2>3){
					$(node).val(value2);
				}
			}else if($(node).val().length>2){
				var value2 = $(node).val();
				value2 = value2.substring(0,2);
				$(node).val(value2);
			}
		});	
	}
	
	
	//限定ielts的input范围在0.0-9.0之间
	function rangeIelts(id){
		var node = document.getElementById(id);
		$(node).keyup(function(){
			if($(node).val().length == 1){
				var value2 = $(node).val();
				if(value2 == '.'){
					$(node).val('');
				}
			}else if($(node).val().length == 2){
				var value2 = $(node).val();
				var value3 = value2.substring(1,2);
				value2 = value2.substring(0,1);
				if(value3 != '.'){
					$(node).val(value2);
				}
			}else if($(node).val().length == 3){
				var value2 = $(node).val();
				var value3 = value2.substring(1,2);
				var value4 = value2.substring(2,3);
				value2 = value2.substring(0,1);
				if(value4 == '.'){
					$(node).val(value2 + value3);
				}else if(value2==9 && value4>0){
					$(node).val(value2 + value3);
				}
			}else if($(node).val().length>3){
				var value2 = $(node).val();
				value2 = value2.substring(0,3);
				$(node).val(value2);
			}
		});	
	}

	//限定gre总分的input范围在0-340之间
	function rangeGre1(id){
		var node = document.getElementById(id);
		$(node).keyup(function(){
			if($(node).val().length==3){
				var value2 = $(node).val();
				var value3 = value2.substring(1,2);
				var value4 = value2.substring(2,3);
				value2 = value2.substring(0,1);
				if(value2>3){
					$(node).val(value2 + value3);
				}else if(value2==3 && value3>4){
					$(node).val(value2 + value3);
				}else if(value2==3 && value3==4 && value4>0){
					$(node).val(value2 + value3);
				}
			}else if($(node).val().length>3){
				var value2 = $(node).val();
				value2 = value2.substring(0,3);
				$(node).val(value2);
			}
		});	
	}
	
	//限定gre写作的input范围在0-6.0之间
	function rangeGre2(id){
		var node = document.getElementById(id);
		$(node).keyup(function(){
			if($(node).val().length == 1){
				var value2 = $(node).val();
				if(value2 == '.'){
					$(node).val('');
				}else if(value2 > 6){
					$(node).val('');
				}
			}else if($(node).val().length == 2){
				var value2 = $(node).val();
				var value3 = value2.substring(1,2);
				//alert(value2 + value3);
				value2 = value2.substring(0,1);
				if(value3 != '.'){
					$(node).val(value2);
				}
			}else if($(node).val().length == 3){
				var value2 = $(node).val();
				var value3 = value2.substring(1,2);
				var value4 = value2.substring(2,3);
				value2 = value2.substring(0,1);
				if(value4 == '.'){
					$(node).val(value2 + value3);
				}else if(value2==6 && value4>0){
					$(node).val(value2 + value3);
				}
			}else if($(node).val().length>3){
				var value2 = $(node).val();
				value2 = value2.substring(0,3);
				$(node).val(value2);
			}
		});	
	}	
	
	//限定gmat总分的input范围在0-800之间
	function rangeGmat1(id){
		var node = document.getElementById(id);
		$(node).keyup(function(){
			if($(node).val().length==3){
				var value2 = $(node).val();
				var value3 = value2.substring(1,2);
				var value4 = value2.substring(2,3);
				value2 = value2.substring(0,1);
				if(value2>8){
					$(node).val(value2 + value3);
				}else if(value2==8 && (value3>0 || value4>0)){
					$(node).val(value2 + value3);
				}
			}else if($(node).val().length>3){
				var value2 = $(node).val();
				value2 = value2.substring(0,3);
				$(node).val(value2);
			}
		});	
	}
	
	//限定gmat写作的input范围在0-6.0之间
	function rangeGmat2(id){
		var node = document.getElementById(id);
		$(node).keyup(function(){
			if($(node).val().length == 1){
				var value2 = $(node).val();
				if(value2 == '.'){
					$(node).val('');
				}else if(value2 > 6){
					$(node).val('');
				}
			}else if($(node).val().length == 2){
				var value2 = $(node).val();
				var value3 = value2.substring(1,2);
				//alert(value2 + value3);
				value2 = value2.substring(0,1);
				if(value3 != '.'){
					$(node).val(value2);
				}
			}else if($(node).val().length == 3){
				var value2 = $(node).val();
				var value3 = value2.substring(1,2);
				var value4 = value2.substring(2,3);
				value2 = value2.substring(0,1);
				if(value4 == '.'){
					$(node).val(value2 + value3);
				}else if(value2==6 && value4>0){
					$(node).val(value2 + value3);
				}
			}else if($(node).val().length>3){
				var value2 = $(node).val();
				value2 = value2.substring(0,3);
				$(node).val(value2);
			}
		});	
	}
	
	//限定gpa写作的input范围在0-4.0之间
	function rangeGpa(id){
var node = document.getElementById(id);
		$(node).keyup(function(){
			if($(node).val().length == 1){
				var value2 = $(node).val();
				if(value2 == '.'){
					$(node).val('');
				}else if(value2 > 4){
					$(node).val('');
				}
			}else if($(node).val().length == 2){
				var value2 = $(node).val();
				var value3 = value2.substring(1,2);
				//alert(value2 + value3);
				value2 = value2.substring(0,1);
				if(value3 != '.'){
					$(node).val(value2);
				}
			}else if($(node).val().length == 3){
				var value2 = $(node).val();
				var value3 = value2.substring(1,2);
				var value4 = value2.substring(2,3);
				value2 = value2.substring(0,1);
				if(value4 == '.'){
					$(node).val(value2 + value3);
				}else if(value2==4 && value4>0){
					$(node).val(value2 + value3);
				}
			}else if($(node).val().length>3){
				var value2 = $(node).val();
				value2 = value2.substring(0,3);
				$(node).val(value2);
			}
		});	
	}	
	
	//判断选择toefl还是ielts,并将值返回到主页面
	function selectToeIel(){
		var toeiel =document.getElementById('toeiel');
		var toefl = document.getElementById('toeflV');
		var toeflV = document.getElementById('toeflL');
		var ielts = document.getElementById('ielts');
		var toeflScore = toefl.value;
		var toeflVScore = toeflV.value;
		var ieltsScore = ielts.value;
		if(toeflScore == '' && ieltsScore == ''){
			
		}else{
			if(ieltsScore == ''){
				toeiel.value = toeflScore;
				//passedValue3('toefl',toeflScore,toeflVScore);
			}else if(toeflScore == ''){
				toeiel.value = ieltsScore;
				//passedValue2('ielts',ieltsScore);
			}else{
				if(TOEIEL == 0){
					toeiel.value = toeflScore;
					//passedValue3('toefl',toeflScore,toeflVScore);
				}else{
					toeiel.value = ieltsScore;
					//passedValue2('ielts',ieltsScore);
				}
			}
		}
	}
	
	//判断选择gre还是gmat,并将值返回到主页面
	function selectGreGma(){
		var gregma =document.getElementById('gregma');
		var gre = document.getElementById('greT');
		var greW = document.getElementById('greW');
		var gmat = document.getElementById('gmatT');
		var gmatW = document.getElementById('gmatW');
		var greScore = gre.value;
		var greWScore = greW.value;
		var gmatScore = gmat.value;
		var gmatWScore = gmatW.value;
		if(greScore == '' && gmatScore == ''){
			
		}else{
			if(gmatScore == ''){
				gregma.value = greScore + '+' + greWScore;
				//passedValue3('gre',greScore,greWScore);
			}else if(greScore == ''){
				gregma.value = gmatScore + '+' + gmatWScore;
				//passedValue3('gmat',gmatScore,gmatWScore);
			}else{
				if(GREGMA == 0){
					gregma.value = greScore + '+' + greWScore;
					//passedValue3('gre',greScore,greWScore);
				}else{
					gregma.value = gmatScore + '+' + gmatWScore;
					//passedValue3('gmat',gmatScore,gmatWScore);
				}
			}
		}
		
	}


	//判断选择gre还是gmat,并将值返回到主页面
	function selectGpa(){
		var Gpa = document.getElementById('Gpa');
		var gpa = document.getElementById('gpa');
		var gpaScore = gpa.value;
		Gpa.value = gpaScore;
		//passedValue2('gpa',Gpa.value);
	}

var CODE;//全局变量，存放后台传回的验证码
var PHONE; //全局变量，存放验证码对应的手机号
var getCode="/Login/getcode";//这是一个地址，大概是获取验证码的地址


//验证码按钮倒计时60s
function setTime(countdown,codeButtonId) {
//	获取验证码按钮结点
	codeButton=document.getElementById(codeButtonId);
	if (countdown == 0) { 
		codeButton.style.backgroundColor = '#33D1C2';
		/*codeButton.style.borderColor = '#33D1C2';*/
		codeButton.style.color = '#FFFFFF';
		codeButton.innerHTML = "发送验证码"; 
		codeButton.removeAttribute("disabled"); 
	} else { 
		codeButton.style.backgroundColor = '#B4B4B5'; 
		/*codeButton.style.borderColor = '#B4B4B5'; */
		codeButton.style.color = '#FFFFFF';
		codeButton.setAttribute("disabled",true); 
		codeButton.innerHTML = countdown + "秒重新发送"; 
		countdown--; 
		setTimeout(function(){setTime(countdown,codeButtonId)},1000);
	} 
} 

//发送验证码，并将发送的验证码从后台传入CODE
function sendVerifycode(phone,codeButtonId){
	$.ajax({
			url : getCode,			
			data:{'phone':phone},
			dataType:'text',
			type:'post',
			success:function(data){
				//alert("data=" + data);
				CODE=data;
			}
	});
	PHONE = document.getElementById("inputID").value;
	setTime(60,codeButtonId);
}





/*------------------判断手机号----------------*/	
	function rangeRE(){
		var obj = document.getElementById("inputID");
		var str = obj.value;
		var phoneReg = /^1[34578]\d{9}$/ ;
		/*-------------------判断输入框的值是否为空-----------------*/
		if(str.value==""){
//			$("#inputID").attr("placeholder","手机号不合法");
//			$("#inputID").css("color","#EF8C9E")
			document.getElementById('phoneHint').innerHTML = '手机号不合法';
		}
		/*-------------------判断输入的值不足11位-----------------*/
		else if(str.length < 11){

//			$("#inputID").attr("value","手机号不合法");
//			$("#inputID").css("color","#EF8C9E")
			document.getElementById('phoneHint').innerHTML = '手机号不合法';
		}	
		/*-------------------判断是否符合手机正则-----------------*/
		else if(!phoneReg.exec(str)){
//			$("#inputID").css("color","#EF8C9E")
//			$("#inputID").attr("value","手机号不合法");
			document.getElementById('phoneHint').innerHTML = '手机号不合法';
		}
		else{
			document.getElementById('phoneHint').innerHTML = '';
			sendVerifycode(document.getElementById("inputID").value,"send");
		}
	}
	
	
	
/*------------------判断验证码----------------*/
function checkVerification(){
		var obj = document.getElementById("verification");
		var str = obj.value;
		var pobj = document.getElementById("inputID");
		var pstr = obj.value;
		if(str.value==""){
//			$("#verification").attr("placeholder","验证码不正确");
//			$("#verification").css("color","#EF8C9E");
			document.getElementById('verificationHint').innerHTML = '验证码输入错误';
			return false;
		}else if(str.length < 4){
//			$("#verification").attr("value","验证码不正确");
//			$("#verification").css("color","#EF8C9E");
			document.getElementById('verificationHint').innerHTML = '验证码输入错误';
			return false;
		}else if(str != CODE){
//			alert(CODE);
//			$("#verification").attr("value","验证码不正确");
//			$("#verification").css("color","#EF8C9E");
			document.getElementById('verificationHint').innerHTML = '验证码输入错误';
			return false;
		}else if(pstr != PHONE){
//			alert(PHONE);
//			$("#verification").attr("value","验证码不正确");
//			$("#verification").css("color","#EF8C9E");
			document.getElementById('verificationHint').innerHTML = '验证码输入错误';
			return false;
		}else{
			document.getElementById('verificationHint').innerHTML = '';
			return true;
		}
}













