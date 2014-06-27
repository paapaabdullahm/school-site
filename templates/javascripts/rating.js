$(document).ready(function() {
        
    $('.rate_widget').each(function(i) {
        var widget = this;
        var out_data = {
            widget_id: $(widget).attr('record-id'),
            fetch: 1
        };
        $.post(
            '/includes/rating.php',
            out_data,
            function(INFO) {
                $(widget).data( 'fsr', INFO );
                set_votes(widget);
            },
            'json'
        );
    });

    $('.ratings_stars').hover(
        // Handles the mouseover
        function() {
            $(this).prevAll().andSelf().addClass('ratings_over');
            $(this).nextAll().removeClass('ratings_vote'); 
        },
        // Handles the mouseout
        function() {
            $(this).prevAll().andSelf().removeClass('ratings_over');
            // can't use 'this' because it wont contain the updated data
            set_votes($(this).parent());
        }
    );
     
    // This actually records the vote
    $('.ratings_stars').bind('click', function() {
        var star = this;
        var widget = $(this).parent();
        
        var clicked_data = {
            clicked_on : $(star).attr('class'),
            widget_id : $(star).parent().attr('record-id')
        };
        $.post(
            '/includes/rating.php',
            clicked_data,
            function(INFO) {
                widget.data( 'fsr', INFO );
                set_votes(widget);
            },
            'json'
        ); 
    });
    
    // This prevents multiple voting by the same user
    // For a more permanent solution, use SESSIONS instead
    $(function() {
			$(".ratings_stars").click(function(){
					$(".widget.menu .record001 .overlay").addClass("enabled"); //about
					$(".widget.menu .record002 .overlay").addClass("enabled"); //admissions
					$(".widget.menu .record003 .overlay").addClass("enabled"); //faq
					$(".widget.menu .record004 .overlay").addClass("enabled"); //gallery
					$(".widget.menu .record005 .overlay").addClass("enabled"); //alumni
					$(".widget.menu .record006 .overlay").addClass("enabled"); //groups
					$(".widget.menu .record007 .overlay").addClass("enabled"); //record service
					$(".widget.menu .record008 .overlay").addClass("enabled"); //e-centre
					$(".widget.menu .record009 .overlay").addClass("enabled"); //inet service
					$(".widget.menu .record010 .overlay").addClass("enabled"); //site map
					$(".widget.menu .record011 .overlay").addClass("enabled"); //online store
					$(".widget.menu .record012 .overlay").addClass("enabled"); //about
					$(".widget.menu .record013 .overlay").addClass("enabled"); //about
					$(".widget.menu .record014 .overlay").addClass("enabled"); //about
					$(".widget.menu .record015 .overlay").addClass("enabled"); //about
					$(".widget.menu .record016 .overlay").addClass("enabled"); //about
					$(".widget.menu .record017 .overlay").addClass("enabled"); //about
					$(".widget.menu .record018 .overlay").addClass("enabled"); //about
					$(".widget.menu .record019 .overlay").addClass("enabled"); //about
					$(".widget.menu .record020 .overlay").addClass("enabled"); //about
			});
		});
    
});

function set_votes(widget) {

    var avg = $(widget).data('fsr').whole_avg;
    var votes = $(widget).data('fsr').number_votes;
    var exact = $(widget).data('fsr').dec_avg;

    //window.console && console.log('and now in set_votes, it thinks the fsr is ' + $(widget).data('fsr').number_votes);
    
    $(widget).find('.star_' + avg).prevAll().andSelf().addClass('ratings_vote');
    $(widget).find('.star_' + avg).nextAll().removeClass('ratings_vote'); 
    $(widget).find('.ave-vote').text( exact );
    $(widget).find('.total-votes').text( votes );
}

