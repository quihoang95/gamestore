<!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    <div class="card">
              <div class="card-header">
                <a href="<?= $this->Url->build('/users/add', ['fullBase' => true]) ?>" class="btn btn-primary float-right">Add</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Email(s)</th>
                    <th>Phone number</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  foreach ($users as $key => $user) {?>     
                  <tr>
                    <td><?= $key+1 ?></td>
                    <td><?= $user->name?></td>
                    <td><?= $user->email?></td>
                    <td><?= $user->phone?></td>
                    <td> 
                    <!-- <form id="frm-delete-student-<?= $user->id ?>" action="<?= $this->Url->build('/users/delete/' . $user->id, ['fullBase' => false]) ?>" method="post"><input type="hidden" value="<?= $user->id ?>" name="id" /></form> -->
                      <a href="<?= $this->Url->build('/users/edit/' . $user->id, ['fullBase' => true]) ?>" class="btn btn-warning">Edit</a>
                      <!-- <a href="javascript:void(0)" onclick="if(confirm('Are you sure want to delete ?')){ $('#frm-delete-student-<?= $user->id ?>').submit() }" class="btn btn-danger">Delete</a> -->
                    </td>
                  </tr>
                  <?php 
                             
                      }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
    </div>
    </div>
    <!-- /.container-fluid -->
  </section>