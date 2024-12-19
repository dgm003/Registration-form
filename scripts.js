$(document).ready(function () {
    $("#registrationForm").submit(function (event) {
        // Prevent default form submission
        event.preventDefault();

        // Show a success message
        $("#successMessage").removeClass("hidden");

        // Allow form submission after 1 second (for real PHP backend)
        setTimeout(() => {
            this.submit();
        }, 1000);
    });
});
