    
    $('html, body').css({
        overflow: 'hidden',
        height: '100%'
    });

    $(window).on('load', function () {
        setTimeout(pageLoaded, 2000); //wait for page load PLUS two seconds.
    }) 
    
    function pageLoaded() {
        $("#loadingGif").html('<img src="./assets/img/logo.png" width="200px" />');
        $("#btnOpenPage").removeClass('d-none');
    }

    function initiateAudio(){
        var btn = $('.btn-audio');
            
        if(btn.hasClass('fa-volume')) {
            document.getElementById('audio').play();    
        }
    }
    
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

    $(document).ready(function() {

        $(".openPage").on("click", function(e){
            $( "#loading" ).fadeOut(500, function() {
                // fadeOut complete. Remove the loading div
                $("#loading").remove(); //makes page more lightweight 
    
                $('html, body').css({
                    overflow: 'auto',
                    height: 'auto'
                });

                initiateAudio();
            });  
        });

        $('[data-toggle="tooltip"]').tooltip();
        $('.jarallax').jarallax({
        // options here
        });
        AOS.init();

        $("#btnKirim").on("click", function(e){
            e.preventDefault();
            $('#mainForm').attr('action', "./scripts/ucapan.php").submit();
        });

        var countDownDate = new Date("2022-05-15 08:00:00").getTime();
        var now = new Date().getTime();
        var distance = countDownDate - now;
        
        if(distance > 0)
        {
            var x = setInterval(function() {
                
                var now = new Date().getTime();
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

        }else{
            $("#happening").removeClass('d-none');
        }
        
        $.fn.isInViewport = function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
        
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
        
            return elementBottom > viewportTop && elementTop < viewportBottom;
        };
        
    
        $(window).on('resize scroll', function() {
            AnimateToggle(10, '1');
            AnimateToggle(-10, '2');
            AnimateToggle(10, '3');
            AnimateToggle(-10, '4'); 
            AnimateToggle(10, '5');
            AnimateToggle(-10, '6'); 
        });

        AnimateRotate(10, '1');
        AnimateRotate(-10, '2');  
        AnimateRotate(10, '3');
        AnimateRotate(-10, '4'); 
        AnimateRotate(10, '5');
        AnimateRotate(-10, '6'); 

        $("#img-video").click(function(){    
            $(this).hide();
            player = new YT.Player('player', {
            width: '100%',
            height: '100%',
            playerVars: { 'controls': 1,'autohide':1},
            videoId: '3egSVXTFnoc',
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
            });
    
            function onPlayerReady(event) {
                event.target.playVideo();
                
                if($('.btn-audio').hasClass('fa-volume')){
                    $('.btn-audio').removeClass("fa-volume");
                    $('.btn-audio').addClass("fa-volume-xmark");
                    document.getElementById('audio').pause();
                }
            } 
            
            function onPlayerStateChange(event) {        
                if(event.data === 0) {            
                    event.target.playVideo();
                }
            }
        });
    });

    function AnimateRotate(angle, className) {
        var duration= 3000;
        var $elem = $('.animate-' + className);

        setTimeout(function() {
            if ($elem.hasClass('animating')) {
                AnimateRotate(angle, className);
            }
        },duration)

    
        $elem.animate({deg: angle}, {
            duration: duration/2,
            step: function(now) {
                $elem.css({
                    'transform': 'rotate('+ now +'deg)'
                });
            }
        }).animate({deg: 0}, {
            duration: duration/2,
            step: function(now) {
                $elem.css({
                    'transform': 'rotate('+ now +'deg)'
                });
            }
        });
    }
    
    function AnimateToggle(num, tailClass)
    {
        var view1 = $('.animate-' + tailClass);

        if (view1.isInViewport()) {
            if (!view1.hasClass('animating')) {
                view1.addClass('animating');
                AnimateRotate(num, tailClass);
            }
        }
        else
        {
            if (view1.hasClass('animating')) {
                view1.removeClass('animating');
            }
        }
    }


    function copyToClipboard(id, text) {
        if (window.clipboardData && window.clipboardData.setData) {
            // Internet Explorer-specific code path to prevent textarea being shown while dialog is visible.
            window.clipboardData.setData("Text", text);
        }
        else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
            var textarea = document.createElement("textarea");
            textarea.textContent = text;
            textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in Microsoft Edge.
            document.body.appendChild(textarea);
            textarea.select();
            try {
                document.execCommand("copy");  // Security exception may be thrown by some browsers.
            }
            catch (ex) {
                console.warn("Copy to clipboard failed.", ex);
                prompt("Copy to clipboard: Ctrl+C, Enter", text);
            }
            finally {
                document.body.removeChild(textarea);
            }
        }
        
        /* Alert the copied text */
        $('#'+id).html('copied success');
        setTimeout(function() {$('#'+id).html('<i class="fa-regular fa-copy"></i>&nbsp;copy');}, 2000);
    }