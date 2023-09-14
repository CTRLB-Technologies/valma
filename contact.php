<?php
@include_once "header.php";
?>
<br/>
<div class="container">
    <link rel="stylesheet" href="css/contact_us.css" />
    <div>
        <div style="display: flex;">
            <span class="title">Contact Us</span>
            <img src="images/down_arrow.png" alt="down" class="down_arrow" />
        </div>
        <div class="text_details">
            <span class="text_one">Need any Helps</span>
            <span class="text_two">
                Sed ut perspiciatis unde omnis natus errorsit voluptatem accusantium doloremque laudantium aperiam
                eaque quae abillo<br> inventore veritatis quasi architecto beatae vitae dicta sunt explicabo
            </span>
        </div>
        <div class="cards">
            <div class="card_one">
                <div>
                    <img src="images/location_on_FILL0_wght400_GRAD0_opsz48.svg" alt="location" class="icon_one"/>
                    <span class="card_text_one">Locations</span>
                    <span class="card_text_two">553 Main Street, 2nd - Block, New York 32500</span>
                </div>
            </div>
            <div class="card_one">
                <div>
                    <img src="images/drafts_FILL0_wght400_GRAD0_opsz48.svg" alt="email" class="icon_one"/>
                    <span class="card_text_one">Email Us</span>
                    <span class="card_text_two">supportitinfo@gmail.com www.itservice.net</span>
                </div>
            </div>
            <div class="card_one">
                <div>
                    <img src="images/phone_in_talk_FILL0_wght400_GRAD0_opsz48.svg" alt="telephone" class="icon_one"/>
                    <span class="card_text_one">Telephone</span>
                    <span class="card_text_two">Mobile : +000 (123) 45 667<br> Teliphone : +1234566</span>
                </div>
            </div>
            <div class="card_one">
                <div>
                    <img src="images/schedule_FILL0_wght400_GRAD0_opsz48.svg" alt="working_hours" class="icon_one"/>
                    <span class="card_text_one">Working Hour</span>
                    <span class="card_text_two">Monday _ Friday<br> 08:00am - 06:00pm</span>
                </div>
            </div>
        </div>

        <div class="text_details">
            <span class="text_one">Send Us Message</span>
            <span class="text_two">
                Sed ut perspiciatis unde omnis natus errorsit voluptatem accusantium doloremque laudantium aperiam eaque
                quae abillo<br> inventore veritatis quasi architecto beatae vitae dicta sunt explicabo
            </span>
        </div>

        <div style="margin-top: 50px;display: flex;">
            <form action="#" method="post">
                <div style="display: flex;">
                    <div style="display: flex;flex-direction: column;margin-right: 17px;">
                        <label for="fullName" class="label">Full Name</label>
                        <input class="inputText" type="text" id="fullName" name="fullName" placeholder="Enter Full Name"
                            required>
                    </div>
                    <div style="display: flex;flex-direction: column;">
                        <label for="phoneNumber" class="label">Phone Number</label>
                        <input class="inputText" type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number" required>
                    </div>
                </div>
                <div style="display: flex;margin-top: 16px;">
                    <div style="display: flex;flex-direction: column;margin-right: 17px">
                        <label for="email" class="label">Email Address</label><br>
                        <input class="inputTextTwo" placeholder="Enter Email Address" type="text" id="email" name="email" required>
                    </div>
                    <div style="display: flex;flex-direction: column;">
                        <label for="subject" class="label">Subject</label><br>
                        <input class="inputTextTwo" type="text" placeholder="Enter Subject" id="subject" name="subject" required>
                    </div>
                </div>
                <div style="display: flex;flex-direction: column; margin-top: 16px;">
                    <label for="requirement" class="label">Tell Us Your Requirement</label>
                    <textarea class="inputTextArea" id="requirement" placeholder="Tell Us Your Requirement" name="requirement" rows="4" required></textarea>
                </div>
                <button type="submit" class="button">Send Request</button>
            </form>
            <div style="height: 369px;width: 449px;">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.380951051794!2d78.36621960000002!3d17.447773599999963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93dc8c5d69df%3A0x19688beb557fa0ee!2sHITEC%20City%2C%20Hyderabad%2C%20Telangana%20500081!5e0!3m2!1sen!2sus!4v1630345144215!5m2!1sen!2sus"
                width="100%" height="369px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>

    </div>
</div>
<br/>
<?php
@include_once "footer.php";
?>