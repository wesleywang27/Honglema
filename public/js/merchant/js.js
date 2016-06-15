$(function(){
	$(".tu1_Evr").click(function(){
		$(".tu1_Evr>h2").addClass("on").parent().siblings(".tu2_Evr").find("h2").removeClass("on");
		$(".choose1_Evr").find(".bright_Evr").css("display","block").siblings().css("display","none");
		$(".choose2_Evr").find(".dark1_Evr").css("display","block").siblings().css("display","none");
		$(".footer_Evr").css("display","block").siblings(".footer1_Evr").css("display","none");
	})
	$(".tu2_Evr").click(function(){
		$(".tu2_Evr>h2").addClass("on").parent().siblings(".tu1_Evr").find("h2").removeClass("on");
		$(".choose2_Evr").find(".bright1_Evr").css("display","block").siblings().css("display","none");
		$(".choose1_Evr").find(".dark_Evr").css("display","block").siblings().css("display","none");
		$(".footer1_Evr").css("display","block").siblings(".footer_Evr").css("display","none");
	})
	
	
//	$(".xuanze1_Dsc").click(function(){
//		$(this).css("display","none").siblings().css("display","block");
//	})
//	$(".xuanze2_Dsc").click(function(){
//		$(this).css("display","none").siblings().css("display","block");
//	})
	
	/*-------------------分享按钮的显示和隐藏--------------*/
	$(".scmimg2_ScM").click(function(){
		$(".zhezhao_Cde").fadeIn("show");
		$(".content_Cde").addClass("on");
	})
	$(".zhezhao_Cde").click(function(){
		$(".zhezhao_Cde").fadeOut("hide");
		$(".content_Cde").removeClass("on");
	})
	
	/*-------------------分享按钮的显示和隐藏--------------*/
	$(".sss").click(function(){
		$(".zhezhao_Cde").fadeIn("show");
	})
	$(".zhezhao_Cde").click(function(){
		$(".zhezhao_Cde").fadeOut("hide");
	})
		
	
	/*-----------------------点击变我喜欢---------------------------*/
	
	$(".scmimg1_ScM").click(function(){
		$(this).css("display","none").siblings(".scmimg3_ScM").css("display","block");
	})
	$(".scmimg3_ScM").click(function(){
		$(this).css("display","none").siblings(".scmimg1_ScM").css("display","block");
	})
	
	/*------------------点击选中项---------------------*/
	$(".liang_Pde").click(function(){
		$(this).css("display","none").siblings().css("display","block");
	})
	$(".an_Pde").click(function(){
		$(this).css("display","none").siblings().css("display","block");
	})
	
	
	$(".radioDsc").css("display","none");
	
	  //匹配包含给定属性的元素，keyup在按键释放时发生  
                              $("#caseContent").keyup(function () {  
                                  var area = $(this);  
                                  //parseInt 方法返回与保存在 numString 中的数字值相等的整数。如果 numString 的前缀不能解释为整数，则返回 NaN（而不是数字）。  
                                  var max = parseInt(area.attr("maxlength"), 10); //获取maxlength的值 转化为10进制，将输入到textarea的文本长度  
                                  //这个判断可知max得到的是不是数字，设定的大小是多少  
                                      if (max > 0) {  
  
                                          if (area.val().length > max) { //textarea的文本长度大于maxlength   
                                          area.val(area.val().substr(0, max)); //截断textarea的文本重新赋值   
                                          }  
  
                                          var yishu = area.val().length;  
                                          var sheng = max - area.val().length;  
                                          $("#lyishu").html(yishu);  
                                      $("#lsheng").html(sheng);  
                                  }  
                              });  
                              $("#caseContent").blur(function () {  
                                  var area = $(this);  
                                  var max = parseInt(area.attr("maxlength"), 10); //获取maxlength的值   
                                      if (max > 0) {  
  
                                          if (area.val().length > max) { //textarea的文本长度大于maxlength   
                                          area.val(area.val().substr(0, max)); //截断textarea的文本重新赋值   
                                          }  
  
                                          var yishu = area.val().length;  
                                          var sheng = max - area.val().length;  
                                          $("#lyishu").html(yishu);  
                                      $("#lsheng").html(sheng);  
                                      }  
                                  });  
})

