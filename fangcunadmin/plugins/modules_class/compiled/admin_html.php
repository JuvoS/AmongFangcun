<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QIMUREN Mana</title>

    <!-- Bootstrap -->
    <link href="themes/statics/dist/css/bootstrap.min.css" rel="stylesheet">
 		<style>
	 		body{
	 			font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		    font-size: 14px;
		    line-height: 1.42857143;
		    color: #333;
		    padding-top: 50px;
	 		}
 			/*
			 * Top navigation
			 * Hide default border to remove 1px line.
			 */
			.navbar-fixed-top {
			  border: 0;
			}
			/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/*
 * Main content
 */

.main {
  padding: 20px;
  padding-bottom: 10px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}
.scrolltab{
	position: relative;
	height: 300px;
	overflow: auto;
}


 		</style>
  </head>
  <body>
   <!-- <h1>你好，世界！</h1>-->

    <div class="container">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand">QIMUREN</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
	            <li><a href="#">Dashboard</a></li>
	            <li><a href="#">Settings</a></li>
	            <li><a href="#">Profile</a></li>
	            <li><a href="#">Help</a></li>
	          </ul>
	          <form class="navbar-form navbar-right">
	            <input type="text" class="form-control" placeholder="Search...">
	          </form>
					</div>
				</div>
			</nav>
			
			
			<div class="container-fluid">
	      <div class="row">
	        <div class="col-xs-12 .col-md-8 main">
	          <div class="row">
						  <div class="col-xs-6 col-sm-3"><?php
echo $_obj['name'];
?>
</div>
						  <div class="col-xs-6 col-sm-3">商品</div>
						
						  <!-- Add the extra clearfix for only the required viewport -->
						  <div class="clearfix visible-xs-block"></div>
						
						  <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
						  <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
						</div>
	        </div>
	        <div class="col-xs-12 .col-md-8 main">
	          <h1 class="page-header">Dashboard</h1>
	          <div class="row">
						  <div class="col-xs-4 col-md-4 scrolltab">
						  	<ul class="list-group" id="class_list">
								  <!--<li class="list-group-item">Cras justo odio</li>
								  <li class="list-group-item"><span class="badge">14</span>Dapibus ac facilisis in</li>
								  <li class="list-group-item">Morbi leo risus</li>
								  <li class="list-group-item">Porta ac consectetur ac</li>
								  <li class="list-group-item">Vestibulum at eros</li>-->
								</ul>
						  </div>
						  <div class="col-xs-8 col-md-8">
						  	<div class="table-responsive" id="area">
			            <!--<table class="table table-striped">
			              <thead>
			                <tr>
			                  <th>#</th>
			                  <th>Header</th>
			                  <th>Header</th>
			                  <th>Header</th>
			                  <th>Header</th>
			                </tr>
			              </thead>
			              <tbody>
			                <tr>
			                  <td>1,001</td>
			                  <td>Lorem</td>
			                  <td>ipsum</td>
			                  <td>dolor</td>
			                  <td>sit</td>
			                </tr>
			                <tr>
			                  <td>1,015</td>
			                  <td>sodales</td>
			                  <td>ligula</td>
			                  <td>in</td>
			                  <td>libero</td>
			                </tr>
			              </tbody>
			            </table>-->
			          </div>
						  </div>
						</div>
	        </div>
	      </div>
	     </div>
    </div>
    <button onclick="btnAjax()">123</button>
    <div id="bcc"></div>
  </body>
</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="themes/statics/dist/js/bootstrap.min.js"></script>
<script src="plugins/config/async.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function(){
	$.ajax({  
        url: "plugins/config/async.php?method=jq&pp=side",  
        type: "GET",  
        dataType: 'jsonp',  
        //            crossDomain: true,  
        success: function (result) {  
            //                data = $.parseJSON(result);  
            //                alert(data.nickname); 
            console.log(result);  
            for(i = 0; i < result.length; i++){
                 option = document.createElement('li');
                 option.setAttribute('class', 'list-group-item');
                 option.innerHTML = "<a onclick='nowAjax(\""+result[i].classn+"\");'>"+result[i].name+"</a>";
                 document.getElementById("class_list").appendChild(option);
             }
        } ,error:function(){console.log("error");}
    });  
});
   	
   	function nowAjax(temp){
   		var stuUrl = "plugins/config/async.php?method=jq&pp=stu&t="+temp;
   		$.ajax({  
        url: stuUrl,  
        type: "GET",  
        dataType: 'jsonp',  
        //            crossDomain: true,  
        success: function (result) {  
            //                data = $.parseJSON(result);  
            //                alert(data.nickname); 
            console.log(result);  
            var t="<table class='table table-striped'><thead><tr>";
        		t += "<th>学生</th>";
		        t += "<th>学号</th>";
		        t += "<th>专业</th>";
		        t += "<th>性别</th>";
		        t += "<th>时间</th></tr></thead><tbody>";
            for(i = 0; i < result.length; i++){
            	var k = "<tr>";
            	k += "<td>"+result[i].stuName+"</td>";
		          k += "<td>"+result[i].stuNum+"</td>";
		          k += "<td>"+result[i].stuSub+"</td>";
		          k += "<td>"+result[i].stuSex+"</td>";
		          k += "<td>"+result[i].stuTime+"</td></tr>";
		          t += k;
             }
            t += "</tbody></table>";
            document.getElementById("area").innerHTML=t;
        } ,error:function(){console.log("error");}
    });  
   	}
    function btnAjax(){
    	$.ajax({  
        url: "plugins/config/async.php?method=jq&btn=0",  
        type: "GET",  
        dataType: 'jsonp',  
        //            crossDomain: true,  
        success: function (result) {  
            //                data = $.parseJSON(result);  
            //                alert(data.nickname); 
            console.log(result.xx);   
            for(i = 0; i < 3; i++){
                 option = document.createElement('li');
                 option.setAttribute('class', 'list-group-item');
                 option.innerHTML = result.c;
                 document.getElementById("class_list").appendChild(option);
             }
//          document.getElementById("class_list").innerHTML="<li class="list-group-item">Vestibulum at eros</li>";
        } ,error:function(){console.log("error");}
    });  
    }
</script>