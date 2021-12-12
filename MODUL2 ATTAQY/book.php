<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESD Venue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <section id="Booking">
        <section id="nav">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav" style="margin-left: auto; margin-right:auto;">
                            <li class="nav-item">
                                <a class="nav-link" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="booking.php">Booking</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <section id="form">
            <div class="container-md" style="margin-left: auto; margin-right:auto; max-width : 80%; margin-top : 20px;">
                <p
                    style="text-align: center; background-color:rgb(33,37,41); color:white; height:40px; vertical-align: middle; line-height: 40px;">
                    Reserve your venue now!</p>
            </div>
            <div class="container" style="border: 1px solid rgb(228,228,228); max-width : 78%; border-radius : 5px">
                <div class="row">
                    <div class="col">
                        <img src=" https://alexandra.bridestory.com/image/upload/assets/img_6982-ryWLbkqR8.jpg"
                            style="height: 300px; margin-left: auto; margin-right:auto; display:block; margin-top: 200px;"
                            alt="">
                    </div>
                    <div class="col">
                    <form action="MyBooking.php" method="POST">

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" type="text" value="Raffi_1202190357"
                                aria-label="readonly input example" readonly name="name">
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="date" class="form-label">Event Date</label>
                            <input type="date" name="date" class="form-control">
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="start" class="form-label">Start Time</label>
                            <input type="time" name="start" class="form-control">
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="duration" class="form-label">Duration (Hours)</label>
                            <input type="number" name="duration" class="form-control" min="1" max="12">
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="type" class="form-label">Building Type</label>
                            <select class="form-select" aria-label="Default select example" name="building">
                                <option selected>Choose...</option>
                                <option value="Nusantara Hall">Nusantara Hall</option>
                                <option value="Garuda Hall">Garuda Hall</option>
                                <option value="Gedung Serba Guna">Gedung Serba Guna</option>
                            </select>
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="duration" class="form-label">Phone Number</label>
                            <input type="number" name="number" class="form-control" placeholder="">
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="service"> Add Service(s):</label>
                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="catering">
                                <label class="form-check-label" for="defaultCheck1">
                                    Catering / $700
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" name="decoration">
                                <label class="form-check-label" for="defaultCheck2">
                                    Decoration / $450
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" name="ssystem">
                                <label class="form-check-label" for="defaultCheck2">
                                    Sound System / $250
                                </label>
                            </div>
                            <div class="d-grid gap-2" style="margin-top : 30px;">
                                <button class="btn btn-primary" type="submit">Book</button>
                            </div>
                        </div>
                    </div>
        </section>
</body>
<footer>
    <div class="text-center p-4" style="background-color: rgb(230, 227, 227);">
        <p>Created By :  attaqy_1202194314</p>
    </div>
</footer>

</html>