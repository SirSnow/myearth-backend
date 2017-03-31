<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-EN">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>达人资讯|Talent consulting</title>
    <link rel="stylesheet" href="/Public/css/public.css">
    <link rel="stylesheet" href="/Public/css/consulting.css">
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
        <img class="b-img" src="/Public/images/consolting-det-banner.jpg" alt="">
    </article>
    <section class="main">
        <ul id="fadeIn" class="m-cont">
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="m-c-row fadein-row">
                    <article class="m-c-r-lt">
                        <h3 class="m-c-r-tit"><?php echo ($vo['title']); ?><span class="m-c-r-date"><?php echo ($vo['subtitle']); ?></span></h3>
                        <div class="m-c-r-cont">
                            <?php echo ($vo['description']); ?>
                        </div>
                        <a class="m-c-r-btn" href="<?php echo U('Article/detail', 'id='.$vo['id']);?>">了解更多</a>
                    </article>
                    <a class="m-c-r-rt" href="<?php echo U('Article/detail', 'id='.$vo['id']);?>"><img class="m-c-r-img" src="<?php echo ($vo['cover_path']); ?>" alt=""></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--<li class="m-c-row fadein-row">-->
                <!--<article class="m-c-r-lt">-->
                    <!--<h3 class="m-c-r-tit">小小少年的奇幻之旅<span class="m-c-r-date">参与项目：“Go Campus”美国奖学金计划</span></h3>-->
                    <!--<div class="m-c-r-cont">-->
                        <!--姓名：郑同学 托福／雅思：无 GPA：85 申请到的学校：帕克大学 申请专业：计算机专业 每年学生仅需支付：13900美元（四年共支付55600美元）-->
                        <!--<br>美国的大学校园里到处洋溢着青春自由的气息，从校园到课堂再到教室，我明显感到一切世俗的框框架架都似乎跟这个国度毫无干系。而初到一个陌生的过度，虽然在生活上</div>-->
                    <!--<a class="m-c-r-btn" href="../Static/consulting-detailed1.html">了解更多</a>-->
                <!--</article>-->
                <!--<a class="m-c-r-rt" href="../Static/consulting-detailed1.html"><img class="m-c-r-img" src="/Public/images/text/pic1.jpg" alt=""></a>-->
            <!--</li>-->
            <!--<li class="m-c-row fadein-row">-->
                <!--<article class="m-c-r-lt">-->
                    <!--<h3 class="m-c-r-tit">漫步理想人生路，谨记纯真初心梦 <span class="m-c-r-date">参与项目：“Go Campus”美国奖学金计划</span></h3>-->
                    <!--<div class="m-c-r-cont">-->
                        <!--姓名：王同学-->


                        <!--托福／雅思：61-->

                        <!--GPA：85-->

                        <!--申请到的学校：林登沃德大学-->

                        <!--申请专业：金融专业-->

                        <!--每年学生仅需支付：11300美元（四年共支付45200美元）-->
                        <!--<br>从小呢我就有一个想成为盖世英雄的梦想，这个梦想伴随了我整整18个年头，但是可以说这颗童年的初心倒是一直没有忘怀。所以能有一次出国留学机会的话，那一定就是美</div>-->
                    <!--<a class="m-c-r-btn" href="../Static/consulting-detailed2.html">了解更多</a>-->
                <!--</article>-->
                <!--<a class="m-c-r-rt" href="../Static/consulting-detailed2.html"><img class="m-c-r-img" src="/Public/images/text/pic2.jpg" alt=""></a>-->
            <!--</li>-->
            <!--<li class="m-c-row fadein-row">-->
                <!--<article class="m-c-r-lt">-->
                    <!--<h3 class="m-c-r-tit">实现自己的弹性空间 <span class="m-c-r-date">参与项目：“Go Campus”美国奖学金计划</span></h3>-->
                    <!--<div class="m-c-r-cont">-->
                        <!--姓名：周同学-->


                        <!--托福／雅思：无-->

                        <!--GPA：75-->

                        <!--申请到的学校：南犹他大学-->

                        <!--申请专业：会计专业-->

                        <!--每年学生仅需支付：16000美元（二年共支付32000美元）-->
                        <!--<br>对于如何提高学习效率这件事情，可以说一直是我自己比较苦恼的一个问题。然而在美国，我体验到了与中国完全不同的教学方式，和死记硬背的纯理论学习方法相比，</div>-->
                    <!--<a class="m-c-r-btn" href="../Static/consulting-detailed3.html">了解更多</a>-->
                <!--</article>-->
                <!--<a class="m-c-r-rt" href="../Static/consulting-detailed3.html"><img class="m-c-r-img" src="/Public/images/text/pic3.jpg" alt=""></a>-->
            <!--</li>-->
            <!--<li class="m-c-row fadein-row">-->
                <!--<article class="m-c-r-lt">-->
                    <!--<h3 class="m-c-r-tit">时间证明能力，能力基于实践 <span class="m-c-r-date">参与项目：“Go Campus”美国奖学金计划</span></h3>-->
                    <!--<div class="m-c-r-cont">-->
                        <!--姓名：杨同学-->

                        <!--托福／雅思：雅思6.5-->

                        <!--GPA：3.04-->

                        <!--申请到的学校：卫斯理大学-->

                        <!--申请专业：MBA专业-->

                        <!--每年学生仅需支付：16000美元（二年共支付32000美元）-->
                        <!--<br>图书馆里安静得只能听见笔尖行走的声音，明媚的阳光从窗户透过来，洒在我身上，十分慵懒安逸。可是我却无心品鉴这样的舒适，因为无数的案例在吸引着我</div>-->
                    <!--<a class="m-c-r-btn" href="../Static/consulting-detailed4.html">了解更多</a>-->
                <!--</article>-->
                <!--<a class="m-c-r-rt" href="../Static/consulting-detailed4.html"><img class="m-c-r-img" src="/Public/images/text/pic4.jpg" alt=""></a>-->
            <!--</li>-->
        </ul>
        <!--<div class="m-page">-->
            <!--&lt;!&ndash; class[m-p-disable:禁用] [m-p-select:当前页面]&ndash;&gt;-->
            <!--<a class="m-p-prev m-p-disable" href="">上一页</a>-->
            <!--<a class="m-p-num m-p-select" href="">1</a>-->
            <!--<a class="m-p-num" href="../Static/consulting-2.html">2</a>-->
            <!--<a class="m-p-num" href="../Static/consulting-3.html">3</a>-->
            <!--<a class="m-p-next" href="../Static/consulting-2.html">下一页</a>-->
        <!--</div>-->
        <?php echo ($_page); ?>
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
    /*fadeIn*/
    void (function(){
        var fadeInEmt = $('#fadeIn'),
            fadeInRowEmt = fadeInEmt.find('.fadein-row');
        function Isshow(){
            var winTop = $(window).scrollTop(),
                winHeight = $(window).height();

            fadeInRowEmt.not('.show').each(function(i, val){
                var  zTop = $(val).offset().top;
                zTop-winTop <= winHeight &&  zTop-winTop >= 0 && $(val).addClass('show');
            })
        }Isshow();
        $(window).scroll(function(){Isshow()})
    })()
</script>
</body>
</html>