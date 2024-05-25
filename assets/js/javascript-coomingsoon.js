
    // ----- doc ready
    $( document).ready(function() {
        
        let x = Math.floor((Math.random() * 3) + 1);
        document.getElementById("audio").setAttribute('src', './music/' + x +'.mp3');
        document.getElementById("audio").load();
        
        $('[data-toggle="tooltip"]').tooltip();

        $("#btnKirim").on("click", function(e){
            e.preventDefault();
            $('#mainForm').attr('action', "./scripts/validate.php").submit();
        });
        
        $("#btnSubmitTicket").on("click", function(e){
            e.preventDefault();
            $(location).attr("href", "http://tedodiah.com?id=" + $('#txtTicketId').val());
        });
        
        $('.jarallax').jarallax({
            // options here
        });
        AOS.init();
    });
    
    $(document).hover(function() {
        initiateAudio();
    });
    $(document).on("swipe",function(){
        initiateAudio();
    });
    $(document).click(function(evt) {
        initiateAudio();
    });

    function initiateAudio(){
        var btn = $('.btn-audio');
            
        if(btn.hasClass('fa-volume')) {
            document.getElementById('audio').play();    
        }
    }
    // ----- doc ready

    // ----- countdown    
    var x = setInterval(function() {
        var now = new Date();
        var distance = countDownDate - now;
            
        // Time calculations for days, hours, minutes and seconds
        document.getElementById("timer-d").innerHTML = (Math.floor(distance / (1000 * 60 * 60 * 24))).toString().padStart(2, "0");
        document.getElementById("timer-h").innerHTML = (Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).toString().padStart(2, "0");
        document.getElementById("timer-m").innerHTML = (Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))).toString().padStart(2, "0");
        document.getElementById("timer-s").innerHTML = (Math.floor((distance % (1000 * 60)) / 1000)).toString().padStart(2, "0");
            
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    // ----- countdown

    // ----- audio
    $('#btn-audio').click(function(){
        var btn = $('.btn-audio');
        
        if(btn.hasClass('fa-volume')){
            btn.removeClass("fa-volume");
            btn.addClass("fa-volume-xmark");
            document.getElementById('audio').pause();        
        } else if(btn.hasClass('fa-volume-xmark')) {
            btn.removeClass("fa-volume-xmark");
            btn.addClass("fa-volume");
            document.getElementById('audio').play();    
        }
    });
    // ----- audio