//推荐理由的弹出层
function show(){
	document.getElementById("mask").style.display = "block";
	document.getElementById("recommended1").style.display = "block";
}
function hide(){
	document.getElementById("mask").style.display = "none";
	document.getElementById("recommended1").style.display = "none";
}
//基本函数：删除某结点所有子节点中的换行或者空格结点
function del_ff(elem){
//	alert(1);
	var elem_child = elem.childNodes;
	for(var i=0; i<elem_child.length;i++){
		if(elem_child[i].nodeName == "#text" && !/\s/.test(elem_child.nodeValue))
		{
			elem.removeChild(elem_child[i]);
		}
	}
}

function windowStyle(){
	var researchHeight = $(".research_Ode").height();
	 var list=document.getElementsByClassName("research_Ode");
	 var i ;
	 var t = 0;
	// alert(list.length);
	 var list2 = new Array;
	 for( i = 0;i < list.length;i++){
	 	var obj = list[i];
	 	//alert(obj);
	 	var objHeight = obj.offsetHeight;
	 	if(objHeight > 165){
	 		//alert(obj.offsetHeight);
	 		//alert(t);
	 		list2[t] = obj;
	 		t++;
	 	}
	 }
	 for(i = 0;i < t;i++){
	 	list2[i].style.height = "165px";
	 	//alert(list2[i].style.height);
	 	del_ff(list2[i]);
	 	list2[i].lastChild.style.display = "block";
	 }
}

window.onload = function(){
	windowStyle();
}

function showCont(obj){
	var objPar = obj.parentNode;
	var objGra = objPar.parentNode;
	objGra.style.height = "auto";
	objPar.style.position = "relative";
	del_ff(objPar);
	objPar.firstChild.style.display = "none";
	objPar.lastChild.style.display = "block";
}

function hiddenCont(obj){
	var objPar = obj.parentNode;
	var objGra = objPar.parentNode;
	objGra.style.height = "165px";
	objPar.style.position = "absolute";
	objPar.firstChild.style.display = "block";
	objPar.lastChild.style.display = "none";
}






//--------------------------------determineSchool.html---------------------------------

//基础函数
//改变等级时图片改变。传入参数level应为数值1、2、3或4
function changeImg(level){
	//清空已选样师
	$(".dark_Dsc").css("display","block");
	$(".bright_Dsc").css("display","none");
	//根据level设置已选样式
	if(level == 1){
		$("#level1Che").css("display","block");
		$("#level1Unche").css("display","none");		
	}else if(level == 2){
		$("#level2Che").css("display","block");
		$("#level2Unche").css("display","none");		
	}else if(level == 3){
		$("#level3Che").css("display","block");
		$("#level3Unche").css("display","none");		
	}else if(level == 4){
		$("#level4Che").css("display","block");
		$("#level4Unche").css("display","none");		
	}
}

//触发函数
//改变input（radio）的checked选中项
function changeLevel(val){
	var nodeList = document.getElementsByName('schoolLevel');
	//循环
	for(var i=0;i<nodeList.length;i++) {	
		//比较值
        if(nodeList[i].value==val){  
        	//修改选中状态
            nodeList[i].checked=true; 
            //停止循环
            break; 
        }
   }	
   //设置已选等级的图片样式
   changeImg(val);
}

//基本函数：ajax给后台传值
//需要两个参数分别为传送的名称（schoolLevel）
function passedValueDsc(level){
	//传送地址
	var tfurl="";
	$.ajax({
		    async:false,
			url : tfurl,
			data:{'name':"schoolLevel",'value':level},
			dataType:'text',
			type:'post',
			success:function(data){
			}
	});
}

//触发函数：弹出等级说明，并将等级传入
function popupInstruction(schoolLevel){
//	alert(schoolLevel);
	$(".box1_Dsc").css("display","block");
	$(".introduction_Dsc").css("display","block");
	switch(schoolLevel){
		case 1:
			$("#topTitle").html("TOP10 :");
			break;
		case 2:
			$("#topTitle").html("TOP20 :");
			break;
		case 3:
			$("#topTitle").html("TOP50 :");
			break;
		case 4:
			$("#topTitle").html("TOP100 :");
			break;
		default:
			$("#topTitle").html("TOP10 :");
	}
	passedValueDsc(schoolLevel);
	changeLevel(schoolLevel);
}

//触发函数：隐藏弹出框
function hiddenInstruction(){
	$(".box1_Dsc").css("display","none");
	$(".introduction_Dsc").css("display","none");
}



//--------------------------------personalData.html---------------------------------

