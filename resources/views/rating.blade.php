<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rating</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     
    <style>
        .star-outer {
            position: relative;
            display: inline-block;
        }

        .star-inner {
            position: absolute;
            top: 0;
            left:0;
            white-space:   ;
            overflow: hidden;
            width :0;

        }

        .star-outer::before {
            content: "\f005\f005\f005\f005\f005";
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            color:#ccc;
        }

        .star-inner::before {
            content: "\f005\f005\f005\f005\f005";
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            color:#F8ce0b;
           
            
        }

    </style>
   
</head>
<body>
    <div class="container">
            <h4>Package Description</h4>
            <div class="star-outer">
                    {{-- <i class="fas fa-star-half-alt"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="fas fa-star-half-alt"></i> --}}
                    <div class="star-inner"></div>
                    <span class="number-rating">4/5</span>          
            </div>
    </div>
    
        <script>
            // initial rating
            const ratings = {
                rating: 1
            }

            // total stars

            const starsTotal = 5;

            // run getRatingd when Dom is loaded
            document.addEventListener('DOMContentLoaded',getRatings);

            // get ratings
            function getRatings(){
                console.log(ratings.rating);

                const starPersentage = ((ratings.rating)/starsTotal)*100;
                console.log(starPersentage);

                // round to nearest 10
                const starPersentageRounded = `${Math.floor(starPersentage/10) * 10}%`;
                console.log(Math.round(starPersentage/10));

                // set width of star of inner-star
                document.querySelector(' .star-outer .star-inner').style.width = starPersentageRounded;

            }
        </script>
</body>
</html>