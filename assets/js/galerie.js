let images =[
    "assets/image/gta_decor_5.png",
    "assets/image/mobile1.png",
    "assets/image/mobile2.png",
    "assets/image/mobile3.png",
    "assets/image/mobile4.png",
    "assets/image/teasera.png",
    "assets/image/teaserb.png",
    "assets/image/teaserc.png",
    "assets/image/teaserd.png",
    "assets/image/teasere.png",
    "assets/image/teaserf.png",
  
  ];

const galleryContainer = document.querySelector('.gallery');


images.forEach((imagePath) => {
  const imageContainer = document.createElement('div');
  imageContainer.classList.add('image-container');

  const image = document.createElement('img');
  image.src = imagePath;
  image.alt = 'Image';

  imageContainer.appendChild(image);
  galleryContainer.appendChild(imageContainer);
});