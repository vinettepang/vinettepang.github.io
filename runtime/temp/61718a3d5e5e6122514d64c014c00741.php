<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\micebear\public/../application/index\view\wechatquizzes\indexv2.html";i:1495874581;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,minimum-scale=1.0" />
    <meta name="keywords" content="白熊求职 网申 PM 测试">
    <meta name="description" content="白熊求职 网申 PM 测试">
    <link rel="stylesheet" type="text/css"  href="/static/css/nucleo-glyph.css" />
    <link rel="stylesheet" type="text/css"  href="/static/css/nucleo-outline.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/static/css/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/wechatquizzes_v2.css" />
    <title>互联网求职测试</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#482929">
    <meta name="theme-color" content="#ffffff">
    <script type="text/javascript" src="/static/js/jquery.1.10.1.min.js"></script>
    <script type="text/javascript" src="/static/js/wechatquizzes_v2.js"></script>
    <script type="text/javascript" src=" http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
    <script type="text/javascript" src="/static/js/jquery.fancybox.pack.js"></script>

</head>
<body>
<div style="display:none"></div>
<div class="wrap">
    <div class="enter_wrap">
        <div class="title">
            <h1 class="enter_title"></h1>
            <!-- <br>
            <p>产品经理测试 - 进阶版</p>
            <p style="font-size: small">（更多测试正在赶来...）</p> -->
        </div>
        <div class="wrap_center">
            <div class="topic_section">
                <h2 class="enter_sec_title title_base"><img src="/static/images/wechatquizzes/v2/title_base.png"></h2>
                <input type="radio" name="section" id="lv.1" value="0" checked/> <label for="lv.1"><i class="nc-icon-glyph ui-1_check-bold section_check"></i><span>简历</span></label>
                <input type="radio" name="section" id="lv.2" value="1"/> <label class="mgbt20" for="lv.2"><i class="nc-icon-glyph ui-1_check-bold section_check"></i><span>笔试模拟</span></label>

                 <h2 class="enter_sec_title title_job"><img src="/static/images/wechatquizzes/v2/title_job.png"></h2>
                <input type="radio" name="section" id="lv.3" value="2"/> <label for="lv.3"><i class="nc-icon-glyph ui-1_check-bold section_check"></i><span>产品经理</span></label>
                <input type="radio" name="section" id="lv.4" value="3"/><label for="lv.4"><i class="nc-icon-glyph ui-1_check-bold section_check"></i><span>运营</span></label>
                 <input type="radio" name="section" id="lv.5" value="4"/> <label for="lv.5"><i class="nc-icon-glyph ui-1_check-bold section_check"></i><span>新媒体运营(微信篇)</span></label>
                  <input type="radio" name="section" id="lv.6" value="5"/> <label class="clrmgbt" for="lv.6"><i class="nc-icon-glyph ui-1_check-bold section_check"></i><span>市场营销</span></label>
                <input type="hidden" name="select_section" value="">
            </div>
            <div class="enter_btn btn btn-active">开始测试</div>

            <!--<div class="free_btn" onclick="window.location.href='http://icebear.me/academy/'">免费修炼</a></div>-->
        </div>
        <div class="wrap_bottom">
        </div>
       <!--  <div class="bg-left"></div> -->
        <div class="bg-right"></div>
    </div><!-- /.enter_wrap -->
    <div class="topic_wrap">
        <div class="fade_wrap">
            <div class="wrap_top">
                <!-- <div class="topic_no">
                    
                </div> -->
            </div>
            <div class="wrap_top1">
                <p id="topic_detail"></p>
                <div class="topic_title" id="topic_title"></div>
                <div id="topic_detail_img"></div>
            </div>
            <div class="wrap_center">
              <!--   <table class="topic_option" id="topic_option">
                </table> -->
                <ul class="topic_option" id="topic_option">
                    
                </ul>
                <button class="ic-btn ic-next-topic btn btn-disabled" disabled><span class="curr_no" id="curr_no">1</span>/<span class="count"></span><span class="next-text">下一题</span></button>
            </div>
        </div>
        <div class="wrap_bottom">
            <!--<img class="lagou_logo" src="images/topic_bottom.png">-->
        </div>
        <div class="bg-right"></div>
    </div><!-- /.topic_wrap -->
    <div class="over_wrap">
        <div class="wrap_top">
            <div class="over_score">
                <div class="score_container"><span class="score_title"></span><span class="score_percent"></span></div>
                <div class="des_content"></div>
                <!-- <div class="des_keyword"></div> -->
                <!--<span class="score">
                    <div class="score_detail_wrap">
                        <b class="score_detail"></b>分
                    </div>
                </span>-->
            </div>
        </div>
        <div class="wrap_center">
            <div class="over_des">
                <ul class="des_detail"></ul>
            </div>
            <a style="display: none;" class="btn btn-active btn-share ic-btn-retest" href="">重测一次</a>
            <a style="display: none;" class="btn btn-active btn-share ic-btn-othertest" href="/wechatquizzes/indexv2">再测测其他题</a>
            <button class="btn btn-active btn-share over_share">查看答案与解析</button>
        </div>
        <div class="wrap_bottom">
        </div>
        <!-- <div class="bg-right"></div> -->
        
     <!--    <div class="over_btn">
            <div class="over_share">
                <div class="full">
                    
                    <div class="over_btn_detail">领取秘籍和奖励<p class="over_btn_tip">（晒个成绩顺便获取价值¥299的产品课）</p></div>

                </div>
                <div class="fail">
                    <div class="over_btn_detail">领取满分通关秘籍</div>
                    <p class="over_btn_tip">（问题解析+价值299元的产品课程）</p>
                </div>
            </div>
        </div> -->
    </div><!-- /.over_wrap -->

