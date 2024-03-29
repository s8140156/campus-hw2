
<div class="container m-5">
	<div class="row">
		<div class="col">
	<p class="t cent botli">動畫圖片管理</p>
	<form method="post" action="./api/edit.php">
		<table class="table">
			<thead class="table-light">
				<tr>
					<th scope="col">動畫圖片</th>
					<th scope="col">顯示</th>
					<th scope="col">刪除</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$rows = $DB->all();
				foreach ($rows as $row) {
				?>
					<tr>
						<td>
							<img src="./img/<?= $row['img']; ?>" style="width:150px;height:100px">
							<!-- 注意圖片的呈現的寬高3:4 or 3:5 -->
						</td>
						<input type="hidden" name="id[]" value="<?=$row['id'];?>">
						<!-- 增加hidden name=id[] -->

						<td>
							<input class="form-check-input" type="checkbox" name="sh[]" value="<?=$row['id'];?>"<?=($row['sh']==1)?'checked':'';?>>
							<!--  這邊可顯示多筆 改checkbox 並name=sh[]是陣列 -->
						</td>
						<td>
							<input class="form-check-input" type="checkbox" name="del[]" value="<?=$row['id'];?>">
						</td>
						<td>
						<input class="btn btn-primary" type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?=$do;?>&id=<?=$row['id'];?>')" value="更換動畫">
						</td>
					</tr>

				<?php
				}
				?>
			</tbody>
		</table>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<input type="hidden" name="table" value="<?= $do; ?>">
					<td width="200px"><input type="button" class="btn btn-primary" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增動畫圖片"></td>
					<!-- 因為title.php已include在back.php底下 要以back位置來看檔案存放路徑 這邊是在說我要新增圖片的地方是modal底下的$do(依傳值)程式 -->
					<!-- 然後後面在帶?table＝$do(自訂參數)給modal **這邊主要是創造增加變數資訊給modal/title -->
					<!-- 一是可以使用共同名稱簡化重複程序(可combime成一個程式執行 依傳過來不同變數即可) -->
					<!-- 一是這是網頁間的傳值 無法使用$do 所以要創造變數傳遞對應的資訊 -->

					<td class="cent"><input type="submit" class="btn btn-success me-3" value="修改確定"><input type="reset" class="btn btn-danger" value="重置"></td>
				</tr>
			</tbody>
		</table>

	</form>
	</div>
	</div>
</div>