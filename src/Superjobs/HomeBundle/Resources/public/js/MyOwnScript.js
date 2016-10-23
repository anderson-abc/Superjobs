$(document).ready(function () {
    console.log("ready!");

    $('#skills').inputosaurus({
        width: '350px',
        autoCompleteSource: ['', 'Java', 'PHP', 'MySQL', 'PostgreSQL', '.NET'],
        activateFinalResult: true
    });
// custom formatting example
    $('#earth').data('countToOptions', {
        formatter: function (value, options) {
            return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
    });

// start all the timers
    $('.timer').each(count);

// restart a timer when a button is clicked
    $('.restart').click(function (event) {
        event.preventDefault();
        var target = $(this).data('target');
        count.call($(target));
    });
    $(".search-submit").click(function () {
        
        var pattern = $(".search-input").val();
        if (!pattern)
            pattern = "all";
        $.ajax({
            type: "POST",
            url: "./result/" + pattern,
            data: {
                pattern: pattern
            },
            success: function (response) {

                $('html body div.container div.count').hide();
                $("html body div.container div.row div.col-xs-12.col-md-8").hide().html(response).fadeIn('slow');
                ;
            }
        });
    });
});
function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    $this.countTo(options);
}
function submitcv() {
    $(document).on("click", ".btn.btn-info.postuler", function () {
        $(".submitForm").toggle('slow');

    });
}