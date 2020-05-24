const track = document.querySelector('.carousel_track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.nextBut');
const prevButton = document.querySelector('.prevBut');

const slideSize = slides[0].getBoundingClientRect();
const slideWidth = slideSize.width;

//arrange slide next to each other
const setSlidePosition = (slide,index)=>{
    slide.style.left = slideWidth*index + 'px';
}
slides.forEach(setSlidePosition);

//when click next button
nextButton.addEventListener('click',e =>{
    const currentSlide = track.querySelector('.current-slide');
    const nextSlide = currentSlide.nextElementSibling;
    const geser = nextSlide.style.left;


    track.style.transform = 'translateX(-' + geser+ ')';
    currentSlide.classList.remove('current-slide');
    nextSlide.classList.add('current-slide');
});
//when click prev button
prevButton.addEventListener('click',e =>{
    const currentSlide = track.querySelector('.current-slide');
    const prevSlide = currentSlide.previousElementSibling;
    const geser = prevSlide.style.left;


    track.style.transform = 'translateX(-' + geser+ ')';
    currentSlide.classList.remove('current-slide');
    prevSlide.classList.add('current-slide');
});