<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('system/user-setting-header', TEMPLATE_INCLUDEPATH)) : (include template('system/user-setting-header', TEMPLATE_INCLUDEPATH));?>
<form action="" method="post" class="we7-form">
	<?php  if($do == 'login') { ?>
	<div id="login">
		<div class="form-group">
			<label class="col-sm-2 control-label" style="text-align:left;">图形验证码</label>
			<div class="col-sm-8 form-control-static">
				<input type="radio" id="verifycode-1" name="verifycode" <?php  if($settings['verifycode'] == 1) { ?> checked="checked" <?php  } ?> value="1" />
				<label class="radio-inline" for="verifycode-1">
					开启
				</label>
				<input type="radio" id="verifycode-0" name="verifycode" <?php  if($settings['verifycode'] == 0) { ?> checked="checked" <?php  } ?> value="0" />
				<label class="radio-inline" for="verifycode-0">
					关闭
				</label>
				<span class="help-block"> 开启后，用户登录需要输入图形验证码</span>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label" style="text-align:left;">用户首页设置</label>
			<div class="col-sm-8">
				<select name="welcome_link" class="form-control">
					<option value="<?php echo WELCOME_DISPLAY_TYPE;?>" <?php  if($settings['welcome_link']==WELCOME_DISPLAY_TYPE) { ?>selected<?php  } ?>>用户欢迎页</option>
					<option value="<?php echo PLATFORM_DISPLAY_TYPE;?>" <?php  if($settings['welcome_link']==PLATFORM_DISPLAY_TYPE) { ?>selected<?php  } ?>>平台</option>
				</select>
				<div class="help-block">统一设置用户登录后跳转的页面，用户也可以自行设置，以用户设置的为准</div>
			</div>
		</div>
	</div>
	<?php  } ?>

	<?php  if($do == 'binding') { ?>
	<div id="binding">
		<div class="form-group">
			<label class="col-sm-2 control-label" style="text-align:left;">强制绑定信息</label>
			<div class="col-sm-8 form-control-static">
				<input type="radio" id="bind_status-0" name="bind" value="" <?php  if(empty($settings['bind'])) { ?>checked<?php  } ?>/>
				<label class="radio-inline" for="bind_status-0">
					无
				</label>
				<input type="radio" id="bind_status-1" name="bind" value="qq" <?php  if($settings['bind'] == 'qq') { ?>checked<?php  } ?>/>
				<label class="radio-inline" for="bind_status-1">
					qq
				</label>
				<input type="radio" id="bind_status-2" name="bind" value="wechat" <?php  if($settings['bind'] == 'wechat') { ?>checked<?php  } ?>/>
				<label class="radio-inline" for="bind_status-2">
					微信
				</label>
				<input type="radio" id="bind_status-3" name="bind" value="mobile" <?php  if($settings['bind'] == 'mobile') { ?>checked<?php  } ?>/>
				<label class="radio-inline" for="bind_status-3">
					手机号
				</label>
				<span class="help-block"> 选择后，用户登录后，将强制绑定所选方式</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" style="text-align:left;">第三方登录入口</label>
			<div class="col-sm-8 form-control-static">
				<input type="radio" name="oauth_bind" id="oauth_bind-1" value="1" <?php  if($settings['oauth_bind'] == 1) { ?>checked<?php  } ?> />
				<label class="radio-inline" for="oauth_bind-1">
					是
				</label>
				<input type="radio" name="oauth_bind" id="oauth_bind-0" value="0"  <?php  if($settings['oauth_bind'] == 0) { ?>checked<?php  } ?>/>
				<label class="radio-inline" for="oauth_bind-0">
					否
				</label>
				<div class="help-block">开启后，登录页面显示第三方登录入口，可以登录已关联账户或注册新帐号</div>
			</div>
		</div>
	</div>
	<?php  } ?>
	<input type="submit" name="submit" value="提交" class="btn btn-primary" style="padding: 6px 50px;">
	<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
</form>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>