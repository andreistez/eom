document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	const
		tag				= document.createElement( 'script' ),
		firstScriptTag	= document.getElementsByTagName( 'script' )[0]

	tag.src = 'https://www.youtube.com/iframe_api'
	firstScriptTag.parentNode.insertBefore( tag, firstScriptTag )
	tag.onload = loadYTVideo
} )

const loadYTVideo = () => {
	const videos = document.querySelectorAll( '.yt-lazy' )

	if( ! videos.length ) return

	window.YT.ready( () => {
		videos.forEach( video => {
			video.addEventListener( 'click', e => {
				e.preventDefault()

				const
					inner	= video.querySelector( '.yt-lazy-placeholder' ),
					videoId	= inner.dataset.video

				if( ! videoId ) return

				new window.YT.Player( inner.id, { videoId } )
			} )
		} )
	} )
}