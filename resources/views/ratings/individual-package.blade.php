<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rating</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">

    

</head>
<body>

        <div class="content">
         @php
              if(Auth::check()){
                $user_id = Auth::user()->id ;
                foreach ($posts as $post) {

                $postid = $post->id;
                $title = $post->title;
                $content = $post->content;
                $link = $post->link;


                // User rating
                // $query = "SELECT * FROM post_rating WHERE postid=".$postid." and userid=".$userid;

                $query = App\PostRating::where('individual_package_id',$postid)
                                            ->where('user_id',$user_id)->get();

                $rating = $query->rating;

                 // get average
                 $query = App\PostRating::where('individual_package_id',$postid);

                 $avgresult = $query->avg('rating');
                 $avgresult = round( $avgresult ,1);

                

                 if($avgresult <= 0){
                    $avgresult = "No rating yet.";
                 }
 
                 
               
   
            }


            

            }


            else{
                var_dump("not logged in");
            }

         @endphp
        </div>




    <!--========= Scripts ===========-->
    <script src="js/jquery-latest.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>

    
    
</body>
</html>
