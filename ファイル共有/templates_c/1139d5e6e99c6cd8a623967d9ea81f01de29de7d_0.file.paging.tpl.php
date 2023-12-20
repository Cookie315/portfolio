<?php
/* Smarty version 4.3.4, created on 2023-12-15 23:04:56
  from 'C:\xampp\htdocs\ファイル共有\.php\..\templates\paging.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657c5d08c56069_71525900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1139d5e6e99c6cd8a623967d9ea81f01de29de7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ファイル共有\\.php\\..\\templates\\paging.tpl',
      1 => 1702649035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657c5d08c56069_71525900 (Smarty_Internal_Template $_smarty_tpl) {
?>                        </tbody>
                            </table>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <table>
                                        <tr>   
                                        <?php if ($_smarty_tpl->tpl_vars['paging']->value == 1) {?>
                                            <td><input type="submit" disabled class="btn btn-m btn-white" value="前へ"></td></td> 
                                            <td><h4>　<?php echo $_smarty_tpl->tpl_vars['pagenam']->value;?>
 ページ目を表示中(全 <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 件)　</h4></td>
                                            <td><input type="submit" disabled class="btn btn-m btn-white" value="次へ"></td>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['paging']->value == 2) {?>
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
                                        <?php } elseif ($_smarty_tpl->tpl_vars['paging']->value == 3) {?>
                                            <td><form action="index_page.php" method="POST">
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
                                        <?php } elseif ($_smarty_tpl->tpl_vars['paging']->value == 4) {?>
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
                                                <input type="hidden" name="form" value="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
">
                                                <input type="hidden" name="pgnam" value="<?php echo $_smarty_tpl->tpl_vars['pagenam']->value;?>
">
                                                <input type="submit"class="btn btn-m btn-dark" value="前へ">
                                            </form>
                                            </td> 
                                            <td><h4>　<?php echo $_smarty_tpl->tpl_vars['pagenam']->value;?>
 ページ目を表示中(全 <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 件)　</h4></td>
                                            <td><form action="index_page.php"method="POST">
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
                                                <input type="hidden" name="form" value="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
">
                                                <input type="hidden" name="nam" value="next">
                                                <input type="hidden" name="namb" value="<?php echo $_smarty_tpl->tpl_vars['pagenow']->value;?>
">
                                                <input type="hidden" name="pgnam" value="<?php echo $_smarty_tpl->tpl_vars['pagenam']->value;?>
">
                                                <input type="submit"class="btn btn-m btn-dark" value="次へ">
                                            </form></td>
                                        <?php }?>            
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
</body>        <?php }
}
