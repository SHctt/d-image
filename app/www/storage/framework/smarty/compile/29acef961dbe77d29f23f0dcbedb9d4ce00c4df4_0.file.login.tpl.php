<?php
/* Smarty version 3.1.42, created on 2022-01-11 11:29:54
  from '/mnt/app/www/resources/views/material/auth/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.42',
  'unifunc' => 'content_61dcf9b2a07484_02722320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29acef961dbe77d29f23f0dcbedb9d4ce00c4df4' => 
    array (
      0 => '/mnt/app/www/resources/views/material/auth/login.tpl',
      1 => 1640286888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:./telegram_modal.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:./telegram.tpl' => 1,
  ),
),false)) {
function content_61dcf9b2a07484_02722320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="authpage">
    <div class="container">
        <form action="javascript:void(0);" method="POST">
            <div class="auth-main auth-row auth-col-one">
                <div class="auth-top auth-row">
                    <a class="boardtop-left" href="/">
                        <div>首 页</div>
                    </a>
                    <div class="auth-logo">
                        <img src="/images/uim-logo-round.png">
                    </div>
                    <a href="/auth/register" class="boardtop-right">
                        <div>注 册</div>
                    </a>
                </div>
                <div class="auth-row">
                    <div class="form-group-label auth-row row-login">
                        <label class="floating-label" for="email">邮箱</label>
                        <input class="form-control maxwidth-auth" id="email" type="email" name="Email" inputmode="email" autocomplete="username">
                    </div>
                </div>
                <div class="auth-row">
                    <div class="form-group-label auth-row row-login">
                        <label class="floating-label" for="passwd">密码</label>
                        <input class="form-control maxwidth-auth" id="passwd" type="password" name="Password" autocomplete="current-password">
                    </div>
                </div>
                <div class="auth-row">
                    <div class="form-group-label auth-row row-login">
                        <label class="floating-label" for="code">两步验证码（未设置请忽略）</label>
                        <input class="form-control maxwidth-auth" id="code" type="number" name="Code" inputmode="numeric" autocomplete="one-time-code">
                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                    <div class="form-group-label labelgeetest auth-row">
                        <div id="embed-captcha"></div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_login_captcha'] == true && $_smarty_tpl->tpl_vars['config']->value['captcha_provider'] == 'recaptcha') {?>
                    <div class="form-group-label auth-row">
                        <div class="row">
                            <div align="center" class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['recaptcha_sitekey']->value;?>
"></div>
                        </div>
                    </div>
                <?php }?>

                <div class="btn-auth auth-row">
                    <button id="login" type="submit" class="btn btn-block btn-brand waves-attach waves-light">
                        确认登录
                    </button>
                </div>
                <div class="auth-help auth-row">
                    <div class="auth-help-table auth-row">
                        <div class="checkbox checkbox-adv">
                            <label for="remember_me">
                                <input class="access-hide" value="week" id="remember_me" name="remember_me"
                                       type="checkbox">记住我</input>
                                <span class="checkbox-circle"></span>
                                <span class="checkbox-circle-check"></span>
                                <span class="checkbox-circle-icon icon">done</span>
                            </label>
                        </div>
                        <a href="/password/reset">忘记密码？</a>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_telegram_login'] === true) {?>
                    <div class="auth-bottom auth-row">
                        <div class="tgauth">
                            <span>Telegram</span>
                            <button class="btn" id="calltgauth"><i class="icon icon-lg">near_me</i></button>
                            <span>快捷登录</span>
                        </div>
                    </div>
                <?php }?>
            </div>
        </form>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_telegram_login'] === true) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:./telegram_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_telegram_login'] === true) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:./telegram.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>


    <?php echo '<script'; ?>
>
        let calltgbtn = document.querySelector('#calltgauth');
        let tgboard = document.querySelector('.card.auth-tg.cust-model');
        if (calltgbtn && tgboard) {
            custModal(calltgbtn, tgboard);
        }
    <?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        function login() {
            <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
            if (typeof validate === 'undefined' || !validate) {
                $("#result").modal();
                $$.getElementById('msg').innerHTML = '请滑动验证码来完成验证';
                return;
            }
            <?php }?>

            document.getElementById("login").disabled = true;

            $.ajax({
                type: "POST",
                url: location.pathname,
                dataType: "json",
                data: {
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_login_captcha'] == true && $_smarty_tpl->tpl_vars['config']->value['captcha_provider'] == 'recaptcha') {?>
                    recaptcha: grecaptcha.getResponse(),
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                    geetest_challenge: validate.geetest_challenge,
                    geetest_validate: validate.geetest_validate,
                    geetest_seccode: validate.geetest_seccode,
                    <?php }?>
                    code: $$getValue('code'),
                    email: $$getValue('email'),
                    passwd: $$getValue('passwd'),
                    remember_me: $("#remember_me:checked").val()
                },
                success: (data) => {
                    if (data.ret == 1) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href='/user'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        document.getElementById("login").disabled = false;
                        <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                        captcha.refresh();
                        <?php }?>
                    }
                },
                error: (jqXHR) => {
                    $("#msg-error").hide(10);
                    $("#msg-error").show(100);
                    $$.getElementById('msg').innerHTML = `发生错误：${
                        jqXHR.status
                    }`;
                    document.getElementById("login").disabled = false;
                    <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                    captcha.refresh();
                    <?php }?>
                }
            });
        }

        $("html").keydown(function (event) {
            if (event.keyCode == 13) {
                login();
            }
        });
        $("#login").click(function () {
            login();
        });

        $('div.modal').on('shown.bs.modal', function () {
            $("div.gt_slider_knob").hide();
        });

        $('div.modal').on('hidden.bs.modal', function () {
            $("div.gt_slider_knob").show();
        });
    })
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
    <?php echo '<script'; ?>
>
        var handlerEmbed = function (captchaObj) {
            // 将验证码加到id为captcha的元素里

            captchaObj.onSuccess(function () {
                validate = captchaObj.getValidate();
            });

            captchaObj.appendTo("#embed-captcha");

            captcha = captchaObj;
            // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
        };

        initGeetest({
            gt: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->gt;?>
",
            challenge: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->challenge;?>
",
            product: "embed", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
            offline: <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value->success) {?>0<?php } else { ?>1<?php }?> // 表示用户后台检测极验服务器是否宕机，与SDK配合，用户一般不需要关注
        }, handlerEmbed);
    <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_login_captcha'] == true && $_smarty_tpl->tpl_vars['config']->value['captcha_provider'] == 'recaptcha') {?>
    <?php echo '<script'; ?>
 src="https://recaptcha.net/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
<?php }
}
}
