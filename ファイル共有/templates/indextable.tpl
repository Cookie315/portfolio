{if $mode ==only}
<tr class="table">
    <td class="bg-dark text-white"style="--bs-bg-opacity: .5; text-align:center"><input type="checkbox"id="checkBox"onchange="change()" style="transform: scale(2.0)"; name="c[]"onclick="func()" value="{$filename}"></td></form>
    <td class="bg-dark text-white"style="--bs-bg-opacity: .5;"><h4 style="text-align:center">{$filename2}</h4></td>
    <td class="bg-dark text-white"style="--bs-bg-opacity: .5;"><h4 style="text-align:center">{$type}</h4></td>
    <td class="bg-dark text-white"style="--bs-bg-opacity: .5;"><h4 style="text-align:center">{$size}</h4></td>
    <td class="bg-dark text-white"style="--bs-bg-opacity: .5;"><h4 style="text-align:center">{$date}</h4></td>           
    <td class="bg-dark text-white"style="--bs-bg-opacity: .5; text-align:center"><a class="btn btn-primary rounded-0" href="../file/Accounts/{$id}/{$filename}" download={$filename}>ダウンロード</a></td>   
    <form action="index_onedelete.php"style="text-align:center" method="POST">
        <input type="hidden" name="file" value="{$filename}">
        <input type="hidden" name="form" value={$form}>
        <input type="hidden" name="filePath" value={$filePath}>
        <input type="hidden" name="sqltable" value={$sqltable}>   
            <td class="bg-dark  text-white"style="--bs-bg-opacity: .5; text-align:center">
                <input type="submit" class="btn btn-danger rounded-0" onclick="return confirm('削除しますか？')" value="削除"></form>  
            </td>
        </tr>    
{else}
<tr class="table border border-dark">
    <td class="bg-light"style="--bs-bg-opacity: .6; text-align:center"><input type="checkbox"id="checkBox"onchange="change()" style="transform: scale(2.0)"; name="c[]"onclick="func()" value="{$filename}"></td></form>
    <td class="bg-light"style="--bs-bg-opacity: .6;"><h4 style="text-align:center">{$filename2}</h4></td>
    <td class="bg-light"style="--bs-bg-opacity: .6;"><h4 style="text-align:center">{$type}</h4></td>
    <td class="bg-light"style="--bs-bg-opacity: .6;"><h4 style="text-align:center">{$size}</h4></td>
    <td class="bg-light"style="--bs-bg-opacity: .6;"><h4 style="text-align:center">{$username}</h4></td>
    <td class="bg-light"style="--bs-bg-opacity: .6;"><h4 style="text-align:center">{$date}</h4></td>           
    <td class="bg-light"style="--bs-bg-opacity: .6; text-align:center"><a class="btn btn-primary rounded-0" href="../file/fileall/{$filename}" download={$filename}>ダウンロード</a></td>   
    <form action="index_onedelete.php"style="text-align:center" method="POST">
        <input type="hidden" name="file" value="{$filename}">
        <input type="hidden" name="form" value={$form}>
        <input type="hidden" name="filePath" value={$filePath}>
        <input type="hidden" name="sqltable" value={$sqltable}> 
    <td class="bg-light"style="--bs-bg-opacity: .6; text-align:center"><input type="submit" class="btn btn-danger rounded-0" onclick="return confirm('削除しますか？')" value="削除"></form>  
</td>
</tr>    
{/if}