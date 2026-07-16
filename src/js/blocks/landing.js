export default class Landing {

  constructor(el) {
    this.el = el
    this.triggers = this.el.querySelectorAll('.js-landing-popup-trigger')
    this.popups = this.el.querySelectorAll('.js-landing-popup')
    this.closeButtons = this.el.querySelectorAll('.js-landing-popup-close')
    this.setup()
  }

  setup() {
    this.triggers.forEach(trigger => {
      trigger.addEventListener('click', (e) => {
        e.preventDefault()
        const targetId = trigger.getAttribute('data-popup-target')
        if (!targetId) return
        const popup = this.el.querySelector(`#${targetId}`)
        if (!popup) return
        this.openPopup(popup)
      })
    })

    this.closeButtons.forEach(button => {
      button.addEventListener('click', () => {
        this.closeAllPopups()
      })
    })

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        this.closeAllPopups()
      }
    })
  }

  openPopup(popup) {
    this.closeAllPopups()
    popup.classList.add('is-open')
    popup.setAttribute('aria-hidden', 'false')
    document.body.classList.add('landing-popup-open')
  }

  closeAllPopups() {
    this.popups.forEach(popup => {
      popup.classList.remove('is-open')
      popup.setAttribute('aria-hidden', 'true')
    })
    document.body.classList.remove('landing-popup-open')
  }
}
