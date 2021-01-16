<section class="input_form">
   <h1 class="text-center">Information banner</h1>  
    <form>
        @csrf
        <div class="form-group avatar_member">
          <span class="custom-file-control"><img id="avatar_show" src="../image/<?php echo $banner[0]["image"];?>" alt=""></span>
        </div>
        <a href="<?php echo URL::to('/list_banner'); ?>">List banner</a>
    </form>
</section>