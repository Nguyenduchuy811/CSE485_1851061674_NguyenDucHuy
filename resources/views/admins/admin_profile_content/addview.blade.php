<section>
    <h1 class="text-center">Add profile content</h1>  
    <form action="<?php echo URL::to('/add_profile_content_action'); ?>" method="post">
        @csrf
        <div class="form-group">
          <label for="member_cv_id">Member</label>
          <select class="form-control" name="member_cv_id" id="member_cv_id" required>
          <option value="">......</option>
            <?php
              foreach ($member_cv as $key => $valuecv) {
            ?>
                <option value="<?php echo $valuecv['id']?>"><?php echo $valuecv['first_name'] . ' ' . $valuecv['last_name'] . ' - '. $valuecv['email']?></option>
            <?php
              }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" name="content" id="content" rows="10" placeholder="content here" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>