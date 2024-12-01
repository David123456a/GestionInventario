
const galleryItems = document.querySelectorAll('.gallery-item');
const galleryModal = document.getElementById('gallery-modal');
const ModalImg = document.getElementById('img');
const closeGallery = document.getElementsByClassName('close-gallery')[0];
 
galleryItems.forEach(item =>{
    item.addEventListener('click', function(){
        galleryModal.style.display = 'block';
        ModalImg.src= this.src;
    });
});
 
 
closeGallery.addEventListener('click', function(){
    galleryModal.style.display='none';    
});
