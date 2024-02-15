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

    if (!dropdowns.length) return

    dropdowns.forEach(dropdown => {
        if (dropdown.classList.contains('opened')) {
            reCalculateDropdownHeight(dropdown)
        }
    })

    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', () => {
            const dropdownOpen = dropdown.querySelector('.dropdown__open')

            if (!dropdownOpen) return

            if (!dropdown.classList.contains('opened')) {
                dropdown.classList.add('opened')
                reCalculateDropdownHeight(dropdown)
            } else {
                dropdown.classList.remove('opened')
                dropdownOpen.style.height = '0'
            }
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
            if (dropdown) {
                dropdown.classList.add('opened')
                reCalculateDropdownHeight(dropdown)
            }
        })

        circle.addEventListener('mouseleave', () => {
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
