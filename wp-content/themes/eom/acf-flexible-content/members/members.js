import { isInScope } from "../../src/js/common/global"
import { printText } from "../../src/js/common/global"

document.addEventListener('DOMContentLoaded', () => {
    'use strict'

    document.addEventListener('scroll', () => {
        const members = document.querySelector('.members')


        document.addEventListener('scroll', () => {
            const boxTitle = document.querySelector('.h2__wrapper h2')

            if (!members.classList.contains('animated')) {
                if (isInScope('.members', window.scrollY)) {
                    members.classList.add('animated')

                    if (boxTitle) {
                        printText('.h2__wrapper h2')
                    }
                }
            }
        })
    })
})