new DataTable('#example');

// Fetch all the forms we want to apply custom Bootstrap validation styles to
const forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        } else {
            // Prevent form submission
            event.preventDefault();

            // Show modal if form is valid
            $('#exampleModal').modal('show');
        }

        form.classList.add('was-validated')
    }, false)

    const myInput = document.getElementById('myInput')

    $('#exampleModal').on('shown.bs.modal', () => {
        myInput.focus()
    })

    $('#exampleModal').on('hidden.bs.modal', () => {
        // Redirect to another page after modal is closed
        window.location.href = 'Kontak';
    })
})

document.getElementById("printButton").addEventListener("click", function() {
    window.print();
});
