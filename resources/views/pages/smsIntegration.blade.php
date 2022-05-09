<!DOCTYPE html>
<html lang="en">

<head>
    <title>Twilio Api Integration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the header */
        header {
            background-color: #666;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
        }

        /* Create two columns/boxes that floats next to each other */
        nav {
            float: left;
            width: 30%;
            height: 300px;
            /* only for demonstration, should be removed */
            background: #ccc;
            padding: 20px;
        }

        /* Style the list inside the menu */
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        article {
            float: left;
            padding: 20px;
            width: 70%;
            background-color: #f1f1f1;
            height: 300px;
            /* only for demonstration, should be removed */
        }

        /* Clear floats after the columns */
        section::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the footer */
        footer {
            background-color: #777;
            padding: 10px;
            text-align: center;
            color: white;
        }

        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        @media (max-width: 600px) {

            nav,
            article {
                width: 100%;
                height: auto;
            }
        }

    </style>
</head>

<body>
    <div class="container">
        <header>
            <h2>Twilio SMS API for laravel 8 </h2>
        </header>
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-8">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="phone"> Phone Number</label>
                       <input type="text" class="form-control" name="phone" placeholder="Enter phone number...">
                    </div>
                    <div class="form-group">
                        <label for="message"> Message</label>
                       <textarea name="message" id="" cols="6" rows="3" class="form-control" placeholder="Enter SMS content..."></textarea>
                    </div>
                    <div class="form-group pt-2">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>

        </div>
        <footer style="margin-top: 20px;">
            <p>Created by <span style="color: yellow">Kawsar Khan Sizar</span> </p>
        </footer>
    </div>

</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
