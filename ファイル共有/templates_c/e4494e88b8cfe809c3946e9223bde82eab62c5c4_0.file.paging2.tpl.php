<?php
/* Smarty version 4.3.4, created on 2023-12-14 14:35:57
  from 'C:\xampp\htdocs\ファイル共有\.php\..\templates\paging2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657a943d7a22f1_82721575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4494e88b8cfe809c3946e9223bde82eab62c5c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ファイル共有\\.php\\..\\templates\\paging2.tpl',
      1 => 1701411344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657a943d7a22f1_82721575 (Smarty_Internal_Template $_smarty_tpl) {
?>                        </tbody>
                            </table>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <table>
                                        <tr>   
                                            <td><input type="submit" disabled class="btn btn-m btn-white" value="前へ"></td></td> 
                                            <td><h4>　<?php echo $_smarty_tpl->tpl_vars['pagenam']->value;?>
 ページ目を表示中(全 <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 件)　</h4></td>           
                                            <td><form action="index_page.php" method="POST">
                                                <input type="hidden" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['sortnow']->value;?>
">
                                                <input type="hidden" name="sort2" value="<?php echo $_smarty_tpl->tpl_vars['sortnow2']->value;?>
">
                                                <input type="hidden" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
">
                                                <input type="hidden" name="form" value="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
">
                                                <input type="hidden" name="nam" value="next">
                                                <input type="hidden" name="namb" value="<?php echo $_smarty_tpl->tpl_vars['pagenow']->value;?>
">
                                                <input type="hidden" name="pgnam" value="<?php echo $_smarty_tpl->tpl_vars['pagenam']->value;?>
">
                                                <input type="submit"class="btn btn-m btn-dark" value="次へ">
                                            </form></td>
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
