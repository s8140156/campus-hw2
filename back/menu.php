<div class="container m-5">
    <div class="row">
        <div class="col">
    <p class="t cent botli">選單管理</p>
    <form method="post" action="./api/edit.php">
        <table class="table">
            <thead class="table-light">
                <tr class="table-light">
                    <th width="30%">主選單名稱</th>
                    <th width="30%">選單連結網址</th>
                    <th width="10%">次選單數</th>
                    <th width="10%">顯示</th>
                    <th width="10%">刪除</th>
                    <th></th>
                </tr>
            </thead>
            <?php

$rows=$DB->all(['menu_id'=>0]);
// 要顯示的是主選單（id=0)而已, 不然畫面呈現次選單也會顯現
foreach($rows as $row){
    ?>
                    <tbody>
                <tr>
                    <td>
                        <input class="form-control" type="text" name="text[]" value="<?=$row['text'];?>">
                    </td>
                    <td>
                        <input class="form-control" type="text" name="href[]" value="<?=$row['href'];?>">
                    </td>
                    <td><?=$Menu->count(['menu_id'=>$row['id']]);?></td>
                    <!-- 增加次選單數 -->
                    <td>
                        <input class="form-check-input" type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>
                    </td>
                    <td>
                        <input class="form-check-input" type="checkbox" name="del[]" value="<?=$row['id'];?>">
                    </td>
                    <td>
                        <input class="btn btn-warning" type="button" value="編輯次選單"  onclick="op('#cover','#cvr','./modal/submenu.php?table=<?=$do;?>&id=<?=$row['id'];?>')">
                    </td>
                </tr>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>" >
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <td width="200px"><input class="btn btn-primary" type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增主選單"></td>
                    <td class="cent"><input type="submit" class="btn btn-success me-3" value="修改確定"><input type="reset" class="btn btn-danger" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
    </div>
    </div>
</div>