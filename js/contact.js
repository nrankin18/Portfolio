const sent = window.location.search.substring(1);
if (sent == "sent=1") {
    Swal.fire({
        icon: 'success',
        title: 'Message sent',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    });
} else if (sent == "sent=0") {
    Swal.fire({
        footer: '<a href="mailto:me@nathan-rankin.com">Send me an email directly</a>',
        icon: 'error',
        title: 'Message failed to send',
        showConfirmButton: false,
        timer: 10000,
        timerProgressBar: true,
        showCloseButton: true
    });
} else if (sent == "sent=2") {
    Swal.fire({
        footer: '<a href="mailto:me@nathan-rankin.com">Send me an email directly</a>',
        icon: 'warning',
        title: 'Error validating reCAPTCHA',
        showConfirmButton: false,
        timer: 10000,
        timerProgressBar: true,
        showCloseButton: true
    });
}