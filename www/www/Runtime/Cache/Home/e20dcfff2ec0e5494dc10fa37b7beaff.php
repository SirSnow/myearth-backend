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
            <img class="m2-i-pic" src="/Public/images/community/detail2-3.jpg" alt="">
            <div class="m2-i-wrap">
                <h3 class="m2-i-name">牛玲</h3>
                <p class="m2-i-intro">喜欢探索挣脱线性思维束缚的一切可能性。我相信成功的教育是“把80%的资源花在能出关键效益的20%的方面，这20%的方面又能带动其余80%的发展”，所以我擅长赋予每一位学生最有价值的洞察力。

                    <br><br>作为国内最年轻哈佛大学，麻省理工大学导师，我自信自己六年的留学教育行业经验能够让我为每一位学生规划最专业的研究生申请及学生背景提升规划。

                    <br><br>如果说“智慧出，有大伪”，那么我对于每一位学生所坚持的“二八”定律，一定会帮助你发掘自己的无限可能性。
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