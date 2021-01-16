<section class="input_form">
<h1 class="text-center">Edit banner</h1>  
    <form action="<?php echo URL::to('/add_banner_action'); ?>" method="post">
        @csrf
        <div class="form-group avatar_member">
          <label for="avatar_img_member">Chose image</label>
          <input type="file" class="form-control-file" name="avatar_img_member" id="avatar_img_member" placeholder="avatar_img_member" aria-describedby="fileHelpId" value="<?php echo $banner[0]["image"];?>">
          <span class="custom-file-control"><img id="avatar_show" src="../image/<?php echo $banner[0]["image"];?>" alt=""></span>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>