<?php
/* Smarty version 3.1.42, created on 2022-01-11 12:43:37
  from '/mnt/app/www/resources/views/material/user/node/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.42',
  'unifunc' => 'content_61dd0af9395a95_59526201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0573c20e211c9b44a26c138a45534c9f1bbe9e8c' => 
    array (
      0 => '/mnt/app/www/resources/views/material/user/node/index.tpl',
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
function content_61dd0af9395a95_59526201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="//cdn.jsdelivr.net/gh/M1Screw/canvasjs.js/canvasjs.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
<?php echo '</script'; ?>
>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">่็นๅ่กจ</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="ui-card-wrap">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 nodelist">
                        <div class="ui-switch node-switch">
                            <div class="card">
                                <div class="card-main">
                                    <div class="card-inner ui-switch-inner">
                                        <div class="switch-btn" id="switch-cards">
                                            <a href="#" onclick="return false">
                                                <i class="mdui-icon material-icons">apps</i>
                                            </a>
                                        </div>
                                        <div class="switch-btn" id="switch-table">
                                            <a href="#" onclick="return false">
                                                <i class="mdui-icon material-icons">dehaze</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php $_smarty_tpl->_assignInScope('index', 0);?>
                        <div class="node-cardgroup">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'class_group', false, 'node_class');
$_smarty_tpl->tpl_vars['class_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node_class']->value => $_smarty_tpl->tpl_vars['class_group']->value) {
$_smarty_tpl->tpl_vars['class_group']->do_else = false;
?>
                            <div class="nodetitle">
                                <a class="waves-effect waves-button" data-toggle="collapse" href="#cardgroup<?php echo $_smarty_tpl->tpl_vars['node_class']->value-1000;?>
" aria-expanded="true" aria-controls="cardgroup<?php echo $_smarty_tpl->tpl_vars['node_class']->value-1000;?>
">
                                    <span><?php if ($_smarty_tpl->tpl_vars['node_class']->value < 1000) {?>่ฏ็จ<?php } elseif ($_smarty_tpl->tpl_vars['node_class']->value == 1000) {?>ๅ่ดน<?php } else { ?>็ญ็บง <?php echo $_smarty_tpl->tpl_vars['node_class']->value-1000;?>
 <?php }?>็จๆท่็น</span>
                                    <i class="material-icons">expand_more</i>
                                </a>
                            </div>
                            <div class="card-row collapse in" id="cardgroup<?php echo $_smarty_tpl->tpl_vars['node_class']->value-1000;?>
">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['class_group']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
                                <div class="node-card node-flex" cardindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                                    <div class="nodemain">
                                        <div class="nodehead node-flex" title="่็นๅ็งฐ">
<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_flag'] === true) {?>
                                            <div class="flag">
                                                <img src="/images/prefix/<?php echo $_smarty_tpl->tpl_vars['node']->value['flag'];?>
">
                                            </div>
<?php }?>
                                            <div class="nodename"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</div>
                                        </div>
                                        <!-- ๅจ็บฟไบบๆฐ -->
                                        <div class="nodemiddle node-flex" title="ๅจ็บฟไบบๆฐ">
                                            <div class="onlinemember node-flex">
                                                <i class="material-icons node-icon">people</i>
                                                <span><?php if ($_smarty_tpl->tpl_vars['node']->value['online_user'] == -1) {?> N/A<?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['node']->value['online_user'];
}?></span>
                                            </div>
                                            <div class="nodetype" title="่็น็ถๆ"><?php echo $_smarty_tpl->tpl_vars['node']->value['status'];?>
</div>
                                        </div>
                                        <div class="nodeinfo node-flex">
                                            <!-- ่็นๅทฒ็จ/ๅฉไฝๅฏ็จๆต้ -->
                                            <div class="nodetraffic node-flex" title="่็นๅทฒ็จ/ๅฉไฝๅฏ็จๆต้">
                                                <i class="material-icons node-icon">swap_vertical_circle</i>
                                                <span><?php if ($_smarty_tpl->tpl_vars['node']->value['traffic_limit'] > 0) {
echo $_smarty_tpl->tpl_vars['node']->value['traffic_used'];?>
/<?php echo $_smarty_tpl->tpl_vars['node']->value['traffic_limit'];?>
GB<?php } else {
echo $_smarty_tpl->tpl_vars['node']->value['traffic_used'];?>
GB<?php }?></span>
                                            </div>
                                            <!-- ่็นๆต้ๅ็ -->
                                            <div class="nodecheck node-flex" title="่็นๆต้ๅ็">
                                                <i class="material-icons node-icon">stacked_line_chart</i>
                                                <span><?php echo $_smarty_tpl->tpl_vars['node']->value['traffic_rate'];?>
x</span>
                                            </div>
                                            <!-- ่็น้็ -->
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['node']->value['bandwidth'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 != 0) {?>
                                            <div class="nodeband node-flex" title="่็น้็">
                                                <i class="material-icons node-icon">compare_arrows</i>
                                                <span><?php echo $_smarty_tpl->tpl_vars['node']->value['bandwidth'];?>
</span>
                                            </div>
                                            <?php }?>
                                            <!-- ่็น็ณป็ป่ด่ฝฝ -->
                                            <div class="nodeband node-flex" title="่็น็ณป็ป่ด่ฝฝ">
                                                <i class="material-icons node-icon">dns</i>
                                                <span><?php echo $_smarty_tpl->tpl_vars['node']->value['latest_load'];?>
</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nodestatus">
                                        <div class="<?php if ($_smarty_tpl->tpl_vars['node']->value['online'] == '1') {?>nodeonline<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['online'] == '0') {?>nodeunset<?php } else { ?>nodeoffline<?php }?>">
                                            <i class="material-icons"><?php if ($_smarty_tpl->tpl_vars['node']->value['online'] == '1') {?>cloud_queue<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['online'] == '0') {?>wifi_off<?php } else { ?>flash_off<?php }?></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="node-tip cust-model" tipindex="<?php echo $_smarty_tpl->tpl_vars['index']->value++;?>
">
<?php if ($_smarty_tpl->tpl_vars['node']->value['class'] > $_smarty_tpl->tpl_vars['user']->value->class) {?>
                                    <p class="card-heading" align="center">
                                        <b>
                                            <i class="icon icon-lg">visibility_off</i>ๆจๅฝๅ็ญ็บงไธ่ถณไปฅไฝฟ็จ่ฏฅ่็น๏ผๅฆ้ๅ็บง่ฏท<a href="/user/shop">็นๅป่ฟ้</a>ๅ็บงๅฅ้ค
                                        </b>
                                    </p>
<?php } else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['connect'], 'mu_port');
$_smarty_tpl->tpl_vars['mu_port']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mu_port']->value) {
$_smarty_tpl->tpl_vars['mu_port']->do_else = false;
?>
                                    <div class="tiptitle">
                                        <a href="javascript:void(0);" onClick="urlChange('<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
',<?php echo $_smarty_tpl->tpl_vars['mu_port']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];
if ($_smarty_tpl->tpl_vars['mu_port']->value != 0) {?> - <?php echo $_smarty_tpl->tpl_vars['mu_port']->value;?>
 ็ซฏๅฃ<?php }?></a>
                                        <div class="nodeload">
                                            <div class="label label-brand-accent">โโ็นๅป่็นๆฅ็โโ</div>
<?php if ($_smarty_tpl->tpl_vars['mu_port']->value != 0) {?>
                                            <div>
                                                <span class="node-icon"><i class="icon icon-lg">cloud</i></span>
                                                <span class="node-load">ๅ็ซฏๅฃ๏ผ<code><?php echo $_smarty_tpl->tpl_vars['mu_port']->value;?>
</code></span>
                                            </div>
<?php }?>
                                        </div>
                                    </div>
                                    <hr/>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <div class="tipmiddle">
                                        <div>
                                            <span class="node-icon"><i class="icon icon-lg">chat</i> </span><?php echo $_smarty_tpl->tpl_vars['node']->value['info'];?>

                                        </div>
                                    </div>
<?php }?>
                                </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="card node-table">
                            <div class="card-main">
                                <div class="card-inner margin-bottom-no">
                                    <div class="tile-wrap">
<?php $_smarty_tpl->_assignInScope('index', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'class_group', false, 'node_class');
$_smarty_tpl->tpl_vars['class_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node_class']->value => $_smarty_tpl->tpl_vars['class_group']->value) {
$_smarty_tpl->tpl_vars['class_group']->do_else = false;
?>
                                        <p class="card-heading"><?php if ($_smarty_tpl->tpl_vars['node_class']->value < 1000) {?>่ฏ็จ<?php } elseif ($_smarty_tpl->tpl_vars['node_class']->value == 1000) {?>ๅ่ดน<?php } else { ?>็ญ็บง <?php echo $_smarty_tpl->tpl_vars['node_class']->value-1000;?>
 <?php }?>็จๆท่็น</p>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['class_group']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
                                        <div class="tile tile-collapse">
                                            <div data-toggle="tile" data-target="#heading<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
">
                                                <div class="tile-side pull-left" data-ignore="tile">
                                                    <div class="avatar avatar-sm <?php if ($_smarty_tpl->tpl_vars['node']->value['online'] == '1') {?>nodeonline<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['online'] == '0') {?>nodeunset<?php } else { ?>nodeoffline<?php }?>">
                                                        <span class="material-icons"><?php if ($_smarty_tpl->tpl_vars['node']->value['online'] == '1') {?>cloud_queue<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['online'] == '0') {?>wifi_off<?php } else { ?>flash_off<?php }?></span>
                                                    </div>
                                                </div>
                                                <div class="tile-inner">
                                                    <div class="text-overflow node-textcolor">
                                                        <span class="enable-flag" title="่็นๅ็งฐ">
<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_flag'] === true) {?>
                                                            <img src="/images/prefix/<?php echo $_smarty_tpl->tpl_vars['node']->value['flag'];?>
" height="22"/>
<?php }?>
                                                            <?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

                                                        </span>
                                                        |
                                                        <span class="node-icon"><i class="icon icon-lg">people</i></span>
                                                        <strong><b><span class="node-alive" title="ๅจ็บฟไบบๆฐ"><?php if ($_smarty_tpl->tpl_vars['node']->value['online_user'] == -1) {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['node']->value['online_user'];
}?></span></b></strong>
                                                        |
                                                        <span class="node-icon"><i class="icon icon-lg">notifications_none</i></span>
                                                        <span class="node-status" title="่็น็ถๆ"><?php echo $_smarty_tpl->tpl_vars['node']->value['status'];?>
</span>
                                                        |
                                                        <span class="node-icon"><i class="icon icon-lg">swap_vertical_circle</i></span>
<?php if ($_smarty_tpl->tpl_vars['node']->value['traffic_limit'] > 0) {?><span class="node-band" title="่็นๅทฒ็จ/ๅฉไฝๅฏ็จๆต้"><?php echo $_smarty_tpl->tpl_vars['node']->value['traffic_used'];?>
/<?php echo $_smarty_tpl->tpl_vars['node']->value['traffic_limit'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['node']->value['traffic_used'];?>
GB<?php }?>
                                                        |
                                                        <span class="node-icon"><i class="icon icon-lg">stacked_line_chart</i></span>
                                                        <span class="node-tr" title="่็นๆต้ๅ็"><?php echo $_smarty_tpl->tpl_vars['node']->value['traffic_rate'];?>
ๅ</span>
                                                        |
                                                        <span class="node-icon"><i class="icon icon-lg">compare_arrows</i></span>
                                                        <span class="node-mothed" title="่็น้็"><?php ob_start();
echo $_smarty_tpl->tpl_vars['node']->value['bandwidth'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 0) {?>ไธ้้<?php } else {
echo $_smarty_tpl->tpl_vars['node']->value['bandwidth'];
}?></span>
                                                        |
                                                        <span class="node-icon"><i class="icon icon-lg">dns</i></span>
                                                        <span class="node-load" title="่็น็ณป็ป่ด่ฝฝ">่ด่ฝฝ๏ผ<?php echo $_smarty_tpl->tpl_vars['node']->value['latest_load'];?>
</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collapsible-region collapse" id="heading<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
">
                                                <div class="tile-sub">
                                                    <br>
<?php if ($_smarty_tpl->tpl_vars['node']->value['class'] > $_smarty_tpl->tpl_vars['user']->value->class) {?>
                                                    <div class="card">
                                                        <div class="card-main">
                                                            <div class="card-inner">
                                                                <p class="card-heading" align="center">
                                                                <b><i class="icon icon-lg">visibility_off</i> ๆจๅฝๅ็ญ็บงไธ่ถณไปฅไฝฟ็จ่ฏฅ่็น๏ผๅฆ้ๅ็บง่ฏท<a href="/user/shop">็นๅป่ฟ้</a>ๅ็บงๅฅ้ค</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
<?php } else { ?>
                                                    <div class="card nodetip-table">
                                                        <div class="card-main">
                                                            <div class="card-inner">
                                                                <!-- ็จๆท็ญ็บงไธๅฐไบ่็น็ญ็บง -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['connect'], 'mu_port');
$_smarty_tpl->tpl_vars['mu_port']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mu_port']->value) {
$_smarty_tpl->tpl_vars['mu_port']->do_else = false;
?>
                                                                <p class="card-heading">
                                                                    <a href="javascript:void(0);" onClick="urlChange('<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
',<?php echo $_smarty_tpl->tpl_vars['mu_port']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];
if ($_smarty_tpl->tpl_vars['mu_port']->value != 0) {?> - <?php echo $_smarty_tpl->tpl_vars['mu_port']->value;?>
 ็ซฏๅฃ<?php }?></a>
                                                                    <span class="label label-brand-accent">โ็นๅป่็นๆฅ็้็ฝฎไฟกๆฏ</span>
                                                                </p>
                                                                <hr/>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <div><i class="icon icon-lg node-icon">chat</i> <?php echo $_smarty_tpl->tpl_vars['node']->value['info'];?>
</div>
                                                            </div>
                                                        </div>
                                                    </div>
<?php }?>
                                                    <div class="card">
                                                        <div class="card-main">
                                                            <div class="card-inner" id="info<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php echo '<script'; ?>
>
                                                        $().ready(function () {
                                                            $('#heading<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
').on("shown.bs.tile", function () {
                                                                $("#info<?php echo $_smarty_tpl->tpl_vars['index']->value++;?>
").load("/user/node/<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
/ajax");
                                                            });
                                                        });
                                                    <?php echo '</script'; ?>
>
                                                </div>
                                            </div>
                                        </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <div aria-hidden="true" class="modal modal-va-middle fade" id="nodeinfo" role="dialog"
                        tabindex="-1">
                        <div class="modal-dialog modal-full">
                            <div class="modal-content">
                                <iframe class="iframe-seamless" title="Modal with iFrame" id="infoifram"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    function urlChange(id, is_mu) {
        var site = `./node/${
                id
                }?ismu=${
                is_mu
                }`;
        if (id == 'guide') {
            var doc = document.getElementById('infoifram').contentWindow.document;
            doc.open();
            doc.write('<img src="../images/node.gif" style="width: 100%;height: 100%; border: none;"/>');
            doc.close();
        } else {
            document.getElementById('infoifram').src = site;
        }
        $("#nodeinfo").modal();
    }
    $(function () {
        new ClipboardJS('.copy-text');
    });
    $(".copy-text").click(function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = 'ๅทฒๅคๅถ๏ผ่ฏท่ฟๅฅ่ฝฏไปถๆทปๅ?ใ';
    });
    
    ;(function () {
        'use strict'
        //็ฎญๅคดๆ่ฝฌ
        let rotateTrigger = document.querySelectorAll('a[href^="#cardgroup"]');
        let arrows = document.querySelectorAll('a[href^="#cardgroup"] i')

        for (let i = 0; i < rotateTrigger.length; i++) {
            rotatrArrow(rotateTrigger[i], arrows[i]);
        }
        //UIๅๆข
        let elNodeCard = $$.querySelectorAll(".node-cardgroup");
        let elNodeTable = $$.querySelectorAll(".node-table");
        let switchToCard = new UIswitch('switch-cards', elNodeTable, elNodeCard, 'grid', 'tempnode');
        switchToCard.listenSwitch();
        let switchToTable = new UIswitch('switch-table', elNodeCard, elNodeTable, 'flex', 'tempnode');
        switchToTable.listenSwitch();
        switchToCard.setDefault();
        switchToTable.setDefault();
        //้ฎ็ฝฉ
        let buttongroup = document.querySelectorAll('.node-card');
        let modelgroup = document.querySelectorAll('.node-tip');
        for (let i = 0; i < buttongroup.length; i++) {
            custModal(buttongroup[i], modelgroup[i]);
        }
    })();
    
<?php echo '</script'; ?>
>
<?php }
}
