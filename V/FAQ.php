<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="V/CSS/FAQ.css" rel="stylesheet"/>
    <title>Information</title>
</head>
<body>
    <h1>All the information on your job are Here </h1>
    <main>
        <h2>We recruit only the best of the best, need to be at least bilingual, multilingual appreciated, missions all over the worlds from Kazakstan to Bombay</h2>
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
    <div class="Part2">
        <img src="V/IMG/STUP.jpg" alt="stup">
        <h2>Here are some criteria that are a no Go :</h2>
        <h3>Drug deal/Affiliation with mob</h3>
    </div>
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