<?php defined('IN_IA') or exit('Access Denied');?><div class="tab-pane" id="sut_good">
    <div class="input-group">
        <input type="text" placeholder="请输入商品名称进行搜索" id="select-good-kw" value="" class="form-control">
        <span class="input-group-addon btn btn-default select-btn" data-type="good">搜索</span>
    </div>
    <div id="selected_goods" class="form-control-static">
    </div>
    <div id="select-good-list"></div>
    <p class="text-danger text-center" id="error"></p>
</div>