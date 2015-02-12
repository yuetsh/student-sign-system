/*绑定事件*/
function set(){
	var submit = document.getElementById('submit');
	submit.onsubmit = function(){
		return check();
	}
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
	return true;
}
/*加载完成后执行*/
window.onload = set;