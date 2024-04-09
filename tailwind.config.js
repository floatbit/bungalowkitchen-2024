/**
 * Container Plugin - modifies Tailwind’s default container.
 */
const containerStyles = ({ addComponents }) => {
  const containerBase = {
    maxWidth: '100%',
    marginLeft: 'auto',
    marginRight: 'auto',
    paddingLeft: '20px',
    paddingRight: '20px',
    '@screen md': {
      paddingLeft: '40px',
      paddingRight: '40px'
    },
    '@screen lg': {
      paddingLeft: '60px',
      paddingRight: '60px'
    },
    '@screen 2xl': {
      paddingLeft: '80px',
      paddingRight: '80px'
    }
  };

  addComponents({
    '.container': {
      ...containerBase,
      '@screen md': {
        maxWidth: '1500px'
      },
      '@screen xl': {
        width: '100%',
      }
    },
    '.container-fluid': {
      ...containerBase,
    },
    '.container-narrow': {
      ...containerBase,
      '@screen md': {
        maxWidth: '1290px',
      },
    }
  });
}

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './footer.php',
    './header.php',
    './index.php',
    './parts/**/*.php',
    './blocks/**/*.php',
    './src/scss/**/*.scss',
    './src/js/**/*.js',
  ],
  theme: {
    container: {
      center: true,
    },
    fontFamily: {
      sans: ['Apercu', 'sans-serif'],
    },
    extend: {
      colors: {
        white: '#FFFDF8',
        green: '#7D9383',
        brown: '#4A3431',
        black: '#31261D',
        salmon: '#F28365'
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    containerStyles,
  ],
}

