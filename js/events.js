/*------------------------------------
    -. CountUp
--------------------------------------*/

/*------------------------------------
    -. Desafios
--------------------------------------*/
if ($("#owl-desafios").length > 0) {
    $("#owl-desafios").owlCarousel({
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 2],
        itemsMobile: [640, 1],
        autoPlay: false,
        slideSpeed: 250
    });
};

/*------------------------------------
    -. Negocio
--------------------------------------*/
if ($(".owl-objetivos").length > 0) {
    $(".owl-objetivos").owlCarousel({
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [991, 1],
        itemsMobile: [785, 1],
        autoPlay: false,
        slideSpeed: 250
    });
}
/*------------------------------------
    -. Banners
--------------------------------------*/
if ($("#carousel-banners").length > 0) {
    $("#carousel-banners").owlCarousel({
        items: 1,
        autoPlay: false,
        slideSpeed: 250,
        nav: true
    });
};

/*------------------------------------
    -. Contador
--------------------------------------*/

$('.counter').each(function () {
    var $this = $(this),
        countTo = $this.attr('data-count');

    $({
        countNum: $this.text()
    }).animate({
            countNum: countTo
        },

        {

            duration: 8000,
            easing: 'linear',
            step: function () {
                $this.text(Math.floor(this.countNum));
            },
            complete: function () {
                $this.text(this.countNum);
                //alert('finished');
            }

        });
});

/*------------------------------------
    -. Profile
--------------------------------------*/

// $(document).ready(function() {

// var readURL = function(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//
//         reader.onload = function (e) {
//             $('.avatar').attr('src', e.target.result);
//         }
//
//         reader.readAsDataURL(input.files[0]);
//     }
// }
//
//
// $(".file-upload").on('change', function(){
//     readURL(this);
// });

/*------------------------------------
    -. Portfolio
--------------------------------------*/

$('.flipButton').bind("click", function () {
    $(this).toggleClass('action-buton-active');
    $(this).next().toggleClass('hover');
    var el = $(this);
    el.text() == el.data("text-swap") ?
        el.text(el.data("text-original")) :
        el.text(el.data("text-swap"));
});
/*------------------------------------
    -. Combos
--------------------------------------*/
if ($("#owl-combos").length > 0) {
    $("#owl-combos").owlCarousel({
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 2],
        itemsMobile: [640, 1],
        autoPlay: false,
        slideSpeed: 250
    });
};

/*------------------------------------
    -. Negocio
--------------------------------------*/
if ($(".owl-steps").length > 0) {
    $(".owl-steps").owlCarousel({
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [991, 1],
        itemsMobile: [785, 1],
        autoPlay: false,
        slideSpeed: 250
    });
}
/*------------------------------------
********** S U M M E R ****************
--------------------------------------*/

/*------------------------------------
    -. Negocio
--------------------------------------*/
if ($(".carousel-desafios").length > 0) {
    $(".carousel-desafios").owlCarousel({
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [991, 1],
        itemsMobile: [785, 1],
        autoPlay: false,
        slideSpeed: 250
    });
}

/*------------------------------------
    -. Tabs Periodos
--------------------------------------*/

$('.filtro-olas ul li').click(function () {
    $('.filtro-olas ul li').removeClass('active-periodo');
    $('.bloque-desafios .bloque').removeClass('active-bloque');
    var id = $("a", this).attr('href');
    var periodo = $('.bloque-desafios').find(id);
    $(this).addClass('active-periodo');
    $(periodo).addClass('active-bloque');
    return false;
});

+
function ($) {
    'use strict';

    var modals = $('.modal.multi-step');

    modals.each(function (idx, modal) {
        var $modal = $(modal);
        var $bodies = $modal.find('div.modal-body');
        var total_num_steps = $bodies.length;
        var $progress = $modal.find('.m-progress');
        var $progress_bar = $modal.find('.m-progress-bar');
        var $progress_stats = $modal.find('.m-progress-stats');
        var $progress_current = $modal.find('.m-progress-current');
        var $progress_total = $modal.find('.m-progress-total');
        var $progress_complete = $modal.find('.m-progress-complete');
        var reset_on_close = $modal.attr('reset-on-close') === 'true';

        function reset() {
            $modal.find('.step').hide();
            $modal.find('[data-step]').hide();
        }

        function completeSteps() {
            $progress_stats.hide();
            $progress_complete.show();
            $modal.find('.progress-text').animate({
                top: '-2em'
            });
            $modal.find('.complete-indicator').animate({
                top: '-2em'
            });
            $progress_bar.addClass('completed');
        }

        function getPercentComplete(current_step, total_steps) {
            return Math.min(current_step / total_steps * 100, 100) + '%';
        }

        function updateProgress(current, total) {
            $progress_bar.animate({
                width: getPercentComplete(current, total)
            });
            if (current - 1 >= total_num_steps) {
                completeSteps();
            } else {
                $progress_current.text(current);
            }

            $progress.find('[data-progress]').each(function () {
                var dp = $(this);
                if (dp.data().progress <= current - 1) {
                    dp.addClass('completed');
                } else {
                    dp.removeClass('completed');
                }
            });
        }

        function goToStep(step) {
            reset();
            var to_show = $modal.find('.step-' + step);
            if (to_show.length === 0) {
                // at the last step, nothing else to show
                return;
            }
            to_show.show();
            var current = parseInt(step, 10);
            updateProgress(current, total_num_steps);
            findFirstFocusableInput(to_show).focus();
        }

        function findFirstFocusableInput(parent) {
            var candidates = [parent.find('input'), parent.find('select'),
                    parent.find('textarea'), parent.find('button')
                ],
                winner = parent;
            $.each(candidates, function () {
                if (this.length > 0) {
                    winner = this[0];
                    return false;
                }
            });
            return $(winner);
        }

        function bindEventsToModal($modal) {
            var data_steps = [];
            $('[data-step]').each(function () {
                var step = $(this).data().step;
                if (step && $.inArray(step, data_steps) === -1) {
                    data_steps.push(step);
                }
            });

            $.each(data_steps, function (i, v) {
                $modal.on('next.m.' + v, {
                    step: v
                }, function (e) {
                    goToStep(e.data.step);
                });
            });
        }

        function initialize() {
            reset();
            updateProgress(1, total_num_steps);
            $modal.find('.step-1').show();
            $progress_complete.hide();
            $progress_total.text(total_num_steps);
            bindEventsToModal($modal, total_num_steps);
            $modal.data({
                total_num_steps: $bodies.length,
            });
            if (reset_on_close) {
                //Bootstrap 2.3.2
                $modal.on('hidden', function () {
                    reset();
                    $modal.find('.step-1').show();
                })
                //Bootstrap 3
                $modal.on('hidden.bs.modal', function () {
                    reset();
                    $modal.find('.step-1').show();
                })
            }
        }

        initialize();
    });
}