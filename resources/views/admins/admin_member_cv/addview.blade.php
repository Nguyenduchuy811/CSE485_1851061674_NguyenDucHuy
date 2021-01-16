<section class="input_form member_page">
     <h1 class="text-center">Add member cv</h1>  
    <form action="<?php echo URL::to('/add_member_cv_action'); ?>" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="username">User Name</label>
          <input type="text"
            class="form-control" name="username" id="userid" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input type="text"
            class="form-control" name="firstname" id="firstname" aria-describedby="helpId" placeholder="Nguyen Van" required>
        </div>
        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text"
            class="form-control" name="lastname" id="lastname" aria-describedby="helpId" placeholder="An" required>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <div class="form-check">
                <input type="radio" id="male" name="gender" value="1" required>
                <label for="male">Nam</label><br>
                <input type="radio" id="female" name="gender" value="0">
                <label for="female">Nữ</label>
            </div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email"
            class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="test@gmail.com" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text"
            class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="0123456789" required>
        </div>
        <div class="form-group">
          <label for="note">Note</label>
          <input type="text"
            class="form-control" name="note" id="note" aria-describedby="helpId" placeholder="abcd" required>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text"
            class="form-control" name="address" id="address" aria-describedby="helpId" placeholder="Address" required>
        </div>
        <div class="form-group avatar_member">
          <label for="avatar_img_member">Chose image</label>
          <input type="file" class="form-control-file" name="avatar_img_member" id="avatar_img_member" placeholder="avatar_img_member" aria-describedby="fileHelpId">
          <span class="custom-file-control"><img id="avatar_show" src="../image/no_image.gif" alt=""></span>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>