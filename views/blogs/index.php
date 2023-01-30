<a href="index.php?controller=blogs&action=create">thêm mới</a>
<table border="1">
    <thead>
        <tr>
        <th>ID</th>
            <th>title </th>
            <th>description </th>
            <th>action </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $items as $key => $row ): ?>
        <tr>
        <td><?= $row['ID']; ?></td>
        <td><?= $row['title']; ?></td>
        <td><?= $row['description']; ?></td>
        <td>
                <a href="index.php?controller=blogs&action=edit&id=<?= $row['ID'] ;?>">Sửa</a> |
                <a href="index.php?controller=blogs&action=destroy&id=<?= $row['ID'] ;?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>