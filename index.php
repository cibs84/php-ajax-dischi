<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ajax Dischi</title>

    <!-- Link - style.css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Link - Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link - Bootstrap 5.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <!-- Link - Google Fonts: Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    
    <!-- HEADER -->
    <header>
        <span class="spotify-icon">
            <i class="fa-brands fa-spotify"></i>
        </span>
    </header>

    <!-- MAIN -->
    <main>
        <!-- SECTION - Album List -->
        <section class="albums-section">
                
            <div class="container">
                
    
                <!-- Le cards album saranno visualizzate SE sarà completato il trasferimento dei dati relativi agli album -->
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5">
                    <div class="col">
                        <div class="album-card">
                            <!-- <img class="album-image" :src="url" :alt="`${author} - ${title}`"> -->
                            <h2 class="album-title">[TITLE]</h2>
                            <div class="album-author">[AUTHOR]</div>
                            <div class="album-year">[YEAR]</div>
                        </div>
                    </div>
                </div>
    
            </div>
        </section>
    </main>

</body>
</html>