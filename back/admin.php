<div class="container m-5">
	<div class="row">
		<div class="col">
			<p class="t cent botli">管理者帳號管理</p>
			<form method="post" action="./api/edit.php">
				<table class="table">
					<thead class="table-light">
						<tr>
							<th scope="col">帳號</th>
							<th scope="col">密碼</th>
							<th scope="col">刪除</th>
							<!-- <th></th> -->
						</tr>
					</thead>
					<?php
					$rows = $DB->all();
					foreach ($rows as $row) {
					?>
						<tbody>
							<tr>
								<td width="23%">
									<input class="form-control" type="text" name="acc[]" style="width:90%" value="<?= $row['acc']; ?>">
								</td>
								<td width="7%">
									<input class="form-control" type="password" name="pw[]" value="<?= $row['pw']; ?>">
								</td>
								<td width="7%">
									<input class="form-check-input" type="checkbox" name="del[]" value="<?= $row['id']; ?>">
								</td>
							</tr>
							<input type="hidden" name="id[]" value="<?= $row['id']; ?>">
					<?php
					}
					?>
						</tbody>
				</table>
				<table style="margin-top:40px; width:70%;">
					<tbody>
						<tr>
							<input type="hidden" name="table" value="<?= $do; ?>">
							<td width="200px"><input type="button" class="btn btn-primary" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,'./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增管理者帳號"></td>
							<td class="cent"><input type="submit" class="btn btn-success me-3" value="修改確定"><input type="reset" class="btn btn-danger" value="重置"></td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>