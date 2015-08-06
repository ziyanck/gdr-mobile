<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>工地人管理系统-登录界面</title>
  <meta name="viewport" content="device-width,initial-scale=1">
  <link rel="stylesheet" href="/gdr-mobile/Public/jqm/jquery.mobile-1.4.5.min.css">
  <script src="/gdr-mobile/Public/jquery/jquery-1.11.3.min.js"></script>
  <script src="/gdr-mobile/Public/jqm/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
  <div data-role="page">
    <div data-role="content">
      <!-- data-ajax="false"禁用JQM ajax提交 -->
      <form method="post" action="<?php echo U('Public/login');?>" data-ajax="false">
        <h2>工地人管理系统</h2>
        <input name="username" type="text" placeholder="用户名">
        <input name="password" type="password" placeholder="密码">
        <input name="verify" type="text" placeholder="验证码">
        <!-- <img src="<?php echo U('Public/verify');?>" alt="点击刷新"> -->
        <input type="submit" value="登录">
      </form>
    </div>
    <div data-role="footer" data-position="fixed">
      <h3>©2015 黄胖厨</h3>
    </div>
  </div>
</body>
</html>