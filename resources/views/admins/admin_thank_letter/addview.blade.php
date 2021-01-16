<section>
    <h1 class="text-center">Add thanks</h1>  
    <form action="<?php echo URL::to('/add_thank_letter_action'); ?>" method="post">
        @csrf
        <div class="form-group">
          <label for="lastname">Content</label>
          <input type="text"
            class="form-control" name="content" id="content" aria-describedby="helpId" placeholder="Em xin chân thành cảm ơn!" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>