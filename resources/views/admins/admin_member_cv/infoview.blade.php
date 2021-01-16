<<<<<<< HEAD
<section>
     <h1 class="text-center">Information member cv</h1>  
=======
<section class="input_form">
>>>>>>> 55441190b0700b84d1efc7933b7e88fff1dcec2b
    <form>
        @csrf
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input type="text"
            class="form-control" name="firstname" id="firstname" aria-describedby="helpId" placeholder="Nguyen Van"  value="<?php echo $members[0]['first_name']?> " disabled>
        </div>
        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text"
            class="form-control" name="lastname" id="lastname" aria-describedby="helpId" placeholder="An"  value="<?php echo $members[0]['last_name']?> " disabled>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <div class="form-check">
                <input type="radio" id="male" name="gender" value="1" <?php if ($members[0]['gender'] == 1) {echo "checked";}?> disabled>
                <label for="male">Nam</label><br>
                <input type="radio" id="female" name="gender" value="0" <?php if ($members[0]['gender'] == 0) {echo "checked";}?> disabled>
                <label for="female">Nữ</label>
            </div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email"
            class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="test@gmail.com"  value="<?php echo $members[0]['email']?> " disabled>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text"
            class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="0123456789"  value="<?php echo $members[0]['phone']?> " disabled>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text"
            class="form-control" name="address" id="address" aria-describedby="helpId" placeholder="Address"  value="<?php echo $members[0]['address']?> " disabled>
        </div>
        <div class="form-group">
          <label for="note">Note</label>
          <input type="text"
            class="form-control" name="note" id="note" aria-describedby="helpId" placeholder="John" value="<?php echo $members[0]['note']?> " disabled>
        </div>
        <div class="form-group avatar_member">
          <span class="custom-file-control"><img id="avatar_show" src="../image/<?php echo $members[0]['image']?>" alt=""></span>
        </div>
        <a href="<?php echo URL::to('/list_member_cv'); ?>">List member cv</a>
    </form>
</section>