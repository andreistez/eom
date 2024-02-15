import { isInScope } from "../../src/js/common/global"
import { printText } from "../../src/js/common/global"

document.addEventListener('DOMContentLoaded', () => {
    'use strict'

    const sections = document.querySelectorAll('.perks')

	if(!sections.length) return

	const animateOnScroll = () => {
		sections.forEach(section => {
			const boxTitle = section.querySelector('.h2__wrapper h2')

			if(!section.classList.contains('animated')) {
				if (isInScope(section, window.scrollY)) {
					section.classList.add('animated')

					if(boxTitle) printText('.h2__wrapper h2')
				}
			}
		})
	}

	animateOnScroll()

	document.addEventListener('scroll', animateOnScroll)
}) 