import { disableBodyScroll, enableBodyScroll } from 'body-scroll-lock';

const ajaxUrl = window.wpData.ajaxUrl
let targetElement

export const getTargetElement = () => targetElement
export const setTargetElement = element => targetElement = element

/**
 * Custom AJAX request.
 *
 * @param	{Object}	formData	Data for fetch body.
 * @returns	{Array}					Response data array.
 */
export const customAjaxRequest = async formData => {
	let response = await fetch( ajaxUrl, {
		method	: 'post',
		body	: formData
	} )

	return await response.json()
}

/**
 * Scroll document to specific element.
 *
 * @param {String|Object}	elementSelector		DOM element selector to scroll to.
 * @param {Boolean}			ignoreHeaderHeight	Ignore site header height or not.
 * @param {Boolean}			scrollTop			Scroll to the top of the document.
 */
export const scrollToElem = ( elementSelector, ignoreHeaderHeight = false, scrollTop = false ) => {
	let element, offset

	switch( typeof elementSelector ){
		case 'string':
			element = document.querySelector( elementSelector )

			if( element )
				offset = scrollTop ? element.getBoundingClientRect().top : element.getBoundingClientRect().top + window.scrollY
			break

		case 'object':
			if( elementSelector )
				offset = scrollTop ? elementSelector.getBoundingClientRect().top : elementSelector.getBoundingClientRect().top + window.scrollY
			break

		default:
			offset = elementSelector
			break
	}

	if( ! offset ) return

	// If we need to check for header height.
	if( ! ignoreHeaderHeight )
		offset -= document.querySelector( '.header' ).clientHeight

	window.scroll( {
		top		: offset,
		behavior: 'smooth'
	} )
}

export const reCalculateDropdownHeight = dropdown => {
    const dropdownOpen  = dropdown.querySelector( '.dropdown__open' ),
        dropdownInner   = dropdown.querySelector( '.dropdown__inner' )

    if (! dropdownOpen || ! dropdownInner) return

    dropdownOpen.style.height = `${ dropdownInner.getBoundingClientRect().height }px`
}

// For print text
export const printText = (selector) => {
    const textSelectors = document.querySelectorAll(selector)

    textSelectors.forEach(textSelector => {
        const text = textSelector.textContent.trim()
        const textArray = [...text]
        textSelector.innerHTML = ''

        textArray.forEach((letter, index) => {
            const span = document.createElement('span')
            span.textContent = letter
            textSelector.appendChild(span)
            span.style.opacity = 0

            setTimeout(() => {
                span.style.transition = 'opacity 0.3s'
                span.style.opacity = 1
            }, index * 35)
        })
    })
}

// Find element in viewport
let windowHeight = window.innerHeight
export const getWindowHeight = () => windowHeight
export const isInScope = ( elementSelector, st, offset = 100 ) => {
	let element

	if( elementSelector instanceof Element ) element = elementSelector
	else element  = document.querySelector( elementSelector )

	if ( ! element) return

	let bodyRect  = document.body.getBoundingClientRect(),
		elemRect  = element.getBoundingClientRect(),
		elemTop   = elemRect.top - bodyRect.top

	if( ! element ) return

	return st >= (elemTop - getWindowHeight() + offset) && st <= (elemTop + element.clientHeight - offset)
}

export const showFormModal = (buttonsSelector, parentSelector) => {
    const popupButtons = document.querySelectorAll(buttonsSelector)
    const closeBtns = document.querySelectorAll('.close__button')

    if (!popupButtons.length && !parentSelector) return

    popupButtons.forEach(popupButton => {
        popupButton.addEventListener('click', e => {
            e.preventDefault()

            const modalWrapper = popupButton.closest(parentSelector).querySelector('.signup-modal')
            const modalId = `#${modalWrapper.id}`
            setTargetElement(modalId)
            console.log(modalId)

            toggleModal(modalWrapper)
        })
    })

    closeBtns.forEach(button => {
        if (!button) return

        button.addEventListener('click', () => {
            const modalWrapper = button.closest('.signup-modal')
            toggleModal(modalWrapper)
        })
    })

    document.addEventListener('click', e => {
        const target = e.target
        const modalWrapper = e.target.closest('.signup-modal')

        if (target.className && target.classList.contains('signup-modal')) {
            toggleModal(modalWrapper)
        }
    })
}

const toggleModal = modalWrapper => {
    if (!modalWrapper) return

    if (!modalWrapper.classList.contains('showed')) {
        modalWrapper.classList.add('showed')
        modalWrapper.classList.remove('closed')
        disableBodyScroll(getTargetElement(), { reserveScrollBarGap: true })
    } else {
        modalWrapper.classList.add('closed')
        setTimeout(() => modalWrapper.classList.remove('showed'), 350)
        setTimeout(() => modalWrapper.classList.remove('closed'), 350)
        enableBodyScroll(getTargetElement())
    }
}