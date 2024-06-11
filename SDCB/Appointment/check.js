document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('ticketForm');
    const statusResult = document.getElementById('statusResult');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const ticketNumber = document.getElementById('ticketNumber').value;

        const xhr = new XMLHttpRequest();
        xhr.open('GET', `number.php?ticket_number=${ticketNumber}`, true);
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 400) {
                statusResult.textContent = xhr.responseText;
            } else {
                statusResult.textContent = 'Error: Failed to retrieve ticket status';
            }
        };
        xhr.onerror = function() {
            statusResult.textContent = 'Error: Failed to connect to server';
        };
        xhr.send();
    });
});
