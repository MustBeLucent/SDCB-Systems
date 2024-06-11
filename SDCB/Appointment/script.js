document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('visitorForm');

    form.addEventListener('submit', (event) => {
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    function validateForm() {
        let isValid = true;

        const name = document.getElementById('name').value.trim();
        const contact = document.getElementById('contact').value.trim();
        const email = document.getElementById('email').value.trim();
        const agency = document.getElementById('agency').value.trim();
        const agency_visit = document.getElementById('agency_visit').value.trim();
        const date = document.getElementById('date').value;
        const time = document.getElementById('time').value;
        const purpose = document.getElementById('purpose').value.trim();

        if (name === '' || contact === '' || email === '' || agency === '' || agency_visit === '' || date === '' || time === '' || purpose === '') {
            alert('All fields are required');
            isValid = false;
        }

        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailRegex.test(email)) {
            alert('Invalid email format');
            isValid = false;
        }

        return isValid;
    }
});
