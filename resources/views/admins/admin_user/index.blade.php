<section>
    <div class="container">
    <h1 class="text-center">List user</h1>  
    <div class="table_fix col-md-12">
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
            <tr>
                <th>Stt</th>
                <th>Id</th>
                <th>Username</th>
                <th>Fisrtname</th>
                <th>Lastname</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Manipulation</th>
            </tr>
            </thead>
            
            
            <tbody>
            <?php
            foreach ($users as $key => $value) { 
                ?>
            <tr>
                <td scope="row"><?php echo $key+1;?></td>
                <td><?php echo $value["id"];?></td>
                <td><?php echo $value["username"];?></td>
                <td><?php echo $value["firstname"];?></td>
                <td><?php echo $value["lastname"];?></td>
                <td><?php if($value["gender"]==1){
                        echo "Nam";
                    }else{
                        echo "Nữ";
                    }?></td>
                <td><?php echo $value["email"];?></td>
                <td><?php echo $value["phone"];?></td>
                <td><?php echo $value["address"];?></td>
                <td class="icon_admin">
                    <a href="<?php echo URL::to('/'); ?>/edit_user?id=<?php echo $value['id'];?>" class="fas fa-user-edit"></a>
                    <a href="<?php echo URL::to('/'); ?>/delete_user?id=<?php echo $value['id'] ?>" class="fas fa-trash-alt"
                    onclick="return confirm('Are you sure want to delete?')"></a>
                    <a href="<?php echo URL::to('/'); ?>/info_user?id=<?php echo $value["id"];?>" class="far fa-question-circle"></a>
                </td>
            </tr>
            <?php
            }
            ?>
            </tbody>
            
        </table>
    </div>
    </div>
</section>