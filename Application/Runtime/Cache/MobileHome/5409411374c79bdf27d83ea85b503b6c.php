<?php if (!defined('THINK_PATH')) exit();?><div data-role="page" id="workerSearch">
  <div data-role="header">
    <div data-role="navbar">
      <ul>
        <li><a href="javascript:history.go(-1);" data-icon="arrow-l"></a></li>
        </ul>
    </div>
  </div>
  <div data-role="content">
    <div data-inset="true">
    <input name="textinput-fc" placeholder="输入工人姓名" value="" type="search">
    </div>
    <ul data-role="listview" data-inset="true">
      <li data-role="list-divider">工人列表</li>
      <li>
        <a href="#">
          <h2>黄胖厨(在职)</h2>
          <p>小工（看图纸，管理工人...）</p>
          <p>电话：18802635511</p>
          <p class="ui-li-aside">SD150701HPC</p>
        </a>
      </li>
      <li>
        <a href="#">
          <h2>黄小强(离职)</h2>
          <p>小工（看图纸，管理工人...）</p>
          <p>电话：18802635511</p>
          <p class="ui-li-aside">SD150701HPC</p>
        </a>
      </li>
      
    </ul>
    <a href="#" data-role="button">查看更多...</a>
  </div>
  <div data-role="footer" data-position="fixed" data-fullscreen="true">
    <h3>©2015 黄胖厨</h3>
  </div>
</div>