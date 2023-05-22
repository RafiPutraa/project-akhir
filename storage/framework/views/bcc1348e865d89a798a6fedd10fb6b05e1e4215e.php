
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel"  aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addUserModalLabel">Add User Data</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <form action="#" method="POST" id="add_user_form" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="modal-body">
              <div class="profile-pic mb-4">
                  <label class="-label" for="file-add-user">
                    <span class="glyphicon glyphicon-camera"></span>
                    <span>Ganti Gambar</span>
                  </label>
                  <input id="file-add-user" type="file" name="imgUpload" class="upload-img add" accept=".jpeg,.png,.jpg,.svg" />
                  <img src="<?php echo e(asset('/storage/images/profile-images/users/user.png')); ?>" class="shadow" id="output-img" width="200" alt="profile_img"/>
              </div>
              <div class="form-group mb-3">
                  <input type="text" required class="name form-control" id="name" name="name" autocomplete="off" placeholder="Nama Lengkap">
              </div>
              <div class="form-group mb-3">
                  <input type="text" required class="email form-control" id="email" name="email" autocomplete="off" placeholder="Email">
              </div>
              <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password" name="confirm_password">
                    </div>
                  </div>
                </div>
          </div>
          <div class="modal-footer">
              <button type="reset" class="btn btn-secondary">Reset</button>
              <button type="submit" class="btn btn-primary btn-add-data">Create</button>
          </div>
        </form>
      </div>
  </div>
</div>


<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel"  aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
              </button>
          </div>
          <form action="#" method="POST" id="edit_user_form" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" id="id" value="">
            <div class="modal-body">
              <div class="profile-pic mb-4">
                  <label class="-label" for="file-edit-user">
                    <span class="glyphicon glyphicon-camera"></span>
                    <span>Ganti Gambar</span>
                  </label>
                  <input id="file-edit-user" type="file" name="imgUpload" class="upload-img edit" accept=".jpeg,.png,.jpg,.svg" />
                  <img src="" class="shadow" id="output-img" width="200" alt="profile_img"/>
              </div>
              <div class="form-group mb-3">
                  <label for="name">Fullname</label>
                  <input type="text" required class="name form-control" id="name" name="name" autocomplete="off">
              </div>
              <div class="form-group mb-3">
                  <label for="email">Email</label>
                  <input type="text" required class="email form-control" id="email" name="email" autocomplete="off">
              </div>
              <div class="form-group mb-3">
                  <label for="password">New Password</label>
                  <input type="password" class="password form-control" id="password" name="password" autocomplete="off">
              </div>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-secondary">Reset</button>
              <button type="submit" class="btn btn-primary btn-update-user">Update</button>
            </div>
          </form>
      </div>
  </div>
</div>

<?php /**PATH C:\laragon\www\bycom\resources\views/admin/users/_modal.blade.php ENDPATH**/ ?>