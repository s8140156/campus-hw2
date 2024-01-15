<div class="container">
	<div class="row">
		<div class="col">
			<h3 class="text-center mt-3">新增小工具文字組</h3>
			<hr>
			<form action="./api/add.php" method="post" enctype="multipart/form-data">
				<table class="col-8 m-auto">
					<tr>
					<td>標題</td>
						<td><input class="form-control" type="text" name="title" id="">
					</td>
					<td>網址</td>
						<td><input class="form-control" type="text" name="href" id="">
					</td>
					<td>Icon Style</td>
						<td><input class="form-control" type="text" name="fontawesome" id="">
					</td>
					<td>內心話</td>
						<td><input class="form-control" type="text" name="text" id="">
					</td>
						<td>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">動態文字廣告</span>
								<input type="text" name="text" id="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
							</div>
						</td>
					</tr>
				</table>
				<div class="text-center">
					<input type="hidden" name="table" value="<?= $_GET['table']; ?>">
					<!-- 使用get or post差異？ -->
					<input type="submit" class="btn btn-primary me-3" value="新增">
					<input type="reset" class="btn btn-danger" value="重置">
				</div>
			</form>
		</div>
	</div>
</div>