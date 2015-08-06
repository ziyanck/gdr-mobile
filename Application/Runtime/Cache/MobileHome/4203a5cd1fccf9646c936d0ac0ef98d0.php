<?php if (!defined('THINK_PATH')) exit();?><div id="workerAdd" data-role="page">
  <div data-role="header" data-position="fixed">
    <div data-role="navbar">
      <ul>
        <li><a href="javascript:history.go(-1);" data-icon="arrow-l">返回</a></li>
        <li><a href="#" data-icon="heart">保存</a></li>
        </ul>
    </div>
  </div>

  <div data-role="content">
    <form>
    <div class="ui-field-contain">
         <label for="realname">姓名：</label>
         <input data-clear-btn="true" name="realname" value="" type="text">
    </div>
    <div class="ui-field-contain">
         <label for="telephone">电话：</label>
         <input data-clear-btn="true" name="telephone" value="" type="tel" >
    </div>
    <div class="ui-field-contain">
        <fieldset data-role="controlgroup" data-type="horizontal">
        <legend>性别：</legend>
        <input name="sex" id="sex-a" value="1" checked="checked" type="radio">
        <label for="sex-a">男</label>
        <input name="sex" id="sex-b" value="0" type="radio">
        <label for="sex-b">女</label>
    </fieldset>
    </div>
    <div class="ui-field-contain">
      <label for="joinDate">入职时间</label>
      <input name="joinDate" type="date">
    </div>
    <div class="ui-field-contain">
        <label for="description">备注：</label>
        <textarea cols="40" rows="8" name="description"></textarea>
    </div>
</form>
  </div>
   <div data-role="footer">
    <h3>©2015 黄胖厨</h3>
  </div>
</div>