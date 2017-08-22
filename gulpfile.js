var gulp = require('gulp'),
	watch = require('gulp-watch'),
	postcss = require('gulp-postcss'),
	autoprefixer = require('autoprefixer'),
	cssvars = require('postcss-simple-vars'),
	nested = require('postcss-nested'),
	cssImport = require('postcss-import');

gulp.task('styles', function() {
	return gulp.src('./styles.css')
		.pipe(postcss([cssImport, cssvars, nested, autoprefixer]))
		.pipe(gulp.dest('./assets/css/'));
});

gulp.task('watch', function() {
	watch('./*.css', function() {
		gulp.start('styles');
	});
});