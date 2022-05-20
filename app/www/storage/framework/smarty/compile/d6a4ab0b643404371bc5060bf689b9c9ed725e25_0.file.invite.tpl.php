<?php
/* Smarty version 3.1.42, created on 2022-01-11 12:49:48
  from '/mnt/app/www/resources/views/material/user/invite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.42',
  'unifunc' => 'content_61dd0c6c6520a7_83692751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6a4ab0b643404371bc5060bf689b9c9ed725e25' => 
    array (
      0 => '/mnt/app/www/resources/views/material/user/invite.tpl',
      1 => 1640286888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_61dd0c6c6520a7_83692751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">邀请链接</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card margin-bottom-no">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-inner">
                                    <p class="card-heading">邀请有奖</p>
                                    <ul>
                                        <li>每邀请一位用户注册，您都会获得 <code><?php echo $_smarty_tpl->tpl_vars['config']->value['invite_gift'];?>
G</code> 流量奖励；对方会获得 <code><?php echo $_smarty_tpl->tpl_vars['config']->value['invite_get_money'];?>
</code> 元余额奖励</li>
                                        <li>对方在进行账户充值或购买套餐后，您可获得订单金额的 <code><?php echo $_smarty_tpl->tpl_vars['config']->value['code_payback']*100;?>
 %</code> 作为返利</li>
                                        <li>具体邀请返利规则请查看公告，或通过工单系统询问管理员</li>
                                    </ul>
                                    <p>您通过邀请好友获得的总返利为：<code><?php echo $_smarty_tpl->tpl_vars['paybacks_sum']->value;?>
</code> 元</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->class != 0) {?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->invite_num != -1) {?>
                        <div class="col-lg-6 col-md-6">
                            <div class="card margin-bottom-no">
                                <div class="card-main">
                                    <div class="card-inner margin-bottom-no">
                                        <div class="card-inner margin-bottom-no">
                                            <div class="cardbtn-edit">
                                                <div class="card-heading">邀请链接</div>
                                                <div class="reset-flex"><span>重置链接</span><a
                                                            class="reset-link btn btn-brand-accent btn-flat"><i
                                                                class="icon">autorenew</i>&nbsp;</a></div>
                                            </div>
                                            <p>剩余可邀请次数：<?php if ($_smarty_tpl->tpl_vars['user']->value->invite_num < 0) {?>无限<?php } else { ?>
                                                <code><?php echo $_smarty_tpl->tpl_vars['user']->value->invite_num;?>
</code><?php }?></p>
                                            <p>发送邀请链接给有需要的人，邀请他人注册时，请将以下链接发给被邀请者</p>
                                            <div class="invite-link">
                                                <input type="text"
                                                       class="input form-control form-control-monospace cust-link"
                                                       name="input1" readonly=""
                                                       value="<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/auth/register?code=<?php echo $_smarty_tpl->tpl_vars['code']->value->code;?>
">
                                                <button class="copy-text btn btn-subscription" type="button"
                                                        data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>
/auth/register?code=<?php echo $_smarty_tpl->tpl_vars['code']->value->code;?>
">
                                                    点击复制
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['custom_invite_price'] >= 0) {?>
                            <div class="col-lg-6 col-md-6">
                                <div class="card margin-bottom-no">
                                    <div class="card-main">
                                        <div class="card-inner margin-bottom-no">
                                            <div class="card-inner margin-bottom-no">
                                                <div class="cardbtn-edit">
                                                    <div class="card-heading">定制链接后缀 <code
                                                                class="card-tag tag-green"><?php echo $_smarty_tpl->tpl_vars['config']->value['custom_invite_price'];?>

                                                            RMB/次</code></div>
                                                    <button class="btn btn-flat" id="custom-invite-confirm"><span
                                                                class="icon">check</span>&nbsp;
                                                    </button>
                                                </div>
                                                <p>例:输入<code>vip</code>则链接变为<code><?php echo $_smarty_tpl->tpl_vars['config']->value['baseUrl'];?>

                                                        /auth/register?code=vip</code></p>
                                                <div class="form-group form-group-label">
                                                    <label class="floating-label"
                                                           for="custom-invite-link">输入链接后缀</label>
                                                    <input class="form-control maxwidth-edit" id="custom-invite-link"
                                                           type="num">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['invite_price'] >= 0) {?>
                        <div class="col-lg-6 col-md-6">
                            <div class="card margin-bottom-no">
                                <div class="card-main">
                                    <div class="card-inner">
                                        <div class="card-inner">
                                            <div class="cardbtn-edit">
                                                <div class="card-heading">购买邀请次数 <code
                                                            class="card-tag tag-green"><?php echo $_smarty_tpl->tpl_vars['config']->value['invite_price'];?>

                                                        RMB/个</code></div>
                                                <button class="btn btn-flat" id="buy-invite"><span
                                                            class="material-icons">shopping_cart</span></button>
                                            </div>
                                            <p>在下方输入需要购买的邀请次数</p>
                                            <div class="form-group form-group-label">
                                                <label class="floating-label" for="buy-invite-num">输入购买次数</label>
                                                <input class="form-control maxwidth-edit" id="buy-invite-num"
                                                       type="num">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                <?php } else { ?>
                    <div class="col-xx-12">
                        <div class="card margin-bottom-no">
                            <div class="card-main">
                                <div class="card-inner">
                                    <p class="card-heading">邀请链接</p>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
，您不是VIP暂时无法使用邀请链接，<a href="/user/shop">成为VIP请点击这里</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                <div class="col-xx-12">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-table">
                                    <div class="table-responsive bgc-fix table-user">
                                        <?php echo $_smarty_tpl->tpl_vars['render']->value;?>

                                        <table class="table">
                                            <tr>
                                                <th>ID</th>
                                                <th>邀请用户昵称</th>
                                                <th>返利金额</th>
                                                <th>返利时间</th>
                                            </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paybacks']->value, 'payback');
$_smarty_tpl->tpl_vars['payback']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payback']->value) {
$_smarty_tpl->tpl_vars['payback']->do_else = false;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['payback']->value->id;?>
</td>
                                                    <?php if ($_smarty_tpl->tpl_vars['payback']->value->user() != null) {?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['payback']->value->user()->user_name;?>
</td>
                                                    <?php } else { ?>
                                                        <td>已注销</td>
                                                    <?php }?>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['payback']->value->ref_get;?>
 元</td>
                                                    <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['payback']->value->datetime);?>
</td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </table>
                                        <?php echo $_smarty_tpl->tpl_vars['render']->value;?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </section>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    $(function () {
        new ClipboardJS('.copy-text');
    });
    $(".copy-text").click(function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = '已复制到您的剪贴板，请您继续接下来的操作。';
    });
    $(document).ready(function () {
        $("#invite").click(function () {
            $.ajax({
                type: "POST",
                url: "/user/invite",
                dataType: "json",
                success: (data) => {
                    window.location.reload();
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${
                            jqXHR.status
                            }`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(".payback-datetime").each(function() {
        var $this = $(this);
        $this.text(() => {
            var unix_timestamp = parseFloat($this.text());
            var date = new Date(unix_timestamp*1000).toLocaleDateString("zh-CN");
            var time = new Date(unix_timestamp).toLocaleTimeString("zh-CN");
            var formattedTime = date + ' ' + time;
            return formattedTime;
        });
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $("#buy-invite").click(function () {
        $.ajax({
            type: "POST",
            url: "/user/buy_invite",
            dataType: "json",
            data: {
                num: $$getValue('buy-invite-num')
            },
            success: (data) => {
                if (data.ret) {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                    window.setTimeout("location.href='/user/invite'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                } else {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                }
            },
            error: (jqXHR) => {
                $("#result").modal();
                $$.getElementById('msg').innerHTML = `${
                        data.msg
                        } 出现了一些错误`;
            }
        })
    });
    $("#custom-invite-confirm").click(function () {
        $.ajax({
            type: "POST",
            url: "/user/custom_invite",
            dataType: "json",
            data: {
                customcode: $$getValue('custom-invite-link'),
            },
            success: (data) => {
                if (data.ret) {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                    window.setTimeout("location.href='/user/invite'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                } else {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                }
            },
            error: (jqXHR) => {
                $("#result").modal();
                $$.getElementById('msg').innerHTML = `${
                        data.msg
                        } 出现了一些错误`;
            }
        })
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(".reset-link").click(function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = '已重置您的邀请链接，复制您的邀请链接发送给其他人！';
        window.setTimeout("location.href='/user/inviteurl_reset'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
    });
<?php echo '</script'; ?>
>
<?php }
}
