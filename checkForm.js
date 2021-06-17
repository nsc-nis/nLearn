document.getElementById('msgForm').onsubmit = function ()
{
    let txtField = document.getElementById('txtField');
    let emailField = document.getElementById('emailField');
    let msgField = document.getElementById('msgField');
    let errorMsg = document.getElementById('errorMsg');

    console.log('Formular wird ausgefüllt');
    if ( txtField.value === '' || emailField.value === '' || msgField.value === '')
    {
        errorMsg.innerHTML = 'Feld ist erforderlich';
        txtField.focus();
        return false;
    }
}
