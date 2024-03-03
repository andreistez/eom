import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

document.addEventListener('DOMContentLoaded', () => {
    'use strict'

    initSwiper('.team-swiper', '.swiper-next', '.swiper-prev')
})

const initSwiper = (selector, next, prev) => {
    if(!selector) return

    const swiper = new Swiper(selector, {
        spaceBetween: 10,
        slidesPerView: 'auto',
        modules: [Navigation],

        navigation: {
			nextEl: next,
			prevEl: prev,
		},

        breakpoints: {
            768: {
                spaceBetween: 32
            }
        }
    })
}