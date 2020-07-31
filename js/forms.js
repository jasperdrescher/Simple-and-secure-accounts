function formhash(form, password)
{
    // Create a new element input, this will be our hashed password field.
    var p = document.createElement("input");

    // Add the new element to our form.
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Make sure the plaintext password doesn't get sent.
    password.value = "";

    // Finally submit the form.
    form.submit();
}

function regformhash(form, uid, email, password, conf)
{
    // Check each field has a value.
    if (uid.value == '' || email.value == '' || password.value == '' || conf.value == '')
    {
        alert('You must provide all the requested details. Please try again');
        return false;
    }
    
    // Check the username.
    re = /^\w+$/; 
    if(!re.test(form.username.value))
    { 
        alert("Username must contain only letters, numbers and underscores. Please try again"); 
        form.username.focus();
        return false; 
    }
    
    // Check that the password is sufficiently long (min 6 chars). The check is duplicated below, but this is included to give more specific guidance to the user.
    if (password.value.length < 6)
    {
        alert('Passwords must be at least 6 characters long.  Please try again');
        form.password.focus();
        return false;
    }
    
    // At least one number, one lowercase and one uppercase letter.
    // At least six characters.
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    if (!re.test(password.value))
    {
        alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
        return false;
    }
    
    // Check password and confirmation are the same.
    if (password.value != conf.value)
    {
        alert('Your password and confirmation do not match. Please try again');
        form.password.focus();
        return false;
    }
        
    // Create a new element input, this will be our hashed password field.
    var p = document.createElement("input");

    // Add the new element to our form.
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Make sure the plaintext password doesn't get sent.
    password.value = "";
    conf.value = "";

    // Finally submit the form.
    form.submit();
    return true;
}

const form = document.querySelector('form');
const passwordInput = document.querySelector('input#current-password');
const signinButton = document.querySelector('button#signin');
const togglePasswordButton = document.querySelector('button#toggle-password');

togglePasswordButton.addEventListener('click', togglePassword);

function togglePassword() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    togglePasswordButton.textContent = 'Hide password';
    togglePasswordButton.setAttribute('aria-label',
      'Hide password.');
  } else {
    passwordInput.type = 'password';
    togglePasswordButton.textContent = 'Show password';
    togglePasswordButton.setAttribute('aria-label',
      'Show password as plain text. ' +
      'Warning: this will display your password on the screen.');
  }
}

passwordInput.addEventListener('input', validatePassword);

// A production site would use more stringent password testing on the client
// and would sanitize and validate passwords on the back end.
function validatePassword() {
  let message= '';
  if (!/.{8,}/.test(passwordInput.value)) {
		message = 'At least eight characters. ';
  }
	if (!/.*[A-Z].*/.test(passwordInput.value)) {
		message += '\nAt least one uppercase letter. ';
  }
	if (!/.*[a-z].*/.test(passwordInput.value)) {
		message += '\nAt least one lowercase letter.';
  }
  passwordInput.setCustomValidity(message);
}

form.addEventListener('submit', handleFormSubmit);                       

function handleFormSubmit(event) {
  console.log('submit');
  if (form.checkValidity() === false) {
    console.log('not valid');
    event.preventDefault();
  } else {
    // On a production site do form submission.
    alert('Signing in!')
    signinButton.disabled = 'true';
    event.preventDefault();
  }
}