document.addEventListener('wpcf7mailsent', function(event) {
    if (event.detail.contactFormId == "2464619") {
        gtag('event', 'form_submitted', {
            'event_category': 'Form',
            'event_label': 'Request Demo'
        });
    }
}, false);


