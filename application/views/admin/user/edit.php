<div class="container">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
  </div>
  <div class="card" style="width: 50%;">
    <div class="card-body">
      <form method="POST" action="" novalidate>
        <input type="hidden" value="<?= $nilai['id'] ?>" name="id">
        <div class="form-group">
          <div class="mb-2">
            <label for="nama"><b>Nama</b></label>
            <input type="text" class="form-control" name="nama" value="<?= $nilai['nama'] ?>">
          </div>
          <div class="mb-2">
            <label for="email"><b>Email</b></label>
            <input type="email" class="form-control" name="email" value="<?= $nilai['email'] ?>">
          </div>
          <div class="mb-2">
            <label for="alamat"><b>Alamat</b></label>
            <input type="text" class="form-control" name="alamat" value="<?= $nilai['alamat'] ?>">
          </div>
          <div class="mb-2">
            <label for="password"><b>Password</b></label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <div class="mb-2">
            <label for="role_id"><b>role_di</b></label>
            <input type="text" class="form-control" name="role_id" value="<?= $nilai['role_id'] ?>">
          </div>
          <div class="text-center">
            <button type="submit" name="edit" class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
  </div>
</div>