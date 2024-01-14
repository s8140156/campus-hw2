<div class="container m-5">
	<div class="container">
		<div class="row">
	<p class="t cent botli">進站總人數管理</p>
	<form method="post" action="./api/edit_info.php">
		<table class="table">
			<thead class="table-light">
					<tr>
					<div class="input-group mb-3">
					<span class="input-group-text" id="inputGroup-sizing-default">進站總人數</span>
					<input class="form-control" type="number" name="total" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?= $Total->find(1)['total']; ?>">
					<input type="hidden" name="table" value="<?= $do; ?>">
					<!-- <input type="text" name="text" id="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> -->
				</div>
						<th></th>
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