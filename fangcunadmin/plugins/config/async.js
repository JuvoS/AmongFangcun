//1. 创建AJAX对象
 function createAjaxObject(){
     if(window.XMLHttpRequest){
         return new XMLHttpRequest();
     }else {
         //IE5.0 IE5.5 IE6.0
         return new ActiveXObject('Microsoft.XMLHTTP');
     }
 }
 function ajaxPost(asurl){
		 //1. 创建ajax对象
		 var xmlhttp = createAjaxObject();
		 url = asurl;
		 //2. 设置ajax请求的参数 [a.请求方法，b.请求url， c.请求类型(同步 false | 异步 true)] open();
		 xmlhttp.open('post',url,true);
		  
		 //3.注册事件回调函数 (监听ajax对象状态改变时被调用)
		 xmlhttp.onreadystatechange = function(){
		     //alert("test = " + xmlhttp.readyState);
		     if(4 == xmlhttp.readyState){ //服务器端完全响应客户端
		         //获取服务器端响应客户端的信息
		         if(200 == xmlhttp.status){
		         	var msg = xmlhttp.responseText;
		                      
		             return msg;
		         }
		             
		         if(404 == xmlhttp.status)
		             alert('当前资源不存在！');
		          
		         if(500 == xmlhttp.status)
		             alert('系统正忙。。。。');
		     }
		 }
		 //设置请求参数格式  key=value;
		 xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		 //4.发送ajax请求 send(发送请求数据)
		 xmlhttp.send('username=' + obj.value);
}
 function ajaxJq(asurl){
// 	alert(asurl);
	var ares;
 	$.ajax({  
        url: asurl,  
        type: "GET",  
        dataType: 'jsonp',  
        //            crossDomain: true,  
        success: function (result) {  
            //                data = $.parseJSON(result);  
            //                alert(data.nickname);
            
            ares = result;
            console.log(ares);
            alert(ares);
            return ares; 
            
        }  
    });
    return ares;
 }
