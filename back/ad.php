<style>
	.btn-danger {
		background-color: pink !important;
		color:black!important;
	}
</style>

<div class="container m-5">
	<div class="row">
		<div class="col">
			<p class="t cent botli">動態文字廣告管理</p>
			<form method="post" action="./api/edit.php">
				<table class="table table-bodered text-center mt-1">
					<tbody>
						<tr class="yel">
		
							<td width="80%">動態文字廣告</td>
							<td width="10%">顯示</td>
							<td width="10%">刪除</td>
							<td></td>
						</tr>
						<?php
						$rows = $DB->all();
						foreach ($rows as $row) {
		
						?>
							<tr>
								<td width="23%">
									<input type="text" name="text[]" style="width:90%" value="<?= $row['text']; ?>">
									<input type="hidden" name="id[]" value="<?= $row['id']; ?>">
								</td>
								<td width="7%">
									<input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
								</td>
								<td width="7%">
									<input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
								</td>
		
							</tr>
		
						<?php
						}
						?>
					</tbody>
				</table>
				<table class="table table-bodered text-center">
					<tbody>
						<tr>
							<input type="hidden" name="table" value="<?= $do; ?>">
							<!-- 可是為什麼要給變數？ -->
							<td width="200px"><input type="button" class="btn btn-primary" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,'./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增動態文字廣告"></td>
							<td class="cent"><input type="submit" class="btn btn-success me-3" value="修改確定"><input type="reset" class="btn btn-danger" value="重置"></td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>

