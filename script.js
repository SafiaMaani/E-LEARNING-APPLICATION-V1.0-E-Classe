const form = document.getElementById('form');
const userName = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const passwordConf = document.getElementById('passwordConf');

const errorMessage_1 = document.getElementById('error1');
const errorMessage_2 = document.getElementById('error2');
const errorMessage_3 = document.getElementById('error3');
const errorMessage_4 = document.getElementById('error4');

const good1 = document.getElementById('good1');
const bad1 = document.getElementById('bad1');

const good2 = document.getElementById('good2');
const bad2 = document.getElementById('bad2');

const good3 = document.getElementById('good3');
const bad3 = document.getElementById('bad3');

const good4 = document.getElementById('good4');
const bad4 = document.getElementById('bad4');

// var validRegex = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/;

function validation() {

    //Username empty !
    if (userName.value.trim() === '') {
        errorMessage_1.innerText = 'A username is required';
        errorMessage_1.style.color = 'red';
        userName.style.borderColor = 'red';
        good1.style.visibility = 'hidden';
        bad1.style.visibility = 'visible';
        return false;
    } else if(userName.value.length <= 3){
        errorMessage_1.innerText = 'This username is too short';
        errorMessage_1.style.color = 'red';
        userName.style.borderColor = 'red';
        good1.style.visibility = 'hidden';
        bad1.style.visibility = 'visible';
        return false;
    }else{
        errorMessage_1.innerText = 'valid name';
        errorMessage_1.style.color = 'green';
        userName.style.borderColor = 'green';
        good1.style.visibility = 'visible';
        bad1.style.visibility = 'hidden';
    }

    //Email empty
    // if (email.value.match(validRegex)) { }
    if (email.value.trim() === '') {
        errorMessage_2.innerText = 'Email is required';
        errorMessage_2.style.color = 'red';
        email.style.borderColor = 'red';
        good2.style.visibility = 'hidden';
        bad2.style.visibility = 'visible';
        return false;
    } else {
        errorMessage_2.innerText = 'valid email';
        errorMessage_2.style.color = 'green';
        email.style.borderColor = 'green';
        good2.style.visibility = 'visible';
        bad2.style.visibility = 'hidden';
    }

    //Psw1 depasse 6 caractères
    if (password.value.trim().length <= 6) {
        errorMessage_3.textContent = 'Password must be longer than 6 characters';
        errorMessage_3.style.color = 'red';
        password.style.borderColor = 'red';
        good3.style.visibility = 'hidden';
        bad3.style.visibility = 'visible';
        return false;
    } else {
        errorMessage_3.innerText = 'valid password';
        errorMessage_3.style.color = 'green';
        password.style.borderColor = 'green';
        good3.style.visibility = 'visible';
        bad3.style.visibility = 'hidden';
    }

    //Psw2 depasse 6 caractères
    if (passwordConf.value.trim().length <= 6) {
        errorMessage_4.textContent = 'Password must be longer than 6 characters';
        errorMessage_4.style.color = 'red';
        passwordConf.style.borderColor = 'red';
        good4.style.visibility = 'hidden';
        bad4.style.visibility = 'visible';
        return false;
    } else {
        errorMessage_4.innerText = 'valid password';
        errorMessage_4.style.color = 'green';
        passwordConf.style.borderColor = 'green';
        good4.style.visibility = 'visible';
        bad4.style.visibility = 'hidden';
    }

    //Psw1 == Psw2
    if (password.value != passwordConf.value) {
        console.log('hello')
        errorMessage_3.textContent = errorMessage_4.textContent = 'the password have to be identical';
        errorMessage_3.style.color = errorMessage_4.style.color = 'red';
        password.style.borderColor = passwordConf.style.borderColor = 'red';
        good3.style.visibility = good4.style.visibility = 'hidden';
        bad3.style.visibility = bad4.style.visibility = 'visible';
        return false;
    }
    return true;
}

const toast = document.getElementById('toast');
const notification = document.getElementById('notification');

toast.addEventListener('click' , function(e){
    notification.style.visibility = 'visible'
})
