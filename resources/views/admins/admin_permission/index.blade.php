<section>
    <div class="container">
    <h1 class="text-center">List banner</h1>  
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
        <tr>
            <th>Stt</th>
            <th>Permission</th>
            <!-- <th>Manipulation</th> -->
        </tr>
        </thead>
        
        
        <tbody>
        <?php
        foreach ($permission as $key => $value) { 
            ?>
        <tr>
            <td><?php echo $key+1;?></td>
            <td class='permission_admin'><?php echo $value["content"];?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
        
    </table>
    </div>
</section>