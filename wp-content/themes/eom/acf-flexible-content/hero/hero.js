import { printText } from "../../src/js/common/global"
import { showFormModal } from "../../src/js/common/global"

document.addEventListener("DOMContentLoaded", () => {
    'use strict'

    printText('h1')
	showFormModal('.call-signup', '.hero__wrapper')
})