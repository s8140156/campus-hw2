<h3 class="text-center mt-3">新增班版文字</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
	<table class="col-8 m-auto">

		<tr>
			<!-- <td>動態文字廣告</td> -->
			<td>
				<div class="input-group mb-3">
					<span class="input-group-text" id="inputGroup-sizing-default">班版文字</span>
					<input type="text" name="text" id="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
				</div>
			</td>
		</tr>
	</table>
	<div class="text-center">
		<input type="hidden" name="table" value="<?= $_GET['table']; ?>">
		<!-- 使用get or post差異？ -->
		<input type="submit" class="btn btn-primary me-3" value="新增">
		<input type="reset" class="btn btn-warning" value="重置">

	</div>
</form>

