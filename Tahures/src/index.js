const express = require('express');
const morgan= require('morgan');
const exphbs = require('express-handlebars');
const path = require ('path');

const app=express();
app.set('port', 4000);
app.set('views',path.join(__dirname, 'views'));
app.engine('hbs',exphbs({
	defaultLayout:'main',
	layoutsDir: path.join(app.get('views'), 'Layouts'),
	partialsDir: path.join(app.get('views'), 'partials'),
	extname:'.hbs',
	helpers: require('./lib/handlebars')
}));
app.set('view engine','.hbs');


app.use(morgan('dev'));
app.use(express.urlencoded({extended:false}));
app.use (express.json());
/*variables globales*/
app.use((req, res, next)=>{
	next();
});


/*rutas*/
app.use(require('./routes'));
app.use(require('./routes/authentication'));
app.use('/links',require('./routes/link'));

/*public*/
app.use(express.static(path.join(__dirname, 'public')))


app.listen(app.get('port'),()=>{
	console.log('server on port',app.get('port'));
});