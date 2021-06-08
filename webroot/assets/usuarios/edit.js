// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()

const btnCleanForm = document.getElementById('btnCleanForm');

const nameForm = document.getElementById('nome');
const documentForm = document.getElementById('documento');
const birthdayForm = document.getElementById('nascimento');

const insertMaskDate = () => {
    const dateMask = {
        mask: '00/00/0000'
    }
    const date = new Date(birthdayForm.value).toLocaleDateString('pt-Br', { timeZone: 'UTC' })
    birthdayForm.value = date;
    IMask(birthdayForm, dateMask);
}

const cleanForm = () => {
    nameForm.value = '';
    documentForm.value = '';
    birthdayForm.value = '';
}

btnCleanForm.addEventListener('click', cleanForm);
insertMaskDate();