<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-EN">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>项目介绍|Talent consulting</title>
    <link rel="stylesheet" href="/Public/css/public.css">
    <link rel="stylesheet" href="/Public/css/project.css">
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
        <img class="b-img" src="/Public/images/project-banner.png" alt="">
    </article>
    <section class="main clearfix">
        <article class="m-special" id="m-special">
            <hgroup class="m-title">
                <h1 class="m-t-zh">特色项目</h1>
                <h2 class="m-t-en">Special Project</h2>
            </hgroup>
            <ul class="m-cont clearfix">
                <li class="m-c-row">
                    <a class="m-c-r-img" href="<?php echo U('Article/showStaticPage', 'name=project-e1');?>"><img class="m-c-r-img" src="/Public/images/project/e1.jpg" alt=""></a>
                    <div class="m-c-r-wrap">
                        <h5 class="m-c-r-tit">不忘初心，方得始终</h5>
                        <p class="m-c-r-info">特色项目说明</p>
                    </div>
                </li>
                <?php if(is_array($special)): $i = 0; $__LIST__ = $special;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><li class="m-c-row">
                        <a class="m-c-r-img" href="<?php echo U('Article/detail', 'id='.$vos['id']);?>"><img class="m-c-r-img" src="<?php echo ($vos['cover_path']); ?>" alt=""></a>
                        <div class="m-c-r-wrap">
                            <h5 class="m-c-r-tit"><?php echo ($vos['title']); ?></h5>
                            <p class="m-c-r-info"><?php echo ($vos['subtitle']); ?></p>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--<li class="m-c-row">-->
                    <!--<a class="m-c-r-img" href="../Static/project-sdetailed2.html"><img class="m-c-r-img" src="/Public/images/project/special2.jpg" alt=""></a>-->
                    <!--<div class="m-c-r-wrap">-->
                        <!--<h5 class="m-c-r-tit">新西兰青年人才计划</h5>-->
                        <!--<p class="m-c-r-info">留学就业一体化，创造留学新篇章</p>-->
                    <!--</div>-->
                <!--</li>-->
            </ul>
            <!--这个按钮如果项目多余4个才会显示出来，少于四个则隐藏-->
            <a class="m-c-btn " href="<?php echo U('Article/projLevelTwo', 'cate_id='.$special[0]['cid']);?>">了解更多</a>
        </article>

        <article class="m-bgProm" id="m-bgProm">
            <hgroup class="m-title">
                <h1 class="m-t-zh">背景提升</h1>
                <h2 class="m-t-en">Promotion Project</h2>
            </hgroup>
            <ul class="m-cont clearfix">
                <li class="m-c-row">
                    <a class="m-c-r-img" href="<?php echo U('Article/showStaticPage', 'name=project-e2');?>"><img class="m-c-r-img" src="/Public/images/project/e2.jpg" alt=""></a>
                    <div class="m-c-r-wrap">
                        <h5 class="m-c-r-tit">选择迈尔斯，让美好发生</h5>
                        <p class="m-c-r-info">背景提升课程项目说明</p>
                    </div>
                </li>
                <?php if(is_array($boost)): $i = 0; $__LIST__ = $boost;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vob): $mod = ($i % 2 );++$i;?><li class="m-c-row">
                        <a class="m-c-r-img" href="<?php echo U('Article/detail', 'id='.$vob['id']);?>"><img class="m-c-r-img" src="<?php echo ($vob['cover_path']); ?>" alt=""></a>
                        <div class="m-c-r-wrap">
                            <h5 class="m-c-r-tit"><?php echo ($vob['title']); ?></h5>
                            <p class="m-c-r-info"><?php echo ($vob['subtitle']); ?></p>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--<li class="m-c-row">-->
                    <!--<a class="m-c-r-img" href="../Static/project-bdetailed1.html"><img class="m-c-r-img" src="/Public/images/project/back1.jpg" alt=""></a>-->
                    <!--<div class="m-c-r-wrap">-->
                        <!--<h5 class="m-c-r-tit">新加坡ECS未来商界精英训练营</h5>-->
                        <!--<p class="m-c-r-info">世界顶级金融学术，造就未来商业领袖</p>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li class="m-c-row">-->
                    <!--<a class="m-c-r-img" href="../Static/project-bdetailed2.html"><img class="m-c-r-img" src="/Public/images/project/back2.jpg" alt=""></a>-->
                    <!--<div class="m-c-r-wrap">-->
                        <!--<h5 class="m-c-r-tit">美国哈佛领导精英养成计划</h5>-->
                        <!--<p class="m-c-r-info">哈佛经典领导课程，塑造明日商界奇迹</p>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li class="m-c-row">-->
                    <!--<a class="m-c-r-img" href="../Static/project-bdetailed3.html"><img class="m-c-r-img" src="/Public/images/project/back3.jpg" alt=""></a>-->
                    <!--<div class="m-c-r-wrap">-->
                        <!--<h5 class="m-c-r-tit">ME高端人才实训计划</h5>-->
                        <!--<p class="m-c-r-info">帮助未来精英们尽早确定职业规划方向、优化职业发展流程</p>-->
                    <!--</div>-->
                <!--</li>-->
            </ul>
            <!--这个按钮如果项目多余4个才会显示出来，少于四个则隐藏-->
            <a class="m-c-btn" href="<?php echo U('Article/projLevelTwo', 'cate_id='.$boost[0]['cid']);?>">了解更多</a>
        </article>

        <article class="m-studProj" id="m-studProj">
            <hgroup class="m-title">
                <h1 class="m-t-zh">游学项目</h1>
                <h2 class="m-t-en">Study Tour Project</h2>
            </hgroup>
            <ul class="m-cont clearfix">
                <li class="m-c-row">
                    <a class="m-c-r-img" href="<?php echo U('Article/showStaticPage', 'name=project-e3');?>"><img class="m-c-r-img" src="/Public/images/project/e3.jpg" alt=""></a>
                    <div class="m-c-r-wrap">
                        <h5 class="m-c-r-tit">路，始于脚下，源于内心</h5>
                        <p class="m-c-r-info">海外游学课程项目说明</p>
                    </div>
                </li>
                <?php if(is_array($tour_cate)): $i = 0; $__LIST__ = $tour_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voc): $mod = ($i % 2 );++$i;?><li class="m-c-row">
                        <a class="m-c-r-img" href="<?php echo U('Article/projLevelTwo', 'cate_id='.$voc['id']);?>"><img class="m-c-r-img" src="<?php echo ($voc['cover_path']); ?>" alt=""></a>
                        <div class="m-c-r-wrap">
                            <h5 class="m-c-r-tit"><?php echo ($voc['title']); ?></h5>
                            <p class="m-c-r-info"><?php echo ($voc['description']); ?></p>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--<li class="m-c-row">-->
                    <!--<a class="m-c-r-img" href="../Static/project-tlist1.html"><img class="m-c-r-img" src="/Public/images/us_study1.png" alt=""></a>-->
                    <!--<div class="m-c-r-wrap">-->
                        <!--<h5 class="m-c-r-tit">美国游学</h5>-->
                        <!--<p class="m-c-r-info">遇见未来领袖，邂逅美式风情</p>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li class="m-c-row">-->
                    <!--<a class="m-c-r-img" href="../Static/project-tlist2.html"><img class="m-c-r-img" src="/Public/images/uk_study3.png" alt=""></a>-->
                    <!--<div class="m-c-r-wrap">-->
                        <!--<h5 class="m-c-r-tit">英国游学</h5>-->
                        <!--<p class="m-c-r-info">学霸养成计划，碰撞英伦文化</p>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li class="m-c-row">-->
                    <!--<a class="m-c-r-img" href="../Static/project-tlist3.html"><img class="m-c-r-img" src="/Public/images/ru_study2.png" alt=""></a>-->
                    <!--<div class="m-c-r-wrap">-->
                        <!--<h5 class="m-c-r-tit">俄罗斯游学</h5>-->
                        <!--<p class="m-c-r-info">探秘艺术殿堂，魅力名城之旅</p>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li class="m-c-row">-->
                    <!--<a class="m-c-r-img" href="../Static/project-tlist4.html"><img class="m-c-r-img" src="/Public/images/au_study4.png" alt=""></a>-->
                    <!--<div class="m-c-r-wrap">-->
                        <!--<h5 class="m-c-r-tit">澳大利亚游学</h5>-->
                        <!--<p class="m-c-r-info">筑梦古典澳洲，启程精彩研学</p>-->
                    <!--</div>-->
                <!--</li>-->
            </ul>
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
</body>
</html>