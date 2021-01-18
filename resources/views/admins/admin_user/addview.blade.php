<?php
  // var_dump(Session::get('username'));die();
  if (Session::get('err_add')==true) {
    echo "<script>alert('Email exist!')</script>";
  };
  if (Session::get('err_pass')==true) {
    echo "<script>alert('Password or Passwword Confirm is wrong!')</script>";
  }
?>
<section>
    <h1 class="text-center">Add user</h1>  
    <form action="<?php echo URL::to('/add_user_action'); ?>" method="post">
        @csrf
        <div class="form-group">
          <label for="username">User Name</label>
          <input type="text"
            class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="John" required>
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
          <label for="address">Address</label>
          <input type="text"
            class="form-control" name="address" id="address" aria-describedby="helpId" placeholder="Address" required>
        </div>
        <div class="form-group">
          <label for="pass">Password</label>
          <input type="password"
            class="form-control" name="pass" id="pass" aria-describedby="helpId" placeholder="******" required>
        </div>
        <div class="form-group">
          <label for="cpass">Confirm Password</label>
          <input type="password"
            class="form-control" name="cpass" id="cpass" aria-describedby="helpId" placeholder="******" required>
        </div>
        <div class="form-group">
          <label>Permission</label>
          <?php
            foreach ($permission as $key => $value) {
          ?>
          <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="permission[]" id="permission" value="<?php echo $value['id']?>" >
                <?php echo $value['content']?>
              </label>
          </div>
          <?php
            }
          ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>