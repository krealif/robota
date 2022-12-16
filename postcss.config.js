const purgecss = require('@fullhuman/postcss-purgecss')

module.exports = {
    plugins: [
      purgecss({
        content: ['resources/views/page/**/*.blade.php']
      })
    ]
  }