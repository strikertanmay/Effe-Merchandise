$(document).ready(function()  {

    $('#amount').val(350);
    $('#place').hide();
    $('#placediv').hide();
    $('#room').prop('required', true);
    $('#roomreq').text('*');

    $(function () {
        $('#datetimepicker1').datetimepicker({
            minDate: new Date('2018-03-01'),
            maxDate: moment(),
            format: 'L', 
        });
    });

    $('#hostel').change(function () {
        var hostel = $('#hostel').val();

        if(hostel === 'Not Applicable') {
            $('#place').fadeIn();
            $('#placediv').fadeIn();
            $('#room').prop('required', false);
            $('#roomreq').text('');
        } else {
            $('#place').fadeOut();
            $('#placediv').fadeOut();
            $('#room').prop('required', true);
            $('#roomreq').text('*');
        }
    })

    $('#tranvia').change(function () {
        var paidvia = $('#tranvia').val();

        if(paidvia === 'Cash') {
            $('#tranid').fadeOut();
            $('#traniddiv').fadeOut();
        }
        else {
            $('#tranid').fadeIn();
            $('#traniddiv').fadeIn();
        }
    });

    $('#ttype').change(function () {
        var quantity = $('#quantity').val();
        var type = $('#ttype').val();
        quantity = parseInt(quantity);

        $('#amount').val(350*quantity);
    });

    $('#quantity').change(function () {
        var quantity = $('#quantity').val();
        var type = $('#ttype').val();
        quantity = parseInt(quantity);

       $('#amount').val(350*quantity);
    });

    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    var img1 = document.getElementById('myImg1');
    var img2 = document.getElementById('myImg2');
    var img3 = document.getElementById('myImg3');
    var img4 = document.getElementById('myImg4');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        modalImg.alt = this.alt;
        captionText.innerHTML = this.alt;
    }
    img1.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        modalImg.alt = this.alt;
        captionText.innerHTML = this.alt;
    }
    img2.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        modalImg.alt = this.alt;
        captionText.innerHTML = this.alt;
    }
    img3.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        modalImg.alt = this.alt;
        captionText.innerHTML = this.alt;
    }
    img4.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        modalImg.alt = this.alt;
        captionText.innerHTML = this.alt;
    }

    // When the user clicks on <span> (x), close the modal
    modal.onclick = function() {
        img01.className += " out";
        setTimeout(function() {
        modal.style.display = "none";
        img01.className = "modal-content";
        }, 400);
        
    }
    // var i = 1;
    // setInterval(function() {
    //     if (i%3 == 1) {
    //         $('#myImg').attr("src", "../images/11-back.jpg");
    //         $('#myImg1').attr("src", "../images/22-back.jpg");
    //         $('#myImg2').attr("src", "../images/33-back.jpg");
    //         $('#myImg3').attr("src", "../images/44-back.jpg");
    //     } else if(i%3 == 2) {
    //         $('#myImg').attr("src", "../images/11-side.jpg");
    //         $('#myImg1').attr("src", "../images/22-side.jpg");
    //         $('#myImg2').attr("src", "../images/33-side.jpg");
    //         $('#myImg3').attr("src", "../images/44-side.jpg");
    //     } else {
    //         $('#myImg').attr("src", "../images/11.jpg");
    //         $('#myImg1').attr("src", "../images/22.jpg");
    //         $('#myImg2').attr("src", "../images/33.jpg");
    //         $('#myImg3').attr("src", "../images/44.jpg");
    //     }
    //     i++;
    // }, 5000);
    
});