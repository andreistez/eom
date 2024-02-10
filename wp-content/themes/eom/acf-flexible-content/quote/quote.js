import { isInScope } from "../../src/js/common/global"

document.addEventListener('DOMContentLoaded', () => {
    'use strict'

    document.addEventListener('scroll', () => {
        const quotes = document.querySelectorAll('.quote')

        if(!quotes.length) return

        quotes.forEach((quote, i) => {
            const quoteId = `quote-${i + 1}`
            quote.setAttribute('id', quoteId)
        })

        document.addEventListener('scroll', () => {
            const quotes = document.querySelectorAll('.quote')

            quotes.forEach(quote => {
                const quoteId = `#${quote.id}`

                if(!quote.classList.contains('animated')) {
                    if (isInScope(quoteId, window.scrollY)) {
                        quote.classList.add('animated')
                    }
                }
            })
        })
    })
})
