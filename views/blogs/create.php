<!-- <form action="index.php?controller=blogs&action=store" method="post">
title :<input type="text" name="title"> <br>
    description: <input type="text" name="description" > <br>
    <input type="submit" value="Them">
</form> -->

<form action="index.php?controller=blogs&action=store" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">description</label>
    <input type="text" class="form-control" name="description" placeholder="Enter description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>