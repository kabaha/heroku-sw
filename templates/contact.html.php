<?php if($form->valid == false): ?>
<p class="info-error">Please supply the missing information</p>
<?php endif; ?>


<div id="logo-company-in-content-form">
    <img src="images/LogoLarge.gif" alt="company logo">
</div>
<div id="contact_us">
    <div class="contact_form">
        <h1>contact form</h1>
        <p>Sports warehouse is coming soon. If you have any questions, we would love to hear from you, please complete the following information</p>
        <form action="contact.php" method="post" novalidate>
           
                <p>                    
                    <label for="firstName">first name</label>
                    <span <?=$form->SetErrorClass("firstName")?> > <?= $firstNameMessage ?> </span>
                    <input type="text" name="firstName" id="firstName" value="<?= $form->SetValue("firstName") ?>" placeholder="Your name..">
                </p>
                <p>
                    <label for="lastName">last name</label>
                    <span <?=$form->SetErrorClass("lastName")?> > <?= $lastNameMessage ?> </span>
                    <input type="text" name="lastName" id="lastName" value="<?= $form->SetValue("lastName") ?>" placeholder="Your last name..">
                </p>
                <p>
                    <label for="contactNumber">contact number</label>
                    <input type="tel" name="contactNumber" id="contactNumber" value="" placeholder="Contact number..">
                </p>
                <p>
                    <label for="email">e-mail</label>
                    <span <?=$form->SetErrorClass("email")?> > <?= $emailMessage ?> </span>
                    <input type="email" name="email" id="email" value="<?= $form->SetValue("email") ?>" placeholder="example@domain.com..">
                </p>
                <p>
                    <label for="question">question?</label>
                    <textarea name="question" id="question" rows="4" cols="50" placeholder="Write something.."></textarea>
                </p>
                <p>
                    <input type="submit" name="btn_submit" id="btn_submit" value="Send">
                </p>

            
        </form>
    </div>   
</div>