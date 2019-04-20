<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
    <link href="css/test1css.css" rel="stylesheet"> 
	<script>
		function countDown(secs, elem){
			var element = document.getElementById(elem);
                element.innerHTML = "<pre><h2>No. of Questions: 10                      History MCQ Test 1                          Time Left: <b>"+secs+"</b></h2></pre>";
                if(secs < 1) {
                    document.quiz.submit();
                }
                else
                {
                    secs--;
                    setTimeout('countDown('+secs+',"'+elem+'")',1500);
                }
            }

            function validate() {
                return true;
            }
    </script> 
            <div id="status"></div>
            <script type="text/javascript">countDown(120000,"status");</script>

            <script>
            	var allradios=document.getElementByName('answer1');
            	var booRadio;
            	var x=0;
            	for(x=0;x<allradio.length;x++){
            		allRadios[x].onclick = function() {
    			if(booRadio == this){
     			 this.checked = false;
      			 booRadio = null;
    			} else {
      			booRadio = this;
    			}
  			};
		}
         

            </script>
            <title>Questionnaire</title>
		
</head>
	<body>
        <?php 
        echo $_SESSION['use'];
        ?>
	<div class="container test1"><br/>
		<form action="test1a.php" method="post" name="quiz">
			<p>Q1.  Babur established Mughal rule in India through his victory in 1526, over </p>
			<input type="radio" name="answer1" value="Rana Sanga">Rana Sanga<br/>
			<input type="radio" name="answer1" value="Sikandar Lodi">Sikandar Lodi<br/>
			<input type="radio" name="answer1" value="Daulat Khan Lodi">Daulat Khan Lodi<br/>
			<input type="radio" name="answer1" value="Ibrahim Lodi">Ibrahim Lodi<br/>

			<p>Q2.  In the mughal empire, the unit of land revenue assessment was </p>
			<input type="radio" name="answer2" value="Individual peasant">Individual peasant<br/>
			<input type="radio" name="answer2" value="Village">Village<br/>
			<input type="radio" name="answer2" value="Pargana">Pargana<br/>
			<input type="radio" name="answer2" value="Zamindar">Zamindar<br/>

            <p>Q3.  Babur introduced in India </p>
            <input type="radio" name="answer3" value="The art of persian painting">The art of persian painting<br/>
            <input type="radio" name="answer3" value="Royal court poetry">Royal court poetry<br/>
            <input type="radio" name="answer3" value="Four-square gardens">Four-square gardens<br/>
            <input type="radio" name="answer3" value="Building with sloping walls">Building with sloping walls<br/>

            <p>Q4.  The capital of Nepal is: </p>
            <input type="radio" name="answer4" value="Mumbai">Mumbai<br/>
            <input type="radio" name="answer4" value="Kolkata">Kolkata<br/>
            <input type="radio" name="answer4" value="Delhi">Delhi<br/>
            <input type="radio" name="answer4" value="Kathmandu">Kathmandu<br/>

            <p>Q5.  The earliest surviving building in India containing a true dome is the </p>
            <input type="radio" name="answer5" value="Gol Gumbad">Gol Gumbad<br/>
            <input type="radio" name="answer5" value="Arhai Din Ka Jhopra">Arhai Din Ka Jhopra<br/>
            <input type="radio" name="answer5" value="Tomb of Sultan Garhi">Tomb of Sultan Garhi<br/>
            <input type="radio" name="answer5" value="Alai Darwaza">Alai Darwaza<br/>

            <p>Q6.  The capital of Nepal is: </p>
            <input type="radio" name="answer6" value="Mumbai">Mumbai<br/>
            <input type="radio" name="answer6" value="Kolkata">Kolkata<br/>
            <input type="radio" name="answer6" value="Delhi">Delhi<br/>
            <input type="radio" name="answer6" value="Kathmandu">Kathmandu<br/>

            <p>Q7.  The capital of Nepal is: </p>
            <input type="radio" name="answer7" value="Mumbai">Mumbai<br/>
            <input type="radio" name="answer7" value="Kolkata">Kolkata<br/>
            <input type="radio" name="answer7" value="Delhi">Delhi<br/>
            <input type="radio" name="answer7" value="Kathmandu">Kathmandu<br/>

            <p>Q8.  The capital of Nepal is: </p>
            <input type="radio" name="answer8" value="Mumbai">Mumbai<br/>
            <input type="radio" name="answer8" value="Kolkata">Kolkata<br/>
            <input type="radio" name="answer8" value="Delhi">Delhi<br/>
            <input type="radio" name="answer8" value="Kathmandu">Kathmandu<br/>

			
			<input type="submit" value="submit">
		</form>
    </div>
	</body>
</html>