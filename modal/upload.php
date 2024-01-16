<div class="container">
    <div class="row">
        <div class="col">
            <?php
            switch ($_GET['table']) {
                case "title":
                    echo "<h3 class='text-center mt-3'>更新網站標題圖片</h3>";
                    break;
                case 'mvim':
                    echo "<h3 class='text-center mt-3'>更換動畫圖片</h3>";
                    break;
                case 'image':
                    echo "<h3 class='text-center mt-3'>更新校園映像圖片</h3>";
                    break;
            }
            ?>

            <hr>
            <form action="./api/update.php" method="post" enctype="multipart/form-data">
                <table class="col-8 m-auto">
                    <tr>
                        <?php
                        switch ($_GET['table']) {
                            case "title":
                                echo "<td>標題區圖片</td>";
                                break;
                            case 'mvim':
                                echo "<td>動畫圖片</td>";
                                break;
                            case 'image':
                                echo "<td>校園映像圖片</td>";
                                break;
                        }
                        ?>

                        <td>
                            <div class="input-grounp mb-3">
                                <input class="form-control" type="file" name="img" id="formFile">
                            </div>
                            <!-- <input type="file" name="img" id=""></td> -->
                    </tr>
                </table>
                <div class="text-center">
                    <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
                    <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                    <input type="submit" class="btn btn-success m-3" value="更新">
                    <input type="reset" class="btn btn-danger" value="重置">
                </div>

            </form>
        </div>
    </div>
</div>