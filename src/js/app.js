import $ from 'jquery'
import Menus from '@/blocks/menus'

(function ($) {
  document.querySelectorAll('.block-menus').forEach(el => {
    new Menus(el)
  })
})($)
