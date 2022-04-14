<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow">

    <title> Pakistan Arms License Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- !-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<!-- Bootstrap -->
<link rel="stylesheet" href="https://pakarmslicence.com/public/frontend/css/bootstrap.min.css" type="text/css">

<!-- Icons -->
<link rel="stylesheet" href="https://pakarmslicence.com/public/frontend/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="https://pakarmslicence.com/public/frontend/css/line-awesome.min.css" type="text/css">

<link href="//db.onlinewebfonts.com/c/c54a166932c5bc65736d586858ccc14b?family=BFFionaSerifW01-Bold" rel="stylesheet" type="text/css"/>
<link href="//db.onlinewebfonts.com/c/599e244776c4868611b1e64fc39d3210?family=TeeFranklinW01-Bold" rel="stylesheet" type="text/css"/>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<script src="js/jquery.inputmask.bundle.js"></script>



<script type="text/javascript">

    $( document ).ready(function() {
        $(":input").inputmask('');
    });

</script>

<!-- jQuery -->


<script type="text/javascript">
const form = document.getElementById('form');
const error = document.getElementById('error');
const cnic = document.getElementById('cnic');
const thanks = document.getElementById('thanks');

cnic.oninvalid = invalid;
form.onsubmit = submit;

function invalid(event) {
  error.removeAttribute('hidden');
}

function submit(event) {
  form.setAttribute('hidden', '');
  thanks.removeAttribute('hidden');

  // For this example, don't actually submit the form
  event.preventDefault();
}

</script>





<style>
    @import  url(//db.onlinewebfonts.com/c/c54a166932c5bc65736d586858ccc14b?family=BFFionaSerifW01-Bold);
    @import  url(//db.onlinewebfonts.com/c/599e244776c4868611b1e64fc39d3210?family=TeeFranklinW01-Bold);
    @font-face {
        font-family: "BFFionaSerifW01-Bold"; 
        src: url("//db.onlinewebfonts.com/t/c54a166932c5bc65736d586858ccc14b.eot"); 
        src: url("//db.onlinewebfonts.com/t/c54a166932c5bc65736d586858ccc14b.eot?#iefix") format("embedded-opentype"), 
             url("//db.onlinewebfonts.com/t/c54a166932c5bc65736d586858ccc14b.woff2") format("woff2"), 
             url("//db.onlinewebfonts.com/t/c54a166932c5bc65736d586858ccc14b.woff") format("woff"), 
             url("//db.onlinewebfonts.com/t/c54a166932c5bc65736d586858ccc14b.ttf") format("truetype"), 
             url("//db.onlinewebfonts.com/t/c54a166932c5bc65736d586858ccc14b.svg#BFFionaSerifW01-Bold") format("svg"); 
    }

    @font-face {
        font-family: "TeeFranklinW01-Bold"; 
        src: url("//db.onlinewebfonts.com/t/599e244776c4868611b1e64fc39d3210.eot"); 
        src: url("//db.onlinewebfonts.com/t/599e244776c4868611b1e64fc39d3210.eot?#iefix") format("embedded-opentype"), 
             url("//db.onlinewebfonts.com/t/599e244776c4868611b1e64fc39d3210.woff2") format("woff2"), 
             url("//db.onlinewebfonts.com/t/599e244776c4868611b1e64fc39d3210.woff") format("woff"), 
             url("//db.onlinewebfonts.com/t/599e244776c4868611b1e64fc39d3210.ttf") format("truetype"), 
             url("//db.onlinewebfonts.com/t/599e244776c4868611b1e64fc39d3210.svg#TeeFranklinW01-Bold") format("svg"); 
    }
    body{
        font-family: "TeeFranklinW01-Bold";
    }
    body .form-header{
        font-family: "BFFionaSerifW01-Bold";
    }
    .btn-success{
        background-color: #16996f;
        border-radius: 2px !important;
    }
    .custom-shadow{
        box-shadow: 0 0 0.35rem rgba(0,0,0,.075)!important
    }
    .col-6 .form-header{
        font-size: 0.5rem !important;
    }
    .custom-shadow .search_label, #cnic, .submit-btn{
        font-size: .28rem !important;
    }
    .table{
        font-size: .4rem;
    }
    .table tr td:first-child{
        width: 50px;
    }
    @media(min-width:367px){
        .col-6 .form-header{
            font-size: .62rem !important;
        }
        .custom-shadow .search_label, #cnic, .submit-btn{
            font-size: .35rem !important;
        }
        .table{
            font-size: .45rem;
        }
        .table tr td:first-child{
            width: 60px;
        }
    }
    @media(min-width:424px){
        .col-6 .form-header{
            font-size: 0.74rem !important;
        }
        .custom-shadow .search_label, #cnic, .submit-btn{
            font-size: .43rem !important;
        }
        .table{
            font-size: .5rem;
        }
        .table tr td:first-child{
            width: 75px;
        }
    }
    @media(min-width:575px){
        .col-6 .form-header{
            font-size: .95rem !important;
        }
        .custom-shadow .search_label, #cnic, .submit-btn{
            font-size: .6rem !important;
        }
        .table{
            font-size: .65rem;
        }
        .table tr td:first-child{
            width: 95px;
        }
    }
    @media(min-width:767px){
        .col-6 .form-header{
            font-size: 1.3rem !important;
        }
        .custom-shadow .search_label, #cnic, .submit-btn{
            font-size: .85rem !important;
        }
        .table{
            font-size: .65rem;
        }
        .table tr td:first-child{
            width: 100px;
        }
    }
