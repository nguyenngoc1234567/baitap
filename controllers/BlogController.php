<?php
include_once 'models/Blog.php';
class BlogController extends Controller
{
    // goi thoi trang danh sach
    public function index()
    {
        // goi model
        
        $objBlog = new Blog();
        // Model thao tac voi CSDL, tra ve controller
        $items = $objBlog->all();

        include_once 'views/blogs/index.php';
    }
    // Goi toi trang them moi
    public function create()
    {
        // Goi view
        include_once 'views/blogs/create.php';
    }
    // Xu ly them moi
    public function store()
    {
        $data = [
            'title' => $_REQUEST['title'],
            'description' => $_REQUEST['description']
        ];
        // Gọi model
        $objBlog = new Blog();
        $objBlog->save($data);

        // Chuyển hướng về trang danh sách
        $this->redirect('index.php?controller=blogs&action=index');
    }
    public function edit()
    {
        $id = $_REQUEST['id'];
        // Gọi model
        $objBlog = new Blog();
        $item = $objBlog->find($id);
        // truyen xuong view
        include_once 'views/blogs/edit.php';
    }
    public function update()
    {
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();

        $id = $_REQUEST['id'];
        // Lấy dữ liệu từ _REQUEST gán vào mảng data
        $data = [
            'id' => $_REQUEST['id'],
            'title' => $_REQUEST['title'],
            'description' => $_REQUEST['description']
        ];
        // Gọi model
        $objBlog = new Blog();
        $objBlog->update($id, $data);

        // Chuyển hướng về trang danh sách
        $this->redirect('index.php?controller=blogs&action=index');
        die();
    }
    public function destroy()
    {
        $id = $_REQUEST['id'];
        // Gọi model
        $objBlog = new Blog();
        $objBlog->delete($id);

        // Chuyển hướng về trang danh sách
        header("Location: index.php?controller=blogs&action=index ");
        die();
    }
}
