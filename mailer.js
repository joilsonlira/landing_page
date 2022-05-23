const nodemailer = require('nodemailer');

var input = document.querySelector("#name_contato");
var nome = input.value;

var input = document.querySelector("#email_contato");
var email = input.value;

var input = document.querySelector("#mensagem_contato");
var text = input.value;

const transporter = nodemailer.createTransport({
    host: "smtp.gmail.com",
    port: 587,
    secure: false, // true for 465, false for other ports
    auth: {
        user: "lirajoilson@gmail.com",
        pass: "J261Poke##"
    },
    tls: { rejectUnauthorized: false }
});

const mailOptions = {
    from: 'lirajoilson@gmail.com',
    to: 'mkt@anexoeventos.com.br',
    nome: nome,
    email: email,
    subject: 'E-mail enviado!',
    text: text
};

transporter.sendMail(mailOptions, function(error, info){
    if (error) {
    console.log(error);
    } else {
    console.log('Email enviado: ' + info.response);
    }
});