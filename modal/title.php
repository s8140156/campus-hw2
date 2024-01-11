<h3 class="text-center mt-3">新增網站標題圖片</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
	<table class="col-8 m-auto">
		<tr>
			<td>標題區圖片</td>
			<td>
				<div class="input-grounp mb-3">
					<input class="form-control" type="file" name="img" id="formFile">
				</div>
				<!-- <input type="file" name="img" id=""> -->
			</td>
		</tr>
		<tr>
			<td>標題區替代文字</td>
			<td><input class="form-control" type="text" name="text" id=""></td>
		</tr>
	</table>
	<div class="text-center">
		<input type="hidden" name="table" value="<?= $_GET['table']; ?>">
		<!-- 由於$do是使用include方式載入(back/titile include至back.php)(直接server端作業沒有client端請求) -->
		<!-- 所以這邊不能使用$do 要用$_GET傳值方式利用hidden input 設name=table -->
		<input type="submit" class="btn btn-primary m-3" value="新增">
		<input type="reset" class="btn btn-warning" value="重置">

	</div>
</form>