<form class="table" action="index.php?controller=product&action=update&id=<?= $item['ID'];?>" method="post">
    title :<input class="form-control" type="text" name="title" value="<?= $item['title'];?>"> <br>
    price: <input class="form-control" type="text" name="price" value="<?= $item['price'];?>"> <br>
    quantity: <input class="form-control" type="text" name="quantity" value="<?= $item['quantity'];?>"> <br>
    description: <input class="form-control" type="text" name="description" value="<?= $item['description'];?>"> <br>
    <input type="submit" value="sửa">
</form>