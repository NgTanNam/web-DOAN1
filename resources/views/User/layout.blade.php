<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
</head>

<body>
    <!-- nav -->
    <nav class="navbar">
        @include('User.element.header')
    </nav>
    <!-- end of nav -->

    @yield('content')

    <!-- footer -->
    <footer class="py-4">
        @include('User.element.footer')
    </footer>
    <!-- end of footer -->

    <script>
        // image modal
        const allGalleryItem = document.querySelectorAll('.gallery-item');
        const imgModalDiv = document.getElementById('img-modal-box');
        const modalCloseBtn = document.getElementById('modal-close-btn');
        const nextBtn = document.getElementById('next-btn');
        const prevBtn = document.getElementById('prev-btn');
        let imgIndex = 0;

        allGalleryItem.forEach((galleryItem) => {
            galleryItem.addEventListener('click', () => {
                imgModalDiv.style.display = "block";
                let imgSrc = galleryItem.querySelector('img').src;
                imgIndex = parseInt(imgSrc.split("-")[1].substring(0, 1));
                showImageContent(imgIndex);
            })
        });

        // next click
        nextBtn.addEventListener('click', () => {
            imgIndex++;
            if (imgIndex > allGalleryItem.length) {
                imgIndex = 1;
            }
            showImageContent(imgIndex);
        });

        // previous click
        prevBtn.addEventListener('click', () => {
            imgIndex--;
            if (imgIndex <= 0) {
                imgIndex = allGalleryItem.length;
            }
            showImageContent(imgIndex);
        });

        function showImageContent(index) {
            imgModalDiv.querySelector('#img-modal img').src = `images/gallery-${index}.jpg`;
        }

        modalCloseBtn.addEventListener('click', () => {
            imgModalDiv.style.display = "none";
        })
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('frontend/khanh/template/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/khanh/template/css/utility.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/khanh/template/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/khanh/template/font/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/khanh/template/css/responsive.css')}}">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="{{asset('frontend/khanh/template/js/script.js')}}"></script>
</body>

</html>