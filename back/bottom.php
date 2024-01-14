<div class="container m-5">
	<div class="row">
		<div class="col">
			<p class="t cent botli">頁尾版權資料管理</p>
			<form method="post" action="./api/edit_info.php">
				<table class="table">
					<thead class="table-light">
						<tr>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">頁尾版權資料</span>
								<input class="form-control" type="text" name="bottom" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?= $Bottom->find(1)['bottom']; ?>">
								<input type="hidden" name="table" value="<?= $do; ?>">
							</div>
							<!-- <th></th> -->
						</tr>
					</thead>
				</table>
				<table style="margin-top:40px; width:70%;">
					<tbody>
						<tr>
							<td width="200px"></td>
							<td class="cent"><input type="submit" class="btn btn-success me-3" value="修改確定"><input type="reset" class="btn btn-danger" value="重置"></td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>