//start
//对图片旋转处理
function rotateImg(img, direction,canvas) {    
        //alert(img);  
        //最小与最大旋转方向，图片旋转4次后回到原方向    
        var min_step = 0;    
        var max_step = 3;    
        //var img = document.getElementById(pid);    
        if (img == null)return;    
        //img的高度和宽度不能在img元素隐藏后获取，否则会出错    
        var height = img.height;    
        var width = img.width;    
        //var step = img.getAttribute('step');    
        var step = 2;    
        if (step == null) {    
            step = min_step;    
        }    
        if (direction == 'right') {    
            step++;    
            //旋转到原位置，即超过最大值    
            step > max_step && (step = min_step);    
        } else {    
            step--;    
            step < min_step && (step = max_step);    
        }    
        //img.setAttribute('step', step);    
        /*var canvas = document.getElementById('pic_' + pid);   
        if (canvas == null) {   
            img.style.display = 'none';   
            canvas = document.createElement('canvas');   
            canvas.setAttribute('id', 'pic_' + pid);   
            img.parentNode.appendChild(canvas);   
        }  */  
        //旋转角度以弧度值为参数    
        var degree = step * 90 * Math.PI / 180;    
        var ctx = canvas.getContext('2d');    
        switch (step) {    
            case 0:    
                canvas.width = width;    
                canvas.height = height;    
                ctx.drawImage(img, 0, 0);    
                break;    
            case 1:    
                canvas.width = height;    
                canvas.height = width;    
                ctx.rotate(degree);    
               // ctx.drawImage(img, 0, -height);    
                ctx.drawImage(img, width, 0);    
                break;    
            case 2:    
                canvas.width = width;    
                canvas.height = height;    
                ctx.rotate(degree);    
                ctx.drawImage(img, -width, -height);    
                break;    
            case 3:    
                canvas.width = height;    
                canvas.height = width;    
                ctx.rotate(degree);    
                ctx.drawImage(img, -width, 0);    
                break;    
        }    
    } 

function selectFileImage(fileObj) {  
    var file = fileObj.files['0'];  
    //图片方向角 added by lzk  
    var Orientation = null;  
      
    if (file) {  
        var rFilter = /^(image\/jpeg|image\/png)$/i; // 检查图片格式  
        if (!rFilter.test(file.type)) {  
            //showMyTips("请选择jpeg、png格式的图片", false);  
            return;  
        }  
        // var URL = URL || webkitURL;  
        //获取照片方向角属性，用户旋转控制  
        EXIF.getData(file, function() {  
           // alert(EXIF.pretty(this));  
            EXIF.getAllTags(this);   
            //alert(EXIF.getTag(this, 'Orientation'));   
            Orientation = EXIF.getTag(this, 'Orientation');  
            //return;  
        });  
          
        var oReader = new FileReader();  
        oReader.onload = function(e) {  
            //var blob = URL.createObjectURL(file);  
            //_compress(blob, file, basePath);  
            var image = new Image();  
            image.src = e.target.result;  
            image.onload = function() {  
                var expectWidth = this.naturalWidth;  
                var expectHeight = this.naturalHeight;  
                  
                if (this.naturalWidth > this.naturalHeight && this.naturalWidth > 800) {  
                    expectWidth = 800;  
                    expectHeight = expectWidth * this.naturalHeight / this.naturalWidth;  
                } else if (this.naturalHeight > this.naturalWidth && this.naturalHeight > 1200) {  
                    expectHeight = 1200;  
                    expectWidth = expectHeight * this.naturalWidth / this.naturalHeight;  
                }  
                var canvas = document.createElement("canvas");  
                var ctx = canvas.getContext("2d");  
                canvas.width = expectWidth;  
                canvas.height = expectHeight;  
                ctx.drawImage(this, 0, 0, expectWidth, expectHeight);  
                var base64 = null;  
                //修复ios  
                if (navigator.userAgent.match(/iphone/i)) {  
                    console.log('iphone');  
                    //alert(expectWidth + ',' + expectHeight);  
                    //如果方向角不为1，都需要进行旋转 added by lzk  
                    if(Orientation != "" && Orientation != 1){  
                        //alert('旋转处理');  
                        switch(Orientation){  
                            case 6://需要顺时针（向左）90度旋转  
                                //alert('需要顺时针（向左）90度旋转');  
                                rotateImg(this,'left',canvas);  
                                break;  
                            case 8://需要逆时针（向右）90度旋转  
                               // alert('需要顺时针（向右）90度旋转');  
                                rotateImg(this,'right',canvas); 
                                break;  
                            case 3://需要180度旋转  
                               // alert('需要180度旋转');  
                                rotateImg(this,'right',canvas);//转两次  
                                rotateImg(this,'right',canvas);  
                                break;  
                        }         
                    }  
                      
                    /*var mpImg = new MegaPixImage(image); 
                    mpImg.render(canvas, { 
                        maxWidth: 800, 
                        maxHeight: 1200, 
                        quality: 0.8, 
                        orientation: 8 
                    });*/  
                    base64 = canvas.toDataURL("image/jpeg", 0.8);  
                }else if (navigator.userAgent.match(/Android/i)) {// 修复android  
                    var encoder = new JPEGEncoder();  
                    base64 = encoder.encode(ctx.getImageData(0, 0, expectWidth, expectHeight), 80);  
                }else{  
                    //alert(Orientation);  
                    if(Orientation != "" && Orientation != 1){  
                        //alert('旋转处理');  
                        switch(Orientation){  
                            case 6://需要顺时针（向左）90度旋转  
                                //alert('需要顺时针（向左）90度旋转');  
                                rotateImg(this,'left',canvas);  
                                break;  
                            case 8://需要逆时针（向右）90度旋转  
                                //alert('需要顺时针（向右）90度旋转');  
                                rotateImg(this,'right',canvas);  
                                break;  
                            case 3://需要180度旋转  
                                //alert('需要180度旋转');  
                                rotateImg(this,'right',canvas);//转两次  
                                rotateImg(this,'right',canvas);  
                                break;  
                        }          
                    }  
                      
                    base64 = canvas.toDataURL("image/jpeg", 0.8);  
                }  
                //uploadImage(base64);  
                $("#myImage").attr("src", base64);  
            };  
        };  
        oReader.readAsDataURL(file);  
    }  
}  
  

