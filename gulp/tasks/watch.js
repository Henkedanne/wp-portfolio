var gulp = require('gulp'),
	watch = require('gulp-watch'),
	browerSync = require('browser-sync').create();



gulp.task('watch', function() {
    
	browerSync.init({
		notify: false,
		proxy: 'henrik.dev'
    });
    
    watch('./**/*.php', function() {
        browerSync.reload();
    })
    watch('./*.css', function() {
		gulp.start('cssInject');
	});
});

gulp.task('cssInject', ['styles'],  function(){
	return gulp.src('./assets/css/styles.css')
		.pipe(browerSync.stream());
});