</style>

</head>

<body>
<!-- 
    <img src="E:\website\mono.jpg" class="rounded float-start" alt="logo">
<img src="E:\website\logo.svg.png" class="rounded float-end" alt="logo">
 -->
    <div class="body-wrap shop-default shop-cards shop-tech gry-bg">

    <section class="py-3">

    <div class="profile">

        <div class="container">

            <div class="row">

                <div class="col-xl-4 col-10 col-md-10 m-auto">

                    <div class="text-center px-35">
                        <span class=".d-print-flex"><img src="logo.svg.png" style="max-width: 30%;"></span>

                        <!-- <span class=".d-print-flex"><img src="mono.jpg" style="max-width: 30%;"></span> -->

                        

                        <span class="d-inline-block form-header">Verification Your Arms License</span>

                    </div>
                
                    <div class="card custom-shadow border-0">

                        <div class="p-1">

                            <div class="row align-items-center">

                                <div class="col-12 col-md-12 col-lg">

                                    <form class="form-default" id="form" action="/" method="POST">
                                        @csrf
                                    
                                    

                                            <div class="col-sm-10 col-md-10 col-10 m-auto">

                                                <div class="form-group text-center mb-1 mb-sm-1 mb-md-3">

                                                    <label class="search_label mt-sm-0 mt-md-3 mb-0">{{$message}}</label>
                                                    <form onsubmit="return ajsearch();">

                                                        <form method="post" action="/">
                                                            @csrf
                                                            <p id="error" hidden>Please fill out all fields.</p>
                                                            <input type="text" name="cnic" class="form-control-required form-control-sm text-left" data-inputmask="'mask':'99999-9999999-9'" placeholder="XXXXX-XXXXXXX-X" required>
                                                            <div class="form-group text-center m-0 mb-md-1">
                                                                    <button value= "search" type="submit" class="btn btn-success submit-btn px-2 py-1 rounded-0">Verify Arms License</button>
                                                                                                    
                                                                                                        
                                                        </form>
                                                        <table class="table table-bordered">
                                                        <tbody>
                                                            @if($message == 'Record Found')
                                                            @foreach($record as $key => $single)
                                                            <tr>
                                                                <td style="text-align:center;"><?php echo "Sr No:"; ?></td>
                                                                <td style="text-align:center;"><?php echo $key + 1; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center;"><?php echo "Applicant Name:"; ?></td>
                                                                <td style="text-align:center;"><?php echo $single->applicant_name; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center;"><?php echo "Father Name:"; ?></td>
                                                                <td style="text-align:center;"><?php echo $single->father_name; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center;"><?php echo "License No:"; ?></td>
                                                                <td style="text-align:center;"><?php echo $single->license_no; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center;"><?php echo "Weapon Type"; ?></td>
                                                                <td style="text-align:center;"><?php echo $single->weapon_type; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center;"><?php echo "Caliber:"; ?></td>
                                                                <td style="text-align:center;"><?php echo $single->calibar; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center;"><?php echo "Weapon No:"; ?></td>
                                                                <td style="text-align:center;"><?php echo $single->weapon_no; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center;"><?php echo "Cartridges:"; ?></td>
                                                                <td style="text-align:center;"><?php echo $single->cartridges; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center;"><?php echo "Status:"; ?></td>
                                                                <td style="text-align:center;"><?php echo $single->status; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center;"><?php echo "Issue Date:"; ?></td>
                                                                <td style="text-align:center;"><?php echo $single->i_date; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center;"><?php echo "Expiry Date:" ?></td>
                                                                <td style="text-align:center;"><?php echo $single->e_date; ?></td>
                                                            </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                        </table>
                            
                            
                            

                                                </div>

                                            </div>

                                        </div>

                                    </form>




<!-- Core -->
<script src="https://pakarmslicence.com/public/frontend/js/vendor/popper.min.js"></script>
<script src="https://pakarmslicence.com/public/frontend/js/vendor/bootstrap.min.js"></script>
<script src="https://pakarmslicence.com/public/frontend/js/bootstrap-tagsinput.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>