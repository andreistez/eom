import { isInScope } from "../../src/js/common/global"

document.addEventListener('DOMContentLoaded', () => {
    'use strict'

    const sections = document.querySelectorAll('.quote')

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
})
