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
            <img class="m2-i-pic" src="/Public/images/community/detail1-4.jpg" alt="">
            <div class="m2-i-wrap">
                <h3 class="m2-i-name">Alice / 迈尔斯国际海外升学规划导师</h3>
                <p class="m2-i-intro"> 经验丰富值：
                    International ACAC (美国大学升学指导协会) 成员。
                    <br>专业优势：
                    一直致力于海外名校申请、各国留学签证指导和职业发展规划，覆盖了国外高中，本科及研究生申请的多个层次。

                </p>
                <p class="m2-i-recom">成功案例：
                    从2006年工作至今，成功指导了数百名学生成功实现了世界顶级Top名校的申请：哈佛大学 麻省理工大学 斯坦福大学 芝加哥大学 哥伦比亚大学 康奈尔大学 杜克大学 加州洛杉矶大学 加州伯克利大学 范德堡大学 卡内基梅隆大学 密歇根安娜堡大学 普渡大学等。
                </p>
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