<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="V/CSS/accueil.css" rel="stylesheet" />
    <title>You are not supposed to be here</title>
    </head>
<body>
    <main>
        <h1> We are the Nation's last line of defense </h1>

        <div class="carousel-container">
            <div class="carousel-images">
                <img src="V/IMG/eiffel.jpg" alt="tour eiffel">
                <img src="V/IMG/bridge.jpg" alt="london bridge">
                <img src="V/IMG/kremlin.jpg" alt="kremlin">
            </div>
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
        </div>
    </main>

    <p>If you Have access to this page Congratulation you may have what it takes to do the dirty job, but you always have to remember that if we contact you for a Job failure is not an option because we are the Nation's last line of defense</p>

    <script>
        let index = 0;

        const images = document.querySelectorAll('.carousel-images img');
        const totalImages = images.length;
        const carousel = document.querySelector('.carousel-images');

        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');

        function showImage() {
            carousel.style.transform = `translateX(${-index * 100}%)`;
        }

        nextButton.addEventListener('click', function() {
            index = (index + 1) % totalImages;
            showImage();
        });

        prevButton.addEventListener('click', function() {
            index = (index - 1 + totalImages) % totalImages;
            showImage();
        });

        showImage();
    </script>
</body>
</html>