<form action="index.php?controller=blogs&action=update&id=<?= $item['ID'];?>" method="post">
    title :<input type="text" name="title" value="<?= $item['title'];?>"> <br>
    description: <input type="text" name="description" value="<?= $item['description'];?>"> <br>
    <input type="submit" value="sửa">
</form>