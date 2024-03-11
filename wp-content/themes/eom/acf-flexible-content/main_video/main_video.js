import player from "@vimeo/player"

document.addEventListener('DOMContentLoaded', () => {
    'use strict'

    const videoWrappers = document.querySelectorAll('.main__video_wrapper')

    const playOnClick = () => {
        videoWrappers.forEach((videoWrapper) => {
            if(!videoWrapper) return
    
            const vimeoUrl = videoWrapper.querySelector('.embededVideo').dataset.idVimeo
    
            videoWrapper.addEventListener('click', () => {
                const vimeoVideo = videoWrapper.querySelector('.embededVideo')
                const videoElement = videoWrapper.querySelector('video')
    
                if (vimeoVideo) {
                    vimeoVideo.classList.add('playing')
                    videoWrapper.classList.add('playing')

                    const vimeoPlayer = new player(videoWrapper.querySelector('.embededVideo'), {
                        id: vimeoUrl,
                        autoplay: false,
                        loop: false,
                        controls: true
                    })

                    vimeoPlayer.play()
                }
                
                if (videoElement) {
                    videoWrapper.classList.add('playing')
                    videoElement.play()
                    videoElement.setAttribute('controls', 'true')
                }
            })
        })
    }
    
    playOnClick()
})



