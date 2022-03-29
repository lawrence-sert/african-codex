function countWords(self) {
  var spaces = self.value.match(/\S+/g);
  var words = spaces ? spaces.length : 0;
  var str = self.value;
  var chrTyped = str.split("").length;
  document.getElementById("words-counter").innerHTML = words + " words" + " "+ chrTyped + " Characters" ;
}

// Displaying older sentences
if(localStorage.getItem('wordWidget') != null) {
  const senMain = JSON.parse(localStorage.getItem('wordWidget'));
   //map the two arrays to a single array
  let items = "";
  for(let i = 0; i < senMain.length; i++) {
    items += `<p>${senMain[i]}</p>`;
  }
  document.getElementById("list").innerHTML = sentence;
}

document.querySelector('#list').addEventListener('click', function(event){
  if(event.target.nodeName === 'P'){
    console.log(event.target.innerHTML);
  }
})



function highlightWords() {
  //value entered by user
  const getWords = document.querySelector( "#words").value;
  const localStorageContent = localStorage.getItem('wordWidget');
  let SentenceWords;

  if(localStorageContent === null) {
    SentenceWords = [];
  }
  else {
    SentenceWords = JSON.parse(localStorageContent);
  }
  SentenceWords.push(getWords);
  localStorage.setItem('wordWidget', JSON.stringify(SentenceWords));



  let output = "";
  let words = getWords.split(" ");
  let replacementword = ""; 
  for (let i = 0; i < words.length; i++) {
    let word = words[i];
    if (word.length >= 4) {  
      replacementword = "<span class='lightext'>" + word + "</span>";  
    } 
    else {
      replacementword = word;  
    }
    output = output + " " + replacementword + " ";
  }

      const checkBox = "<label for='myCheck'>Hide All Words Shorter Than 5 Characters :</label><input type='checkbox' id='myCheck' onclick='myFunction()'>";
      document.getElementById("demo").innerHTML = checkBox + "<div class='alert alert-dark' role='alert'>" + output + "</div>";
    }


function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    let output = "";
    let replacementword = "";
   const getWords = document.querySelector( "#words").value;
    var newstr = getWords.replace(/(\b(\w{1,5})\b(\s|$))/g,'').split(" ");
    replacementword = "<span class='lightext'>" + newstr + "</span>"; 
    output = output + " " + replacementword + " ";
    console.log(newstr);
    const checkBox = "<label for='myCheck'>Hide All Words Shorter Than 5 Characters :</label><input type='checkbox' id='myCheck' onclick='highlightWords()'>";
    document.getElementById("demo").innerHTML = checkBox + "<div class='alert alert-dark' role='alert'>" + output + "</div>";
  } else {
     text.style.display = "none";
     console.log('hellow');
  }
}

//refresh page
function refreshPage() {
  window.location.reload();
}
