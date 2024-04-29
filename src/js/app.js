import $ from 'jquery'
import Menus from '@/blocks/menus'

(function ($) {

  // main menu
  $('.mobile-menu .mobile-menu-toggle').on('click', function () {
    $(this).closest('.mobile-menu').toggleClass('is-open')
  })
  
  // blocks
  document.querySelectorAll('.block-menus').forEach(el => {
    new Menus(el)
  })

  // newsletter
  $('.pre-newsletter').on('submit', function(event) {
    event.preventDefault()  // Prevent the form from submitting
    var email = $('#email').val()  // Get the email value

    $('.reveal').addClass('reveal--is-showing')  // Add class to the 'reveal' div
    $('#mce-EMAIL').val(email).focus()  // Set value and focus on mce-EMAIL input
  })

  $('.close-button').on('click', function() {
    $('.reveal').removeClass('reveal--is-showing')  // Remove the class from the 'reveal' div
  })
  
})($)
