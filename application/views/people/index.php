<div class="container">
   <div class="row">
      <div class="col-md-10">
         <h3>List of People</h3>
         <table class="table">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach ($peoples as $people) : ?>
                  <tr>
                     <th><?= $people['id']; ?></th>
                     <td><?= $people['name']; ?></td>
                     <td><?= $people['email']; ?></td>
                     <td>
                        <a href="" class="badge badge-warning">detail</a>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Hapus</a>
                     </td>
                  </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>