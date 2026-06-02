/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './assets/js/*.js'
  ],
  theme: {
    extend: {
      colors: {
        ink: '#090D10',
        graphite: '#121820',
        steel: '#1E2833',
        ash: '#AEB8C2',
        line: 'rgba(255, 255, 255, 0.14)',
        panel: '#F3F0EA',
        paper: '#FBF8F2',
        copper: {
          400: '#F6A044',
          500: '#F47A1F',
          600: '#D85B13'
        },
        signal: '#57C07A',
        blueprint: '#49A6D8'
      },
      fontFamily: {
        sans: ['Open Sans', 'sans-serif']
      },
      fontWeight: {
        black: '800'
      },
      boxShadow: {
        industrial: '0 28px 80px rgba(0, 0, 0, 0.32)',
        copper: '0 18px 46px rgba(244, 122, 31, 0.28)'
      }
    }
  },
  plugins: []
};
