<section class="input_form member_page">
    <form action="<?php echo URL::to('/add_banner_action'); ?>" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group avatar_member">
          <label for="avatar_img_member">Chose image</label>
          <input type="file" class="form-control-file" name="avatar_img_member" id="avatar_img_member" placeholder="avatar_img_member" aria-describedby="fileHelpId">
          <span class="custom-file-control"><img id="avatar_show" src="../image/no_image.gif" alt=""></span>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>