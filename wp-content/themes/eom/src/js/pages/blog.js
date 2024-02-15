import { customAjaxRequest } from '../common/global'

document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	loadMorePosts()
} )

const loadMorePosts = () => {
	const
		btn		= document.querySelector( 'button.more' ),
		wrap	= document.querySelector( '.blog-cards' )

	if( ! btn || ! wrap ) return

	btn.addEventListener( 'click', () => {
		btn.setAttribute( 'disabled', 'disabled' )

		const
			formData	= new FormData(),
			page		= btn.dataset.page || 1

		formData.append( 'action', 'eom_ajax_load_more_posts' )
		formData.append( 'page', page )

		customAjaxRequest( formData ).then( res => {
			if( res ){
				switch( res.success ){
					case true:
						btn.setAttribute( 'data-page', res.data.page )
						wrap.insertAdjacentHTML( 'beforeend', res.data.posts )
						break

					case false:
						console.error( res.data.msg )
						break
				}
			}

			btn.removeAttribute( 'disabled' )
		} )
	} )
}