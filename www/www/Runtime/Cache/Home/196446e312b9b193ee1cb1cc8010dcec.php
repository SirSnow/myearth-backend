<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-EN">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>迈尔斯社群|MY EARTH’S Community</title>
    <link rel="stylesheet" href="/Public/css/public.css">
    <link rel="stylesheet" href="/Public/css/community.css">
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
        <img class="b-img" src="/Public/images/communitybanner.png" alt="">
    </article>
    <section class="main2">
        <article class="m2-info">
            <img class="m2-i-pic" src="/Public/images/community/detail2-5.jpg" alt="">
            <div class="m2-i-wrap">
                <h3 class="m2-i-name">尤小燕</h3>
                <p class="m2-i-intro">用我自己的话来说，如果学习是一个循序渐进的过程，那么留学申请也就是一个穿针引线的，你一定要把握住每一针每一线，才能保证每一个申请环节紧紧相扣，万无一失。而属于我自己的“针线”，便是我仔细谨慎的工作态度和十年专业的丰富经验。
                    <br><br>而这充足的十年工作积累，也让我对不同年级和年龄段的留学申请工作十分熟悉，而对于留学时遇到不同突发情况所做出的绝佳应对方法，则是我扎实做事所得到的最好礼物。
                    <br><br>身为留学顾问，我深知肩上承载的，是学子们的留学梦想及其父母的殷切期望。因此，我愿以我的所知所能，以我的真心真诚，伴你顺利走进宽广的留学之路。
                </p>
                <p class="m2-i-recom"></p>
            </div>
        </article>
        <a class="m2-btn" href="javascript:history.go(-1)" title="返回"></a>
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
</body>
</html>