<?php
/* Smarty version 3.1.42, created on 2022-01-11 14:08:13
  from '/mnt/app/www/resources/views/material/admin/node/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.42',
  'unifunc' => 'content_61dd1ecd7a1ea3_45892037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caa5de43e046a397614a65be2f5ad588b15c1b9f' => 
    array (
      0 => '/mnt/app/www/resources/views/material/admin/node/edit.tpl',
      1 => 1640286888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_61dd1ecd7a1ea3_45892037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">编辑节点 #<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">
                <form id="main_form">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="name">节点名称</label>
                                    <input class="form-control maxwidth-edit" id="name" name="name" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->name;?>
">
                                </div>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="server">节点地址</label>
                                    <input class="form-control maxwidth-edit" id="server" name="server" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->server;?>
">
                                    <p class="form-control-guide"><i class="material-icons">info</i>如果填写为域名，“节点IP”会自动设置为解析的IP</p>
                                </div>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="server">节点IP</label>
                                    <input class="form-control maxwidth-edit" id="node_ip" name="node_ip" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->node_ip;?>
">
                                    <p class="form-control-guide"><i class="material-icons">info</i>如果“节点地址”填写为域名，则此处的值会被忽视
                                    </p>
                                </div>
                                <div class="form-group">
                                    <dev id="custom_config"></dev>
                                    <p class="form-control-guide"><i class="material-icons">info</i>请参考 <a href="//wiki.sspanel.org/#/setup-custom-config" target="_blank">wiki.sspanel.org/#/setup-custom-config</a> 进行配置
                                    </p>
                                </div>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="rate">流量比例</label>
                                    <input class="form-control maxwidth-edit" id="rate" name="rate" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->traffic_rate;?>
">
                                </div>
                                <div class="form-group form-group-label">
                                    <label for="mu_only">
                                        <label class="floating-label" for="sort">单端口多用户启用</label>
                                        <select id="mu_only" class="form-control maxwidth-edit" name="is_multi_user">
                                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['node']->value->mu_only == 0) {?>selected<?php }?>>单端口多用户与普通端口并存</option>
                                            <option value="-1" <?php if ($_smarty_tpl->tpl_vars['node']->value->mu_only == -1) {?>selected<?php }?>>只启用普通端口</option>
                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['node']->value->mu_only == 1) {?>selected<?php }?>>只启用单端口多用户</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="form-group form-group-label">
                                    <div class="checkbox switch">
                                        <label for="type">
                                            <input <?php if ($_smarty_tpl->tpl_vars['node']->value->type == 1) {?>checked<?php }?> class="access-hide" id="type"
                                                   name="type" type="checkbox"><span class="switch-toggle"></span>是否显示
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="status">节点状态</label>
                                    <input class="form-control maxwidth-edit" id="status" name="status" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->status;?>
">
                                </div>
                                <div class="form-group form-group-label">
                                    <div class="form-group form-group-label">
                                        <label class="floating-label" for="sort">节点类型</label>
                                        <select id="sort" class="form-control maxwidth-edit" name="sort">
                                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 0) {?>selected<?php }?>>Shadowsocks</option>
                                            <option value="9" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 9) {?>selected<?php }?>>Shadowsocks 单端口多用户</option>
                                            <option value="11" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 11) {?>selected<?php }?>>V2Ray</option>
                                            <option value="13" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 13) {?>selected<?php }?>>Shadowsocks V2Ray-Plugin&Obfs</option>
                                            <option value="14" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 14) {?>selected<?php }?>>Trojan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="info">节点描述</label>
                                    <input class="form-control maxwidth-edit" id="info" name="info" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->info;?>
">
                                </div>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="class">节点等级</label>
                                    <input class="form-control maxwidth-edit" id="class" name="class" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->node_class;?>
">
                                    <p class="form-control-guide"><i class="material-icons">info</i>不分级请填0，分级填写相应数字</p>
                                </div>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="group">节点群组</label>
                                    <input class="form-control maxwidth-edit" id="group" name="group" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->node_group;?>
">
                                    <p class="form-control-guide"><i class="material-icons">info</i>分组为数字，不分组请填0</p>
                                </div>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="node_bandwidth_limit">节点流量上限（GB）</label>
                                    <input class="form-control maxwidth-edit" id="node_bandwidth_limit"
                                           name="node_bandwidth_limit" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->node_bandwidth_limit/1024/1024/1024;?>
">
                                    <p class="form-control-guide"><i class="material-icons">info</i>不设上限请填0</p>
                                </div>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="bandwidthlimit_resetday">节点流量上限清空日</label>
                                    <input class="form-control maxwidth-edit" id="bandwidthlimit_resetday"
                                           name="bandwidthlimit_resetday" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->bandwidthlimit_resetday;?>
">
                                </div>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="node_speedlimit">节点限速（Mbps）</label>
                                    <input class="form-control maxwidth-edit" id="node_speedlimit"
                                           name="node_speedlimit" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->node_speedlimit;?>
">
                                    <p class="form-control-guide"><i class="material-icons">info</i>不限速填0，对于每个用户端口生效</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10 col-md-push-1">
                                            <button id="submit" type="submit"
                                                    class="btn btn-block btn-brand waves-attach waves-light">修改
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    const container = document.getElementById('custom_config');
    var options = {
        mode: 'tree'
    };
    const editor = new JSONEditor(container, options);
    editor.set(<?php echo $_smarty_tpl->tpl_vars['node']->value->custom_config;?>
)

    $('#main_form').validate({
        ignore: ".jsoneditor *",
        rules: {
            name: {required: true},
            server: {required: true},
            rate: {required: true},
            info: {required: true},
            group: {required: true},
            status: {required: true},
            node_speedlimit: {required: true},
            sort: {required: true},
            node_bandwidth_limit: {required: true},
            bandwidthlimit_resetday: {required: true}
        },
        submitHandler: () => {
            if ($$.getElementById('type').checked) {
                var type = 1;
            } else {
                var type = 0;
            }

            $.ajax({
                type: "PUT",
                url: "/admin/node/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
",
                dataType: "json",

                data: {
                    name: $$getValue('name'),
                    server: $$getValue('server'),
                    custom_config: editor.get(),
                    node_ip: $$getValue('node_ip'),
                    rate: $$getValue('rate'),
                    info: $$getValue('info'),
                    type,
                    group: $$getValue('group'),
                    status: $$getValue('status'),
                    sort: $$getValue('sort'),
                    node_speedlimit: $$getValue('node_speedlimit'),
                    class: $$getValue('class'),
                    node_bandwidth_limit: $$getValue('node_bandwidth_limit'),
                    bandwidthlimit_resetday: $$getValue('bandwidthlimit_resetday')
,
                    mu_only: $$getValue('mu_only')
                },
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href=top.document.referrer", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);

                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },

                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${jqXHR.status}`;
                }
            });
        }
    });

<?php echo '</script'; ?>
>
<?php }
}
