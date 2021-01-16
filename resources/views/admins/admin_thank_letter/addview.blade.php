<section>
    <h1 class="text-center">Add thanks</h1>  
    <form action="<?php echo URL::to('/add_thank_letter_action'); ?>" method="post">
        @csrf
        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" name="content" id="content" rows="10" placeholder="content here" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>