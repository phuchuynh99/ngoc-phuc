<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Contact</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contact</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-default">
          Thêm liên hệ
        </button>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Lời nhắn</th>
                    <th scope="col">Ngày gửi</th>
                    <th scope="col">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($contactlist as $contact):
                      extract($contact);
                      $edit = "<a href='index.php?page=contactUpdateForm&id=" . $id . "'>Sửa</a>";
                      $del = "<a href='index.php?page=delcontact&id=" . $id . "'>Xóa</a>";
                    ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['message']; ?></td>
                        <td><?php echo $user['create_at']; ?></td>
                        <td><?php echo $edit . ' - ' . $del; ?></td>
                      </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Modal for adding new contact -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Thêm liên hệ mới</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="index.php?page=addcontact" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="col-form-label">Tên liên hệ:</label>
            <input type="text" class="form-control" name="name" placeholder="Tên liên hệ" required>
          </div>
          <div class="mb-3">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="col-form-label">Số điện thoại:</label>
            <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" required>
          </div>
          <div class="mb-3">
            <div class="form-group">
              <label for="role" class="col-form-label">Chức vụ:</label>
              <select class="form-control select2" name="role">
                <option value="user">User</option>
                <option value="admin">Admin</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="submit" name="btnadd" class="btn btn-primary">Thêm liên hệ</button>
        </div>
      </form>
    </div>
  </div>
</div>
