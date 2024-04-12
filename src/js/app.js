import $ from 'jquery'
import Menus from '@/blocks/menus'

(function ($) {

  // main menu
  $('.mobile-menu .mobile-menu-toggle').on('click', function () {
    $(this).closest('.mobile-menu').toggleClass('is-open')
  })
  
  document.querySelectorAll('.block-menus').forEach(el => {
    new Menus(el)
  })
  
})($)
