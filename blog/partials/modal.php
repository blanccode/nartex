<?php

 
?>

<div class="modal-bg">

    <div class="modal">
        
        <h2 style="color:white;">Please leave us a rating</h2>

        <form class="rating-form" action="index.php" method="POST">
            <input name="name" required placeholder="Your name" type="name">
            <div class="select-container">
                <label class="text-color"  for="stars">Choose Star :</label>

                <select required name="stars" id="stars">
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>

                </select>
            </div>


            <textarea required name="comment" id="" cols="30" rows="10" placeholder="What do you have to say about us ?"></textarea>

            <button class="rating-btn" type="submit" name="submit-ratings">Submit </button>
            <span class="modal-close">X</span>

        </form>
    </div>
</div>