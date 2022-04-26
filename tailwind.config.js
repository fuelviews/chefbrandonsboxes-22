// tailwind.config.js
module.exports = {
  content: ['./public/*.php', './public/**/*.php', './public/**/**/*.php', './public/**/**/**/*.php', './public/**/**/**/**/*.php', './public/javascript/*.js',],
  darkMode: 'class',
  theme: {
    extend: {
      screens: {
        xs: "375px", 
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/typography'),
    require('tailwindcss-textshadow'),
  ],
}