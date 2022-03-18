
let randomNumber = Math.ceil(Math.random()* 100);
const hardCodeRandomNum = 55;

function myGuess() {

  console.log(randomNumber);

  const GuessNumber = document.querySelector( "#guessNumber").value;

  if(GuessNumber == randomNumber) {

            // Restart a new game after 5 seconds
            var timeleft = 5;
            var downloadTimer = setInterval(function(){
              if(timeleft <= 0){
                clearInterval(downloadTimer);
                window.location.reload();
                alert("New game started!");
              } else {

              }
              timeleft -= 1;
            }, 500);

            var success = '<div class="alert alert-primary" id="demo" role="alert">'+
            '<strong>YCorrect, the secret number is</strong> ' + randomNumber + ' <br> New Game starts in <strong>' + timeleft + '</strong> Seconds'
            +'</div>';
          }

          else {

            if( randomNumber > GuessNumber){
              var success = '<div class="alert alert-warning" id="demo" role="alert">'+
              '<strong>Your guess is too Low</strong> '+'</div>';
            }
            else if( randomNumber < GuessNumber){
              var success = '<div class="alert alert-danger" id="demo" role="alert">'+
              '<strong>Your guess is too high</strong> '+'</div>';
            }

          }

          if (GuessNumber > 100){
            var success = '<div class="alert alert-info" id="demo" role="alert">'+
            '<strong>Error, Number Cannot be bigger than 100</strong> '
            +'</div>';
          }
          else if (GuessNumber <= 0){
            var success = '<div class="alert alert-info" id="demo" role="alert">'+
            '<strong>Error, Number Cannot be smaller than 0</strong> '
            +'</div>';
          }
          document.getElementById("demo").innerHTML = success;
        }


        function refreshPage() {
          window.location.reload();
          setTimeout( () => {
            alert("New Game Started"); 
          }, 3000);//wait 2 seconds
        }

        //show new game message for 3 seconds
        const newGameMsg = '<div class="alert alert-dark" id="demo" role="alert">'+
        '<strong>New Game Has Started</strong> '+'</div>';
        document.getElementById("newGameMsg").innerHTML = newGameMsg;
        setTimeout(function(){
          document.getElementById("newGameMsg").innerHTML = '';
        }, 3000);



        module.exports = {
          hardCodeRandomNum : function(){
            const RandomNum = 55;
            return RandomNum;
          },

          randomNumber: function(){
            const randomNumber = Math.ceil(Math.random()* 100);
            return randomNumber;
          }

        }
