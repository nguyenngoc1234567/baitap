<a class="btn btn-info" href="index.php?controller=blogs&action=create">thêm mới</a>
<table border="1" class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>title </th>
            <th>description </th>
            <th>action </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $key => $row) : ?>
            <tr>
                <td><?= $row['ID']; ?></td>
                <td><?= $row['title']; ?></td>
                <td><?= $row['description']; ?></td>
                <td>
                    <a class="btn btn-warning" href="index.php?controller=blogs&action=edit&id=<?= $row['ID']; ?>">Sửa</a> |
                    <a class="btn btn-danger" href="index.php?controller=blogs&action=destroy&id=<?= $row['ID']; ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>