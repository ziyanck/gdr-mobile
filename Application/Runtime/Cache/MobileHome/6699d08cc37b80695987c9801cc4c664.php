<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>工地人管理系统</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="/gdr-mobile/Public/jqm/jquery.mobile-1.4.5.min.css">
  <!-- 注册后面需要加载的css/js -->
  <link rel="stylesheet" href="/gdr-mobile/Public/MobileHome/mobile-home.css">
  <script src="/gdr-mobile/Public/jquery/jquery-1.11.3.min.js"></script>
  <script src="/gdr-mobile/Public/jqm/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
  <div data-role="page" id="indexIndex">
    <div data-role="header" data-position="fixed">
      <h1>东江一号</h1>
      <a href="#" data-icon="carat-d" data-iconpos="notext" class="ui-btn-right">切换项目</a>
    </div>
    <div data-role="content">
      <div data-role="navbar">
        <ul>
          <li><a href="#" data-icon="plus">添加工时</a></li>
          <li><a href="#" data-icon="plus">添加费用</a></li>
          <li><a href="#" data-icon="plus">添加工具</a></li>
          <li><a href="#" data-icon="plus">添加日志</a></li>
        </ul>
      </div>
      <br>
      <div data-role="navbar">
        <ul>
          <li><a href="<?php echo U('Worker/index');?>" data-icon="user" data-transition="pop">工人管理</a></li>
          <li><a href="#" data-icon="clock">工时考勤</a></li>
          <li><a href="#" data-icon="bullets">费用管理</a></li>
          <li><a href="#" data-icon="bars">工资管理</a></li>
          <li><a href="#" data-icon="shop">工具管理</a></li>
          <li><a href="#" data-icon="search">工程模块</a></li>
          <li><a href="#" data-icon="star">施工日志</a></li>
          <li><a href="#" data-icon="gear">计划进度</a></li>
          <li><a href="#" data-icon="search">租赁管理</a></li>
          <li><a href="#" data-icon="phone">通讯录</a></li>
        </ul>
      </div>
      <a href="#" data-role="button">退出登录</a>
    </div>
    <div data-role="footer" data-position="fixed">
      <div data-role="navbar">
        <ul>
          <li><a href="<?php echo U('Index/index');?>" data-icon="home">首页</a></li>
          <li><a href="#" data-icon="comment">消息</a></li>
          <li><a href="#" data-icon="bars">事项</a></li>
          <li><a href="#" data-icon="user">我</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>