// document.write('<script type="text/javascript" src="'+jquery_url+'"></script>');
console.log("login.js脚本执行了。");
$(function(){
    $('#login').click(function(){
      var user_id=$('#user_id').val();
      var input_pwd=$('#input_pwd').val();
	  var identity = $("#select_identity_id").val();
	  console.log("jquery执行了。");
      $.ajax({
        type: "post",
        url: login_url,
        data: {user_id:user_id,input_pwd:input_pwd,identity:identity},//提交到demo.php的数据
        success: function(msg){
			console.log(msg);
			var jsonObj=JSON.parse(msg);
			if(jsonObj.state=='successful'){
				if(identity=='teacher'){
					window.location.href='tea_page.html';
				}
				else if(identity=='student'){
					window.location.href='stu_page.html';
				}
				
			}
			else{
				$('#login_fail').html("登录失败，请检查用户名、密码或选择的身份是否正确。");
			}
			console.log(jsonObj);
        },
        error:function(msg){
			console.log("ajax请求失败。");
			$('#login_fail').html("登录失败，请检查用户名、密码或选择的身份是否正确。");
        }
      });
    })
  })