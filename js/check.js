/*绑定事件*/
function set(){
	var submit = document.getElementById('submit');
	submit.onsubmit = function(){
		return check();
	}
}
/*正则匹配姓名 */
function regex1(nameString){
	var re = /^[\u4e00-\u9fa5]{2,5}$/;
	var string = nameString;
	var result = re.exec(string);
	if (result != null)	
		return true;
	else
		return false;
}
/*正则匹配学号*/
function regex2(idString){
	var re = /\d{8}/;
	var string = idString;
	var result = re.exec(string);
	if (result != null)	
		return true;
	else
		return false;
}

/*检验函数*/
function check(){
    var	studentName=form1.name.value;
    var	studentId =form1.id.value;
	if (studentName=="" || studentId=="")
	{
         alert("姓名和学号不能为空");
         return false;
	}
	else if ( regex1(studentName) == false || regex2(studentId) == false ){
		alert("请输入正确的学号和姓名");
		return false;
	}
	else
		return true;
}
/*加载完成后执行*/
window.onload = set;