<a href="index.php?controller=product&action=create">thêm mới</a>
<table border="1">
    <thead>
        <tr>
        <th>id</th>
            <th>title </th>
            <th>price </th>
            <th>quantity </th>
            <th>description </th>
            <th>action </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $items as $key => $row ): ?>
        <tr>
        <td><?= $row['ID']; ?></td>
        <td><?= $row['title']; ?></td>
        <td><?= $row['price']; ?></td>
        <td><?= $row['quantity']; ?></td>
        <td><?= $row['description']; ?></td>
        <td>
                <a href="index.php?controller=product&action=edit&id=<?= $row['ID'] ;?>">Sửa</a> |
                <a href="index.php?controller=product&action=destroy&id=<?= $row['ID'] ;?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>