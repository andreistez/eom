import { isInScope } from "../../src/js/common/global"
import { printText } from "../../src/js/common/global"

document.addEventListener('DOMContentLoaded', () => {
    'use strict'

    document.addEventListener('scroll', () => {
        const perks = document.querySelector('.perks')


        document.addEventListener('scroll', () => {
            const boxTitle = document.querySelector('.h2__wrapper h2')

            if (!perks.classList.contains('animated')) {
                if (isInScope('.perks', window.scrollY)) {
                    perks.classList.add('animated')

                    if (boxTitle) {
                        printText('.h2__wrapper h2')
                    }
                }
            }
        })
    })
})