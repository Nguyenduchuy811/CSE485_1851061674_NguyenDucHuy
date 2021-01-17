<section>
    <div class="container">
    <h1 class="text-center">List profile content</h1>  
    <div class='table_design'>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
            <tr>
                <th>Stt</th>
                <th>Member id</th>
                <th>Content</th>
                <th>Manipulation</th>
            </tr>
            </thead>
            
            
            <tbody>
            <?php
            foreach ($profile_content as $key => $value) { 
                ?>
            <tr>
                <td scope="row"><?php echo $key+1;?></td>
                <td><?php echo $value['first_name'] . ' ' . $value['last_name'] . ' - '. $value['email']?></td>
                <td class="size_app"><?php echo $value["content"];?></td>
                <td class="icon_admin">
                <a href="<?php echo URL::to('/'); ?>/edit_profile_content?id=<?php echo $value['id'];?>" class="fas fa-user-edit"></a> 
                <a href="<?php echo URL::to('/'); ?>/delete_profile_content?id=<?php echo $value['id'] ?>" class="fas fa-trash-alt"
                    onclick="return confirm('Are you sure want to delete?')"></a>
                    <a href="<?php echo URL::to('/'); ?>/info_profile_content?id=<?php echo $value["id"];?>" class="far fa-question-circle"></a>
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