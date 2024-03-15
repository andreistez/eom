import { customAjaxRequest } from '../../src/js/common/global'

document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	getRemotePosts()
} )

const getRemotePosts = () => {
	const wraps = document.querySelectorAll( '.latest__inner' )

	if( ! wraps.length ) return

	const formData = new FormData()

	formData.append( 'action', 'eom_ajax_load_remote_posts' )

	customAjaxRequest( formData ).then( res => {
		if( res ){
			wraps.forEach( wrap => {
				const loader = wrap.querySelector( '.loader' )

				if( loader ) loader.remove()

				switch( res.success ){
					case true:
						wrap.innerHTML = res.data.posts
						break

					case false:
						wrap.innerHTML = `<h4>${ res.data.msg }</h4>`
						break
				}
			} )
		}
	} )
}
