/**
 * 项目的配置文件
 */
console.log("config.js打开了。");
var host_url = "http://localhost/Software-Engineering-Design";

//jquery库
var jquery_url=host_url+"/lib/jquery-3.3.1.min.js"
document.write('<script type="text/javascript" src="'+jquery_url+'"></script>');
//登录接口
var login_url=host_url+"/server/login/login.php";

//后端提供的提交论文接口的接口地址。
//var submit_paper_url=host_url+"/submit_paper.php";
