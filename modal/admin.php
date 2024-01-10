<style>
	.btn-warning {
		background-color: pink !important;
	}
</style>
<h3 class="text-center mt-3">新增管理者帳號</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
	<table class="col-8 m-auto">

		<tr>
			<td>帳號</td>
			<td><input type="text" name="acc" id=""></td>
		</tr>
		<tr>
			<td>密碼</td>
			<td><input type="password" name="pw" id=""></td>
		</tr>
		<tr>
			<td>確認密碼</td>
			<td><input type="password" name="pw2" id=""></td>
		</tr>
	</table>
	<div class="text-center">
		<input type="hidden" name="table" value="<?= $_GET['table']; ?>">
		<!-- 使用get or post差異？ -->
		<input type="submit" class="btn btn-primary me-3" value="新增">
		<input type="reset" class="btn btn-warning" value="重置">
	
	</div>
</form>