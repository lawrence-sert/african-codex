function countWords(self) {
  var spaces = self.value.match(/\S+/g);
  var words = spaces ? spaces.length : 0;
  var str = self.value;
  var chrTyped = str.split("").length;

  document.getElementById("words-counter").innerHTML = words + " words" + " "+ chrTyped + " Characters" ;

}


function highlightWords() {
  const getWords = document.querySelector( "#words").value;
  console.log(getWords);
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
    const checkBox = "<div class=''><input class='form-check-input' type='checkbox' value='checked' id='checkbox'><label class='form-check-label float-end'>hide all words shorter than 5 characters</label></div><br>" 
    document.getElementById("demo").innerHTML = checkBox + "<div class='alert alert-dark' role='alert'>" + output + "</div>";

}



//refresh page
function refreshPage() {
  window.location.reload();
}
