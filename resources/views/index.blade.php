<!DOCTYPE html>
<html lang="en" ng-app="bookWishlistApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Book Wishlist Application</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        

        {{-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.min.js"></script>
        <script src="https://code.angularjs.org/1.3.13/angular.js" data-semver="1.3.13" data-require="angular.js@*"></script>
        <script data-require="angular-cookies@*" data-semver="1.3.13" src="https://code.angularjs.org/1.3.13/angular-cookies.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-route/1.8.3/angular-route.min.js" integrity="sha512-y1qD3hz/IAf8W4+/UMLZ+CN6LIoUGi7srWJ3r1R17Hid8x0yXe+1B5ZelkaL1Mjzedzu0Cg3HBvDG02SAgSzBw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         --}}

        <script src="{{ asset('lib/angular.min.js') }}"></script>
        <script src="{{ asset('lib/angular-route.js') }}"></script>
        <script src="{{ asset('lib/angular-animate.min.js') }}"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js" integrity="sha512-WFN04846sdKMIP5LKNphMaWzU7YpMyCU245etK3g/2ARYbPK9Ub18eG+ljU96qKRCWh+quCY7yefSmlkQw1ANQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

        {{-- <script src="bower_components/angular/angular.min.js"></script> --}}
        {{-- <script src="bower_components/lodash/lodash.min.js"></script> --}}
        {{-- <script src="bower_components/angular-route/angular-route.min.js"></script> --}}
        {{-- <script src="bower_components/angular-local-storage/dist/angular-local-storage.min.js"></script>
        <script src="bower_components/restangular/dist/restangular.min.js"></script> --}}

        <style>
            
            li {
                padding-bottom: 8px;
            }

        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Book Wishlist Application</h1>
                </div>
            </div>
            <div ng-view></div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/controller.js') }}"></script>
        <script src="{{ asset('js/services.js') }}"></script>
        {{-- <script src="js/controllers.js"></script> --}}
        {{--     
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> --}}
    </body>
</html>