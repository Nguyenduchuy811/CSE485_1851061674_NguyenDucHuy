<section>
     <h1 class="text-center">Information profile content</h1>  
    <form>
        @csrf
        <div class="form-group">
          <label for="member_cv_id">Member</label>
          <select class="form-control" name="member_cv_id" id="member_cv_id" disabled>
            <?php
              foreach ($profile_content as $key => $valuect) {
            ?>
                <option value="<?php echo $valuect['member_cv_id']?>" selected><?php echo $valuect['first_name'] . ' ' . $valuect['last_name'] . ' - '. $valuect['email']?></option>
            <?php
              }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" name="content" id="content" rows="10" placeholder="content here" disabled><?php echo str_replace('<br />','',$profile_content[0]['content'])?></textarea>
        </div>
        <a href="<?php echo URL::to('/list_profile_content'); ?>">List profile content</a>
    </form>
</section>