//end

$(function () {
	$("#img").change(function(){
		selectFileImage(this);
		ajaxFileUpload();
	})
})
function ajaxFileUpload() {
//	    alert(urlVal);
//  	return;
	$(".loading_Pda").css("display","block");
    $.ajaxFileUpload
    (
        {
            url: urlVal, //用于文件上传的服务器端请求地址
            type: 'post',
            //data: { Id: '123', name: 'lunis' }, //此参数非常严谨，写错一个引号都不行
            secureuri: false, //一般设置为false
            fileElementId: 'img', //文件上传空间的id属性  <input type="file" id="img" name="picImg" />
            dataType: 'content', //返回值类型 一般设置为json
            success: function (data, status)  //服务器成功响应处理函数
            {   //alert(data);
				var obj = $.parseJSON(data);
                //alert(obj.pathimg);
				if(obj.error == 0){
					$("#pic_img").attr('src',obj.pathimg);
					$(".loading_Pda").css("display","none");
					$("#img").bind("change",function(){
						ajaxFileUpload();
					});
			}else{
					alert("上传失败");
					$(".loading_Pda").css("display","none");
				}
            },
            error: function (data, status, e)//服务器响应失败处理函数
            {
                alert(e);
                $(".loading_Pda").css("display","none");
            }
        }
    )
    return false;
}



//基本函数：ajax给后台传值
//需要两个参数分别为传送的名称（ajaxName）和值（ajaxValue）
function passedValue2(ajaxName,ajaxValue){
//	alert(2);
	//传送地址
	var tfurl="";
	$.ajax({
		    async:true,
			url : tfurl,
			data:{'name':ajaxName,'value':ajaxValue},
			dataType:'text',
			type:'post',
			success:function(data){
			}
	});
}

//基本函数：ajax给后台传值
//需要三个参数分别为传送的名称（ajaxName）和值（ajaxValue）
function passedValue3(ajaxName,ajaxValue1,ajaxValue2){
//	alert(3);
	//传送地址
	var tfurl="";
	$.ajax({
		    async:true,
			url : tfurl,
			data:{'name':ajaxName,'value1':ajaxValue1,'value2':ajaxValue2},
			dataType:'text',
			type:'post',
			success:function(data){
			}
	});
}

//Pda:点击<完成>时将Input的内容传入主菜单的input内
function setNamePda(){
	document.getElementById('name').value = document.getElementById('nameInput').value;
	passedValue2('name',document.getElementById('nameInput').value);
}

