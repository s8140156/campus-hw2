<div class="container">
    <div class="row">
        <div class="col">
<h3 class="text-center mt-3">新增主選單</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
<table class="col-8 m-auto">
    <tr>
        <td>主選單名稱:</td>
        <td><input class="form-control" type="text" name="text" id=""></td>
    </tr>
    <tr>
        <td>選單連結網址:</td>
        <td><input class="form-control" type="text" name="href" id=""></td>
    </tr>

</table>
<div>
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    <input type="submit" class="btn btn-primary me-3" value="新增">
    <input type="reset" class="btn btn-danger" value="重置">
</div>

</form>
</div>
</div>
</div>