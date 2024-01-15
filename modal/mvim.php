<div class="container">
	<div class="row">
		<div class="col">
			<h3 class="text-center mt-3">新增動畫圖片</h3>
			<hr>
			<form action="./api/add.php" method="post" enctype="multipart/form-data">
				<table class="col-8 m-auto">
					<tr>
						<td>動畫圖片</td>
						<td>
							<div class="input-grounp mb-3">
								<input class="form-control" type="file" name="img" id="formFile">
							</div>
						</td>
					</tr>
				</table>
				<div class="text-center">
					<input type="hidden" name="table" value="<?= $_GET['table']; ?>">
					<!-- 由於$do是使用include方式載入(back/titile include至back.php)(直接server端作業沒有client端請求) -->
					<!-- 所以這邊不能使用$do 要用$_GET傳值方式利用hidden input 設name=table -->
					<input  type="submit" class="btn btn-primary m-3" value="新增">
					<input type="reset" class="btn btn-danger" value="重置">
				</div>
			</form>
		</div>
	</div>
</div>