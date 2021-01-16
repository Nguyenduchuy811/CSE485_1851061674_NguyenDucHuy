<section>
     <h1 class="text-center">Information thanks</h1>  
    <form>
        @csrf
        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" name="content" id="content" rows="10" placeholder="content here" disabled><?php echo $thank_letter[0]['content']?></textarea>
        </div>
        <a href="<?php echo URL::to('/list_thank_letter'); ?>">List thank letter</a>
    </form>
</section>