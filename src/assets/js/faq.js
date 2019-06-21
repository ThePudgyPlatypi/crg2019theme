// working in wordpress so you need to start with jQuery and pass in the $ since
// it is already taken
jQuery(document).ready(function($) {
    //hide all panels
    var panels = $(".answer-desc").hide();

    // trigger the event
    $('.toggle').click(function(e) {
        //prevent any default actions of the event
        e.preventDefault();
    
        // wrap event(this) in a jQuery Object
        var $this = $(this);
        // this is to make it easier to change if structure of html changes
        // also easier to read
        var $thisPanel = $this.parent().next();
        
        // conditional statement to check it current panels(or whatever) has open class
        // open class is something that is being added dynamically and not hard coded
        if($thisPanel.hasClass('open')) {
            // if the current panel that was clicked on has open class
            // then close(slide) up this panel and remove the class
            $thisPanel.slideUp().removeClass('open');
        } else {
            // if the class open IS NOT present on the element we clicked on then add the class
            // then open (slide) the panel.
            $thisPanel.addClass('open').slideDown();
            // this is the magic, go thru panels (which is an array of elements declared earlier)
            // and remove the open class and close(slide) them up, but NOT this panel, the panel that triggered the event
            panels.not($thisPanel).removeClass('open').slideUp();
        };
  });
});

// html structure
/* 
<div>
    <a>TRIGGER</a>
</div>
<div>
    PANEL 
</div> 
*/