//判断选择toefl还是ielts,并将值返回到主页面
function selectToeIelPda(){
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
			passedValue3('toefl',toeflScore,toeflVScore);
		}else if(toeflScore == ''){
			toeiel.value = ieltsScore;
			passedValue2('ielts',ieltsScore);
		}else{
			if(TOEIEL == 0){
				toeiel.value = toeflScore;
				passedValue3('toefl',toeflScore,toeflVScore);
			}else{
				toeiel.value = ieltsScore;
				passedValue2('ielts',ieltsScore);
			}
		}
	}
}

//判断选择gre还是gmat,并将值返回到主页面
function selectGreGmaPda(){
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
			passedValue3('gre',greScore,greWScore);
		}else if(greScore == ''){
			gregma.value = gmatScore + '+' + gmatWScore;
			passedValue3('gmat',gmatScore,gmatWScore);
		}else{
			if(GREGMA == 0){
				gregma.value = greScore + '+' + greWScore;
				passedValue3('gre',greScore,greWScore);
			}else{
				gregma.value = gmatScore + '+' + gmatWScore;
				passedValue3('gmat',gmatScore,gmatWScore);
			}
		}
	}
	
}

//判断选择gre还是gmat,并将值返回到主页面
function selectGpaPda(){
	var Gpa = document.getElementById('Gpa');
	var gpa = document.getElementById('gpa');
	var gpaScore = gpa.value;
//	alert('gpa');
	Gpa.value = gpaScore;
	passedValue2('gpa',Gpa.value);
}

// 触发函数：点击主页面姓名输入框跳转页面
function showNameBox(){
	document.getElementById("main").style.display = "none";
	document.getElementById("nameBox").style.display = "block";
	document.getElementById("inputName").value = document.getElementById("name").value;
	document.getElementById("nameBox").focus();
}
//触发函数：输入姓名页面切换回主页面
function hiddenNameBox(){
    document.getElementById("main").style.display = "block";
    document.getElementById("nameBox").style.display = "none";
    document.getElementById("name").value = document.getElementById("inputName").value;
}

// 触发函数：点击主页面产品介绍输入框跳转页面
function showProductBox(){
    document.getElementById("main").style.display = "none";
    document.getElementById("productBox").style.display = "block";
    document.getElementById("inputProduct").value = document.getElementById("product").value;
    document.getElementById("productBox").focus();
}
//触发函数：输入产品介绍页面切换回主页面
function hiddenProductBox(){
    document.getElementById("main").style.display = "block";
    document.getElementById("productBox").style.display = "none";
    document.getElementById("product").value = document.getElementById("inputProduct").value;
}

// 触发函数：点击主页面公司介绍输入框跳转页面
function showCompanyBox(){
    document.getElementById("main").style.display = "none";
    document.getElementById("companyBox").style.display = "block";
    document.getElementById("inputCompany").value = document.getElementById("company").value;
    document.getElementById("companyBox").focus();
}
//触发函数：输入公司介绍页面切换回主页面
function hiddenCompanyBox(){
    document.getElementById("main").style.display = "block";
    document.getElementById("companyBox").style.display = "none";
    document.getElementById("company").value = document.getElementById("inputCompany").value;
}


/*------------------判断手机号----------------*/	
function rangeRE(inputID){
	var obj = document.getElementById(inputID);
	var str = obj.value;
	var phoneReg = /^1[34578]\d{9}$/ ;
	/*-------------------判断输入框的值是否为空-----------------*/
	if(!phoneReg.exec(str)){
		document.getElementById('hintAtc').innerHTML = '请输入正确的手机号';
		showHintAtc();
	}else{
		sendVerifycode(str,"send");
	}
	
}
	
	

/*------------------判断验证码----------------*/
function checkVerification(){
		var obj = document.getElementById("verification");
		var str = " "+obj.value;
		var pobj = document.getElementById("inputID");
		var pstr = pobj.value;
		var hint = document.getElementById('hintAtc');
		//这里是一个坑，一个空格的坑，记得用去空格的方法
		// alert("CODE=" + CODE);
		// alert("str=" + str);
		if(pstr == ""){
			hint.innerHTML = '请输入手机号';
			showHintAtc();
			return false;
		}else if(str == " "){
			hint.innerHTML = '请输入验证码';
			showHintAtc();
			return false;
		}else if(str != CODE){
			hint.innerHTML = '请输入正确的验证码';
			showHintAtc();
			return false;
		}else if(pstr != PHONE){
			hint.innerHTML = '请输入正确的手机号';
			showHintAtc();
			return false;
		}else{
			hint.innerHTML = '';

			return true;
		}
}


