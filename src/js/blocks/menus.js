export default class Menus {

  constructor(el) {
    console.log('Menus')    
    this.el = el
    this.menus = this.el.querySelectorAll('.nav-menus a')
    this.setup()
  }

  setup() {
    this.menus.forEach(menu => {
      menu.addEventListener('click', function(e) {
        e.preventDefault()
        console.log('clicked')
      })
    })
  }

}
