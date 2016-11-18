function jsonp(url,data='')
 {
 	var str="";
 	$.ajax({
 		type:"GET",
 		url:"http://www.admin.com/"+url,
 		dataType:'jsonp',
 		data:data,
 		async:'false',
 		jsonp:"callback",
 		sussess : function(msg){
 			str=msg;
 		},
 		// error : function()
 		// {
 		// 	alert("fail");
 		// },
 	});
 	return str;
 };