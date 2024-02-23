import Plyr from 'plyr'

document.addEventListener('DOMContentLoaded', () => {
    'use strict'

	setPlayer()
    playOnClick('.play')
})

const setPlayer = () => {
	const players = document.querySelectorAll( 'div[data-plyr-provider="vimeo"]' )

	if( ! players.length ) return

	players.forEach( pl => {
		new Plyr( pl )
	} )
}

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