//--------------------------------proAplictionForm.html-------------------------------
var CURRENTINPUT = new Object;//当前输入的main页面的input结点，结点类型

// 触发函数：点击主页面输入框跳转到输入页面
function showInputPagePaf(obj){
	//删除input盒子下的空白节点
	del_ff(obj);
	del_ff(obj.firstChild.nextSibling);
	//取main页面的input节点
	var inputMainObj = obj.firstChild.nextSibling.firstChild;
	CURRENTINPUT = inputMainObj;
	//alert(inputMainObj);
	document.getElementById("main").style.display = "none";
	document.getElementById("inputPage").style.display = "block";
	document.getElementById("inputValue").value = inputMainObj.value;
	document.getElementById("inputValue").focus();
//	alert(CURRENTINPUT);
}

//触发函数：输入姓名页面切换回主页面
function hiddenInputPagePaf(){
	document.getElementById("main").style.display = "block";
	document.getElementById("inputPage").style.display = "none";
	CURRENTINPUT.value = document.getElementById("inputValue").value;
}


// 触发函数：点击input所在行触发光标
function showCursorPaf(obj){
	//删除input盒子下的空白节点
	del_ff(obj);
	del_ff(obj.firstChild.nextSibling);
	//取main页面的input节点
	var inputMainObj = obj.firstChild.nextSibling.firstChild;
	inputMainObj.focus();
}

//触发函数:
function radioPaf(obj){
	del_ff(obj.parentNode);
	var siblingObj = obj.nextSibling;
	if(siblingObj == null){
		siblingObj = obj.previousSibling;
	}
	//alert(siblingObj);
	//高亮选中对勾图片，改变input－radio选中项
	del_ff(obj);
	obj.firstChild.style.display = "block";
	obj.firstChild.nextSibling.style.display = "none";
	obj.lastChild.checked = "true";
	//alert(obj.lastChild.checked);
	//置灰未选项，改变input－radio选中项
	del_ff(siblingObj);
	siblingObj.firstChild.style.display = "none";
	siblingObj.firstChild.nextSibling.style.display = "block";
	siblingObj.lastChild.checked = "";
	//alert(siblingObj.lastChild.checked);
}

//验证输入框内容是否符合手机号正则，是返回true，不是返回false
function isPhone(obj){
	var str = obj.value;
	var phoneReg = /^1[34578]\d{9}$/ ;//手机号的正则	
	if(phoneReg.exec(str)){
		return true;
	}
	return false;
}

//验证输入框内容是否符合手机号正则，是返回true，不是返回false
function isEmail(obj){ 
	var str = obj.value;
	var emailReg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/; 
	if(emailReg.exec(str)){
		return true;
	}
	return false;
}
//触发函数:提交
function submitPaf(){
	if(
		document.getElementById('name').value == "" ||
		document.getElementById('school').value == "" ||
		document.getElementById('major').value == "" ||
		document.getElementById('sex').value == "" ||
		document.getElementById('phone').value == "" ||
		document.getElementById('wechat').value == "" ||
		document.getElementById('grade').value == ""
	){
		document.getElementById('tipPaf').innerHTML = "*为必填选项，请填写完全";
		return false;
	}else if(!isPhone(document.getElementById('phone'))){
		document.getElementById('tipPaf').innerHTML = "请填写正确的手机号";
		return false;
	}else if(
		document.getElementById('sex').value != "男"&&
		document.getElementById('sex').value != "女"
	){
		document.getElementById('tipPaf').innerHTML = "请按照格式填写性别";
		return false;
	}else if(document.getElementById('email').value != ""){
		if(!isEmail(document.getElementById('email'))){
		document.getElementById('tipPaf').innerHTML = "请填写正确的邮箱";
		return false;
		}
	}else{
		document.getElementById('tipPaf').innerHTML = "";
	}

	return true;
}



$(function(){
	$(".div2_Aod").click(function(){
        $(this).addClass("on").siblings().removeClass("on");
        $(".det2_Aod").css("display","block").siblings().css("display","none");
    })
    $(".div3_Aod").click(function(){
        $(this).addClass("on").siblings().removeClass("on");
        $(".det3_Aod").css("display","block").siblings().css("display","none");
    })
    $(".div1_Aod").click(function(){
        $(this).addClass("on").siblings().removeClass("on");
        $(".det1_Aod").css("display","block").siblings().css("display","none");
    })



});






