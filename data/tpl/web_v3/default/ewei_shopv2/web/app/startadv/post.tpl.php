<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>

<link href="../addons/ewei_shopv2/plugin/app/static/css/web.css?v=201609291000" rel="stylesheet" type="text/css"/>
<link href="../addons/ewei_shopv2/plugin/app/static/css/startadv.css?v=201711181700" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">

<div class="page-header">当前位置：<span class="text-primary"><?php  if(!empty($advs)) { ?>编辑<?php  } else { ?>新建<?php  } ?>启动广告 <?php  if(!empty($advs)) { ?>(<?php  echo $advs['name'];?>)<?php  } ?></span></div>

<div class="page-content">

    <div class="row relative w840">
        <div class="diy-phone" data-merch="<?php  echo intval($_W['merchid'])?>">
            <div class="phone-head"></div>
            <div class="phone-body">
                <div class="phone-title" id="page">启动广告</div>
                <div class="phone-main" id="phone" style="position: relative; overflow: hidden; height: 500px">
                    <p style="text-align: center; line-height: 400px">loading...</p>
                </div>
            </div>
            <div class="phone-foot"></div>
        </div>

        <div class="diy-editor form-horizontal" id="diy-editor" style="float: left;">
            <div class="editor-arrow"></div>
            <div class="inner"></div>
        </div>

        <div class="diy-menu">
            <div class="action">
                <nav class="btn btn-default btn-sm" style="float: left; display: none" id="gotop"><i class="icon icon-top" style="font-size: 12px"></i> 返回顶部</nav>
                <nav class="btn btn-primary btn-sm btn-save" data-type="save">保存广告</nav>
            </div>
        </div>
    </div>

    <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('app/startadv/_tpl', TEMPLATE_INCLUDEPATH)) : (include template('app/startadv/_tpl', TEMPLATE_INCLUDEPATH));?>
</div>

<script language="javascript">
    var path = '../../plugin/app/static/js/diy.adv';
    myrequire([path,'tpl','web/biz'],function(modal,tpl){
        modal.init({
            tpl: tpl,
            id: '<?php  echo intval($_GPC["id"])?>',
            attachurl: "<?php  echo $_W['attachurl'];?>",
            menu: <?php  if(!empty($advs['data'])) { ?><?php  echo json_encode($advs['data'])?><?php  } else { ?>null<?php  } ?>,
            merch: <?php  if($_W['plugin']=='merch' && !empty($_W['merchid'])) { ?>1<?php  } else { ?>0<?php  } ?>
        });
    });
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>