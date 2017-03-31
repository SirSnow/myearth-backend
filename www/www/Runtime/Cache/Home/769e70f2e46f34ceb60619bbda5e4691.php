<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-EN">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>迈尔斯首页</title>

    <link rel="stylesheet" href="/Public/css/public.css">
    <link rel="stylesheet" href="/Public/css/index.css">
    <style>
      a{
        text-decoration: none;
        color: #000;
      }
    </style>
    <!--[if lt IE 9]>
    <script>(function(){if (!/*@cc_on!@*/0) return;var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video".split(', ');var i= e.length;while (i--){document.createElement(e[i])}})()</script>
    <![endif]-->
</head>
<body>
<!--<div class="loading" style="display: none; background: #000000;">-->
<div class="wrap" style="display: block;">
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
    <article id="banner" class="banneri">
        <ul class="bi-cont">
            <?php if(is_array($slide)): $i = 0; $__LIST__ = $slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="bi-c-row">
                    <a href="<?php echo ($vo['page_url']); ?>"><img class="bi-c-img" src="<?php echo ($vo['pic_url']); ?>" alt=""><\a>
                    <div class="bi-c-tit">
                        <img class="bi-c-imgFt" src="<?php echo ($vo['title_pic_url']); ?>" alt="">
                        <!--<a class="bi-c-btn m-btn" href="<?php echo ($vo['page_url']); ?>"></a>-->
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--<li class="bi-c-row">-->
                <!--<a href="../Static/project-sdetailed1.html">-->
                    <!--<img class="bi-c-img" src="/Public/images/index-banner.jpg" alt="">-->
                <!--</a>-->
                <!--&lt;!&ndash;<div class="bi-c-tit">&ndash;&gt;-->
                    <!--&lt;!&ndash;<img class="bi-c-imgFt" src="images/index-bannerTitle2.png" alt="">&ndash;&gt;-->
                    <!--&lt;!&ndash;<a class="bi-c-btn m-btn" href="project-sdetailed1.html"></a>&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->
            <!--</li>-->
            <!--<li class="bi-c-row">-->
                <!--<a href="../Static/project-sdetailed1.html">-->
                <!--<img class="bi-c-img" src="/Public/images/index-banner3.jpg" alt="">-->
                <!--</a>-->
                <!--&lt;!&ndash;<div class="bi-c-tit">-->
                    <!--<img class="bi-c-imgFt" src="images/index-bannerTitle3.png" alt="">-->
                    <!--<a class="bi-c-btn m-btn" href="project-sdetailed2.html"></a>-->
                <!--</div>&ndash;&gt;-->
            <!--</li>-->
        </ul>
        <div class="bi-bg"></div>
        <div class="bi-btn"></div>
    </article>
    <section class="main">
        <article id="about" class="m-introduce">
            <div class="m-i-about">
                <img src="/Public/images/index-about1.png" alt="" class="m-i-img">
                <div class="m-i-into">
                    <div class="m-i-i-wrap">
                        <hgroup class="m-tit">
                            <h2 class="m-t-en">ABOUT My earth</h2>
                            <h1 class="m-t-zh">关于迈尔斯</h1>
                        </hgroup>

                        <p class="m-i-i-p">如果说把一件事情做到了60分，这并不能体现价值所在；但如果能把一件事情专注地做到90分甚至更高，这才是迈尔斯对自己的严格标准。
                            许多人都觉得教育的意义是在于帮助学生实现自我价值，但是迈尔斯不希望我们呈现给用户的仅仅是教育产品，而是将团队淳朴的“匠人”心意融入其中，去传递一种“专注”及“完美”的教育理念，让每一位用户都能感受到迈尔斯专业的“极致”，与服务的“优质”，从实际的产品体验中真正地提升自己。
                            <br><br> 迈尔斯国际，只为感动你。
                        <a style="text-decoration:none; color:#000;"class="m-i-i-btn m-btn" href="<?php echo U('Article/showStaticPage', 'name=about');?>"></a>
                    </div>
                </div>
            </div>

            <div class="m-i-service">
                <img src="/Public/images/index-about2.png" alt="" class="m-i-img">
                <div class="m-i-into">
                    <div class="m-i-i-wrap">
                        <hgroup class="m-tit">
                            <h2 class="m-t-en">The services we provide</h2>
                            <h1 class="m-t-zh">我们的服务</h1>
                        </hgroup>
                        <p class="m-i-i-p">
                        <p class="consub">特色项目</p>
                        顶级项目证书认证／丰富海外合作资源／金牌国际专业领队
                        <p class="consub">背景提升</p>
                        结交百强国际经营／各国签证保证效率／精品品质国际小团
                        <p class="consub">海外游学</p>
                        原址学习地道体验／权威海外实习推荐／资深导师保驾护航

                        </p>
                        <a class="m-i-i-btn m-btn" href="<?php echo U('Article/showStaticPage', 'name=about');?>"></a>
                    </div>
                </div>
            </div>
        </article>
<!--project section-->
        <article class="m-project">
            <div class="m-p-wrap">
                <hgroup class="m-tit">
                    <h2 class="m-t-en">Project introduction</h2>
                    <h1 class="m-t-zh">项目介绍</h1>
                    <p class="m-p-tt">结合中国学生的自身特点与需求，打造出为各年龄段用户私人专属高品质的国际教育服务项目</p>
                </hgroup>
                <div class="m-p-study">
                    <h3 class="m-p-tit">游学项目</h3>
                    <ul class="m-p-cont">
                        <?php if(is_array($tour)): $i = 0; $__LIST__ = $tour;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li class="m-p-row">
                                <a class="m-p-r-img" href="<?php echo U('Article/detail', 'id='.$vol['id']);?>"><img class="m-p-r-img" src="<?php echo ($vol['cover_path']); ?>" alt=""></a>
                                <div class="m-p-r-text">
                                    <h5 class="m-p-r-t-tit"><?php echo ($vol['title']); ?></h5>
                                    <p class="m-p-r-t-p"><?php echo ($vol['description']); ?></p>
                                    <a class="m-p-r-t-btn m-btn" href="<?php echo U('Article/detail', 'id='.$vol['id']);?>"></a>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--<li class="m-p-row">-->
                            <!--<a class="m-p-r-img" href="../Static/project-tdetailed1-1.html"><img class="m-p-r-img" src="/Public/images/project/study1.jpg" alt=""></a>-->
                            <!--<div class="m-p-r-text">-->
                                <!--<h5 class="m-p-r-t-tit">费城假日，邂逅一段尘封往事</h5>-->
                                <!--<p class="m-p-r-t-p">零距离贴近美国校园生活，与美国小伙伴同吃同住，感受地道校园文化，提高口语和听力，与此同时，我们还将带你入住当地友好家庭，体验美国人的家庭文化。</p>-->
                                <!--<a class="m-p-r-t-btn m-btn" href="../Static/project-tdetailed1-1.html"></a>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="m-p-row">-->
                            <!--<a class="m-p-r-img" href="../Static/project-tdetailed2-1.html"><img class="m-p-r-img" src="/Public/images/project/study6.jpg" alt=""></a>-->
                            <!--<div class="m-p-r-text">-->
                                <!--<h5 class="m-p-r-t-tit">学术剑桥，碰撞英伦文化</h5>-->
                                <!--<p class="m-p-r-t-p">剑桥深度入校学习体验，带你走进异国他乡的世界，感受世界顶级学府的学术氛围，体验学霸们的求学之旅，邂逅文艺复兴时期的艺术殿堂</p>-->
                                <!--<a class="m-p-r-t-btn m-btn" href="../Static/project-tdetailed2-1.html"></a>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="m-p-row">-->
                            <!--<a class="m-p-r-img" href="../Static/project-tdetailed3-1.html"><img class="m-p-r-img" src="/Public/images/project/study7.jpg" alt=""></a>-->
                            <!--<div class="m-p-r-text">-->
                                <!--<h5 class="m-p-r-t-tit">探秘世界顶级艺术殿堂</h5>-->
                                <!--<p class="m-p-r-t-p">世界顶级芭蕾学校”瓦冈诺娃芭蕾学院”是世界上最著名和最有影响力的芭蕾舞学校之一，长期以来为著名的莫斯科大剧院和彼得堡马林斯基剧院等输送无数人才和芭蕾舞大师。</p>-->
                                    <!--<a class="m-p-r-t-btn m-btn" href="../Static/project-tdetailed3-1.html"></a>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="m-p-row">-->
                            <!--<a class="m-p-r-img" href="../Static/project-tdetailed4-1.html"><img class="m-p-r-img" src="/Public/images/project/study8.jpg" alt=""></a>-->
                            <!--<div class="m-p-r-text">-->
                                <!--<h5 class="m-p-r-t-tit">精彩纷呈的澳洲研学之旅</h5>-->
                                <!--<p class="m-p-r-t-p">在悉尼大学，与同学们一起体验古典名校的文化风采，参与各种文化娱乐活动，融入本土生活氛围，近距离体验澳洲人文文化。全程沉浸在纯正的澳式英语环境中，让学员体验前所未有的语言冲击，迅速提升学员的口语能力，并结识新朋友。</p>-->
                                <!--<a class="m-p-r-t-btn m-btn" href="../Static/project-tdetailed4-1.html"></a>-->
                            <!--</div>-->
                        <!--</li>-->
                    </ul>
                    <a class="m-p-btn m-btn" href="<?php echo U('Article/projLevelOne#m-studProj');?>"></a>
                </div>

                <div class="m-p-chara">
                    <h3 class="m-p-tit">特色项目</h3>
                    <ul class="m-p-cont">
                        <?php if(is_array($special)): $i = 0; $__LIST__ = $special;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol1): $mod = ($i % 2 );++$i;?><li class="m-p-row">
                                <a class="m-p-r-img" href="<?php echo U('Article/detail', 'id='.$vol1['id']);?>"><img class="m-p-r-img" src="<?php echo ($vol1['cover_path']); ?>" alt=""></a>
                                <div class="m-p-r-text">
                                    <h5 class="m-p-r-t-tit"><?php echo ($vol1['title']); ?></h5>
                                    <p class="m-p-r-t-p"><?php echo ($vol1['description']); ?></p>
                                    <a class="m-p-r-t-btn m-btn" href="<?php echo U('Article/detail', 'id='.$vol1['id']);?>"></a>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--<li class="m-p-row">-->
                            <!--<a class="m-p-r-img" href="../Static/project-sdetailed1.html"><img class="m-p-r-img" src="/Public/images/project/special1.jpg" alt=""></a>-->
                            <!--<div class="m-p-r-text">-->
                                <!--<h5 class="m-p-r-t-tit">“Go Campus”美国奖学金计划</h5>-->
                                <!--<p class="m-p-r-t-p">“想和你分享的，是我从未想到过的成功故事”-->
                                    <!--说起留学，很多人可能都会第一时间想到“遥不可及的美国梦”，我也一样。本以为留学的大门会因此关上，但不曾想，美国公费留学带来了另一个选择。-->
                                <!--</p>-->
                                <!--<a class="m-p-r-t-btn m-btn" href="../Static/project-sdetailed1.html"></a>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="m-p-row">-->
                            <!--<a class="m-p-r-img" href="../Static/project-sdetailed2.html"><img class="m-p-r-img" src="/Public/images/project/special2.jpg" alt=""></a>-->
                            <!--<div class="m-p-r-text">-->
                                <!--<h5 class="m-p-r-t-tit">新西兰青年人才计划</h5>-->
                                <!--<p class="m-p-r-t-p">“选择新西兰，选择另一种人生”-->
                                    <!--如果说不满意现在的生活，有机会可以选择另一种人生，那为什么不去尝试？-->
                                    <!--而最简单的方法就是出国留学。很多人应该都会根据学校的世界排名情况来选择学校。</p>-->
                                <!--<a class="m-p-r-t-btn m-btn" href="../Static/project-sdetailed2.html"></a>-->
                            <!--</div>-->
                        <!--</li>-->
                    </ul>
                    <a class="m-p-btn m-btn" href="<?php echo U('Article/projLevelOne#m-special');?>"></a>
                </div>

                <div class="m-p-bg">
                    <h3 class="m-p-tit">背景提升</h3>
                    <ul class="m-p-cont">
                        <?php if(is_array($boost)): $i = 0; $__LIST__ = $boost;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol2): $mod = ($i % 2 );++$i;?><li class="m-p-row">
                                <a class="m-p-r-img" href="<?php echo U('Article/detail', 'id='.$vol2['id']);?>"><img class="m-p-r-img" src="<?php echo ($vol2['cover_path']); ?>" alt=""></a>
                                <div class="m-p-r-text">
                                    <h5 class="m-p-r-t-tit"><?php echo ($vol2['title']); ?></h5>
                                    <p class="m-p-r-t-p"><?php echo ($vol2['description']); ?></p>
                                    <a class="m-p-r-t-btn m-btn" href="<?php echo U('Article/detail', 'id='.$vol2['id']);?>"></a>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--<li class="m-p-row">-->
                            <!--<a class="m-p-r-img" href="../Static/project-bdetailed1.html"><img class="m-p-r-img" src="/Public/images/project/back1.jpg" alt=""></a>-->
                            <!--<div class="m-p-r-text">-->
                                <!--<h5 class="m-p-r-t-tit">新加坡ECS未来商界精英训练营</h5>-->
                                <!--<p class="m-p-r-t-p">  新加坡国立大学管理学院美国国际管理教育联合会（AACSB）认证的亚太地区七所商学院之一 . 国际排名：EMBA亚太地区前3名（亚洲《世界经理人》），MBA亚太地区前3名（亚洲《Asia Inc》）。</p>-->
                                <!--<a class="m-p-r-t-btn m-btn" href="../Static/project-bdetailed1.html"></a>-->
                            <!--</div>-->
                        <!--</li>-->
                        <!--<li class="m-p-row">-->
                            <!--<a class="m-p-r-img" href="../Static/project-bdetailed2.html"><img class="m-p-r-img" src="/Public/images/project/back2.jpg" alt=""></a>-->
                            <!--<div class="m-p-r-text">-->
                                <!--<h5 class="m-p-r-t-tit">美国哈佛领导精英养成计划</h5>-->
                                <!--<p class="m-p-r-t-p">享誉全球的美国思想库－哈弗大学，历史上先后诞生了八位美国总统，四十位诺贝尔奖得主和三十位普利策奖得主。哈佛大学的一举一动决定着全球的社会发展和经济的走向，</p>-->
                                <!--<a class="m-p-r-t-btn m-btn" href="../Static/project-bdetailed2.html"></a>-->
                            <!--</div>-->
                        <!--</li>-->
                    </ul>
                    <a class="m-p-btn m-btn" href="<?php echo U('Article/projLevelOne#m-bgProm');?>"></a>
                </div>
            </div>
        </article>

        <article id="cenlebr" class="m-celebrity">
            <hgroup class="m-tit">
                <h2 class="m-t-en">Teacher recommendation</h2>
                <h1 class="m-t-zh">名师团队</h1>
            </hgroup>
            <div class="m-c-wrap">
                <ul class="m-c-cont">
                    <li class="m-c-row">
                        <a class="m-c-r-wrap" href="<?php echo U('Article/showStaticPage', 'name=community-detailed2-1');?>">
                            <img class="m-c-r-pic" src="/Public/images/community/detail2-1.jpg" alt="">
                            <div class="m-c-r-text">
                                <h5 class="m-c-r-tit">郭建鹏<span class="m-c-r-ftit"></span></h5>
                                <p class="m-c-r-p">从事英美留学文书写作与申请6年，所带学生大部分获得美国常青藤和英国G5学校录取,
                                    留学全部流程擅长本科、研究生和博士申请以及全科目类文书创作</p>
                            </div>
                        </a>
                    </li>
                    <li class="m-c-row">
                        <a class="m-c-r-wrap" href="<?php echo U('Article/showStaticPage', 'name=community-detailed2-3');?>">
                            <img class="m-c-r-pic" src="/Public/images/community/detail2-3.jpg" alt="">
                            <div class="m-c-r-text">
                                <h5 class="m-c-r-tit">牛玲<span class="m-c-r-ftit"></span></h5>
                                <p class="m-c-r-p">新浪五星留学规划师，
                                    留学教育行业六年从业经验，曾任职国内某大型留学机构资深五星顾问
                                    国内最年轻哈佛大学，麻省理工大学导师</p>
                            </div>
                        </a>
                    </li>
                    <li class="m-c-row">
                        <a class="m-c-r-wrap" href="<?php echo U('Article/showStaticPage', 'name=community-detailed2-2');?>">
                            <img class="m-c-r-pic" src="/Public/images/community/detail2-2.jpg" alt="">
                            <div class="m-c-r-text">
                                <h5 class="m-c-r-tit">刘衎 <span class="m-c-r-ftit"></span></h5>
                                <p class="m-c-r-p">高级文案老师，
                                    从业留学行业四年时间，负责申请学生近百名，申请案例包含：哈佛大学，麻省理工大学，康奈尔大学，哥伦比亚大学，芝加哥大学，
                                    英国牛津大学，剑桥大学，杜伦大学，华威大学。香港中文大学，香港大学，澳洲墨尔本大学，国立大学，悉尼大学等世界名校。</p>
                            </div>
                        </a>
                    </li>
                    <li class="m-c-row">
                        <a class="m-c-r-wrap" href="<?php echo U('Article/showStaticPage', 'name=community-detailed2-4');?>">
                            <img class="m-c-r-pic" src="/Public/images/community/detail2-4.jpg" alt="">
                            <div class="m-c-r-text">
                                <h5 class="m-c-r-tit">田洁 <span class="m-c-r-ftit"></span></h5>
                                <p class="m-c-r-p">美国部总监，资深留学顾问，2006年美国本硕毕业回国进入留学行业，2011年被新浪网教育频道评为新浪五星金牌顾问全国前三十强留学顾问。
                                    10年行业工作经验，先后为上千位  申请人赢得美国TOP 20的顶级名校录取。</p>
                            </div>
                        </a>
                    </li>
                    <li class="m-c-row">
                        <a class="m-c-r-wrap" href="<?php echo U('Article/showStaticPage', 'name=community-detailed2-5');?>">
                            <img class="m-c-r-pic" src="/Public/images/community/detail2-5.jpg" alt="">
                            <div class="m-c-r-text">
                                <h5 class="m-c-r-tit"> 尤小燕<span class="m-c-r-ftit"></span></h5>
                                <p class="m-c-r-p">美国部副总监:
                                    十年留学从业经验，熟悉留学申请的各个流程，可以总体把控各个留学环节，
                                    做到万无一失；多次代表公司赴美和各大招生官交流沟通，为学生精确定位。</p>
                            </div>
                        </a>
                    </li>
                    <li class="m-c-row">
                        <a class="m-c-r-wrap" href="<?php echo U('Article/showStaticPage', 'name=community-detailed2-6');?>">
                            <img class="m-c-r-pic" src="/Public/images/community/detail2-6.jpg" alt="">
                            <div class="m-c-r-text">
                                <h5 class="m-c-r-tit"> 于静<span class="m-c-r-ftit"></span></h5>
                                <p class="m-c-r-p">资深留美专业:
                                    从事美国留学规划申请工作十年，辅导上千名学生成功赴美留学。帮助学生拿到哈佛大学、
                                    宾夕法尼亚大学、哥伦比亚大学、康奈尔大学、南加州大学等美国顶尖院校录取。</p>
                            </div>
                        </a>
                    </li>
                    <li class="m-c-row">
                        <a class="m-c-r-wrap" href="<?php echo U('Article/showStaticPage', 'name=community-detailed2-7');?>">
                            <img class="m-c-r-pic" src="/Public/images/community/detail2-7.jpg" alt="">
                            <div class="m-c-r-text">
                                <h5 class="m-c-r-tit"> 张开强<span class="m-c-r-ftit"></span></h5>
                                <p class="m-c-r-p">从事留学行业7年，曾赴美国Emory大学进修国际商务
                                    接手500多个学生的高端留学文书写作，涵盖高中、本硕博申请，获top名校录取</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <button class="m-c-btn m-c-btnLt"></button>
            <button class="m-c-btn m-c-btnRt"></button>
        </article>
    </section>
    <article class="m-news">
        <hgroup class="m-tit">
            <h2 class="m-t-en">Talent consulting</h2>
            <h1 class="m-t-zh">达人资讯</h1>
        </hgroup>
        <div id="news" class="m-n-cont">
            <?php $__FOR_START_1154480490__=0;$__FOR_END_1154480490__=10;for($cir=$__FOR_START_1154480490__;$cir < $__FOR_END_1154480490__;$cir+=1){ switch($cir): case "0": case "1": case "4": case "5": case "6": case "9": ?><a class="m-n-row" href="<?php echo U('Article/detail', 'id='.$conselling[$cir]['id']);?>">
                            <div class="m-n-r-img"><img style="height: 100%;width:auto;position: absolute;left:-60px;" src="<?php echo ($conselling[$cir]['cover_path']); ?>"></div>
                            <p class="m-n-tit"><?php echo ($conselling[$cir]['title']); ?></p>
                        </a><?php break;?>
                    <?php case "2": case "8": ?><a class="m-n-row" href="<?php echo U('Article/detail', 'id='.$conselling[$cir]['id']);?>">
                            <div class="m-n-r-img"><img style="height:auto;width:100%;position: absolute;left:0px;" src="<?php echo ($conselling[$cir]['cover_path']); ?>"></div>
                            <p class="m-n-tit"><?php echo ($conselling[$cir]['title']); ?></p>
                        </a><?php break;?>
                    <?php case "7": ?><a class="m-n-row" href="<?php echo U('Article/detail', 'id='.$conselling[$cir]['id']);?>">
                            <div class="m-n-r-img"><img style="height: 100%;width:auto;position: absolute;left:-20px;" src="<?php echo ($conselling[$cir]['cover_path']); ?>"></div>
                            <p class="m-n-tit"><?php echo ($conselling[$cir]['title']); ?></p>
                        </a><?php break;?>
                    <?php case "3": ?><a class="m-n-row" href="<?php echo U('Article/detail', 'id='.$conselling[$cir]['id']);?>">
                            <div class="m-n-r-img" style="background: url(<?php echo ($conselling[$cir]['cover_path']); ?>);"></div><!--<img  src="images/text/pic4.jpg" alt="">-->
                            <p class="m-n-tit"><?php echo ($conselling[$cir]['title']); ?></p>
                        </a><?php break; endswitch; } ?>
            <!--<?php if(is_array($conselling)): $i = 0; $__LIST__ = $conselling;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$con): $mod = ($i % 2 );++$i;?>-->
                <!--<a class="m-n-row" href="<?php echo U('Article/detail', 'id='.$con['id']);?>">-->
                    <!--<div class="m-n-r-img"><img style="height: 100%;width:auto;position: absolute;left:-60px;" src="<?php echo ($con['cover_path']); ?>"></div>-->
                    <!--<p class="m-n-tit"><?php echo ($con['title']); ?></p>-->
            <!--</a>-->
            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
            <!--<a class="m-n-row" href="<?php echo U('Article/detail', 'id='.$conselling[0]['id']);?>">-->
                <!--<div class="m-n-r-img"><img style="height: 100%;width:auto;position: absolute;left:-60px;" src="<?php echo ($conselling[0]['cover_path']); ?>"></div>-->

                <!--<p class="m-n-tit"><?php echo ($conselling[0]['title']); ?></p>-->
            <!--</a>-->
            <!--<a class="m-n-row" href="../Static/consulting-detailed9.html">-->
                <!--<div class="m-n-r-img"><img style="height: 100%;width:auto;position: absolute;left:-60px;" src="/Public/images/text/pic9.jpg"></div>-->
                <!--&lt;!&ndash;<img class="m-n-r-img" src="images/text-index-news2.png" alt="">&ndash;&gt;-->
                <!--<p class="m-n-tit">游学日记</p>-->
            <!--</a>-->
            <!--<a class="m-n-row" href="../Static/consulting-detailed7.html">-->
                <!--<div class="m-n-r-img"><img style="height: auto;width:100%;position: absolute;left:0px;" src="/Public/images/text/pic7.jpg"></div>-->
                <!--&lt;!&ndash;<img class="m-n-r-img" src="images/text-index-news3.png" alt="">&ndash;&gt;-->
                <!--<p class="m-n-tit">朋友在澳洲，“朋友在中国”</p>-->
            <!--</a>-->
            <!--<a class="m-n-row" href="../Static/consulting-detailed4.html">-->
                <!--<div class="m-n-r-img" style="background: url(/Public/images/text/pic4.jpg);"></div>&lt;!&ndash;<img  src="images/text/pic4.jpg" alt="">&ndash;&gt;-->
                <!--<p class="m-n-tit">时间证明能力，能力基于实践</p>-->
            <!--</a>-->
            <!--<a class="m-n-row" href="../Static/consulting-detailed10.html">-->
                <!--<div class="m-n-r-img"><img style="height: 100%;width:auto;position: absolute;left:-60px;" src="/Public/images/text/pic10.jpg"></div>-->
                <!--&lt;!&ndash;<img class="m-n-r-img" src="images/text-index-news6.png" alt="">&ndash;&gt;-->
                <!--<p class="m-n-tit">来，我们做个交换</p>-->
            <!--</a>-->
            <!--<a class="m-n-row" href="../Static/consulting-detailed1.html">-->
                <!--<div class="m-n-r-img"><img style="height: 100%;width:auto;position: absolute;left:-60px;" src="/Public/images/text/pic1.jpg"></div>-->

                <!--<p class="m-n-tit">小小少年的奇幻之旅</p>-->
            <!--</a>-->

            <!--<a class="m-n-row" href="../Static/consulting-detailed3.html">-->
                <!--<div class="m-n-r-img"><img style="height: 100%;width:auto;position: absolute;left:-60px;" src="/Public/images/text/pic3.jpg"></div>-->
                <!--&lt;!&ndash;<img class="m-n-r-img" src="images/text-index-news7.png" alt="">&ndash;&gt;-->
                <!--<p class="m-n-tit">实现自己的弹性空间</p>-->
            <!--</a>-->
            <!--<a class="m-n-row" href="../Static/consulting-detailed2.html">-->
                <!--<div class="m-n-r-img"><img style="height: 100%;width:auto;position: absolute;left: -20px;" src="/Public/images/text/pic2.jpg"></div>-->
                <!--<p class="m-n-tit">漫步理想人生路，谨记纯真初心梦</p>-->
            <!--</a>-->
            <!--<a class="m-n-row" href="../Static/consulting-detailed6.html">-->
                <!--<div class="m-n-r-img"><img style="height: auto;width:100%;position: absolute;left:0px;" src="/Public/images/text/pic6.jpg"></div>-->
                <!--&lt;!&ndash;<img class="m-n-r-img" src="images/text-index-news8.png" alt="">&ndash;&gt;-->
                <!--<p class="m-n-tit">与白鸽共同起舞的日子</p>-->
            <!--</a>-->
            <!--<a class="m-n-row" href="../Static/consulting-detailed8.html">-->
                <!--<div class="m-n-r-img"><img style="height: 100%;width:auto;position: absolute;left:-60px;" src="/Public/images/text/pic8.jpg"></div>-->
                <!--&lt;!&ndash;<img class="m-n-r-img" src="images/text-index-news10.png" alt="">&ndash;&gt;-->
                <!--<p class="m-n-tit">剑桥，我轻轻地来了</p>-->
            <!--</a>-->
        </div>
    </article>
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
        </article><article class="f-bom">
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
    $(function(){
        //header
        function header(){
            var headerEmt = $('#header');

            var scroll = 0;
            $(window).scroll(function(){
                var scleft = $(window).scrollLeft();
                $(window).scrollTop() >= 100 ? headerEmt.removeClass('header-index').addClass('fix') : headerEmt.removeClass('fix').addClass('header-index');
                if(scleft != scroll){
                    scroll = scleft;
                    headerEmt.css('left', -scroll)
                }
            })
        }header();

        //banner
        function banner(){
            var bannerEmt = $('#banner'),
                rowEmt = bannerEmt.find('.bi-c-row'),
                btnEmt = bannerEmt.find('.bi-btn'),
                buttonEmt;
            var Length = rowEmt.length,
                Num = 0;
            var btnhtml = '';
            var Setinr;

            banner.show = function(eq){
                var row = bannerEmt.find('.bi-c-row').eq(eq);
                buttonEmt.removeClass('select');
                buttonEmt.eq(eq).addClass('select');
                rowEmt.css('z-index', 0).stop(true,true).fadeOut(1500);
                row.css('z-index', 1).stop(true,true).fadeIn(1500);
                row.find('.bi-c-tit').stop(true,true).animate({'opacity': 1, 'left': '480px'}, 1200);
            }
            banner.time = function(){
                Setinr = window.setInterval(function(){
                    Num++ > Length-2 && (Num = 0);
                    banner.show(Num)
                }, 6000)
            }
            for(var i=0; i < Length; i++){
                btnhtml += '<button class="bi-b-but"><i class="bi-b-line"></i></button>';
            }
            btnEmt.append(btnhtml);
            buttonEmt= btnEmt.find('button');
            banner.show(Num);
            banner.time();
            buttonEmt.click(function(){
                banner.show(Num = $(this).index());
                window.clearInterval(Setinr);
                banner.time()
            })
        }banner();

        //about
        function about(){
            var aboutEmt = $('#about'),
                modeEmt = $([aboutEmt.find('.m-i-service')[0],aboutEmt.find('.m-i-about')[0]]);

            about.show = function(){
                var winTop = $(window).scrollTop(),
                    winHeight = $(window).height();
                modeEmt.not('.show').each(function(i, val){
                    var  zTop = $(val).offset().top+300;
                    zTop-winTop <= winHeight &&  zTop-winTop >= 0 && $(val).addClass('show');
                })
            }
            about.show()
            $(window).scroll(function(){about.show()})
        }about();

        //cenlebr
        void (function(){
            var cenlebrEmt = $('#cenlebr'),
                contEmt = cenlebrEmt.find('.m-c-cont'),
                btnLt = cenlebrEmt.find('.m-c-btnLt'),
                btnRt = cenlebrEmt.find('.m-c-btnRt');
            var Length = contEmt.find('li').length,
                Num = 0,
                boxwid = 342;
            btnLt.click(function(){
                Num > 0 && contEmt.stop(true).animate({'margin-left': (Num-=1) * -boxwid}, 600)
            });
            btnRt.click(function(){
                Num < Length-3 && contEmt.stop(true).animate({'margin-left': (Num+=1) * -boxwid}, 600)
            })

        })()

        //news
        function news(){
            var newsEmt = $('#news'),
                rowEmt = newsEmt.find('.m-n-row');
            var maxWidth = 1920,
                maxHeight = 960,
                whBi = maxWidth/maxHeight;

            news.resies = function(){
                var newsWidth = newsEmt.width();
                newsEmt.height(newsWidth/whBi)
            };
            news.Isshow = function(){
                var winTop = $(window).scrollTop(),
                    winHeight = $(window).height();

                rowEmt.not('.show').each(function(i, val){
                    var  zTop = $(val).offset().top;
                    zTop-winTop <= winHeight &&  zTop-winTop >= 0 && $(val).addClass('show');
                })
            }
            news.resies();
            news.Isshow();
            rowEmt.each(function(i,val){
                $(val).addClass('m-n-row'+(i+1)).find('.m-n-tit').append('<button class="m-n-btn m-btn" href=""></button>')
            });

            $(window).scroll(function(){news.Isshow()})
            $(window).resize(function(){news.resies()})
        }news();
    })
</script>
</body>
</html>