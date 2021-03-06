var gulp = require('gulp'),
	watch = require('gulp-watch'),
	browerSync = require('browser-sync').create();



gulp.task('watch', function() {
    
	browerSync.init({
		notify: false,
		proxy: 'localhost:8888'
	});
    
	watch('./**/*.php', function() {
		browerSync.reload();
	});
	watch('./assets/styles/**/*.css', function() {
		gulp.start('cssInject');
	});
});

gulp.task('cssInject', ['styles'],  function(){
	return gulp.src('./assets/styles/style.css')
		.pipe(browerSync.stream());
});

