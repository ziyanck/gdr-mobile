<?php if (!defined('THINK_PATH')) exit();?><div data-role="page" id="workerIndex">
  <div data-role="header" data-position="fixed">
    <div data-role="navbar">
      <ul>
        <li><a href="javascript:history.go(-1);" data-icon="arrow-l"></a></li>
        <li><a href="<?php echo U('Worker/add');?>" data-transition="pop" data-icon="plus"></a></li>
        <li><a href="<?php echo U('Worker/search');?>" data-transition="pop" data-icon="search"></a></li>
        <li><a href="#" data-icon="action"></a></li>
      </ul>
    </div>
  </div>
  <div data-role="content">
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
      <li>
        <a href="#">
          <h2>李熊</h2>
          <p>小工（看图纸，管理工人...）</p>
          <p>电话：18802635511</p>
          <p class="ui-li-aside">SD150701HPC</p>
        </a>
      </li>
      <li>
        <a href="#">
          <h2>王小明</h2>
          <p>小工（看图纸，管理工人...）</p>
          <p>电话：18802635511</p>
          <p class="ui-li-aside">SD150701HPC</p>
        </a>
      </li>
      <li>
        <a href="#">
          <h2>刘大大</h2>
          <p>小工（看图纸，管理工人...）</p>
          <p>电话：18802635511</p>
          <p class="ui-li-aside">SD150701HPC</p>
        </a>
      </li>
      <li>
        <a href="#">
          <h2>曾小文</h2>
          <p>小工（看图纸，管理工人...）</p>
          <p>电话：18802635511</p>
          <p class="ui-li-aside">SD150701HPC</p>
        </a>
      </li>
    </ul>
    <a href="#" data-role="button">查看更多...</a>
  </div>
  <div data-role="footer" data-position="fixed">
    <div data-role="navbar">
      <ul>
        <li><a href="<?php echo U('Index/index');?>" data-icon="home">首页</a></li>
        <li><a href="#" data-icon="comment">消息</a></li>
        <li><a href="#" data-icon="bars">事项</a></li>
        <li><a href="#" data-icon="user">我</a></li></a></li>
      </ul>
    </div>
  </div>
</div>