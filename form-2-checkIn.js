const form = document.getElementById('form');
const username = document.getElementById('Fname');
const lastname = document.getElementById('Lname');
const salary = document.getElementById('Salary');
const address = document.getElementById('Address');
const phone = document.getElementById('phone');
const startdate = document.getElementById('StartDate');
const position = document.getElementById('Position');
const Tname = document.getElementById('Tname');
const driveCar = document.getElementById('DriveCar');
const computer = document.getElementById('Computer');


form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const lastnameValue = lastname.value.trim();
    const salaryValue = salary.value.trim();
    const addressValue = address.value.trim();
    const phoneValue = phone.value.trim();
    const startdateValue = startdate.value.trim();
    const positionValue = position.value.trim();
    const TnameValue = Tname.value.trim();
    const driveCarValue = driveCar.value.trim();
    const computerValue = computer.value.trim();

    console.log(usernameValue);
    console.log(lastnameValue);
    console.log(salaryValue);
    console.log(addressValue);
    console.log(phoneValue);
    console.log(startdateValue);
    console.log(positionValue);
    console.log(TnameValue);


    if(usernameValue === '') {
        setError(username, '*frist name is required');
    } else {
        setSuccess(username);
    }

    if(lastnameValue === '') {
        setError(lastname, '*last name is required');
    } else {
        setSuccess(lastname);
    }

    if(salaryValue === '') {
        setError(salary, '*salary is required');
    } else {
        setSuccess(salary);
    }

    if(addressValue === '') {
        setError(address, '*Address is required');
    } else {
        setSuccess(address);
    }

    if(phoneValue === '') {
        setError(phone, '*Phone is required');
    } else {
        setSuccess(phone);
    }
    
    if(startdateValue === '') {
        setError(startdate, '*Start Work is required');
    } else {
        setSuccess(startdate);
    }
    
    if(positionValue === '') {
        setError(position, '*Position is required');
    } else {
        setSuccess(position);
    }

    if(TnameValue === '') {
        setError(Tname, '*fastname is required');
    } else {
        setSuccess(Tname);
    }

    if(driveCarValue === '') {
        setError(driveCar, '*driveCar is required');
    } else {
        setSuccess(driveCar);
    }

    if(computerValue === '') {
        setError(computer, '*computer is required');
    } else {
        setSuccess(computer);
    }
    
};
