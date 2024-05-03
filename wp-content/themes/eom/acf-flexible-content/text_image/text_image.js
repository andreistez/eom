import { isInScope } from "../../src/js/common/global"
import { printText } from "../../src/js/common/global"


document.addEventListener('DOMContentLoaded', () => {
    'use strict'

	const sections = document.querySelectorAll('.text__image')

	if(!sections.length) return

	const animateOnScroll = () => {
		sections.forEach(section => {
			const sectionH2 = section.querySelector('.image__text_heading h2')
			const sectionH3 = section.querySelector('.image__text_heading h3')

			if(!section.classList.contains('animated')) {
				if (isInScope(section, window.scrollY)) {
					section.classList.add('animated')

					if(sectionH2) printText('.image__text_heading h2')

					if(sectionH3) printText('.image__text_heading h3')
				}
			}
		})
	}

	animateOnScroll()

	document.addEventListener('scroll', animateOnScroll)
})
