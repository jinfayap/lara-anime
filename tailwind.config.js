module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      height: {
        18: "4.5rem",
        75: "18.75rem",
        87.5: "21.875rem",
      },
    },
  },
  plugins: [require("@tailwindcss/line-clamp")],
};
