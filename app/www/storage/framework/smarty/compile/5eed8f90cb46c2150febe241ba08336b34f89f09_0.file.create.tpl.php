<?php
/* Smarty version 3.1.42, created on 2022-01-11 12:50:09
  from '/mnt/app/www/resources/views/material/admin/announcement/create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.42',
  'unifunc' => 'content_61dd0c81e71a44_84631619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5eed8f90cb46c2150febe241ba08336b34f89f09' => 
    array (
      0 => '/mnt/app/www/resources/views/material/admin/announcement/create.tpl',
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
function content_61dd0c81e71a44_84631619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">添加公告</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <section class="content-inner margin-top-no">
                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="content">内容</label>
                                <link rel="stylesheet"
                                      href="https://cdn.jsdelivr.net/npm/editor.md@1.5.0/css/editormd.min.css"/>
                                <div id="editormd">
                                    <textarea style="display:none;" id="content"></textarea>
                                </div>
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
                                        <div class="form-group form-group-label">
                                            <label class="floating-label" for="vip">VIP等级</label>
                                            <input class="form-control maxwidth-edit" id="vip" type="text" name="vip">
                                            <p class="form-control-guide"><i class="material-icons">info</i>发送给等于或高于这个等级的用户
                                                0为不分级</p>
                                            <div class="checkbox switch">
                                                <label for="issend">
                                                    <input class="access-hide" id="issend" type="checkbox"
                                                           name="issend"><span class="switch-toggle"></span>是否发送邮件
                                                </label>
                                            </div>
                                        </div>
                                        <button id="submit" type="submit"
                                                class="btn btn-block btn-brand waves-attach waves-light">添加
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </section>
        </div>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="https://cdn.staticfile.org/editor-md/1.5.0/editormd.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    (() => {
        editor = editormd("editormd", {
            path: "https://cdn.jsdelivr.net/npm/editor.md@1.5.0/lib/", // Autoload modules mode, codemirror, marked... dependents libs path
            height: 720,
            saveHTMLToTextarea: true
        });
        /*
        // or
        var editor = editormd({
            id   : "editormd",
            path : "../lib/"
        });
        */
    })();
    window.addEventListener('load', () => {
        function submit(page = -1) {
            if ($$.getElementById('issend').checked) {
                var issend = 1;
            } else {
                var issend = 0;
            }
            if (page === -1) {
                sedPage = 1;
            } else {
                sedPage = page;
            }
            $.ajax({
                type: "POST",
                url: "/admin/announcement",
                dataType: "json",
                data: {
                    content: editor.getHTML(),
                    markdown: $('.editormd-markdown-textarea').val(),
                    vip: $$getValue('vip'),
                    issend,
                    page: sedPage
                },
                success: data => {
                    if (data.ret === 1) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href=top.document.referrer", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    } else if (data.ret === 2) {
                        submit(data.msg);
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${
                        jqXHR.status
                    }`;
                }
            });
        }
        $$.getElementById('submit').addEventListener('click', () => {
            submit();
        });
    });
<?php echo '</script'; ?>
><?php }
}
