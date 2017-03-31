<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-EN">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>联系我们|contact us</title>
    <link rel="stylesheet" href="/Public/css/public.css">
    <link rel="stylesheet" href="/Public/css/contact.css">
    <!--[if lt IE 9]>
    <script>(function(){if (!/*@cc_on!@*/0) return;var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video".split(', ');var i= e.length;while (i--){document.createElement(e[i])}})()</script>
    <![endif]-->
</head>
<body>
    <div class="wrap">
        <!--include header.html-->
        <header id="header" class="header">
            <div class="h-wrap">
                <a class="h-log" href=""></a>
                <nav class="h-nav">
                    <a class="h-b-a" href="<?php echo U('Index/index');?>">首页</a>
                    <a class="h-b-a" href="<?php echo U('Article/projLevelOne');?>">项目介绍</a>
                    <a class="h-b-a" href="<?php echo U('Article/listConsult');?>">达人资讯</a>
                    <a class="h-b-a" href="<?php echo U('Article/showStaticPage', 'name=community');?>">迈尔斯社群</a>
                    <a class="h-b-a" href="<?php echo U('Article/showStaticPage', 'name=about');?>">关于我们</a>
                    <a class="h-b-a" href="<?php echo U('Article/showStaticPage', 'name=contact');?>">联系我们</a>
                </nav>
            </div>
        </header>
        <article class="banner">
            <img class="b-img" src="/Public/images/contact-banner.png" alt="">
        </article>
        <section class="main">
            <article class="m-message">
                <hgroup class="m-tit">
                    <h2 class="m-t-en">ONLINE MESSAGE</h2>
                    <h1 class="m-t-zh">留言/咨询</h1>
                </hgroup>
                <form class="m-m-form " action="<?php echo U('Contact/recv');?>" method="post">
                    <p class="m-m-f-name m-m-f-row"><input class="m-m-f-in in" type="text" name="name"><span class="m-m-f-ft ft">姓名</span></p>
                    <p class="m-m-f-tel m-m-f-row"><input class="m-m-f-in in" type="text" name="tel"><span class="m-m-f-ft ft">电话</span></p>
                    <p class="m-m-f-mail m-m-f-row"><input class="m-m-f-in in" type="text" name="mail"><span class="m-m-f-ft ft">邮箱</span></p>
                    <p class="m-m-f-info m-m-f-row"><textarea class="m-m-f-in in" name="info"></textarea><span class="m-m-f-ft ft">信息</span></p>
                    <button class="m-m-f-sub" type="submit">提 交</button>
                </form>
            </article>
            <article class="m-contact">
                <hgroup class="m-tit">
                    <h2 class="m-t-en">CONTACT US</h2>
                    <h1 class="m-t-zh">联系我们</h1>
                </hgroup>
                <div class="m-c-c-qrCode">
                    <h3 class="m-c-a-tit m-c-tit">—&nbsp;二维码/QR CODE&nbsp;—</h3>
                    <img class="m-c-a-qrcode" style="width:250px;height:250px;margin-bottom: 60px" src="/Public/images/contact-qrcode.png" alt="">
                </div>
                <div class="m-c-adds">
                    <h3 class="m-c-a-tit m-c-tit">—&nbsp;地址/ADDTRSS&nbsp;—</h3>
                    <p class="m-c-a-adds">成都市高新区盛安街133号汇锦广场A座11层（天府校区）</p>
                    <p class="m-c-a-adds">成都市武侯区航空路华尔兹广场A座4层（人南校区）</p>
                    <div class="m-c-a-mapWrap">
                        <img class="m-c-a-map" src="/Public/images/contact-map.png" alt="">
                    </div>
                </div>
                <div class="m-c-contact">
                    <div class="m-c-c-telMal">
                        <h3 class="m-c-a-tit m-c-tit">—&nbsp;联系方式/Contact&nbsp;—</h3>
                        <p class="m-c-a-p">
                            <span class="m-c-a-tel">15708223241</span>
                            <span class="m-c-a-mail">56789900@qq.com</span>
                        </p>
                    </div>

                </div>
            </article>
        </section>
        <!--include footer.html-->
        <footer class="footer">
            <div class="f-link">
                <a class="f-l-wx f-l-icon" href=""></a>
                <a class="f-l-wb f-l-icon" href=""></a>
                <a class="f-l-f f-l-icon" href=""></a>
                <a class="f-l-fx f-l-icon" href=""></a>
                <a class="f-l-in f-l-icon" href=""></a>
                <a class="f-l-g f-l-icon" href=""></a>
            </div>

            <article class="f-bom">
                <h2 class="f-m-tit">迈尔斯国际教育</h2>
                <p class="f-m-tel">028-85963901</p>
                <p class="f-m-p">
                    <span class="f-m-adds">地址：成都市高新区盛安街133号汇锦广场A座11层</span>
                    <span class="f-m-website">网址：www.my-earth.cn</span>
                </p>
                <p class="f-m-copy">Copyright © 2015迈尔斯 沪ICP备10011451号-6</p>
            </article>
        </footer>
    </div>
    <script type="text/javascript" src="/Public/js/jq.min.js"></script>
    <script type="text/javascript">
        /*input placeholder*/
        void (function(){
            var inEmt = $('input.in, textarea.in');
            inEmt.on('input propertychange', function(){
                $(this).val() == '' ?  $(this).next('.ft').removeClass('hide') : $(this).next('.ft').addClass('hide');
            })
        })()
    </script>
</body>
</html>