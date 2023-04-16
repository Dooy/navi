<!DOCTYPE html>
<html lang="zh">

@include('layouts.header')

<body class="page-body boxed-container">
    <nav class="navbar horizontal-menu navbar-fixed-top">
        <div class="navbar-inner">
            <div class="navbar-brand">
                <a href="/" class="logo">
                    <img src="{{ asset('img/logo_dark@2x.png') }}" width="100%" alt="" class="hidden-xs">
                    <img src="{{ asset('img/logo@2x.png') }}" width="100%" alt="" class="visible-xs">
                </a>
            </div>
            <div class="navbar-mobile-clear"></div>
            <!-- <a href="https://github.com/hui-ho/WebStack-Laravel" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a> -->
        </div>
    </nav>
    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
        <div class="main-content" style="">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <!-- 关于项目 -->
                        <h4 class="text-gray">关于AI网站道航</h4>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                <p>AI网站道航是一个专门收集各类AI相关网站的导航站，涵盖了机器学习、自然语言处理、数据分析、智能算法等多个领域。
                                        <br>点击网站名后会跳转至外部网站，如发现有有不适内容或有侵权形为：
请发送邮件至：1275244819@qq.com,我们审核后，会第一时间将网站下线。</p>
                                    <blockquote>
                                        <p>
如果要投稿,格式如下：<br>
标题：网站名+投稿<br>
网站名:<br>
分类：<br>
介绍：简单描述网站亮点，100字左右<br>
LOGO：128*128PNG<br>
链接：<br>
写完后，发送至：1275244819@qq.com</p>
                                        </br>
                                        
                                    </blockquote>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Footer -->
            <footer class="main-footer sticky footer-type-1 fixed">
                <div class="footer-inner">
                    <div class="footer-text">
                        &copy; 2023
                        <a href="/"><B>AI网站导航</B></a>  
                    </div>
                    <div class="go-up">
                        <a href="#" rel="go-top">
                            <i class="fa-angle-up"></i>
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>