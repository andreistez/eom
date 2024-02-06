import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

document, addEventListener('DOMContentLoaded', () => {
    'use strict'

    initSwiper('.team-swiper', '.swiper-next', '.swiper-prev')
})

const initSwiper = (selector, next, prev) => {
    if(!selector) return

    const swiper = new Swiper(selector, {
        slidesPerView: 'auto',
        spaceBetween: 32,
        modules: [Navigation],

        navigation: {
			nextEl: next,
			prevEl: prev,
		},

        breakpoints: {
            320: {
                slidesPerView: 1
            },

            480: {
                slidesPerView: 'auto'
            } 
        }
    })

}