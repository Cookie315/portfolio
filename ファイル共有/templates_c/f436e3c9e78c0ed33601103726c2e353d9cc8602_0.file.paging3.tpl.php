<?php
/* Smarty version 4.3.4, created on 2023-12-14 14:36:15
  from 'C:\xampp\htdocs\ファイル共有\.php\..\templates\paging3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657a944fe199c6_48069390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f436e3c9e78c0ed33601103726c2e353d9cc8602' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ファイル共有\\.php\\..\\templates\\paging3.tpl',
      1 => 1701411342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657a944fe199c6_48069390 (Smarty_Internal_Template $_smarty_tpl) {
?>                        </tbody>
                            </table>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <table>
                                        <td>
                                            <form action="index_page.php" method="POST">
                                                <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                                                <input type="hidden" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['sortnow']->value;?>
">
                                                <input type="hidden" name="sort2" value="<?php echo $_smarty_tpl->tpl_vars['sortnow2']->value;?>
">
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                                <input type="hidden" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
">
                                                <input type="hidden" name="nam" value="return">
                                                <input type="hidden" name="namb" value="<?php echo $_smarty_tpl->tpl_vars['pagenow']->value;?>
">
                                                <input type="hidden" name="pgnam" value="<?php echo $_smarty_tpl->tpl_vars['pagenam']->value;?>
">
                                                <input type="hidden" name="form" value="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
">
                                                <input type="submit"class="btn btn-m btn-dark" value="前へ">
                                            </form>
                                            </td> 
                                            <td><h4>　<?php echo $_smarty_tpl->tpl_vars['pagenam']->value;?>
 ページ目を表示中(全 <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 件)　</h4></td>
                                            <td><input type="submit"class="btn btn-m btn-white" disabled value="次へ"></td>     
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>           
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="../.js/index.js"><?php echo '</script'; ?>
>       
</body><?php }
}
