/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  presets: [
    require('./tresto-preset.js')
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

