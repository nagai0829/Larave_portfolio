module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            transitionDuration: {
                '0': '0ms',
                '2000': '2000ms',

            }
        },
    },
    variants: {
        extend: {
            transitionDuration: ['hover', 'focus'],
        },
    },
    plugins: [],
}