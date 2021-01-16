<section>
    <div class="container">
    <h1 class="text-center">List education profile</h1>  
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
        <tr>
            <th>Stt</th>
            <th>Id</th>
            <th>Member_cv_id</th>
            <th>Year_start</th>
            <th>Year_end</th>
            <th>Content</th>
            <th>Manipulation</th>
        </tr>
        </thead>
        
        
        <tbody>
        <?php
        foreach ($education as $key => $value) { 
            ?>
        <tr>
            <td scope="row"><?php echo $key+1;?></td>
            <td><?php echo $value["id"];?></td>
            <td><?php echo $value["member_cv_id"];?></td>
            <td><?php echo $value["year_start"];?></td>
            <td><?php echo $value["year_end"];?></td>
            <td><?php echo $value["content"];?></td>
            <td class="icon_admin">
            <a href="<?php echo URL::to('/'); ?>/edit_banner?id=<?php echo $value['id'];?>" class="fas fa-user-edit"></a> 
                <a href="<?php echo URL::to('/'); ?>/delete_education?id=<?php echo $value['id'] ?>" class="fas fa-trash-alt"
                onclick="return confirm('Are you sure want to delete?')"></a>
                <a href="<?php echo URL::to('/'); ?>/info_education?id=<?php echo $value["id"];?>" class="far fa-question-circle"></a>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
        
    </table>
    </div>
</section>