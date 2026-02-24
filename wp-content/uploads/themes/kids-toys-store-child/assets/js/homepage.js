const headerElement = document.querySelector('.header-homepage');
const videoContainerElement = document.querySelector('.hero-video-section__video');

if (headerElement && videoContainerElement) {
    const headerHeight = headerElement.offsetHeight;
    const viewportHeight = window.document.documentElement.clientHeight;
    const videoContainerHeight = viewportHeight - headerHeight;
    videoContainerElement.style.height = `${videoContainerHeight}px`;
}
