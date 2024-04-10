<div class="govde">
    <div class="ustbar">
        <div class="logo"><img src="<?=$url;?>assets/images/logo.png" alt="Karaca | Fitbowl Logo"></div>
        <button type="button" class="link" onclick="formGetir();">GET YOUR FITBOWL</button>
    </div>
    <div class="slider" id="slider">
        <div class="sliderbar" id="sliderbar">
            <div class="daire" id="daire">
                <div class="nokta" id="nokta"></div>
            </div>
            <div class="bar" id="bar"></div>
        </div>
        <div class="carousel">
            <div class="item item0 show"><img src="<?=$url;?>assets/images/kkedi1.png" alt=""></div>
            <div class="item item1"><img src="<?=$url;?>assets/images/kkedi2.png" alt=""></div>
            <div class="item item2"><img src="<?=$url;?>assets/images/kkedi1.png" alt=""></div>
        </div>
        
        <div class="yazi yazimobile">
            <strong>A food bowl that helps<br>our lovely friends to have a balanced diet</strong>
            <p>Fitbowl is Karaca’s new food bowl that shows how to put the food there.It easily teaches everyone the ideal amount of food in a visual and fun way. These food containers are given free of charge with the food packages to inform the cat owners. Our pet friends will not see full bowls of food again. But they look more fit.</p>
            <center><button type="button" class="link linkmobile" onclick="formGetir();">GET YOUR FITBOWL</button></center>
        </div>
    </div>
    <div class="yazi">
        <strong>A food bowl that helps<br>our lovely friends to have a balanced diet</strong>
        <p>Fitbowl is Karaca’s new food bowl that shows how to put the food there.It easily teaches everyone the ideal amount of food in a visual and fun way. These food containers are given free of charge with the food packages to inform the cat owners. Our pet friends will not see full bowls of food again. But they look more fit.</p>
        
    </div>
