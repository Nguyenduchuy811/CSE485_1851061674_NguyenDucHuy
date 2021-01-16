<section>
    <h1 class="text-center">Add experience</h1>  
    <form action="<?php echo URL::to('/add_experience_action'); ?>" method="post">
        @csrf
        <div class="form-group">
          <label for="username">Member_cv_id</label>
          <input type="text"
            class="form-control" name="member_cv_id" id="member_cv_id" aria-describedby="helpId" placeholder="1" required>
        </div>
        <div class="form-group">
          <label for="firstname">Year_date_start</label>
          <input type="date"
            class="form-control" name="year_start" id="year_start" aria-describedby="helpId" placeholder="10/4/2020" required>
        </div>
        <div class="form-group">
          <label for="lastname">Year_date_end</label>
          <input type="date"
            class="form-control" name="year_end" id="year_end" aria-describedby="helpId" placeholder="18/12/2020" required>
        </div>
        <div class="form-group">
          <label for="lastname">Content</label>
          <textarea class="form-control" name="content" id="content" rows="10" placeholder="trường đại học Thủy Lợi"></textarea>  
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>