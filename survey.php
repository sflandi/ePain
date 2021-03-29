<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/epain12.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/survey.css">
    <link rel="stylesheet" href="css\bootstrap-4.1.3\dist\css\bootstrap.min.css">
    <script src="css\bootstrap-4.1.3\dist\js\bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.4.2-web/css/all.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- <style>
        /* Standard styling, you can ignore this */
        body {
            align-items: center;
            display: flex;
            font-family: Helvetica, sans-serif;
            height: 100vh;
            justify-content: center;
            margin: 0;
            
            div {
                font-size: 15px;
                margin-top: 15px;
                text-align: center;
            }
        }

        /* // Custom radio buttons */
        form {
            &#smileys {
                input[type="radio"] {
                    -webkit-appearance: none;
                    width: 90px;
                    height: 90px;
                    border: none;
                    cursor: pointer;
                    transition: border .2s ease;
                    filter: grayscale(100%);
                    margin: 0 5px;
                    transition: all .2s ease;
                    
                    &:hover, &:checked {
                        filter:	grayscale(0);
                    }
                    
                    &:focus {
                        outline: 0;
                    }
                    
                    &.happy {
                        background-image: url("img/img2.jpg");
                        background-size: cover;
                    }
                    
                    &.neutral {
                        background: url('https://res.cloudinary.com/turdlife/image/upload/v1492864443/neutral_t3q8hz.svg') center;
                        background-size: cover;
                    }
                    &.sad {
                        background: url('https://res.cloudinary.com/turdlife/image/upload/v1492864443/sad_bj1tuj.svg') center;
                        background-size: cover;
                    }
                }
            }
        }

        .mtt {
            position: fixed;
            bottom: 10px;
            right: 20px;
            color: #999;
            text-decoration: none;
            
            span {
                color: #e74c3c;
            }
            
            &:hover {
                color: #666;

                span {
                    color: #c0392b;
                }
            }
        }
    </style> -->

</head>
<body>

<div class="container">
    <form action="insertSurvey.php" method="post">
        <fieldset class="form-group">
            <div class="cc-selector">
                <input id="levelsatu" type="radio" name="credit-card" value="1" />
                    <label class="drinkcard-cc levelsatu" for="levelsatu"></label>

                <input id="level2" type="radio" name="credit-card" value="2" />
                    <label class="drinkcard-cc level2"for="level2"></label>

                <input id="level3" type="radio" name="credit-card" value="3" />
                    <label class="drinkcard-cc level3" for="level3"></label>

                <input id="level4" type="radio" name="credit-card" value="4" />
                    <label class="drinkcard-cc level4"for="level4"></label>

                <input id="level5" type="radio" name="credit-card" value="5" />
                    <label class="drinkcard-cc level5" for="level5"></label>

                <input id="level6" type="radio" name="credit-card" value="6" />
                    <label class="drinkcard-cc level6"for="level6"></label>

                <input id="level7" type="radio" name="credit-card" value="7" />
                    <label class="drinkcard-cc level7" for="level7"></label>

                <input id="level8" type="radio" name="credit-card" value="8" />
                    <label class="drinkcard-cc level8"for="level8"></label>

                <input id="level9" type="radio" name="credit-card" value="9" />
                    <label class="drinkcard-cc level9" for="level9"></label>

                <input id="level10" type="radio" name="credit-card" value="10" />
                    <label class="drinkcard-cc level10"for="level10"></label>
            </div>
        </fieldset>
        <button type="submit">Submit</button>
    </form>
</div>
        
    <!--</div>
     <p>A simple mod:</p>
    <div class="cc-selector-2">
        <input id="visa2" type="radio" name="creditcard" value="visa" />
        <label class="drinkcard-cc visa" for="visa2"></label>
        <input id="mastercard2" type="radio" name="creditcard" value="mastercard" />
        <label class="drinkcard-cc mastercard"for="mastercard2"></label>
    </div>
    
</form>


<a class="mtt" href="https://morningtrain.dk" target="_blank">
	With <span>♥</span> from Morning Train
</a> -->


<script>
// Very simple JS for updating the text when a radio button is clicked
const INPUTS = document.querySelectorAll('#smileys input');

function updateValue(e) {
	document.querySelector('#result').innerHTML = e.target.value;
}

INPUTS.forEach(el => el.addEventListener('click', (e) => updateValue(e)));
</script>
  

    <!-- li.choice(data-value="5")
      p.emoji <i class="em em-heart_eyes"></i>
      p.reaction I can't wait to tell everyone I know about this!
    li.choice(data-value="4")
      p.emoji <i class="em em-smile"></i>
      p.reaction Thanks! I really enjoyed it.
    li.choice(data-value="3")
      p.emoji <i class="em em-neutral_face"></i>
      p.reaction Meh. I could take it or leave it
    li.choice(data-value="2")
      p.emoji <i class="em em-disappointed"></i>
      p.reaction I had such high hopes, but ultimately it was disappointing
    li.choice(data-value="1")
      p.emoji <i class="em em-angry"></i>
      p.reaction I can't believe I wasted money on this!

  a.answer-submit.button(href="#") Submit Answer -->

<!-- <script>
    $('.choice').on('click', function () {
    var $this = $(this);
    
    $('.reaction').removeClass('reaction-fade-in');
    $('.emoji').removeClass('emoji-selected');
    $this.find('.reaction').addClass('reaction-fade-in');
    $this.find('.emoji').addClass('emoji-selected');
        
    });


    $('#question-1 .choice').on('click', function() {
    var ranking1 = $(this).attr('data-value');
    
    $('.answer-submit').on('click', function() {
        sessionStorage.setItem('ranking1', ranking1);
        $('#question-2').removeClass('hide');
        $('#question-1').addClass('hide');
    });
    });


    $('#question-2 .choice').on('click', function() {
    var ranking2 = $(this).attr('data-value');
    
    $('.answer-submit').on('click', function() {
        sessionStorage.setItem('ranking2', ranking2);
        $('#question-3').removeClass('hide');
        $('#question-2').addClass('hide');
    });
    });



    $('#question-3 .choice').on('click', function() {
    var ranking3 = $(this).attr('data-value');
    
    $('.answer-submit').on('click', function() {
        sessionStorage.setItem('ranking3', ranking3);
        $('#question-3').addClass('hide');
        $('.summary').removeClass('hide');
        
        var total;
        
        function calculateTotal() {
    
        var ranking1 = sessionStorage.getItem('ranking1');
        var ranking2 = sessionStorage.getItem('ranking2');
        var ranking3 = sessionStorage.getItem('ranking3');
        var total = parseInt(ranking1) + parseInt(ranking2) + parseInt(ranking3);

            if (total >= 14) {
            $('#amazing').removeClass('hide');
            } else if ((total < 14) && (total > 10 )) {
            $('#good').removeClass('hide');
            } else if ((total < 11) && (total > 7 )) {
            $('#okay').removeClass('hide');
            } else if ((total < 8) && (total > 4 )) {
            $('#disappointing').removeClass('hide');
            } else {
            $('#terrible').removeClass('hide');
            }
        }
        
        // if (total > 13) {
        //   $('#amazing').removeClass('hide');
        // }
        
        calculateTotal();
    });
    });
</script> -->
</body>
</html>

