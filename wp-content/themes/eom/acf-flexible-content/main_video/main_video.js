document.addEventListener('DOMContentLoaded', () => {
    'use strict'

    playOnClick('.play')
})

const playOnClick = (buttonSelector) => {
    const playButtons = document.querySelectorAll(buttonSelector)

    if(!playButtons.length) return

    playButtons.forEach((playButton) => {
        playButton.addEventListener('click', () => {
            const videoWrapper = playButton.closest('.main__video_wrapper')

            if (videoWrapper) {
                const video = videoWrapper.querySelector('video')
                if (video) {
                    videoWrapper.classList.add('playing')
                    video.play()
                    video.setAttribute('controls', 'true')
                }
            }
        })
    })
}
