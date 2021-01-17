<section>
     <h1 class="text-center">Edit profile content</h1>  
    <form action="<?php echo URL::to('/edit_profile_content_action'); ?>" method="post">
        @csrf
        <input type="hidden"
            name="id" id="id" aria-describedby="helpId" placeholder="John" value="<?php echo $profile_content[0]['id']?>">
        <div class="form-group">
          <label for="member_cv_id">Member</label>
          <select class="form-control" name="member_cv_id" id="member_cv_id" disabled>
            <?php
              foreach ($profile_content as $key => $valuect) {
            ?>
                <option value="<?php echo $valuect['id']?>" selected><?php echo $valuect['first_name'] . ' ' . $valuect['last_name'] . ' - '. $valuect['email']?></option>
            <?php
              }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" name="content" id="content" rows="10" placeholder="content here" required><?php echo $profile_content[0]['content']?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>