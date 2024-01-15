<div class="container">
	<div class="row">
		<div class="col">
<h3 class="text-center mt-3">新增最新消息資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
	<table class="col-8 m-auto">

		<tr>
			<td>最新消息資料</td>
			<td>
				<textarea class="form-control" type="text" name="text" style="width:300px;height:150px"></textarea>


			</td>
		</tr>
	</table>
	<div class="text-center">
		<input type="hidden" name="table" value="<?= $_GET['table']; ?>">
		<!-- 使用get or post差異？ -->
		<input type="submit" class="btn btn-primary m-3" value="新增">
		<input type="reset" class="btn btn-danger" value="重置">

	</div>
</form>
</div>
</div>
</div>