<section> 
     <h1 class="text-center">Information experience</h1>  
    <form>
        @csrf
        <input type="hidden"
            name="id" id="id" aria-describedby="helpId" placeholder="John" value="<?php echo $experience[0]['id']?>">
        <div class="form-group">
          <label for="member_cv_id">Member</label>
          <select class="form-control" name="member_cv_id" id="member_cv_id" disabled>
            <?php
              foreach ($experience as $key => $valuect) {
            ?>
                <option value="<?php echo $valuect['id']?>" selected><?php echo $valuect['first_name'] . ' ' . $valuect['last_name'] . ' - '. $valuect['email']?></option>
            <?php
              }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="firstname">Year_start</label>
          <input type="date"
            class="form-control" name="year_start" id="year_start" aria-describedby="helpId" placeholder="10/4/2020" value="<?php echo $experience[0]['year_start'] ?>" disabled>
        </div>
        <div class="form-group">
          <label for="lastname">Year_end</label>
          <input type="date"
            class="form-control" name="year_end" id="year_end" aria-describedby="helpId" placeholder="18/12/2020" value="<?php echo $experience[0]['year_end'] ?>" disabled>
        </div>
        <div class="form-group">
          <label for="lastname">Content</label>
          <textarea class="form-control" name="content" id="content" rows="10" placeholder="trường đại học Thủy Lợi" disabled><?php echo str_replace('<br />','',$experience[0]['content']) ?></textarea>
        </div>
        <a href="<?php echo URL::to('/list_experience'); ?>">List experience</a>
    </form>
</section>