document.addEventListener("DOMContentLoaded", function () {
    const stepOnePage = document.querySelector('.page1');
    const stepTwoPage = document.querySelector('.page2');
    const stepThreePage = document.querySelector('.page3');

    const formSubmitBtn = document.querySelector('.button');
    const formBackBtn = document.querySelector('.back');

    const popup = document.querySelector('.popup');
    const popupContent = document.querySelector('.popup-content');
    const popupMessage = document.querySelector('.popup-message');
    const popupClose = document.querySelector('.popup-close');

    const popup2 = document.querySelector('.popup2');
    const popupContent2 = document.querySelector('.popup-content2');
    const popupMessage2 = document.querySelector('.popup-message2');

    let currentPage = 1;

    function showPopup(message) {
        popupMessage.textContent = message;
        popup.style.display = 'flex';

        if (duration !== null) {
            setTimeout(function() {
                hidePopup();
            }, duration);
        }
    }

    function hidePopup() {
        popup.style.display = 'none';
    }

    function showPopup2(message, duration = 3000) {
        popupMessage2.textContent = message;
        popup2.style.display = 'flex';

        setTimeout(function() {
            hidePopup2();
        }, duration);
    }

    function hidePopup2() {
        popup2.style.display = 'none';
    }

    popup.style.display = 'none';
    popup2.style.display = 'none';

    formSubmitBtn.addEventListener("click", function (event) {
        event.preventDefault();

        if (currentPage === 1) {
            const requiredInputs = Array.from(stepOnePage.querySelectorAll('.input:not(#name)'));
            const inputsFilled = requiredInputs.every(input => input.value.trim() !== '');

            if (!inputsFilled) {
                showPopup("Please fill in all required fields before proceeding.");
                return;
            }

            stepOnePage.classList.remove('active');
            stepTwoPage.classList.add('active');
            formBackBtn.classList.add('active');
            currentPage = 2;
        } else if (currentPage === 2) {
            var radioButtons = document.querySelectorAll('input[type="radio"]');
            var isAnyRadioButtonChecked = false;

            for (var i = 0; i < radioButtons.length; i++) {
                if (radioButtons[i].checked) {
                    isAnyRadioButtonChecked = true;
                    break;
                }
            }

            if (!isAnyRadioButtonChecked) {
                showPopup("Please select a rating for each item.");
                return false;
            }
        
            stepTwoPage.classList.remove('active');
            stepThreePage.classList.add('active');
            formBackBtn.classList.add('active');
            formSubmitBtn.textContent = 'SUBMIT';
            currentPage = 3;
        } else if (currentPage === 3) {
            showPopup2("Thank you for your response.");
            document.querySelector('form').submit();
        }
    });

    popupClose.addEventListener('click', hidePopup);

    formBackBtn.addEventListener("click", function (event) {
        event.preventDefault();

        if (currentPage === 2) {
            stepOnePage.classList.add('active');
            stepTwoPage.classList.remove('active');
            formBackBtn.classList.remove('active');
            currentPage = 1;
        } else if (currentPage === 3) {
            stepTwoPage.classList.add('active');
            stepThreePage.classList.remove('active');
            formSubmitBtn.textContent = 'NEXT';
            currentPage = 2;
        }
    });
});