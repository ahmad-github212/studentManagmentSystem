<html>
<head>
    <title>Image slider</title>
    <link rel="stylesheet" href="school_slider.css">
</head>

<body>
    <div class="slider">
        <div class="slides">
            <input type= "radio" name="radio-btn" id="radio1">
            <input type= "radio" name="radio-btn" id="radio2">
            <input type= "radio" name="radio-btn" id="radio3">
            <input type= "radio" name="radio-btn" id="radio4">
            <input type= "radio" name="radio-btn" id="radio5">
            <input type= "radio" name="radio-btn" id="radio6">


            <div class ="slide first">
                <img src="s1.jpg" alt="">
    
            </div>

            <div class="slide">
                <img src="s2.jpg" alt="">
            
            </div>

            <div class="slide">
                <img src="s3.jpg" alt="">
            
            </div>

            <div class="slide">
                <img src="s4.jpg" alt="">
            
            </div>

            <div class="slide">
                <img src="s5.jpg" alt="">
            
            </div>

            <div class="slide">
                <img src="s6.jpg" alt="">
            
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
                <div class="auto-btn5"></div>
                <div class="auto-btn6"></div>
            </div>

        </div>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
            <label for="radio5" class="manual-btn"></label>
            <label for="radio6" class="manual-btn"></label>
        </div>
    </div>
    
    <script type="text/javascript">
        var counter = 1;

        setInterval(function(){document.getElementById('radio'+counter).checked=true;
                                    counter++;
                                    if(counter>6){counter=1;}},3000);
    </script>
    
</body>
</html>