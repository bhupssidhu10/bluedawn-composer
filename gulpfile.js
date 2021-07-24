const gulp = require('gulp');


gulp.task('sass', () => {
    const sass = require('gulp-sass')(require('sass'))
    const autoprefixer = require('autoprefixer')
    const postcss = require('gulp-postcss')

    return gulp.src('wp-content/themes/bdtheme/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([ autoprefixer() ] ))
        .pipe(gulp.dest('wp-content/themes/bdtheme/css/'));
})

