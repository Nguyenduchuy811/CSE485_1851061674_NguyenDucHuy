<section>
     <h1 class="text-center">Edit education</h1>   
    <form action="<?php echo URL::to('/edit_education_action'); ?>" method="post">
        @csrf
        <input type="hidden"
            name="id" id="id" aria-describedby="helpId" placeholder="John" value="<?php echo $education[0]['id']?>">
        <div class="form-group">
          <label for="username">Member_cv_id</label>
          <input type="text"
            class="form-control" name="member_cv_id" id="member_cv_id" aria-describedby="helpId" placeholder="1" value="<?php echo $education[0]['member_cv_id'] ?>" required>
        </div>
        <div class="form-group">
          <label for="firstname">Year_start</label>
          <input type="date"
            class="form-control" name="year_start" id="year_start" aria-describedby="helpId" placeholder="10/4/2020" value="<?php echo $education[0]['year_start'] ?>" required>
        </div>
        <div class="form-group">
          <label for="lastname">Year_end</label>
          <input type="date"
            class="form-control" name="year_end" id="year_end" aria-describedby="helpId" placeholder="18/12/2020" value="<?php echo $education[0]['year_end'] ?>" required>
        </div>
        <div class="form-group">
          <label for="lastname">Content</label>
          <textarea class="form-control" name="content" id="content" rows="10" placeholder="trường đại học Thủy Lợi" required><?php echo $education[0]['content'] ?></textarea>  
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>