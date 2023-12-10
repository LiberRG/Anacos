import colors from 'tailwindcss/colors'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
      },
    },
    extend: {
      animation: {
        marquee: 'marquee 60s linear infinite',
      },
      colors: {        
        "blanco": "rgb(var(--color-blanco) / <alpha-value>)",
        "ocre-claro": "rgb(var(--color-ocre-claro) / <alpha-value>)",
        "gris-claro": "rgb(var(--color-gris-claro) / <alpha-value>)",
        "gris-oscuro": "rgb(var(--color-gris-oscuro) / <alpha-value>)",
        "azul-claro": "rgb(var(--color-azul-claro) / <alpha-value>)",
        "azul-oscuro": "rgb(var(--color-azul-oscuro) / <alpha-value>)",
        "magenta-oscuro": "rgb(var(--color-magenta-oscuro) / <alpha-value>)",
        "verde-oscuro": "rgb(var(--color-verde-oscuro) / <alpha-value>)",
        "negro": "rgb(var(--color-negro) / <alpha-value>)",

        danger: colors.rose,
        primary: colors.blue,
        success: colors.green,
        warning: colors.yellow,
      },
      keyframes: {
        marquee: {
          '0%': { transform: 'translateX(0%)' },
          '100%': { transform: 'translateX(-100%)' },
        },
      },
      fontFamily: {
        sans: ["Quicksand", "sans-serif"],
      },
      typography: {
        DEFAULT: { 
          css: [{
            'ol > li::marker': {
              color: 'black',
            },
            'ul > li::marker': {
              color: 'black',
            },
          }],
        }
      },
      backgroundImage: {
        'imagen-map': "url('/img/mapas/bg-imagen-map.png')",
      },
    },
    screens: {
      '2xs': '375px',
      'xs': '475px',
      ...defaultTheme.screens,
      '3xl': '1920px',
    },
  },
  plugins: [
    forms,
    typography,
  ],
}
