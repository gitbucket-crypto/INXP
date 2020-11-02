(function ($) {
    "use strict";
    $(function () {
        $("#faqQuestion,#contactForm2,#contactForm").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                name: {
                    required: true,
                },
                subject: {
                    required: true,
                },
                message: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: 'O nome não pode ser em branco',
                },
                subject: {
                    required: 'O assunto não poder ser em branco',
                },
                message: {
                    required: 'A menssagem pode ser em branco',
                },
                email: {
                    required: 'O e-mail não pode ser em branco',
                    email: 'Por favor digite um e-mail valido'
                }

            },
            submitHandler: function (form) {
                tosetrMessage('success', 'successfuly question add')
            }
        });
    });

    $(function () {
        $("#commentAdd").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                name: {
                    required: true,
                },
                website: {
                    required: true,
                },
                comment: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: 'Name can not be empty',
                },
                website: {
                    required: 'Website can not be empty',
                },
                comment: {
                    required: 'Comment can not be empty',
                },
                email: {
                    required: 'E-mail can not be empty',
                    email: 'Please enter a valid email address'
                }

            },
            submitHandler: function (form) {
                tosetrMessage('success', 'successfuly Comment add')
            }
        });
    });

    $(function () {
        $("#appointment").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                name: {
                    required: true,
                },
                doctor: {
                    required: true,
                },
                website: {
                    required: true,
                },
                message: {
                    required: true,
                },
                date: {
                    required: true,

                }
            },
            messages: {
                name: {
                    required: 'O campo nome não pode ser em branco',
                },
                website: {
                    required: 'Website can not be empty',
                },
                doctor: {
                    required: 'Doctor can not be empty',
                },
                message: {
                    required: 'Message can not be empty',
                },
                date: {
                    required: 'Date can not be empty',
                },
                email: {
                    required: 'E-mail can not be empty',
                    email: 'Please enter a valid email address'
                }

            },
            submitHandler: function (form) {
                tosetrMessage('success', 'successfuly Appointment add')
            }
        });
    });

    function tosetrMessage(type, message) {
        $('.tostfyMessage').css({ "top": "5px", "visibility": "visible", "opacity": 1 });
        $('.tostfyMessage').find('.messageValue').text(message);
        if (type == 'success') {
            $('.tostfyMessage').addClass('bg-success')
        } else if (type == 'warning') {
            $('.tostfyMessage').addClass('bg-warning')
        } else if (type == 'error') {
            $('.tostfyMessage').addClass('bg-danger')
        }
        setTimeout(function () {
            $('.tostfyMessage').css({ "top": "-100%", "visibility": "hidden", "opacity": 0 })
        }, 3000);
        $('.tostfyClose').on('click', function () {
            $('.tostfyMessage').css({ "top": "-100%", "visibility": "hidden", "opacity": 0 })
        })
    }
})(jQuery);
