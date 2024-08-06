export default class Menus {

  constructor(el) {
    console.log('Menus')    
    this.el = el
    this.menus = this.el.querySelectorAll('.nav-menus a')
    this.setup()
  }

  setup() {
    this.menus.forEach(menu => {
      menu.addEventListener('click', (e) => {
        e.preventDefault()

        const url = menu.getAttribute('data-url');
        if (url && url.trim() !== '') {
          window.location.href = url;
          return;
        }

        // remove btn--is-active
        this.menus.forEach(m => m.classList.remove('btn--is-active'));

        // Add the "btn--is-active" class to the clicked menu
        menu.classList.add('btn--is-active');

        var postId = menu.getAttribute('data-post-id');
        // Select all elements with the class "payload"
        var payloadElements = this.el.querySelectorAll('.payload');

        // Iterate over the NodeList and add the "hidden" class to each element
        payloadElements.forEach(function(element) {
          element.classList.add('hidden');

          if (element.getAttribute('data-post-id') == postId) {
            element.classList.remove('hidden');
          }
          
        });

      })
    })
  }

}