</div>
<div id="sidebar" class="sidebar p-5">
    <form data-toggle="validator" role="form" name="userInfoForm" id="userInfoForm" action="javascript:formGonder();">
        <div class="sidebar-content" id="firstStep">
            <div class="step-header mb-5">
                <h1 class="fw-light">Order</h1>
                <div class="step-indicator fw-light mt-2">1 / 2</div>
            </div>
            <div>
                <h2 class="fw-bold fs-1">Cat’s Info</h2>
                <p class="fw-light">Our pet friends will not see full bowls of food again. But they look more fit.</p>
            </div>
            <div class="form-block">
                <input type="text" class="form-control" id="cname" name="cname" data-inputmask-regex="[A-Za-z ĞğŞşÜüÇçIıİiÖö]+" maxlength="50" data-error="Write your cat's name!" value="" required>
                <label for="cname" >Name:</label>
                <div class="help-block with-errors"></div>
            </div>
            
            <div class="form-block">
                <input type="text" class="form-control" id="breed" name="breed" data-inputmask-regex="[A-Za-z ĞğŞşÜüÇçIıİiÖö]+" maxlength="50" data-error="Write your cat's breed!" value="" required>
                <label for="breed" >Breed:</label>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-block mb-3">
                <input type="text" class="form-control" id="age" name="age" data-inputmask-regex="^[1-9][0-9]?$|^100$" maxlength="2" data-error="Write your cat's age!" value="" required>
                <label for="age">Age:</label>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-block weight">
                <input type="text" class="form-control" id="weight" name="weight" data-inputmask-regex="^[1-9][0-9]?$|^100$" maxlength="2" min="2" max="40" data-error="Your cat should weigh between 2 kg and 40 kg." value="" required>
                <label for="weight">Weight (kg):</label>
                <div class="help-block with-errors weight"></div>
            </div>
            <div class="form-actions d-flex justify-content-between">
                <button type="button" class="btn-cancel btn btn-outline-dark  ms-2" onclick="formCikar();" style="width: 90%;">Cancel</button>
                <button type="button" class="btn-next btn btn-dark ms-5" style="width: 90%;" onclick="adimiki();">Next</button>
            </div>
        </div>
        <div class="sidebar-content" id="secondStep" style="display: none;">
            <div class="step-header mb-5">
                <h1 class="fw-light">Order</h1>
                <div class="step-indicator fw-light mt-2">2 / 2</div>
            </div>
            <div>
                <h2 class="fw-bold fs-1">Your Info</h2>
                <p class="fw-light">Our pet friends will not see full bowls of food again. But they look more fit.</p>
            </div>
            <div class="form-block">
                <input type="text" class="form-control" id="yname" name="yname" data-inputmask-regex="[A-Za-z ĞğŞşÜüÇçIıİiÖö]+" maxlength="50" data-error="Write your name!" value="" required>
                <label for="name" >Name:</label>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-block">
                <input type="text" class="form-control" id="surname" name="surname" data-inputmask-regex="[A-Za-z ĞğŞşÜüÇçIıİiÖö]+" maxlength="50" data-error="Write your surname!" value="" required>
                <label for="surname" >Surname:</label>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-block">
                <input type="email" class="form-control" id="email" name="email" data-inputmask-mask="email" data-error="Please write a valid e-mail!" value="" required />
                <label for="surname" >Email:</label>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-block">
                <input type="text" class="form-control" id="phone" name="phone" data-error="Please write a valid phone!" placeholder=" " value="" required />
                <label for="phone">Phone:</label>
                <div class="help-block with-errors" id="error-msg"><ul class="list-unstyled"><li>Please write a valid phone!</li></ul></div>
                
            </div>
            <div class="form-block">
                <input type="text" class="form-control" id="address" name="address" data-error="Write your address!" value="" required>
                <label for="name" >Address:</label>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-block">
                <label class="form-check-label" for="agree">
                    <input type="checkbox" class="form-check-input" id="agree" name="agree" data-error="You must accept the terms of use!" value="1" required> I agree to the terms of use
                </label>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-actions">
                <button type="button" class="btn-cancel btn btn-outline-dark  ms-2" id="cancelSecondStep" onclick="adimbir();" style="width: 90%;">Back</button>
                <button type="submit" class="btn-next btn btn-dark ms-5" style="width: 90%;">Order</button>
            </div>
        </div>
        <div class="sidebar-content" id="completedStep" style="display: none;">
            <div class="step-header mb-5">
                <h1 class="fw-light">Order</h1>
            </div>
            <div>
                <h2 class="fw-bold fs-1">Completed</h2>
                <p class="fw-light">Our pet friends will not see full bowls of food again. But they look more fit.</p>
            </div>
            <div class="form-actions">
                <button type="button" class="btn-ok btn-next btn btn-dark" id="okButton" style="width: 100%;" onclick="formBitti();">OK</button>
            </div>
        </div>
    </form>
    
    <script type="text/javascript">
        $('#userInfoForm').validator();
        $(":input[data-inputmask-mask]").inputmask();
        $(":input[data-inputmask-alias]").inputmask();
        $(":input[data-inputmask-regex]").inputmask("Regex");
        weight = document.getElementById("weight");
        weight.onkeyup = function(){
            if ($("#weight").val()<2 || $("#weight").val()>40) {
                $(".help-block.with-errors.weight").html('<ul class="list-unstyled"><li>Your cat should weigh between 2 kg and 40 kg.</li></ul>');
                $(".form-block.weight").addClass("has-error");
                $(".form-block.weight").addClass("has-danger");
            } else {
                $(".help-block.with-errors.weight").html("");
                $(".form-block.weight").removeClass("has-error");
                $(".form-block.weight").removeClass("has-danger");
            }
        };
        
        weight.onblur = function(){
            if ($("#weight").val()<2 || $("#weight").val()>40) {
                $(".help-block.with-errors.weight").html('<ul class="list-unstyled"><li>Your cat should weigh between 2 kg and 40 kg.</li></ul>');
                $(".form-block.weight").addClass("has-error");
                $(".form-block.weight").addClass("has-danger");
            } else {
                $(".help-block.with-errors.weight").html("");
                $(".form-block.weight").removeClass("has-error");
                $(".form-block.weight").removeClass("has-danger");
            }
        };
        function formSonuc(durum) {
            if (durum == 1) {
                adimuc();
            } else {
                mesaj("<strong>Error!</strong> Something went wrong. Try again.", "alert-danger");
            }
        }
    </script>
    <script src="<?=$url;?>assets/js/intlTelInput.js"></script>
    <script>
        const input = document.getElementById("phone");
        const form = $(input).closest('input');
        const IS_REQUIRED = parseInt('0');
        const iti = window.intlTelInput(input, {
            eparateDialCode: true,
            utilsScript: "<?=$url;?>assets/js/utils.js",
            formatOnDisplay: false,
            initialCountry: 'auto',
            hiddenInput: 'mobile',
            geoIpLookup: function (success, failure) {
                new Promise(() => {
                    $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                        let country = 'TR';
                        if (resp.country) {
                            country = resp.country;
                        }
                        var countryCode = country;
                        success(countryCode);
                    })
                }).then(() => {
                    input.addEventListener("countrychange", function () {
                        validateInput();
                    });
                });
            },
        });
        iti.setNumber("");
        input.addEventListener('blur', function () {
            validateInput();
        });
        function validateInput() {
            let isValidNumber = iti.isValidNumber();
            if ((iti.getNumber() == '' || iti.getNumber() == null) && !IS_REQUIRED) {
                isValidNumber = true;
            }
            if (isValidNumber) {
                $("input[name='mobile']").val(iti.getNumber());
                if (iti.getNumber() == "") {
                    $('#error-msg').show();
                } else {
                    $('#error-msg').hide();
                }
            } else {
                $("input[name='mobile']").val("");
                $('#error-msg').show();
            }
        }
    </script>
</div>

<video playsinline autoplay muted loop id="myVideo">
    <source src="<?=$url;?>assets/videos/fitbowl-kedi.mp4" type="video/mp4">
</video>