const assert = require('chai').assert;
const app = require('../js/fruits');
const { add } = require('../js/fruits');
const { checkEmoji } = require('../js/fruits');

// Get Functions
// getEmoji = app.isEmojis();

// getuserInput = app.usrInput();
describe('Localhost', function(){

  describe('Add two function', function(){
    it('Should add two number', function(){
      const result = add(2,2); 
      assert.equal(result, 4);
    });
  });

});

describe('User Input Checks', function(){

  describe('Emoji Validation', function(){
    it('Should add two number', function(){
      const result = checkEmoji(); 
      assert.equal(result, true);
    });
  });

});

