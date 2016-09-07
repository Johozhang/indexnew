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

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />

    <script type="text/javascript" src="./jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="./alljs.js"></script>
    <title>免费量尺设计</title>
</head>

<body style="background-color: #ffffff">

<div style="position: relative;height: 35%">
    <img src="images0709/top_01.jpg" width="100%">
    <img src="images0709/top_02.jpg" width="100%">
    <img src="images0709/top_03.jpg" width="100%">
    <img src="images0709/top_04.jpg" width="100%">
    <img src="images0709/top_05.jpg" width="100%">
</div>



<div style="position: relative;height: 60%" class="input_form">
    <img src="images0709/submit_bg.jpg" style="position: absolute;width: 100%;left: 0%;">
    <form id="sign_form" name="sign_form" style="position: relative;">
        <input id="name"  type="text" name="name" onfocus="this.type='text'" onblur="this.type='text'" placeholder="输入姓名，方便沟通量尺时间" style="font-size: 14px; position: absolute;width: 68%;left:21%;top:33.9%;height: 12%;border: none;background-color: transparent;z-index: 6;">
        <input id="phone" type="text" name="phone" onfocus="this.type='number'" onblur="this.type='text'" placeholder="输入号码，严格保密不外泄" style="font-size: 14px; position: absolute;width: 68%;left:21%;top:47%;height: 12%;border: none;background-color: transparent;z-index: 6;">
        <div id="submit"  style="opacity:0;position: absolute;width: 80%;left:10%;top:69%;height: 11%;border: none;"></div>

    </form>
</div>
<div id="blank" style="height: 45%;display: none"></div>

<div style="position: relative;height: 210%;">
    <img src="images0709/bottom1_01.jpg" width="100%">
    <img src="images0709/bottom1_02.jpg" width="100%">
    <img src="images0709/bottom1_03.jpg" width="100%">
    <img src="images0709/bottom1_04.jpg" width="100%">
    <img src="images0709/bottom1_05.jpg" width="100%">
    <img src="images0709/bottom1_06.jpg" width="100%">


    <script language =javascript >

        var curIndex=0;
        //时间间隔 单位毫秒
        var timeInterval=2000;
        var arr=new Array();
        var arr2=new Array();
        arr[0]="images0709/fangmei1.png";
        arr[1]="images0709/fangmei2.png";
        arr[2]="images0709/fangmei3.png";

        arr2[0]="images0709/bianshen1.png";
        arr2[1]="images0709/bianshen2.png";
        arr2[2]="images0709/bianshen3.png";
        setInterval(changeImg,timeInterval);
        function changeImg()
        {
            var fm=document.getElementById("fm");
            var bs=document.getElementById("bs");
            if (curIndex==arr.length-1)
            {
                curIndex=0;
            }
            else
            {
                curIndex+=1;
            }
            fm.src=arr[curIndex];
            bs.src=arr2[curIndex];
        }
    </script>


    <img id="fm" src="images0709/fangmei1.png" style="margin-left: 6%;width: 46.5%;">
    <img src="images0709/square_fm.png" style="margin-left:-5%;width: 46.5%;margin-bottom: 5%;">
    <img id="bs" src="images0709/bianshen1.png" style="margin-left: 6%;width: 46.5%;">
    <img src="images0709/square_bs.png" style="margin-left:-5%;width: 46.5%;margin-bottom: 5%;">
    <img src="images0709/jiaquan1.png" style="margin-left: 6%;width: 46.5%;">
    <img src="images0709/square_jq.png" style="margin-left:-5%;width: 46.5%;margin-bottom: 5%;">




    <img src="images0709/bottom2_01.jpg" width="100%">
    <img src="images0709/bottom2_02.jpg" width="100%">
    <img src="images0709/bottom2_03.jpg" width="100%">
    <img src="images0709/bottom2_04.jpg" width="100%">
    <img src="images0709/bottom2_05.jpg" width="100%">
    <img src="images0709/bottom2_06.jpg" width="100%">
    <div style="height: 80px;"></div>
</div>

<img  src="./images0709/dibu_box.png" class="dibu_box">


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
            if(isAndroid)$("#blank").show();

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
        $('html,body').animate({scrollTop: '300px'},300)
        $("#phone").focus();
    });

    $("#ok_bg").click(function(){
        $("#confirm_obj").hide();
    });

    //底部按钮JS
    var first = true;
    window.onload = function(){
        var body_hight = $(document).height();
        var topxx = $(".input_form").offset().top;
        var topxingming = $("#name").offset().top - 50;
        $(".dibu_box").hide();
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(document).scrollTop() > topxx+100) {
                    $(".dibu_box").show();
                } else {
                    $(".dibu_box").hide();
                }
                if ($(document).scrollTop() >= ($(document).height() - $(window).height()) * 0.100) {
                    if(first){
                        first = false;
                    }
                }
            });
        });
    };

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
