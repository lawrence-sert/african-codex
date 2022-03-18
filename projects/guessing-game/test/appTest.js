const assert = require('chai').assert;
const app = require('../js/guessing');

// Results
getHardCodedRandom = app.hardCodeRandomNum();
getRandomNum = app.randomNumber();

// getuserInput = app.usrInput();

describe('Random Number Test', function(){

  describe('Get Hard Coded Number', function(){
    it(getHardCodedRandom.toString(), function(){
      assert.equal(getHardCodedRandom, '55');
    });
  });

  describe('Random number is less than 100', function(){
    it(getRandomNum.toString(), function(){
      assert.isBelow(getRandomNum, 100);
    });
  });

  describe('Random number is greater than 0', function(){
    it(getRandomNum.toString(), function(){
      assert.isAbove(getRandomNum, 0);
    });
  });

});

describe('User Input Test', function(){

  describe('Get Hard Coded Number', function(){
    it(getHardCodedRandom.toString(), function(){
      assert.equal(getHardCodedRandom, '55');
    });
  });

});