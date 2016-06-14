


//-------------------------personalData.html-----------------------

//全局变量，存放当前选中的input的id。
//用以确定select的option内容(selectPda函数)，和选中option时给哪个input传回值(selectOptions函数)


//基本函数：清空选择框中的内容
function cleanOptionPda(){
	var pnode = document.getElementById('select');
	//删除换行等空白结点
	del_ff(pnode);
	var itm = pnode.firstChild;
	del_ff(itm);
	var itmChild = itm.firstChild;
	//复制itm结点 及其 全部子结点+全部属性  赋给克隆结点cln
	var cln = itmChild.cloneNode(true);
	//将数组内容赋给相关结点
	while(itm.hasChildNodes()){
		//当div下还存在子节点时 循环继续
		itm.removeChild(itm.firstChild);
	}
	//在itm子节点的最后面添加克隆结点cln
	itm.appendChild(cln);
	itm.firstChild.style.display = 'block';
}

//基本函数：给弹出框设置选项内容
//传入两个参数：arr是要设置的option数组；
function setOptionPda(arr,inputId){
	cleanOptionPda();
	var num = arr.length;
	var i = 0;
	for(i ; i<num ; i++){
		var pnode = document.getElementById('select');
		//删除换行等空白结点
		del_ff(pnode);
		var itm = pnode.firstChild;
		del_ff(itm);
		var itmChild = itm.firstChild;
		//复制itm结点 及其 全部子结点+全部属性  赋给克隆结点cln
		var cln = itmChild.cloneNode(true);
		//在itm子节点的最后面添加克隆结点cln
		itm.appendChild(cln);
		//将数组内容赋给相关结点
		itm.lastChild.innerHTML = arr[i];
		if(arr[i] == document.getElementById(inputId).value)
		{
			itm.lastChild.style.color = '#717071';
		}
		//alert(arr[i]);
	}
	document.getElementById('select').firstChild.firstChild.style.display = 'none';
}


//触发函数:send name to php
function sendNamePda(){
    passedValue('name',document.getElementById("inputName").value);
    passedValue('product',document.getElementById("inputProduct").value);
    passedValue('company',document.getElementById("inputCompany").value);
}

