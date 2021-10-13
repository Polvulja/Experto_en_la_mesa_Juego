const express = require('express');
const morgan = require('morgan');

//iniciar
const app=express();

//config
app.set('port', 4000);

//midlewears
app.use(morgan('dev'));

//variables globales


//routas
app.use(require('./routes'));

//archivos publicos

//starting server
app.listen(app.get('port'),()=>{
    console.log("servidor Funcionando Correctamente en el puerto", app.get('port'));
});