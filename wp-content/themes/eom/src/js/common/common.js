import { disableBodyScroll, enableBodyScroll } from 'body-scroll-lock'
import { setTargetElement, getTargetElement } from './global'

document.addEventListener('DOMContentLoaded', () => {
	'use strict'

	generateSectionIds()
	toggleBurgerMenu('.burger__button', '.header__inner', '#menu-lock')
	closeMenuByTapLink('.burger__button', '.menu-item a', '.header__inner')
    animateHeader()
})

const toggleBurgerMenu = (button, selector, lock) => {
	const burgerButton = document.querySelector(button)
	const headerInner = document.querySelector(selector)
	setTargetElement(document.querySelector(lock)) //Target element for body lock

	if (!burgerButton && !headerInner) return

	burgerButton.addEventListener('click', () => {
		if (!headerInner.classList.contains('opened')) {
            burgerButton.classList.add('clicked')
			headerInner.classList.add('opened')
			headerInner.classList.remove('closed')
			disableBodyScroll(getTargetElement(), { reserveScrollBarGap: true })
		} else {
            burgerButton.classList.remove('clicked')
			headerInner.classList.add('closed')
			setTimeout(() => headerInner.classList.remove('opened'), 350)
			setTimeout(() => headerInner.classList.remove('closed'), 350)
			enableBodyScroll(getTargetElement())
		}
	})

	window.addEventListener('resize', () => {        //Resize function, if window width >= 992, remove all active classes on burger menu and button
		const windowWidth = window.innerWidth
		const WINDOW_WIDTH_XL = 992

		if (windowWidth >= WINDOW_WIDTH_XL && headerInner.classList.contains('opened')) {
            burgerButton.classList.remove('clicked')
			headerInner.classList.remove('opened')
			headerInner.classList.remove('closed')
			enableBodyScroll(getTargetElement())
		}
	})
}

const closeMenuByTapLink = (button, link, selector) => {
    const burgerButton = document.querySelector(button)
	const links = document.querySelectorAll(link)
	const headerInner = document.querySelector(selector)

	if (!links.length && !headerInner) return

	links.forEach(link => {
		link.addEventListener('click', () => {
			if (!headerInner.classList.contains('opened')) return

			burgerButton.classList.remove('clicked')
			headerInner.classList.add('closed')
			setTimeout(() => headerInner.classList.remove('opened'), 350)
			setTimeout(() => headerInner.classList.remove('closed'), 350)
			enableBodyScroll(getTargetElement())
		})
	})
}

const animateHeader = () => {
    const header     = document.querySelector('.header')
    const nav        = document.querySelector('.header-nav')
    const violetGear = document.querySelector('.header .violet__gear')
    const redtGear   = document.querySelector('.header .red__gear')
    const greenGear  = document.querySelector('.header .green__gear')
    const blueGear   = document.querySelector('.header .blue__gear')

    if(!header && !nav) return

    window.addEventListener('scroll', () => {
        const navRectTop = nav.getBoundingClientRect().top
        const scrollY = window.scrollY

        if(!header.classList.contains('animated')) {
            if(navRectTop <= 0) {
                header.classList.add('animated')
            }
        }

        if(window.scrollY <= 20) {
            header.classList.remove('animated')
        }

        violetGear.style.transform = `rotate(${scrollY / 20}deg)`
        redtGear.style.transform = `rotate(${scrollY / -20}deg)`
        greenGear.style.transform = `rotate(${scrollY / 20}deg)`
        blueGear.style.transform = `rotate(${scrollY / -20}deg)`
    })
}

/**
 * Go through all sections and add ID attributes for them.
 * We need this because of nav menu anchors.
 */
const generateSectionIds = () => {
	const sections	= document.querySelectorAll( 'section' )
	let store		= {}

	if( ! sections.length ) return

	sections.forEach( section => {
		const className = section.className

		if( ! className ) return

		const sectionName = className.split( ' ' )[0]
		let existing = false

		for( let key in store ){
			if( key === sectionName ){
				store[key]  = store[key] + 1
				existing	= true
				break
			}
		}

		// No such section yet - add it to the store.
		if( ! existing ) store[sectionName] = 1

		section.id = `${ sectionName }-${ store[sectionName] }`
	} )
}