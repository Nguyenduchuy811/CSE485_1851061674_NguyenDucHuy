<section>
     <h1 class="text-center">Edit thanks</h1>  
    <form action="<?php echo URL::to('/edit_thank_letter_action'); ?>" method="post">
        @csrf
        <input type="hidden"
            name="id" id="id" aria-describedby="helpId" placeholder="John" value="<?php echo $thank_letter[0]['id']?>">
        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" name="content" id="content" rows="10" placeholder="content here" required><?php echo $thank_letter[0]['content']?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>