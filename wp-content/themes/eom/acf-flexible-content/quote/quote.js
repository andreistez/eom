import Swiper from 'swiper';
import { isInScope } from "../../src/js/common/global"

let sections

document.addEventListener( 'DOMContentLoaded', () => {
    'use strict'

    animateSections()
	initSlider()
} )

const animateSections = () => {
	sections = document.querySelectorAll('.quote')

	if( ! sections.length ) return

	const animateOnScroll = () => {
		sections.forEach(section => {
			if (!section.classList.contains('animated')) {
				if (isInScope(section, window.scrollY)) {
					section.classList.add('animated')
				}
			}
		})
	}

	document.addEventListener('scroll', animateOnScroll)

	animateOnScroll()
}

const initSlider = () => {
	if( ! sections.length ) return

	sections.forEach( section => {
		const sliderEl = section.querySelector( '.swiper' )

		if( ! sliderEl ) return

		new Swiper( sliderEl )
	} )
}
