<?php
// 含刪除及title(只有單筆)及其他頁面(多筆)的顯示修改
// ad.php傳過來的
include_once "db.php";

$table=$_POST['table'];
$DB=${ucfirst($table)};
unset($_POST['table']);

// if(isset($_POST['id'])){
// 	foreach($_POST['id'] as $id){
// 		$_POST['text'][$id]='';
// 		// 這邊是說 如果post[id]有值的話, 將post[id]陣列提取id=>並轉換成post[text][id]格式
// 	}
// }

foreach($_POST['id'] as $key => $id){
	if(isset($_POST['del']) && in_array($id,$_POST['del'])){
		$DB->del($id);
	}else{
        $row=$DB->find($id);
        if(isset($row['text'])){
            $row['text']=$_POST['text'][$key];
        }
        switch($table){
            case "title":
                $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
            break;
            case "slogan":
                $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
            break;
            case "admin":
                $row['acc']=$_POST['acc'][$key];
                $row['pw']=$_POST['pw'][$key];
            break;
            case "tool":
				$row['href']=$_POST['href'][$key];
				$row['title']=$_POST['title'][$key];
				$row['fontawesome']=$_POST['fontawesome'][$key];
				$row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
				// 因為switchcase run到case:menu 執行href後其實就停止了(會run不到default), 因munu還有sh欄位 所以要把這個般上來 
            break;
            default:
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        }

        $DB->save($row);
    }
}

to("../back.php?do=$table");



?>