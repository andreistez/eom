import { isInScope } from "../../src/js/common/global"
import { printText } from "../../src/js/common/global"

document.addEventListener('DOMContentLoaded', () => {
    'use strict'

    document.addEventListener('scroll', () => {
        const sections = document.querySelectorAll('.image__text')

        if(!sections.length) return

        sections.forEach((section, i) => {
            const sectionId = `image-text-${i + 1}`
            section.setAttribute('id', sectionId)
        })

        document.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('.image__text')

            sections.forEach(section => {
                const sectionId = `#${section.id}`
                const sectionH2 = section.querySelector('.image__text_heading h2')
                const sectionH3 = section.querySelector('.image__text_heading h3')

                if(!section.classList.contains('animated')) {
                    if (isInScope(sectionId, window.scrollY)) {
                        section.classList.add('animated')
                        
                        if(sectionH2) {
                            printText('.image__text_heading h2')
                        }

                        if(sectionH3) {
                            printText('.image__text_heading h3')
                        }
                    }
                }
            })
        })
    })
})
