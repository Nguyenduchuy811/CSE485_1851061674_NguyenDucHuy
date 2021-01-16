<section>
   <h1 class="text-center">Edit user</h1>  
    <form action="<?php echo URL::to('/edit_user_action'); ?>" method="post">
        @csrf
        
        <input type="hidden"
            name="id" id="id" aria-describedby="helpId" placeholder="John" value="<?php echo $user[0]['id']?>">
        <div class="form-group">
          <label for="username">User Name</label>
          <input type="text"
            class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="John" value="<?php echo $user[0]['username']?>" required>
        </div>
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input type="text"
            class="form-control" name="firstname" id="firstname" aria-describedby="helpId" placeholder="Nguyen Van" value="<?php echo $user[0]['firstname']?>" required>
        </div>
        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text"
            class="form-control" name="lastname" id="lastname" aria-describedby="helpId" placeholder="An" value="<?php echo $user[0]['lastname']?>" required>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <div class="form-check">
                <input type="radio" id="male" name="gender" value="1" <?php if ($user[0]['gender'] == 1) {echo "checked";}?>  required>
                <label for="male">Nam</label><br>
                <input type="radio" id="female" name="gender" value="0" <?php if ($user[0]['gender'] == 0) {echo "checked";}?> >
                <label for="female">Nữ</label>
            </div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email"
            class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="test@gmail.com" value="<?php echo $user[0]['email']?>" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text"
            class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="0123456789" value="<?php echo $user[0]['phone']?>" required>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text"
            class="form-control" name="address" id="address" aria-describedby="helpId" placeholder="Address" value="<?php echo $user[0]['address']?>" required>
        </div>
        <div class="form-group">
          <label for="pass">Password</label>
          <input type="password"
            class="form-control" name="pass" id="pass" aria-describedby="helpId" placeholder="******" value="<?php echo $user[0]['password']?>" required>
        </div>
        <div class="form-group">
          <label for="cpass">Confirm Password</label>
          <input type="password"
            class="form-control" name="cpass" id="cpass" aria-describedby="helpId" placeholder="******" value="<?php echo $user[0]['password']?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>