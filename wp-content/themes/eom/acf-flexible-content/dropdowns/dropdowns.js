import { isInScope } from "../../src/js/common/global"
import { printText } from "../../src/js/common/global"
import { reCalculateDropdownHeight } from "../../src/js/common/global"

document.addEventListener('DOMContentLoaded', () => {
    'use strict'

    const sections = document.querySelectorAll('.dropdowns')

    const animateOnScroll = () => {
        sections.forEach(section => {
            const sectionH2 = section.querySelector('.image__text_heading h2')
            const sectionH3 = section.querySelector('.image__text_heading h3')

            if (!section.classList.contains('animated')) {
                if (isInScope(section, window.scrollY)) {
                    section.classList.add('animated')

                    if (sectionH2) printText('.image__text_heading h2')

                    if (sectionH3) printText('.image__text_heading h3')
                }
            }
        })
    }

    document.addEventListener('scroll', animateOnScroll)

    animateOnScroll()
    toggleDropdown()
    mouseEvents()
})

const toggleDropdown = () => {
    const dropdowns = document.querySelectorAll('.dropdown')
    let anyDropdownOpened = false 

    if (!dropdowns.length) return

    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', () => {
            const dropdownOpen = dropdown.querySelector('.dropdown__open')

            if (!dropdownOpen) return

            const isOpened = dropdown.classList.contains('opened')

            dropdowns.forEach(otherDropdown => {
                if (otherDropdown !== dropdown && otherDropdown.classList.contains('opened')) {
                    otherDropdown.classList.remove('opened')
                    const otherDropdownOpen = otherDropdown.querySelector('.dropdown__open')
                    if (otherDropdownOpen) {
                        otherDropdownOpen.style.height = '0'
                    }
                }
            })

            if (!isOpened) {
                dropdown.classList.add('opened')
                reCalculateDropdownHeight(dropdown)
            } else {
                dropdown.classList.remove('opened')
                dropdownOpen.style.height = '0'
            }

            anyDropdownOpened = Array.from(dropdowns).some(d => d.classList.contains('opened'))

            const circles = document.querySelectorAll('.circle__top_left, .circle__top_right, .circle__bottom_left, .circle__bottom_right')
            const dropdownId = dropdown.dataset.id
            circles.forEach(circle => {
                const circleDropdownId = circle.dataset.id
                circle.classList.toggle('highlighted', !isOpened && circleDropdownId === dropdownId)
                circle.classList.toggle('darkened', anyDropdownOpened)
            })
        })
    })
}

const mouseEvents = () => {
    const circles = document.querySelectorAll('.circle__top_left, .circle__top_right, .circle__bottom_left, .circle__bottom_right')

    if (!circles.length) return

    circles.forEach(circle => {
        const dropdownId = circle.dataset.id
        const dropdown = document.querySelector(`.dropdown[data-id="${dropdownId}"]`)

        circle.addEventListener('mouseenter', () => {
            document.querySelectorAll('.dropdown.opened').forEach(openDropdown => {
                openDropdown.classList.remove('opened')
                const openDropdownOpen = openDropdown.querySelector('.dropdown__open')
                if (openDropdownOpen) {
                    openDropdownOpen.style.height = '0'
                }
            })

            circles.forEach(otherCircle => {
                otherCircle.classList.add('darkened')
                otherCircle.classList.remove('highlighted')
            })
            circle.classList.remove('darkened')
            circle.classList.add('highlighted')

            if (dropdown) {
                dropdown.classList.add('opened')
                reCalculateDropdownHeight(dropdown)
            }
        })

        circle.addEventListener('mouseleave', () => {
            circles.forEach(otherCircle => {
                otherCircle.classList.remove('darkened')
                otherCircle.classList.remove('highlighted')
            })

            if (dropdown) {
                dropdown.classList.remove('opened')
                const dropdownOpen = dropdown.querySelector('.dropdown__open')
                if (dropdownOpen) {
                    dropdownOpen.style.height = '0'
                }
            }
        })
    })
}

window.addEventListener('resize', () => {
    const dropdowns = document.querySelectorAll('.dropdown.opened')

    if (!dropdowns.length) return

    dropdowns.forEach(dropdown => reCalculateDropdownHeight(dropdown))
})
