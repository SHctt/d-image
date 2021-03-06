<?php
/* Smarty version 3.1.42, created on 2022-01-11 11:29:51
  from '/mnt/app/www/resources/views/material/live_chat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.42',
  'unifunc' => 'content_61dcf9af539821_87683085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68c66fbedc4020565505a0be89a0046df30cf93e' => 
    array (
      0 => '/mnt/app/www/resources/views/material/live_chat.tpl',
      1 => 1640286888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dcf9af539821_87683085 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['config']->value['live_chat'] == 'tawk') {
echo '<script'; ?>
 type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var id = "<?php echo $_smarty_tpl->tpl_vars['config']->value['tawk_id'];?>
";
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/' + id + '/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
<?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['config']->value['live_chat'] == 'crisp') {
echo '<script'; ?>
 type="text/javascript"> window.$crisp = [];
    window.CRISP_WEBSITE_ID = "<?php echo $_smarty_tpl->tpl_vars['config']->value["crisp_id"];?>
";
    (function () {
        d = document;
        s = d.createElement("script");
        s.src = "https://client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
    })();
    $crisp.push(["safe", true])
    $crisp.push(["set","user:nickname", "<?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
"],
              ["set","user:email","<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
"],
              ["set", "session:data",
                [[
                  ["user_id","<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"],
                  ["user_class","<?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
"],
                  ["reg_email","<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
"],
                  ["last_use_time","<?php echo $_smarty_tpl->tpl_vars['user']->value->lastSsTime();?>
"],
                  ["expire_in","<?php echo $_smarty_tpl->tpl_vars['user']->value->expire_in;?>
"],
                  ["class_expire_time","<?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
"],
                  ["available_traffic","<?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTraffic();?>
"],
                  ["balance","<?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
"]
                ]]
              ]);
<?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['config']->value['live_chat'] == 'livechat') {
echo '<script'; ?>
>

window.__lc = window.__lc || {};

window.__lc.license = "<?php echo $_smarty_tpl->tpl_vars['config']->value['livechat_id'];?>
";;
window.__lc.params = [
    { name: '????????????', value: '<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
' },
    { name: '????????????', value: '<?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
' },
    { name: '????????????', value: '<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
' },
    { name: '????????????', value: '<?php echo $_smarty_tpl->tpl_vars['user']->value->lastSsTime();?>
' },
    { name: '????????????', value: '<?php echo $_smarty_tpl->tpl_vars['user']->value->expire_in;?>
' },
    { name: '????????????', value: '<?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
' },
    { name: '????????????', value: '<?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTraffic();?>
' },
    { name: '????????????', value: '<?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
' }
];

(function(n, t, c) {
    function i(n) {
        return e._h ? e._h.apply(null, n) : e._q.push(n)
    }
    var e = {
        _q: [],
        _h: null,
        _v: "2.0",
        on: function() {
            i(["on", c.call(arguments)])
        },
        once: function() {
            i(["once", c.call(arguments)])
        },
        off: function() {
            i(["off", c.call(arguments)])
        },
        get: function() {
            if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
            return i(["get", c.call(arguments)])
        },
        call: function() {
            i(["call", c.call(arguments)])
        },
        init: function() {
            var n = t.createElement("script");
            n.async = !0,
            n.type = "text/javascript",
            n.src = "https://cdn.livechatinc.com/tracking.js",
            t.head.appendChild(n)
        }
    }; ! n.__lc.asyncInit && e.init(),
    n.LiveChatWidget = n.LiveChatWidget || e
} (window, document, [].slice))
<?php echo '</script'; ?>
>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['config']->value['live_chat'] == 'mylivechat') {
echo '<script'; ?>
 type="text/javascript">
    (() => {
        var hccid = "<?php echo $_smarty_tpl->tpl_vars['config']->value['mylivechat_id'];?>
";
        var nt = document.createElement("script");
        nt.async = true;
        nt.src = "https://mylivechat.com/chatinline.aspx?hccid=" + hccid;
        var ct = document.getElementsByTagName("script")[0];
        ct.parentNode.insertBefore(nt, ct);
    })();
<?php echo '</script'; ?>
>
<?php }
}
}
