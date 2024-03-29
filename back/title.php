<div class="container m-5">
	<div class="row">
		<div class="col">
			<p class="t cent botli">網站標題管理</p>
			<form method="post" action="./api/edit.php">
				<table class="table">
					<thead class="table-light">
						<tr>
							<th scope="col">網站標題</th>
							<th scope="col">替代文字</th>
							<th scope="col">顯示</th>
							<th scope="col">刪除</th>
							<th></th>
						</tr>
					</thead>
					<?php
					$rows = $DB->all();
					foreach ($rows as $row) {
					?>
					<tbody>
						<tr>
							<td width="40%">
								<img src="./img/<?= $row['img']; ?>" style="width:300px;height:35px">
							</td>
							<td width="28%">
								<input class="form-control" type="text" name="text[]" style="width:90%" value="<?= $row['text']; ?>">
								<input type="hidden" name="id[]" value="<?= $row['id']; ?>">
							</td>
							<td width="8%">
								<input class="form-check-input" type="radio" name="sh" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
								<!-- 顯示是單選(radio)所以用三元寫如果sh=1在顯示上show checked -->
							</td>
							<td width="8%">
								<input class="form-check-input" type="checkbox" name="del[]" value="<?= $row['id']; ?>">
							</td>
							<td>
								<input class="btn btn-primary" type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do; ?>&id=<?= $row['id']; ?>')" value="更新圖片">
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
							<td width="200px"><input type="button" class="btn btn-primary" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增網站標題圖片"></td>
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