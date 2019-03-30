<?php defined('IN_IA') or exit('Access Denied');?><style>
    .selected{
        background-color: #f0ad4e;
        border-color: #f0ad4e;
    }
</style>
    <div class="form-group">
        <label class="col-sm-2 control-label">扫码关注成为分销商</label>
        <div class="col-sm-9 col-xs-12">
            <?php if( ce('poster' ,$item) ) { ?>
            <label class="radio-inline">
                <input type="radio" name="beagent" value="1" <?php  if($followreward['beagent']==1) { ?>checked<?php  } ?> /> 是
            </label>
            <label class="radio-inline">
                <input type="radio" name="beagent" value="0" <?php  if(empty($followreward['beagent'])) { ?>checked<?php  } ?> /> 否
            </label>
            <span class='help-block'>扫码关注直接成为推荐人的下线并成为分销商，不受分销【基础设置】的成为分销商下线条件控制（仅是否直接审核通过由基础设置控制）</span>
            <?php  } else { ?>
            <div class='form-control-static'><?php  if($item['beagent']==1) { ?>是<?php  } else { ?>否<?php  } ?></div>
            <?php  } ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">商城积分</label>
        <div class="col-sm-9 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon">奖励</span>
                <input type="text" name="followrewardcredit" class="form-control" value="<?php  echo $followreward['credit'];?>">
                <span class="input-group-addon">个 积分</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">商城余额</label>
        <div class="col-sm-9 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon">奖励</span>
                <input type="text" name="followrewardbalance" class="form-control" value="<?php  echo $followreward['balance'];?>">
                <span class="input-group-addon">元 余额</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">微信红包</label>
        <div class="col-sm-9 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon">奖励</span>
                <input type="text" name="followrewardredpacket" class="form-control" value="<?php  echo $followreward['redpacket'];?>">
                <span class="input-group-addon">元 红包</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">商城优惠券</label>
        <div class="col-sm-9 col-xs-12">
            <a class="btn btn-default" data-target="#selector" onclick="$('#selector').modal();"data-type="followcoupon"><i class="fa fa-plus"></i> 选择优惠券</a>
            <textarea name="followrewardcoupon" class="hide"><?php  echo json_encode($followreward['coupon'])?></textarea>
        </div>
    </div>
    <div id="couponfollowreward"></div>
