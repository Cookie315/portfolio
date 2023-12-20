<?php
/* Smarty version 4.3.4, created on 2023-12-15 00:09:35
  from 'C:\xampp\htdocs\ファイル共有\.php\..\templates\indextable2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657b1aafbe4a94_85473942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8192ba56cbb1c3c0439874f88b0a88d5ebb9734a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ファイル共有\\.php\\..\\templates\\indextable2.tpl',
      1 => 1702566572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657b1aafbe4a94_85473942 (Smarty_Internal_Template $_smarty_tpl) {
?><tr class="table border border-dark">
    <td class="bg-light"style="--bs-bg-opacity: .6; text-align:center"><input type="checkbox"id="checkBox"onchange="change()" style="transform: scale(2.0)"; name="c[]"onclick="func()" value="<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
"></td></form>
    <td class="bg-light"style="--bs-bg-opacity: .6;"><h4 style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['filename2']->value;?>
</h4></td>
    <td class="bg-light"style="--bs-bg-opacity: .6;"><h4 style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</h4></td>
    <td class="bg-light"style="--bs-bg-opacity: .6;"><h4 style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
</h4></td>
    <td class="bg-light"style="--bs-bg-opacity: .6;"><h4 style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h4></td>
    <td class="bg-light"style="--bs-bg-opacity: .6;"><h4 style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</h4></td>           
    <td class="bg-light"style="--bs-bg-opacity: .6; text-align:center"><a class="btn btn-primary rounded-0" href="../file/fileall/<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
" download=<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
>ダウンロード</a></td>   
    <form action="index_onedelete.php"style="text-align:center" method="POST">
        <input type="hidden" name="file" value="<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
">
        <input type="hidden" name="form" value=<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
>
        <input type="hidden" name="filePath" value=<?php echo $_smarty_tpl->tpl_vars['filePath']->value;?>
>
        <input type="hidden" name="sqltable" value=<?php echo $_smarty_tpl->tpl_vars['sqltable']->value;?>
> 
    <td class="bg-light"style="--bs-bg-opacity: .6; text-align:center"><input type="submit" class="btn btn-danger rounded-0" onclick="return confirm('削除しますか？')" value="削除"></form>  
</td>
</tr>    
<?php }
}
