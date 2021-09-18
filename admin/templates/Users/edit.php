
  <!-- Main content -->
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?= $this->Form->create($user, [
                "id" => "frm-add-branch"
                ]) ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" value="<?= $user->name ?>" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter your name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" value="<?= $user->email ?>" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter your email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" value="<?= $user->phone ?>" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Enter your phone number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" value="<?= $user->password ?>" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
       
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <?= $this->Form->end() ?>
            </div>