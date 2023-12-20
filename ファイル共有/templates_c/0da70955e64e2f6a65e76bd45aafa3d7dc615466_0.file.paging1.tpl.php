<?php
/* Smarty version 4.3.4, created on 2023-12-14 11:42:31
  from 'C:\xampp\htdocs\ファイル共有\.php\..\templates\paging1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657a6b9728ccc4_00756194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0da70955e64e2f6a65e76bd45aafa3d7dc615466' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ファイル共有\\.php\\..\\templates\\paging1.tpl',
      1 => 1701411346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657a6b9728ccc4_00756194 (Smarty_Internal_Template $_smarty_tpl) {
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
                                            <td><input type="submit" disabled class="btn btn-m btn-white" value="次へ"></td>
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
