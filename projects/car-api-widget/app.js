const express = require('express');
const { engine } = require ('express-handlebars');
const bodyParser = require('body-parser');
const session = require('express-session');

const PORT = process.env.PORT || 3010;

const app = express();

const axios = require('axios');

app.engine('hbs', engine({
	layoutsDir: `${__dirname}/views/layouts`,
	extname: 'hbs',
	defaultLayout : 'index',
	partialsDir: `${__dirname}/views/partials`
}));
app.set('view engine', 'hbs');

app.use(express.static('public'));


app.get('/', (req, res) => {

   axios.get('http://api-tutor.herokuapp.com/v1/cars')
  .then(function (response) {
    // handle success
 	let carsArray = [];
 	response.data.map((cars)=>{
 		carsArray.push(cars);
 	});
 	res.render('main', 
 		{
 			layout: 'index',
 			cars: carsArray
 		});
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
  .then(function () {
    // always executed
  });

    
});

// parse application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({ extended: false }));

// parse application/json
app.use(bodyParser.json());





app.listen(PORT, function () {
    console.log('started on: ', this.address().port);
});