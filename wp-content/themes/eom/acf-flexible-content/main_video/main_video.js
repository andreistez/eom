import lazyframe from "lazyframe"

document.addEventListener('DOMContentLoaded', () => {
    'use strict'

    initLazy()
    playOnClick()
})

const initLazy = () => {
    lazyframe('.embededVideo', {
        debounce: 1000,
        lazyload: true,
        autoplay: true
    })
}

const playOnClick = () => {
    const videoWrappers = document.querySelectorAll('.main__video_wrapper')

    if (!videoWrappers.length) return

    videoWrappers.forEach((videoWrapper) => {
        videoWrapper.addEventListener('click', () => {
            const vimeoVideo = videoWrapper.querySelector('.embededVideo')
            const videoElement = videoWrapper.querySelector('video')

            if (vimeoVideo) {
                videoWrapper.classList.add('playing')
            }
            
            if (videoElement) {
                videoWrapper.classList.add('playing')
                videoElement.play()
                videoElement.setAttribute('controls', 'true')
            }
        })
    })
}