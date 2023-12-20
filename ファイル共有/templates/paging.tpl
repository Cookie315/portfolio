                        </tbody>
                            </table>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <table>
                                        <tr>   
                                        {if $paging == 1}
                                            <td><input type="submit" disabled class="btn btn-m btn-white" value="前へ"></td></td> 
                                            <td><h4>　{$pagenam} ページ目を表示中(全 {$count} 件)　</h4></td>
                                            <td><input type="submit" disabled class="btn btn-m btn-white" value="次へ"></td>
                                        {elseif $paging == 2}
                                            <td><input type="submit" disabled class="btn btn-m btn-white" value="前へ"></td></td> 
                                            <td><h4>　{$pagenam} ページ目を表示中(全 {$count} 件)　</h4></td>           
                                            <td><form action="index_page.php" method="POST">
                                                <input type="hidden" name="sort" value="{$sortnow}">
                                                <input type="hidden" name="sort2" value="{$sortnow2}">
                                                <input type="hidden" name="pass" value="{$pass}">
                                                <input type="hidden" name="form" value="{$form}">
                                                <input type="hidden" name="nam" value="next">
                                                <input type="hidden" name="namb" value="{$pagenow}">
                                                <input type="hidden" name="pgnam" value="{$pagenam}">
                                                <input type="submit"class="btn btn-m btn-dark" value="次へ">
                                            </form></td>
                                        {elseif $paging == 3}
                                            <td><form action="index_page.php" method="POST">
                                                <input type="hidden" name="name" value="{$name}">
                                                <input type="hidden" name="sort" value="{$sortnow}">
                                                <input type="hidden" name="sort2" value="{$sortnow2}">
                                                <input type="hidden" name="id" value="{$id}">
                                                <input type="hidden" name="pass" value="{$pass}">
                                                <input type="hidden" name="nam" value="return">
                                                <input type="hidden" name="namb" value="{$pagenow}">
                                                <input type="hidden" name="pgnam" value="{$pagenam}">
                                                <input type="hidden" name="form" value="{$form}">
                                                <input type="submit"class="btn btn-m btn-dark" value="前へ">
                                            </form>
                                            </td> 
                                            <td><h4>　{$pagenam} ページ目を表示中(全 {$count} 件)　</h4></td>
                                            <td><input type="submit"class="btn btn-m btn-white" disabled value="次へ"></td>
                                        {elseif $paging == 4}
                                             <td>
                                            <form action="index_page.php" method="POST">
                                                <input type="hidden" name="name" value="{$name}">
                                                <input type="hidden" name="sort" value="{$sortnow}">
                                                <input type="hidden" name="sort2" value="{$sortnow2}">
                                                <input type="hidden" name="id" value="{$id}">
                                                <input type="hidden" name="pass" value="{$pass}">
                                                <input type="hidden" name="nam" value="return">
                                                <input type="hidden" name="namb" value="{$pagenow}">
                                                <input type="hidden" name="form" value="{$form}">
                                                <input type="hidden" name="pgnam" value="{$pagenam}">
                                                <input type="submit"class="btn btn-m btn-dark" value="前へ">
                                            </form>
                                            </td> 
                                            <td><h4>　{$pagenam} ページ目を表示中(全 {$count} 件)　</h4></td>
                                            <td><form action="index_page.php"method="POST">
                                                <input type="hidden" name="name" value="{$name}">
                                                <input type="hidden" name="sort" value="{$sortnow}">
                                                <input type="hidden" name="sort2" value="{$sortnow2}">
                                                <input type="hidden" name="id" value="{$id}">
                                                <input type="hidden" name="pass" value="{$pass}">
                                                <input type="hidden" name="form" value="{$form}">
                                                <input type="hidden" name="nam" value="next">
                                                <input type="hidden" name="namb" value="{$pagenow}">
                                                <input type="hidden" name="pgnam" value="{$pagenam}">
                                                <input type="submit"class="btn btn-m btn-dark" value="次へ">
                                            </form></td>
                                        {/if}            
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
<script type="text/javascript" src="../.js/index.js"></script>       
</body>        