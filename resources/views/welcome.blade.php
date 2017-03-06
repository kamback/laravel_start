<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 66px;
            }
            .titleA{
            	font-size: 32px;
            	text-decoration: none;
            	color: #000;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5.1.11 各模块演示实例 </div>
                <a class="title titleA" href="#"> <<进入演示>> </a>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
    		// console.log('RGB('+Math.ceil(Math .random()*255)+','+ceil(Math.random()*255)+','+ceil(Math.random()*255)+')');
    		setInterval(function(){
				$('.title').css('color','RGB('+Math.ceil(Math.random()*200)+','+Math.ceil(Math.random()*200)+','+Math.ceil(Math.random()*200)+')');
    		},2000);
    			
    	});
    </script>
</html>
