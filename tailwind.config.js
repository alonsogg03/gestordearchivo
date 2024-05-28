/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/**/*.{html,js,php}"],
  theme: {
    extend: {
      textShadow: {
        'default': '0 2px 4px rgba(0, 0, 0, 0.10)',
        'md': '0 3px 6px rgba(0, 0, 0, 0.15)',
        'lg': '0 10px 20px rgba(0, 0, 0, 0.25)',
        'xl': '0 20px 40px rgba(0, 0, 0, 0.35)',
      },

      display:['group-focus']
    },
  },
  plugins: [
    function ({ addUtilities }) {
    const newUtilities = {
      '.text-shadow': {
        textShadow: '0 2px 4px rgba(0, 0, 0, 0.10)',
      },
      '.text-shadow-md': {
        textShadow: '0 3px 6px rgba(0, 0, 0, 0.15)',
      },
      '.text-shadow-lg': {
        textShadow: '0 10px 20px rgba(0, 0, 0, 0.25)',
      },
      '.text-shadow-xl': {
        textShadow: '0 20px 40px rgba(0, 0, 0, 0.35)',
      },
      '.text-shadow-red': {
        textShadow: '0 0.1px 12px rgba(252, 0, 0, 0.8)',
      },
   
    };

    addUtilities(newUtilities, ['responsive', 'hover']);
  }
],
}