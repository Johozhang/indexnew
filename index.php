<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/21 0021
 * Time: 上午 10:13
 */
require_once "jssdk.php";
$jssdk = new JSSDK("wx7c946c11adf3d4df", "027b4f33816b1a5ca9a3e123757dadb4");
$signPackage = $jssdk->GetSignPackage();
?>

<!DOCTYPE html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" type="text/css" href="./index.css"/>
		
		<script type="text/javascript" src="./jquery-1.8.3.min.js"></script>
   		<script type="text/javascript" src="./alljs.js"></script>
		<title>免费量尺设计</title>
	</head>
	<body>
		<div id="contain" class="clearfix">
			<img src="./banner.jpg" class="banner"/>
			<h2>申请免费礼包，<span>只需10秒</span></h2>
			<p class="order">本月，预约人数已达到：<span>15686</span>人</p>
			<div class="clearfix balance">
				<p class="sign">当天剩余<br />报名名额</p>
				<p class="signnum"><span id="msg"></span><span id="msg1"></span></p>
			</div>
			
			<!--报名滚动-->
			 <!--<script language=javascript >
        var curIndex=0;
        //时间间隔 单位毫秒
        var timeInterval=2000;
        var arr=new Array();

        arr[0]="images0709/fangmei1.png";
        arr[1]="images0709/fangmei2.png";
        arr[2]="images0709/fangmei3.png";

        setInterval(changeImg,timeInterval);
        function changeImg()
        {
            var fm=document.getElementById("fm");

            if (curIndex==arr.length-1)
            {
                curIndex=0;
            }
            else
            {
                curIndex+=1;
            }
            fm.src=arr[curIndex];
        }
    </script>-->
    
			<ul id="gundong">
				<li>张**　188****3489</li>
				<li>赵**　131****7990</li>
				<li>李**　154****0975</li>
				<li>张**　133****0990</li>
				<li>吴**　155****7654</li>
				<li>钱**　181****3421</li>
				<li>孙**　188****3131</li>
				<li>周**　131****8990</li>
				<li>戎**　134****8790</li>
				<li>孔**　133****6678</li>
			</ul>
			
			
			<div class="input_form">
			<form action="" id="sign_form" name="sign_form">
				<input id="name" type="text" name="name" class="signname" onfocus="this.type='text'" onblur="this.type='text'" value="" placeholder="输入姓名，方便沟通量尺时间"/>
				<input type="text" name="phone" onfocus="this.type='number'" onblur="this.type='text'" class="signname" value="" placeholder="输入号码，严格保密不外泄"/>
				<input type="submit" name="submit" id="submit" value="立即报名"/>
			</form>
			</div>
			<ul class="buzhou">
				<li><img src="img/tietu4.jpg" alt="" /></li>
				<li><img src="img/tietu5.jpg" alt="" /></li>
				<li><img src="img/tietu6.jpg" alt="" /></li>
			</ul>
		</div>
		
		<script type="text/javascript" src="./index.js"></script>
		
		<object id="confirm_obj" style="display: none">
    <div class="shade"></div>
    <img src="images0709/ok_bg.png" style="position: fixed;top:30%;left: 10%;width: 80%;z-index: 11;" id="ok_bg">
</object>
		
		<script type="text/javascript">
		var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1259972648'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1259972648' type='text/javascript'%3E%3C/script%3E"));</script>
	</body>
	<script>
    var s_height=window.screen.height;
    console.log(s_height);

    $("#sign_form").height(s_height*0.62);
    console.log("现在该元素高度为"+ $("#sign_form").height());
</script>

<script>

            var u = navigator.userAgent;
            var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1; //android终端
            var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
//    alert('是否是Android：'+isAndroid);
//    alert('是否是iOS：'+isiOS);

    var is_sign=0;
    $("#submit").click(function(){
        if(checkForm(document.sign_form)&&is_sign==0){
            is_sign=1;
            console.log("表格无误，提交数据");
            $.ajax({
                type: 'POST',
                url: 'success.php',
                data: {phone:$("#phone").val(), name:$("#name").val()},
                dataType: 'text',
                success: function (data) {
                    //报名成功，弹出弹窗
//                    alert("预约成功！我们稍后会有专人联系您！");
                    $("#confirm_obj").show();
                    console.log(data);
                    setTimeout("is_sign=0",30000);
                },
                error:function(XMLHttpRequest, textStatus, errorThrown){
                    //alert(XMLHttpRequest.readyState + XMLHttpRequest.status + XMLHttpRequest.responseText);
                    is_sign=0;
                    alert("网络错误，请稍后重试!");
                }
            });
        }
        else if(is_sign==1)alert("您已预约过啦，无需重复预约。");
    });

    $(".dibu_box,#name").click(function(){
        $('html,body').animate({scrollTop: '200px'},300)
        $("#name").focus();
    });
    $("#phone").click(function(){
        $('html,body').animate({scrollTop: '200px'},300)
        $("#phone").focus();
    });

    $("#ok_bg").click(function(){
        $("#confirm_obj").hide();
    });


</script>

	<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script>
    //微信接口
    wx.config({
        debug: false,
        appId: '<?php echo $signPackage["appId"];?>',
        timestamp: <?php echo $signPackage["timestamp"];?>,
        nonceStr: '<?php echo $signPackage["nonceStr"];?>',
        signature: '<?php echo $signPackage["signature"];?>',
        jsApiList: [
            // 所有要调用的 API 都要加到这个列表中
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'onMenuShareQZone'
        ]
    });
    wx.ready(function () {
        // 在这里调用 API

        wx.onMenuShareAppMessage({
            title: '快来抢免费墙面设计啦', // 分享标题
            desc: '免费送千元墙面设计礼包', // 分享描述
            link: '', // 分享链接
            imgUrl: 'http://wx.xiaoming.com.cn/xiaoming/baomingye/1880new/icon.jpg', // 分享图标
            type: '', // 分享类型,music、video或link，不填默认为link
            dataUrl: '' // 如果type是music或video，则要提供数据链接，默认为空

        });
        wx.onMenuShareTimeline({
            title: '快来抢免费墙面设计啦', // 分享标题
            link: '', // 分享链接
            imgUrl: 'http://wx.xiaoming.com.cn/xiaoming/baomingye/1880new/icon.jpg', // 分享图标
        });



    });
</script>
</html>