</div><!-- /.wrap -->

<script type="text/javascript">
    careerism.init(); //初始化

    $('.wrap').on('click', '.over_share', function () {
        var nickname = "<?php echo $userinfo['nickname'];?>";
        var headimgurl = "<?php echo $userinfo['headimgurl'];?>";
        var share_section = $('input[name="select_section"]').val()
        //share_link = encodeURI('http://local.icebear.me/wechatquizzes/share?share=1&score='+score+'&topic_length='+topic_length+'&nickname='+nickname+'&headimgurl='+headimgurl+'&keyword='+keyword);
        share_link = '/wechatquizzes/newshare?share=1&score='+score+'&topic_length='+topic_length+'&share_section='+share_section;
        window.location.href = share_link;
    });

</script>

<script type="text/javascript">
     wx.config({
         debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
         appId: "<?php echo $wx_shareparm['appid'];?>", // 必填，公众号的唯一标识
         timestamp: "<?php echo $wx_shareparm['timestamp'];?>", // 必填，生成签名的时间戳
         nonceStr: "<?php echo $wx_shareparm['nonceStr'];?>", // 必填，生成签名的随机串
         signature: "<?php echo $wx_shareparm['signature'];?>",// 必填，签名，见附录1
         jsApiList: [
             'checkJsApi',
             'onMenuShareTimeline',
             'onMenuShareAppMessage'
         ]// 必填，需要使用的JS接口列表，所有JS接口列表见附录2
     });
     wx.ready(function () {
         //分享到朋友圈
         wx.onMenuShareTimeline({
             title: "互联网求职测试", // 分享标题
             link: "http://h5.icebear.me/wechatquizzes/indexv2", // 分享链接
             imgUrl: "http://h5.icebear.me/static/images/wechatquizzes/test.png", // 分享图标
             success: function () {
                 // 用户确认分享后执行的回调函数
                 $('.share_success').css('display', 'block');
                 $('.share_wrap').css('display', 'none');
             },
             cancel: function () {
                 // 用户取消分享后执行的回调函数
                 $('.share_success').css('display', 'none');
                 $('.share_wrap').css('display', 'block');
             }
         });
         //分享给朋友
         wx.onMenuShareAppMessage({
             title: "互联网求职测试",
             desc: "我在参加「互联网求职测试」，你也来试试吧！",
             link: "http://h5.icebear.me/wechatquizzes/indexv2",
             imgUrl: "http://h5.icebear.me/static/images/wechatquizzes/test.png",
             type: "link", // 分享类型：music、video、link，不填默认为link
             dataUrl: "", // 如果分享类型是music、video，则需要提供数据连接，默认为空
             success: function () {
                 $('.share_success').css('display', 'block');
                 $('.share_wrap').css('display', 'none');
             },
             cancel: function () {
                 $('.share_success').css('display', 'none');
                 $('.share_wrap').css('display', 'block');
             }
         });

     });

     wx.error(function (res) {
         alert(res.errMsg);
     });

    //     $('#btn-copy').click(function(){
    //         // var sharecode=$("span#share-code").html();
    //         // sharecode.select(); // 选择对象
    //         // document.execCommand("Copy"); // 执行浏览器复制命令
    //         // alert("已复制好，可贴粘。");
    //         var Url2=document.getElementById("share-code");
    //         Url2.select(); // 选择对象
    //         document.execCommand("Copy"); // 执行浏览器复制命令
    //         alert("已复制好，可贴粘。");
    //     });
    //     function copyText(){
    //         var Url2=document.getElementById("share-code");
    //         Url2.select(); // 选择对象
    //         document.execCommand("Copy"); // 执行浏览器复制命令
    //         alert("将提取码粘贴至公众号对话框,即可获得礼包链接!");
    //     }
    //      $(document).ready(function(){
    //     var fooText=$("#foo").text();
    //     var clipboard = new Clipboard('#copy_btn');

    //     clipboard.on('success', function(e) {
    //         console.info('Action:', e.action);
    //         console.info('Text:', e.text);
    //         console.info('Trigger:', e.trigger);
    //         alert("复制成功");

    //         e.clearSelection();
    //     });
    // });

</script>
<script src="/static/js/analytics-h5icebearme.js"></script>

</body>
</html>