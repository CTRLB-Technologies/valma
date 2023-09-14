        <link rel="stylesheet" href="css/e_learning.css">
        <div class="background ">
            <div class=" container ">
                <div class="row">
                    <div class="col">
                        <span class="RFP">
                            Wish to send us an RFP?
                        </span><br>
                        <span class="belowtext">
                            Just say hello. We would love to learn about your goals and brainstorm ideas together.
                        </span><br>
                        <button class="Contact w-25 h-25">
                            Contact Us
                        </button>


                    </div>
                    <div class="col-2">
                        <span class="belowtextheader">
                            Useful
                        </span><br>
                        <span class="belowtext">
                            Careers Portfolio
                        </span>

                    </div>
                    <div class="col-2">
                        <span class="belowtextheader">
                            Legal
                        </span><br>
                        <span class="belowtext">
                            Privacy Policy Terms & Conditions
                        </span>

                    </div>
                    <div class="col-2">
                        <span class="belowtextheader">
                            Updates
                        </span><br>
                        <span class="belowtext">
                            Twitter | Instagram Behance | Facebook
                        </span>

                    </div>


                </div><br>


                <div class="d-flex justify-content-between">

                    <div>
                        <span class="belowtext ml-3">
                            Copyright © 2023 Valma Creations. All rights reserved.
                        </span>
                    </div>

                    <div>

                    </div>

                    <div>
                        <div class="d-flex">
                            <div class="d-flex">
                                <div style="margin-right: 10px;">
                                    <div class="mt-2 ml-4 iconframe">
                                        <img src="images/Union 10@2x.png" class="icon vicon">
                                    </div>
                                </div>

                                <div class="d-flex flex-column">
                                    <span class="phone">Phone</span>
                                    <span class="number">+91 9008255565</span>
                                </div>
                            </div>

                            <div class="d-flex">
                                <div style="margin-right: 10px;">
                                    <div class=" ml-4 iconframe ">
                                        <img src="images/Path 12217@2x.png" class="icon vicon mt-3  ">
                                    </div>
                                </div>

                                <div class="d-flex flex-column">
                                    <span class="phone">Email</span>
                                    <span class="number">Email@valmacreations.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
        var coll = document.getElementsByClassName("career_div_two");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                    career_description.style.color = '#838694';
                } else {
                    content.style.display = "block";
                    career_description.style.color = '#FFFFF';

                }
            });
        }
    </script>
    </body>
</html>