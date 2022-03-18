//resolving the localstorage
if(typeof window !=='undefined'){
  //SetData To LocalStorage
  if(localStorage.getItem('fruitNames') === null) {
    localStorage.setItem('fruitNames', '["Grapes", "Melon", "Watermelon", "Tangerine", "Lemon", "Banana", "Pineapple", "Mango", "Red Apple"]');
  }

  if(localStorage.getItem('fruitEmojis') === null) {
    localStorage.setItem('fruitEmojis', '["🍇", "🍈", "🍉", "🍊", "🍋", "🍌", "🍍", "🥭", "🍎"]');
  }

//View the localstorage data
// Check if Fruit Name Data is Available
if(localStorage.getItem('fruitNames') != null) {
  const fruitNam = JSON.parse(localStorage.getItem('fruitNames'));
  const fruitEmo = JSON.parse(localStorage.getItem('fruitEmojis'));
   //map the two arrays to a single array
   const fruitArray = fruitNam.map(function(e, i){
     return '<li class="list-group-item">'+ [e, fruitEmo[i]] + '</li>';
   });
//sort results in alphabetical order
fruitArray.sort();
//Display Results On Web Page 
document.getElementById('fruit-joined').innerHTML = fruitArray.join('');
console.log(fruitArray);
}

  //adding a new fruit
  function addFruit() {
    //get form data from the form
    const getFruitName = document.querySelector( "#fruitName").value.trim();
    //validate input
    if(getFruitName == "") {
      alert("Fruit Name Cannot Be Empty"); 
    }
    else {
      const oldFruitName =  JSON.parse(localStorage.getItem('fruitNames'));
      oldFruitName.push(getFruitName);
      // Save the old and new data to local storage
      localStorage.setItem('fruitNames', JSON.stringify(oldFruitName));
    }

    //validate fruit Emoji
    const getFruitEmoji = document.querySelector("#fruitEmoji").value;
    const regex = /\p{Extended_Pictographic}/ug;
    const emojiTest = regex.test(getFruitEmoji); // true, as expected
    console.log(emojiTest);
    if(emojiTest == false) {
      alert("Fruit Emoji Name Cannot Be Empty");
      return false;
    }
    else {
      const oldFruitEmoji =  JSON.parse(localStorage.getItem('fruitEmojis'));
      oldFruitEmoji.push(getFruitEmoji);
      // Save the old and new data to local storage
      localStorage.setItem('fruitEmojis', JSON.stringify(oldFruitEmoji));
      alert("New Fruit Added!");
      return true;
    }
  }
}
else {
  console.log('you are on the Server');
}

//search for fruits
function searchFruit() {
  const getSearch = document.querySelector( "#searchTerm").value;
  const oldFruitName =  JSON.parse(localStorage.getItem('fruitNames'));
  console.log (getSearch);
  console.log (oldFruitName);

  const searchRes = oldFruitName.find(findTerm);
  function findTerm(item) {
    return item === getSearch;
  }
  console.log(searchRes);
    if (searchRes == undefined) {
      const noResults = '<strong>No Results</strong> <hr>';
      document.getElementById("demo").innerHTML = noResults;
    }
    else {
      document.getElementById("demo").innerHTML = '<strong>' + searchRes + '</strong> <hr>';
    }
  
}

//refresh page
function refreshPage() {
  window.location.reload();
}

const add = function addition(a,b) {
  return a+b;
}

module.exports = {
  add,
  checkEmoji,
}