// const nodemailer = require('nodemailer');
const nodemailer = require('nodemailer');

var input_nome = document.querySelectorAll("#name_contato");
var nome = input_nome.value;

var input_email = document.querySelectorAll("#email_contato");
var email = input_email.value;

var input_text = document.querySelectorAll("#mensagem_contato");
var text = input_text.value;

console.logo(text)

const transporter = nodemailer.createTransport({
    host: "smtp.gmail.com",
    port: 25,
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